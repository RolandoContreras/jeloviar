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
                            <div id="error-message"></div>
                            <div class="stm-lms-payment-methods">
                                <div id="bank_style" class="stm-lms-payment-method">
                                    <div class="stm-lms-payment-method__name">
                                        <label>
                                            <span class="stm_lms_radio">
                                                <input onclick="show_bank();" type="radio" name="payment_method"> 
                                                <span class="stm_lms_radio__fake"></span>

                                            </span> 
                                            <h4>Pago con Bitcoin</h4>
                                        </label>
                                    </div>
                                    <div id="bank" style="overflow: auto;display: none;">
                                        <div class="stm-lms-payment-method__name"></div>    
                                        <table cellpadding="0" cellspacing="0" border="0">
                                            <thead>
                                                <tr>
                                                    <th>Wallet</th>
                                                    <th>Descripción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr id="pmpro_account-invoice-3B9914E266">
                                                    <td>1FCsxpGVEQizw7EbjRrBiaJGfNGsjBQBWm</td>
                                                    <td>Pago con Bitcoin</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" style="text-align: center">
                                                        <img src="<?php echo site_url()."assets/backoffice/images/btc_qr.png"?>" alt="bitcoin" width="200"/>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="alert alert-primary" role="alert">
                                            Luego de hacer la transferencia, enviar la imagen del envio al correo:
                                            <b>jeloviar.online@yahoo.com</b>, indicando el curso que desea adquirir, su nombre completo y el email con el cual se registró.
                                            En pocas horas estaremos activando su pedido.
                                        </div>
                                    </div>
                                    <!---->
                                </div>
                                <div id="eth_style" class="stm-lms-payment-method">
                                    <div class="stm-lms-payment-method__name">
                                        <label>
                                            <span class="stm_lms_radio">
                                                <input onclick="show_eth();" type="radio" name="payment_method"> 
                                                <span class="stm_lms_radio__fake"></span>

                                            </span> 
                                            <h4>Pago con Ethereum</h4>
                                        </label>
                                    </div>
                                    <div id="eth" style="overflow: auto;display: none;">
                                        <div class="stm-lms-payment-method__name"></div>    
                                        <table cellpadding="0" cellspacing="0" border="0">
                                            <thead>
                                                <tr>
                                                    <th>Wallet</th>
                                                    <th>Descripción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr id="pmpro_account-invoice-3B9914E266">
                                                    <td>0xedc4f442eb591cd7ecdb18f564419ddfbb9a1fcf</td>
                                                    <td>Pago con ETH</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" style="text-align: center">
                                                        <img src="<?php echo site_url()."assets/backoffice/images/eth_qr.jpg"?>" alt="eth" width="200"/>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="alert alert-primary" role="alert">
                                            Luego de hacer la transferencia, enviar la imagen del envio al correo:
                                            <b>jeloviar.online@yahoo.com</b>, indicando el curso que desea adquirir, su nombre completo y el email con el cual se registró.
                                            En pocas horas estaremos activando su pedido.
                                        </div>
                                    </div>
                                    <!---->
                                </div>
                                <div id="stripe_style" class="stm-lms-payment-method  active">
                                    <div class="stm-lms-payment-method__name">
                                        <label>
                                            <span class="stm_lms_radio">
                                                <input onclick="show_stripe();" type="radio" name="payment_method" value="stripe" checked="">  
                                                <span class="stm_lms_radio__fake"></span>
                                            </span> 
                                            <h4>Tarjeta Crédito / Debito</h4> 
                                        </label>
                                    </div>
                                    <div id="stripe" style="text-align: center">
                                        <button class="btn shadow-2 btn-success btn-lg" id="checkout-button-price_1HNmmxHzZI37AgqNG15vTaA9" role="link" type="button" >
                                            <i class="fa fa-credit-card"></i>&nbsp;&nbsp; Pagar
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
(function() {
  var stripe = Stripe('pk_test_51HIgnXHzZI37AgqNVMWLwNU8CQVwljQsg79GXLxPBDshjfrZvuOwB5aL8e6VZZPeJjwCKuet4ovSnIZfPWsg6EFu00m8hM4J1t');

  var checkoutButton = document.getElementById('checkout-button-price_1HNmmxHzZI37AgqNG15vTaA9');
  checkoutButton.addEventListener('click', function () {
    // When the customer clicks on the button, redirect
    // them to Checkout.
    stripe.redirectToCheckout({
      lineItems: [{price: 'price_1HNmmxHzZI37AgqNG15vTaA9', quantity: 1}],
      mode: 'payment',
      // Do not rely on the redirect to the successUrl for fulfilling
      // purchases, customers may not always reach the success_url after
      // a successful payment.
      // Instead use one of the strategies described in
      // https://stripe.com/docs/payments/checkout/fulfillment
      successUrl: 'https://jeloviaronline.com/backoffice/success',
      cancelUrl: 'https://jeloviaronline.com/backoffice/pay_order'
    })
    .then(function (result) {
      if (result.error) {
        // If `redirectToCheckout` fails due to a browser or network
        // error, display the localized error message to your customer.
        var displayError = document.getElementById('error-message');
        displayError.textContent = result.error.message;
      }
    });
  });
})();
</script>

<script src="<?php echo site_url() . 'assets/backoffice/js/script/pay_order.js'; ?>"></script>