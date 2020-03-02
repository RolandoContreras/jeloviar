function write_message(video_id){
    var comment = document.getElementById("comment").value;
    if(comment != ""){
        $.ajax({
            type: "post",
            url: site + "plataforma/send_message",
            dataType: "json",
            data: {comment: comment,
                   video_id: video_id},

            success:function(data){            
                if(data.status == "true"){
                    $("#message").html();
                     var texto = "";
                     texto = texto+'<center>';
                     texto = texto+'<div class="alert alert-success">';
                     texto = texto+'<p>Pregunta enviada</p>';
                     texto = texto+'</div>';                 
                     texto = texto+'</center>';
                     $("#message").html(texto);
                     location.reload();
                }
            }            
        });
    }else{
        $("#message").html();
         var texto = "";
         texto = texto+'<center>';
         texto = texto+'<div class="alert alert-danger">';
         texto = texto+'<p>Ingrese Pregunta</p>';
         texto = texto+'</div>';                 
         texto = texto+'</center>';
         $("#message").html(texto);
    }
}