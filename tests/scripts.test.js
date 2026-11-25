import { describe, it, expect, beforeEach, afterEach, vi } from 'vitest';
import { readFileSync } from 'node:fs';
import { createRequire } from 'node:module';
import vm from 'node:vm';

const require = createRequire(import.meta.url);
const jquery = require('jquery');

const tick = () => new Promise((r) => setTimeout(r, 10));

function load(file) {
  const filename = `${process.cwd()}/js/${file}`;
  vm.runInThisContext(readFileSync(filename, 'utf8'), { filename });
}

beforeEach(() => {
  vi.resetModules();
  window.$ = window.jQuery = jquery.fn ? jquery : jquery(window);
  globalThis.$ = window.$;
});

afterEach(() => {
  vi.useRealTimers();
  document.body.innerHTML = '';
});

describe('reserve.js', () => {
  const html = `
    <form id="reserve">
      <input id="name" name="name" value="Jane" />
      <button id="rSubmit">Reserve</button>
    </form>
    <div id="error"></div><div id="success">old</div>`;

  it('hides the error and clears success on load', async () => {
    document.body.innerHTML = html;
    load('reserve.js');
    await tick();
    expect($('#error').css('display')).toBe('none');
    expect($('#success').text()).toBe('');
  });

  it('submits the form via ajax and shows success', async () => {
    document.body.innerHTML = html;
    $.ajax = vi.fn(({ success }) => success('ok'));
    load('reserve.js');
    await tick();
    $('#rSubmit').trigger('click');
    expect($.ajax).toHaveBeenCalledWith(expect.objectContaining({ url: 'data.php', type: 'GET', data: 'name=Jane' }));
    expect($('#success').text()).toBe('Success');
  });

  it('shows a validation error for a blank name and does not call ajax', async () => {
    document.body.innerHTML = html;
    $.ajax = vi.fn();
    load('reserve.js');
    await tick();
    $('#name').val(' ');
    $('#rSubmit').trigger('click');
    expect($.ajax).not.toHaveBeenCalled();
    expect($('#error').text()).toBe('Valid Username Required');
  });

  it('logs ajax errors', async () => {
    document.body.innerHTML = html;
    const log = vi.spyOn(console, 'log').mockImplementation(() => {});
    $.ajax = vi.fn(({ error }) => error('boom'));
    load('reserve.js');
    await tick();
    $('#rSubmit').trigger('click');
    expect(log).toHaveBeenCalledWith('boom');
  });
});

describe('admin.js', () => {
  it('polls update.php and renders rows', () => {
    vi.useFakeTimers();
    document.body.innerHTML = '<table><tbody id="tbody1"><tr><td>stale</td></tr></tbody></table>';
    $.ajax = vi.fn(({ success }) =>
      success(JSON.stringify([[1, 'Ann', '2', 'no'], [2, 'Bob', '4', 'yes']])));
    load('admin.js');
    vi.advanceTimersByTime(0);
    vi.advanceTimersByTime(500);
    expect($.ajax).toHaveBeenCalledWith(expect.objectContaining({ url: 'update.php', type: 'GET' }));
    const rows = $('#tbody1 tr');
    expect(rows.length).toBe(2);
    expect($(rows[0]).find('td').first().text()).toBe('1');
    expect($(rows[1]).text()).toContain('Bob');
  });

  it('logs polling errors without throwing', () => {
    vi.useFakeTimers();
    document.body.innerHTML = '<table><tbody id="tbody1"></tbody></table>';
    const log = vi.spyOn(console, 'log').mockImplementation(() => {});
    $.ajax = vi.fn(({ error }) => error('fail'));
    load('admin.js');
    vi.advanceTimersByTime(0);
    vi.advanceTimersByTime(500);
    expect(log).toHaveBeenCalledWith('fail');
  });
});
