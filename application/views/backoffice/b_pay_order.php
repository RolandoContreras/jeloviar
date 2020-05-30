<div class="col-md-9 col-sm-12">
    <div class="stm-lms-wrapper">
        <div class="container">
            <?php if (!empty($this->cart->contents())) { ?>
                <h1>Carrito de Compra</h1>
                <div class="stm_lms_cart">
                    <div class="stm_lms_cart__item stm_lms_cart__item_head heading_font">
                        <div class="stm_lms_cart__item_title">
                            Curso
                        </div>
                        <div class="stm_lms_cart__item_price">
                            Precio
                        </div>
                    </div>
                    <?php $i = 1; ?>
                    <?php foreach ($this->cart->contents() as $items): ?>
                        <div class="stm_lms_cart__item item_can_hide">
                            <?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>
                            <div class="stm_lms_cart__item_delete" data-label="Delete">
                                <i class="lnr lnr-cross" onclick="delete_order('<?php echo $items['rowid']; ?>');"></i>
                            </div>
                            <div class="stm_lms_cart__item_image">
                                <img  src="<?php echo site_url() . 'assets/cms/img/cursos/' . $items['img']; ?>" alt="<?php echo $items['name']; ?>" title="<?php echo $items['name']; ?>" width="135" height="80">                                    
                            </div>
                            <div class="stm_lms_cart__item_title">
                                <h4 class="normal_font">
                                    <b><?php echo str_to_first_capital($items['name']); ?></b>                       
                                </h4>
                            </div>
                            <div class="stm_lms_cart__item_price" data-label="Total">
                                &euro;<?php echo $this->cart->format_number($items['price']); ?>                
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="stm_lms_checkout">
                    <div id="stm_lms_checkout">
                        <div class="stm_lms_checkout__payment clearfix">
                            <h3>Total: &euro;<?php echo $this->cart->format_number($this->cart->total()); ?></h3>
                            <div class="stm-lms-payment-methods">
                                <div id="bank_style" class="stm-lms-payment-method active">
                                    <div class="stm-lms-payment-method__name">
                                        <label>
                                            <span class="stm_lms_radio">
                                                <input onclick="show_bank();" type="radio" name="payment_method" checked=""> 
                                                <span class="stm_lms_radio__fake"></span>

                                            </span> 
                                            <h4>Transferencia Bancaria</h4>
                                        </label>
                                    </div>
                                    <div id="bank" style="overflow: auto;">
                                        <div class="stm-lms-payment-method__name"></div>    
                                        <table cellpadding="0" cellspacing="0" border="0">
                                            <thead>
                                                <tr>
                                                    <th>Número de Cuenta</th>
                                                    <th>Titular</th>
                                                    <th>Nombre del Banco</th>
                                                    <th>Código Swift</th>
                                                    <th>Descripción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr id="pmpro_account-invoice-3B9914E266">
                                                    <td>32432432510954 </td>
                                                    <td>Tim Sab</td>
                                                    <td>OFB</td>
                                                    <td>900325984</td>
                                                    <td>Pay via Wire Transfer </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="alert alert-primary" role="alert">
                                            Luego de hacer la transferencia, enviar el comprobante del depósito al correo:
                                            <b>contacto@jeloviaronline.com</b>, indicando el curso que desea comprar, su nombre completo y el email con el cual se registró.
                                            En 24 horas estaremos activando su pedido.
                                        </div>
                                    </div>
                                    <!---->
                                </div>
                                <div id="stripe_style" class="stm-lms-payment-method">
                                    <div class="stm-lms-payment-method__name">
                                        <label>
                                            <span class="stm_lms_radio">
                                                <input onclick="show_stripe();" type="radio" name="payment_method" value="stripe"> 
                                                <span class="stm_lms_radio__fake"></span>
                                            </span> 
                                            <h4>Tarjeta Crédito / Debito (PEN)</h4>
                                        </label>
                                    </div>
                                    <div id="stripe" style="display: none;">
                                        <button type="button" class="btn shadow-2 btn-success btn-lg" id="buyButton" data-price="<?php echo tipo_cambio($this->cart->format_number($this->cart->total())); ?>"><i class="fa fa-credit-card" aria-hidden="true"></i>&nbsp; Pagar</button>
                                        <button class="btn btn shadow-2 btn-success btn-lg" type="button" style="display: none;" id="spinner">
                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                            Verificando ...
                                        </button>
                                    </div>
                                    <!---->
                                </div>
                            </div> 
                            <!---->
                        </div>
                    </div>
                </div>
                <?php } else {
                ?>
                <h3>El carrito esta vacio, <a href="<?php echo site_url() . 'cursos'; ?>">Agregar Cursos</a></h3>
            <?php } ?>
        </div>
    </div>
</div>
<script>
    $("#buyButton").click(function () {
        $("#spinner").show();
        $("#buyButton").hide();
    });
    Culqi.publicKey = 'pk_test_5ecc48a58fd7f33e';
    var price = "";
    $('#buyButton').on('click', function (e) {
        price = $(this).attr('data-price');
        Culqi.options({
            lang: 'auto',
            modal: true,
            style: {
                logo: '<?php echo site_url() . 'assets/page_front/images/logo/icono.png'; ?>',
                maincolor: '#0ec1c1',
                buttontext: '#ffffff',
                maintext: '#4A4A4A',
                desctext: '#4A4A4A'
            }
        });
        Culqi.settings({
            title: 'Jeloviar Online',
            currency: 'PEN',
            description: 'Venta de Cursos',
            amount: price
        });
        Culqi.open();
        e.preventDefault();
    });

    function culqi() {
        if (Culqi.token) { // ¡Objeto Token creado exitosamente!
            var token = Culqi.token.id;
            var email = Culqi.token.email;
            var url = site + "backoffice/active_course";
            $.ajax({
                url: url,
                method: 'post',
                data: {
                    price: price,
                    email: email,
                    token: token
                },
                dataType: 'JSON',
                success: function (data) {
                    if (data.object == "charge") {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Pago realizado',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        window.setTimeout(function () {
                            window.location = site + "backoffice";
                        }, 1500);
                    } else {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: 'Pago no realizado',
                            footer: 'El pago no fue procesado, verifique los datos de la tarjeta'
                        });
                        $("#spinner").hide();
                        $("#buyButton").show();
                    }
                },
                error: function (data) {
                    alert(data.user_message);
                    $("#spinner").hide();
                    $("#buyButton").show();
                }
            });
        } else {
            console.log(Culqi.error);
            alert(Culqi.error.user_message);
            $("#spinner").hide();
            $("#buyButton").show();
        }
    }
    ;

</script>

<script src="<?php echo site_url() . 'assets/backoffice/js/script/pay_order.js'; ?>"></script>