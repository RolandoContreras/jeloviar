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
                                        <h1>404 Página</h1>
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
                                        <span title="Página 404">Página 404</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="container site-content ">
                        <div class="row">
                            <main id="main" class="site-main col-sm-12 full-width">
                                <section class="error-404 not-found">
                                    <div class="page-content">
<img src="https://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/themes/wordpress-lms//assets/images/404.png" alt=">Page not found!">
<h3 class="intro">Página no encontrada!</h3>
<p class="404-message">Sorry, we can't find the page you are looking for. Please go to <a href="<?php echo site_url();?>">Home.</a></p>
                                    </div>
                                </section>
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
    </body>
</html>