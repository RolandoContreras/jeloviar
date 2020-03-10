function new_teacher(){    
     var url = 'dashboard/profesores/load';
     location.href = site+url;   
}
function edit_teacher(teacher_id){    
     var url = 'dashboard/profesores/load/'+teacher_id;
     location.href = site+url;   
}
function cancel_teacher(){
	var url= 'dashboard/profesores';
	location.href = site+url;
}
function delete_teacher(teacher_id){
    bootbox.confirm({
    message: "¿Confirma que desea eliminar al profesor?",
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
                   url: site+"dashboard/profesores/delete",
                   dataType: "json",
                   data: {teacher_id : teacher_id},
                   success:function(data){                             
                   location.reload();
                   }         
           });
        }
    }
    });
}


