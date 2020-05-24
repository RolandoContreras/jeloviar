<div class="col-md-9 col-sm-12">
    <div class="stm-lms-wrapper">
        <div class="container">
            <?php
            if (!empty($this->cart->contents())) {?>
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
                                                <h4>Tarjeta / Stripe</h4>
                                            </label>
                                        </div>
                                        <div id="stripe" style="display: none;">
                                            <a href="#" class="btn btn-default stm_lms_pay_button"><span><i class="fa fa-credit-card" aria-hidden="true"></i> Pagar</span></a>
                                        </div>
                                        <!---->
                                    </div>
                                </div> 
                                <!---->
                            </div>
                        </div>
                    </div>
                <?php 
            } else { ?>
                <h3>El carrito esta vacio, <a href="<?php echo site_url() . 'cursos'; ?>">Agregar Cursos</a></h3>
            <?php } ?>
        </div>
    </div>
</div>
<script src="<?php echo site_url() . 'assets/backoffice/js/script/pay_order.js'; ?>"></script>