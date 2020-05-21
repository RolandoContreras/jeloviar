function pagado(pay_id) {
    bootbox.confirm({
        message: "Confirma que desea marcar como pagado?",
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
        callback: function (e) {
            if (e == true) {
                $.ajax({
                    type: "post",
                    url: site + "dashboard/activar_pagos/pagado",
                    dataType: "json",
                    data: {pay_id: pay_id},
                    success: function (data) {
                        if (data.status == true) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Cambio Procesado',
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

function devolver(pay_id) {
    bootbox.confirm({
        message: "Confirma que desea marcar como devuelto?",
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
        callback: function (e) {
            if (e == true) {
                $.ajax({
                    type: "post",
                    url: site + "dashboard/activar_pagos/devolver",
                    dataType: "json",
                    data: {pay_id: pay_id},
                    success: function (data) {
                        if (data.status == true) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Cambio Procesado',
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