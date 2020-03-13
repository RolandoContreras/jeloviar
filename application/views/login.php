<!DOCTYPE html>
<html lang="es">
    <?php $this->load->view("head"); ?>
    <body class="bp-nouveau page-template-default page page-id-522 wp-embed-responsive theme-wordpress-lms pmpro-body-has-access woocommerce-no-js pagetitle-show bg-type-color thim-body-visual-composer responsive box-shadow auto-login ltr learnpress-v3 header-template-overlay wpb-js-composer js-comp-ver-6.0.5 vc_responsive no-js">
        <div id=wrapper-container class="content-pusher creative-right bg-type-color">
            <div class=overlay-close-menu></div>
            <?php $this->load->view("header"); ?>
            <?php $this->load->view("nav"); ?>
            <div id=main-content>
                <section class=content-area>
                    <div class="page-title layout-1">
                        <div class="main-top parallax" style="background-image:url(<?php echo site_url() . 'assets/page_front/images/background.jpg'; ?>);"><span class=overlay-top-header style="background-color: rgba(0,0,0,0.6);"></span>
                            <div class="content container">
                                <div class=row>
                                    <div class="text-title col-md-6">
                                        <h1>Inicio de Sesión</h1>
                                    </div>
                                    <div class="text-description col-md-6">
                                        <div class=banner-description><strong class=br>La mejor plataforma de educación en español. </strong> Obtén un curso con el 70% de descuento.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="breadcrumb-content breadcrumb-plus">
                            <div class="breadcrumbs-wrapper container">
                                <ul id="breadcrumbs" class="breadcrumbs">
                                    <li>
                                        <a href="<?php echo site_url(); ?>" title="Inicio">
                                            <span>Inicio</span>
                                        </a>
                                        <span class=breadcrum-icon><i class="fa fa-angle-right" aria-hidden=true></i></span>
                                    </li>
                                    <li>
                                        <span title="Todos los Cursos">Inicio de Sesión</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="container site-content ">
                        <div class=row>
                            <main id=main class="site-main col-sm-12 full-width">
                                <article id=post-522 class="post-522 page type-page status-publish hentry pmpro-has-access">
                                    <div class=entry-content>
                                        <div class="vc_row wpb_row vc_row-fluid account-login-page">
                                            <div class="social-login-form wpb_column vc_column_container vc_col-sm-3"></div>
                                            <div class="thim-form-login wpb_column vc_column_container vc_col-sm-6">
                                                <div class="vc_column-inner vc_custom_1503993564602">
                                                    <div class=wpb_wrapper>
                                                        <div class=thim-login>
                                                            <h4 class="subtitle">Iniciar Sesión</h4>
                                                            <h2 class="title">Iniciar con tu cuenta de U-linex</h2>
                                                            <form name="loginform" id="loginform" action="javascript:void(0);">
                                                                <p class="login-username">
                                                                    <input required type="text" placeholder="E-mail *" id="user_login" name="user_login" class="input required" value size="20">
                                                                </p>
                                                                <p class="login-password">
                                                                    <input required type="password" name="pwd" placeholder="Contraseña *" id="user_pass" class="input required" value size="20">
                                                                    <span id="show_pass"><i class="fa fa-eye"></i></span>
                                                                </p>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <div class="g-recaptcha" data-sitekey="6LdkguAUAAAAAO4yT7xPU0LFLVBxUEGVOtpQeaNn"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
                                                                <div class="wrap-fields">
                                                                    <p class="forgetmenot login-remember">
                                                                        <a class=lost-pass-link href="<?php echo site_url() . 'recuperar_contrasena'; ?>" title="¿Olvidaste tu contraseña?">¿Olvidaste tu contraseña?</a>
                                                                    </p>
                                                                </div>
                                                                <p class="submit login-submit">
                                                                    <input type="submit" onclick="login();" class="button button-primary button-large" value="Iniciar Sesión">
                                                                </p>
                                                            </form>
                                                            <p class="link-bottom">¿Aún no eres miembro? <a href="<?php echo site_url() . 'registro'; ?>">¡Regístrate ahora!</a></p>
                                                            <div class="vc_empty_space" style="height: 20px"><span class="vc_empty_space_inner"></span></div>
                                                            <div id="mensaje"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="social-login-form wpb_column vc_column_container vc_col-sm-3"></div>
                                        </div>
                                    </div>
                                </article>
                            </main>
                        </div>
                    </div>
                </section>
            </div>
            <?php echo $this->load->view("footer"); ?>
        </div>
        <div id=back-to-top><i class="fa fa-angle-up" aria-hidden=true></i></div>
        <script src="<?php echo site_url() . 'assets/page_front/js/plugins/owl.carousel.min.js'; ?>"></script>
        <script src="<?php echo site_url() . 'assets/page_front/js/plugins/jquery.magnific-popup.min.js'; ?>"></script>
        <script src="<?php echo site_url() . 'assets/page_front/js/plugins/imagesloaded.min.js'; ?>"></script>
        <script src="<?php echo site_url() . 'assets/page_front/js/main.min.js'; ?>"></script>
        <script src=https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js></script>
        <script>WebFont.load({google: {families: ['Roboto:300,400']}});</script>
        <script src="<?php echo site_url() . 'assets/page_front/js/plugins/js_composer_front.min.js'; ?>"></script>
        <script src="<?php echo site_url() . 'assets/page_front/js/plugins/skrollr.min.js'; ?>"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script src='<?php echo site_url() . 'assets/page_front/js/script/login.js'; ?>'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </body>
</html>