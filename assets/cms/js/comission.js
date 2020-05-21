function validate_comissions() {
    var commissions_id = document.getElementById("commissions_id").value;
    var amount = document.getElementById("amount").value;
    var bonus_id = document.getElementById("bonus_id").value;
    var status_value = document.getElementById("status_value").value;
    $.ajax({
        type: "post",
        url: site + "dashboard/comisiones/validate",
        dataType: "json",
        data: {commissions_id: commissions_id,
            amount: amount,
            bonus_id: bonus_id,
            status_value: status_value
        },
        success: function (data) {
            if (data.status == true) {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Cambios Guardado',
                    showConfirmButton: false,
                    timer: 1500
                });
                window.setTimeout(function () {
                    window.location = site + "dashboard/comisiones";
                }, 1500);
            } else {
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'Sucedio un error',
                    footer: 'Comunique a soporte'
                });
            }
        }
    });
}
function edit_comissions(commissions_id){    
     var url = 'dashboard/comisiones/load/'+commissions_id;
     location.href = site+url;   
}
function cancel_comissions(){
	var url= 'dashboard/comisiones';
	location.href = site+url;
}
function delete_comissions(comission_id) {
    bootbox.confirm({
        message: "¿Confirma que desea eliminar al cliente?",
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
            if (result == true) {
                $.ajax({
                    type: "post",
                    url: site + "dashboard/comisiones/delete",
                    dataType: "json",
                    data: {comission_id: comission_id},
                    success: function (data) {
                        if (data.status == true) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Bono eliminado',
                                showConfirmButton: false,
                                timer: 1500
                            });
                            window.setTimeout(function () {
                                location.reload();
                            }, 1500);
                        } else {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'error',
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


