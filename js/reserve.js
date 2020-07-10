$(document).ready(function(){
    var error;
    $("#error").hide();
    $('#success').text('');
    $('#reserve').on('click','#rSubmit',function(e){
        e.preventDefault();
        if($('#name').val() == ' ' || $('#name').val() == null){
            error = "Valid Username Required";
            $("#error").text(error).show();
        }
        else{
            $.ajax({
                url: 'data.php',
                type: 'GET',
                data: $('#reserve').serialize(),
                success: function(result){
                    $('#success').text('Success');
                },
                error: function (error) {
                    console.log(error);
                    // alert(result);
                }
            })
        }
    })
});