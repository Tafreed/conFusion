$(function(){
    setInterval(function(){$.ajax({
        url: 'update.php',
        type: 'GET',
        success: function(result){
            $('#tbody1').empty();
            data = JSON.parse(result);
            var keys = [];
            var count = 1;
            var html;
            for(i=0; i<data.length; i++){
                html = "<tr>";
                html += "<td>" + count + "</td>";
                for(keys in data[i]){
                    //console.log(i,data[i][keys]); 
                    html += "<td>" + data[i][keys] + "</td>"
                }
                html += "</tr>";
                count++;
                
                $('#tbody1').append(html);
                html = '';
            }
        },
        error: function (error) {
            console.log(error);
            // alert(result);
        }
    })},500)
})