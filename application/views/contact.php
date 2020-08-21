<!DOCTYPE html>
<html lang="es-PE" class="no-js">
    <?php $this->load->view("head")?>
    <body class="page-template-default page page-id-413 stm_lms_button pmpro-body-has-access skin_custom_color online-light wpb-js-composer js-comp-ver-5.6 vc_responsive"> 
        <div id="wrapper">
            <?php $this->load->view("header");?>
            <div id="main">
                <div class="stm_lms_breadcrumbs stm_lms_breadcrumbs__header_2">
                    <div class="stm_breadcrumbs_unit">
                        <div class="container">
                            <div class="navxtBreads"> 
                                <span property="itemListElement">
                                    <a property="item" title="Inicio" href="<?php echo site_url(); ?>" class="main-home">
                                        <span property="name">Inicio</span>
                                    </a>
                                </span> &gt; <span property="itemListElement">
                                    <span property="name" title="Contacto">Contacto</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="post_type_exist clearfix">
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1435659486461">
                            <div class="stm_icon_box_responsive wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="vc_custom_heading vc_custom_1532608688589">
                                            <h3 style="text-align: left"><?php echo $obj_textos->titulo_mensaje; ?></h3>
                                        </div>
                                        <div class="icon_box vc_custom_1435658011508 stm_icon_box_hover_h3 standart module__aa8b3d7f9806343760e1c6804712df56 clearfix">
                                            <div class="icon_alignment_left">
                                                <div class="icon vc_custom_1435658011507"> <i class="fa fa-user"></i></div>
                                                <div class="icon_text">
                                                    <h5 style="color:#555555"> Nosotros:</h5>
                                                    <p>Estamos para ayudarte, envíanos tus dudas, tus comentarios o inquietudes, somos una escuela al servicio de todas las personas que quieran y tengan la intención de una TRANSFORMACIÓN real en sus vidas.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1435139343164">
                                            <div class="stm_sm_gutter_back wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
                                                <div class="vc_column-inner vc_custom_1436791397964">
                                                    <div class="wpb_wrapper">
                                                         <div class="icon_box vc_custom_1435665617764 stm_icon_box_hover_h3 dark module__0c0a3d70baf224e2ccbfc8d4a1bda10d clearfix">
                                                            <div class="icon_alignment_left">
                                                                <div class="icon vc_custom_1435665617761"> <i class="fa-icon-stm_icon_phone-o"></i></div>
                                                                <div class="icon_text">
                                                                    <h5 style="color:#555555"> Teléfono:</h5>
                                                                    <p><?php echo $obj_textos->phone_footer; ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="stm_sm_gutter_back wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
                                                <div class="vc_column-inner vc_custom_1436790977027">
                                                    <div class="wpb_wrapper">
                                                        <div class="icon_box vc_custom_1435665538825 stm_icon_box_hover_h3 dark module__34cb81f88fe8563ebd21af4ed8dc05f9 clearfix">
                                                            <div class="icon_alignment_left">
                                                                <div class="icon vc_custom_1435657717791"> <i class="fa-icon-stm_icon_mail-o"></i></div>
                                                                <div class="icon_text">
                                                                    <h5 style="color:#555555;padding-bottom: 9px;"> Web:</h5>
                                                                    <p><?php echo $obj_textos->phone_footer; ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_gmaps_widget wpb_content_element">
                                            <div class="wpb_wrapper">
                                                <div style="background-color: white;"> 
                                                    <img src="<?php echo site_url().'assets/page_front/images/contacto.jpg';?>" alt="contacto"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="multiseparator vc_custom_1435665826984"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row wpb_row vc_row-fluid">
                            <!--<div class="custom-border wpb_column vc_column_container vc_col-sm-2"></div>-->
                            <div class="custom-border wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner vc_custom_1437478190523">
                                    <div class="wpb_wrapper">
                                        <div class="vc_custom_heading vc_custom_1532608711151">
                                            <h3 style="text-align: left"><?php echo $obj_textos->titulo_contacto; ?></h3>
                                        </div>
                                            <div class="screen-reader-response"></div>
                                            <form action="javascript:void(0);" method="post" class="wpcf7-form" onsubmit="send_message();">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                        <div class="form-group"> 
                                                            <span class="wpcf7-form-control-wrap name">
                                                                <input type="text" name="name" id="name" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" placeholder="Ingresa tu nombre" required=""/>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                        <div class="form-group"> 
                                                            <span class="wpcf7-form-control-wrap email">
                                                                <input type="email" name="email" id="email" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" placeholder="Ingresa tu e-mail" required=""/>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
                                                        <div class="form-group"> 
                                                            <span class="wpcf7-form-control-wrap email">
                                                                <input type="text" name="subject" id="subject" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required form-control" placeholder="Asunto" required=""/>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="form-group"> 
                                                            <span class="wpcf7-form-control-wrap message">
                                                                <textarea name="message" id="message" cols="40" rows="9" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control" placeholder="Ingresa tu mensaje" required=""></textarea>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
                                                        <button type="submit" class="wpcf7-form-control wpcf7-submit btn btn-default" /><?php echo $obj_textos->boton_contacto; ?></button>
                                                    </div>
                                                </div>
                                            </form>
                                    </div>
                                </div>
                            </div>
                            <!--<div class="custom-border wpb_column vc_column_container vc_col-sm-2"></div>-->
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <?php $this->load->view("footer");?>
        <script src="<?php echo site_url() . 'assets/page_front/js/script/contact.js'; ?>"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script defer src="<?php echo site_url() . 'assets/page_front/js/autoptimize_54ab.js'; ?>"></script>
        <script src='<?php echo site_url() . 'assets/backoffice/js/header_2.js?ver=3.2'; ?>'></script>
        <link rel='stylesheet' id='stm-lms-lesson-css' href='<?php echo site_url() . 'assets/backoffice/css/footer/lesson.css?ver=75'; ?>' type='text/css' media='all' />
        <script src='<?php echo site_url() . 'assets/backoffice/js/jquery.fancybox.js?ver=3.2'; ?>'></script>
        <script src='<?php echo site_url() . 'assets/backoffice/js/custom.js?ver=3.2'; ?>'></script>
    </body>
</html>