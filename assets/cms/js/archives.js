function validate_archivos() {
    document.getElementById("archive-boton").innerHTML = "Procesando...";
    oData = new FormData(document.forms.namedItem("form-archives"));
    $.ajax({
        url: site + "dashboard/archivos/validate",
        method: "POST",
        data: oData,
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
            var data = JSON.parse(data);
            if (data.status == true) {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Cambios Guardados',
                    showConfirmButton: false,
                    timer: 1500
                });
                window.setTimeout(function () {
                    window.location = site + "dashboard/archivos/" + data.url;
                }, 1500);
            } else {
                Swal.fire({
                    position: 'top-end',
                    icon: 'info',
                    title: 'Hubo un error',
                    text: 'Intente nuevamente'
                });
                document.getElementById("save_course").innerHTML = "GUARDAR";
            }
        }
    });
            
            
}

function back_cursos(){
	var url= 'dashboard/cursos';
	location.href = site+url;
}
function new_archives(course_id){
	var url= 'dashboard/archivos/'+course_id+'/load';
	location.href = site+url;
}
function edit_archives(course_id, archive_id){    
     var url = 'dashboard/archivos/'+course_id+'/load/'+archive_id;
     location.href = site+url;   
}
function cancel_archives(course_id){
	var url= 'dashboard/archivos/'+course_id;
	location.href = site+url;
}
function delete_archives(archive_id){
    bootbox.confirm({
    message: "¿Confirma que desea eliminar el archivo?",
    buttons: {
        confirm: {
            label: 'Confirmar',
            className: 'btn-success'
        },
        cancel: {
            label: 'Cerrar',
            className: 'btn-danger'
        }
    },
    callback: function (result) {
        if(result == true){
            $.ajax({
                   type: "post",
                   url: site+"dashboard/archivos/delete",
                   dataType: "json",
                   data: {archive_id : archive_id},
                   success:function(data){                             
                   if (data.status == true) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Archivo eliminado',
                                showConfirmButton: false,
                                timer: 1500
                            });
                            window.setTimeout(function () {
                                location.reload();
                            }, 1500);
                        } else {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'info',
                                title: 'Sucedio un error',
                                footer: 'Comunique a soporte'
                            });
                        }
                   }         
           });
        }
    }
    });
}