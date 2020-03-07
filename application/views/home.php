<!DOCTYPE html>
<html lang="es">
    <?php $this->load->view("head"); ?>
    <body class="home-page bp-nouveau home page-template page-template-templates page-template-home-page page-template-templateshome-page-php page page-id-3727 wp-embed-responsive theme-wordpress-lms pmpro-body-has-access woocommerce-no-js pagetitle-show bg-type-color thim-body-visual-composer responsive box-shadow auto-login ltr learnpress-v3 header-template-overlay wpb-js-composer js-comp-ver-6.0.5 vc_responsive no-js">
        <div id=thim-preloading>
            <div class=thim-loading-icon>
                <div class=sk-three-bounce>
                    <div class="sk-child sk-bounce1"></div>
                    <div class="sk-child sk-bounce2"></div>
                    <div class="sk-child sk-bounce3"></div>
                </div>
            </div>
        </div>
        <div id=wrapper-container class="content-pusher creative-right bg-type-color">
            <div class=overlay-close-menu></div>
            <?php $this->load->view("header"); ?>
            <?php $this->load->view("nav"); ?>
            <div id=main-content>
                <div id=home-main-content class="home-content home-page container" role="main">
                    <div data-vc-full-width=true data-vc-full-width-init=false data-vc-parallax=1.5 data-vc-parallax-image="<?php echo site_url().'assets/page_front/images/bg.jpg';?>" class="vc_row wpb_row vc_row-fluid thim-header-slider-3 thim-background-overlay vc_row-has-fill vc_row-o-full-height vc_row-o-columns-stretch vc_row-o-equal-height vc_row-flex vc_general vc_parallax vc_parallax-content-moving">
                        <div class=overlay style="background-color: rgba(10,10,10,0.4)"></div>
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class=vc_column-inner>
                                <div class=wpb_wrapper>
                                    <div class="thim-sc-text-box style-4 size-default ">
                                        <div class=title-1>Crea y promociona<br>tus cursos online</div>
                                        <div class=title-2>
                                            <p>Nos enorgullecemos de ofrecer la plataforma de educación más didáctica del mercado. <br/>Todo lo que necesitas lo encuentras aquí</p>
                                        </div>
                                        <a href="#go" class="btn btn-default">
                                            <span class="text">Iniciar Recorrido</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>
                    <div id="go" data-vc-full-width=true data-vc-full-width-init=false class="vc_row wpb_row vc_row-fluid thim-column-gap-70 vc_custom_1502087455074 vc_row-has-fill">
                        <div class="wpb_column vc_column_container vc_col-sm-9">
                            <div class="vc_column-inner vc_custom_1502081858697">
                                <div class=wpb_wrapper>
                                    <div class="thim-course-block-3 ">
                                        <div class=wrapper-title>
                                            <h3 class="title white">Más Vendidos</h3>
                                            <a href="<?php echo site_url().'cursos';?>" class="view-courses-button white">Ver todos</a>
                                        </div>
                                        <div class="masonry-items">
                                            <div class="row">
                                                <?php foreach ($obj_courses as $value) { ?>
                                                <?php if($value->top == 1){?>
                                                        <div class="course-item col-sm-4">
                                                            <div class="wrapper">
                                                                <div class="featured-img">
                                                                    <img alt="<?php echo $value->name;?>" src="<?php echo site_url()."assets/cms/img/cursos/$value->img";?>">
                                                                        <a href="<?php echo site_url()."cursos/$value->category_slug/$value->slug";?>" class="img-link"></a>
                                                                        <div class="course-meta">
                                                                            <?php if($value->type == 1){ ?>
                                                                                    <div class="price">
                                                                                        <span class="course-price">Libre</span>
                                                                                    </div>
                                                                            <?php }else{ ?>
                                                                                    <div class="price">
                                                                                        <span class="course-origin-price line-price">$<?php echo $value->price_del;?></span><span class="course-price">$<?php echo $value->price;?></span>
                                                                                    </div>
                                                                            <?php } ?>
                                                                        </div>
                                                                </div>
                                                                <h4 class="course-title">
                                                                    <a class="aaa" href="<?php echo site_url()."cursos/$value->category_slug/$value->slug";?>"><?php echo $value->name;?></a>
                                                                </h4>
                                                                <div class="conocer_mas">
                                                                    <span class="date">Conoce Más <ion-icon name="arrow-redo-outline"></ion-icon></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-3 vc_col-has-fill">
                            <div class="vc_column-inner vc_custom_1502265039449">
                                <div class=wpb_wrapper>
                                    <div class="thim-sc-icon-box custom-style layout-6 default">
                                        <div class=icon-box-wrapper style>
                                            <div class=box-icon>
                                                <ion-icon name="megaphone-outline"></ion-icon>
                                            </div>
                                            <div class=box-content>
                                                <h3 class="title">Aprende de expertos</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=vc_empty_space style="height: 25px"><span class=vc_empty_space_inner></span></div>
                                    <div class="thim-sc-icon-box layout-6 default">
                                        <div class=icon-box-wrapper style>
                                            <div class=box-icon>
                                                <ion-icon name="laptop-outline"></ion-icon>
                                            </div>
                                            <div class=box-content>
                                                <h3 class="title">Acceso 24/7</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=vc_empty_space style="height: 25px"><span class=vc_empty_space_inner></span></div>
                                    <div class="thim-sc-icon-box layout-6 default">
                                        <div class=icon-box-wrapper style>
                                            <div class=box-icon>
                                                <ion-icon name="cloud-download-outline"></ion-icon>
                                            </div>
                                            <div class=box-content>
                                                <h3 class="title">Cualquier conocimiento en línea</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=vc_empty_space style="height: 59px"><span class=vc_empty_space_inner></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class=vc_column-inner>
                                <div class=wpb_wrapper>
                                    <div class="thim-course-block-3 title-center has-filter">
                                        <div class=wrapper-title>
                                            <h3 class="title title-center">Nuestros Cursos</h3>
                                        </div>
                                        <div class="masonry-items">
                                            <div class="row">
                                                <?php foreach ($obj_courses as $value) { ?>
                                                    <div class="course-item col-sm-3">
                                                        <div class=wrapper>
                                                            <div class=featured-img>
                                                                <img src="<?php echo site_url()."assets/cms/img/cursos/$value->img"; ?>" alt="<?php echo $value->name; ?>">
                                                                <a href="<?php echo site_url()."cursos/$value->category_slug/$value->slug";?>" class=img-link></a>
                                                                <div class="course-meta">
                                                                    <div class="price">
                                                                        <span class="course-origin-price line-price">$<?php echo $value->price_del; ?></span><span class="course-price">$<?php echo $value->price; ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h4 class="course-title">
                                                                <a href="<?php echo site_url()."cursos/$value->category_slug/$value->slug";?>"><?php echo $value->name; ?></a>
                                                            </h4>
                                                            <div class="conocer_mas">
                                                                <span class="date">Conoce Más <ion-icon name="arrow-redo-outline"></ion-icon></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-6">
                                            <div class=vc_column-inner>
                                                <div class=wpb_wrapper>
                                                    <div class="thim-sc-button text-right hide-separator left">
                                                        <a href="<?php echo site_url() . 'registro'; ?>" class="btn btn-primary btn-lg">
                                                            <span class="text">Registro Gratis</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-6">
                                            <div class=vc_column-inner>
                                                <div class=wpb_wrapper>
                                                    <div class="thim-sc-button text-left hide-separator left">
                                                        <a href="<?php echo site_url() . 'cursos'; ?>" class="btn btn-basic btn-lg">
                                                            <span class=text>Ver todos los cursos</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=vc_empty_space style="height: 160px"><span class=vc_empty_space_inner></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>
                </div>
            </div>
            <?php $this->load->view("footer"); ?>
        </div>
        <div id=back-to-top><i class="fa fa-angle-up" aria-hidden=true></i></div>
        <div id=tp_chameleon_list_google_fonts></div>
        <script src="<?php echo site_url().'assets/page_front/js/plugins/owl.carousel.min.js';?>"></script>
        <script src="<?php echo site_url().'assets/page_front/js/plugins/jquery.magnific-popup.min.js';?>"></script>
        <script src="<?php echo site_url().'assets/page_front/js/plugins/imagesloaded.min.js';?>"></script>
        <script src="<?php echo site_url().'assets/page_front/js/main.min.js';?>"></script>
        <script src=https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js></script>
        <script>
            WebFont.load({google: {families: ['Roboto:300,400']}});
        </script>
        <script src="<?php echo site_url() . 'assets/page_front/js/plugins/js_composer_front.min.js'; ?>"></script>
        <script src="<?php echo site_url() . 'assets/page_front/js/plugins/skrollr.min.js'; ?>"></script>
    </body>
</html>