function validate_customer() {
    var customer_id = document.getElementById("customer_id").value;
    var name = document.getElementById("name").value;
    var last_name = document.getElementById("last_name").value;
    var password = document.getElementById("password").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var bio = document.getElementById("bio").value;
    var facebook = document.getElementById("facebook").value;
    var twitter = document.getElementById("twitter").value;
    var instagram = document.getElementById("instagram").value;
    var google = document.getElementById("google").value;
    var pais = document.getElementById("pais").value;
    var active = document.getElementById("active").value;
    $.ajax({
        type: "post",
        url: site + "dashboard/clientes/validate",
        dataType: "json",
        data: {customer_id: customer_id,
            name: name,
            last_name: last_name,
            password: password,
            email: email,
            phone: phone,
            bio: bio,
            pais: pais,
            facebook: facebook,
            twitter: twitter,
            instagram: instagram,
            google: google,
            active: active
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
                    window.location = site + "dashboard/clientes";
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
function edit_customer(customer_id) {
    var url = 'dashboard/clientes/load/' + customer_id;
    location.href = site + url;
}
function cancelar_customer() {
    var url = 'dashboard/clientes';
    location.href = site + url;
}
function delete_customer(customer_id) {
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
                    url: site + "dashboard/clientes/delete",
                    dataType: "json",
                    data: {customer_id: customer_id},
                    success: function (data) {
                        if (data.status == true) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Cliente fue eliminado',
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
