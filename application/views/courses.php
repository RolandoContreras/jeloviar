<!DOCTYPE html>
<html lang="es">
    <?php $this->load->view("head"); ?>
    <body class="bp-nouveau archive post-type-archive post-type-archive-lp_course wp-embed-responsive theme-wordpress-lms wordpress-lms learnpress learnpress-page woocommerce-no-js pagetitle-show hfeed bg-type-color thim-body-visual-composer responsive box-shadow auto-login ltr learnpress-v3 header-template-overlay wpb-js-composer js-comp-ver-6.0.5 vc_responsive no-js">
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
                <section class=content-area>
                    <div class="page-title layout-1">
                        <div class="main-top parallax" style="background-image:url(<?php echo site_url().'assets/page_front/images/background.jpg';?>);"><span class=overlay-top-header style="background-color: rgba(0,0,0,0.6);"></span>
                            <div class="content container">
                                <div class=row>
                                    <div class="text-title col-md-6">
                                        <h1>Cursos</h1>
                                    </div>
                                    <div class="text-description col-md-6">
                                        <div class=banner-description>
                                            <p><strong class=br>La mejor plataforma de educación </strong> Mejora tu perfil profesional.</p>
                                        </div>
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
                                        <span title="Todos los Cursos">Todos los Cursos</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id=top-sidebar-courses>
                        <div class=container>
                            <div data-vc-full-width=true data-vc-full-width-init=false data-vc-stretch-content=true class="vc_row wpb_row vc_row-fluid overflow top-courses-overflow vc_custom_1502273625937 vc_row-has-fill vc_row-no-padding">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class=vc_column-inner>
                                        <div class=wpb_wrapper>
                                            <div class="thim-sc-heading text-center layout-2 ">
                                                <div class=heading-content>
                                                    <h3 class="primary-heading">Cursos más vendidos</h3>
                                                </div>
                                                <p class="secondary-heading">Aprende a desarrollar aplicaciones Android e iOS y desarrollo web, educación financiera, desarrollo personal entre otras materias con un profesor con experiencia en el mundo real. ¡Obtén un 75% de descuento si lo compras aquí!</p><span class=underline></span></div>
                                            <div class="thim-sc-courses-carousel top-courses">
                                                <div class="inner-carousel owl-carousel owl-theme " data-cols=4 data-nav data-dots=true>
                                                    <?php foreach ($obj_courses_top as $value) { ?>
                                                            <div class="post-444 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-web-development course_tag-business course_tag-theme course_tag-wordpress pmpro-has-access course">
                                                                <div class=content>
                                                                    <div class=thumbnail><span class=sale><span class=text-sale>TOP</span></span>
                                                                        <a href="<?php echo site_url() . "cursos/$value->category_slug/$value->slug"; ?>" class=img_thumbnail> 
                                                                            <img alt="<?php echo $value->name; ?>" src="<?php echo site_url() . "assets/cms/img/cursos/$value->img"; ?>">
                                                                        </a>
                                                                        <span class=price>
                                                                            <span class="course-origin-price">$<?php echo $value->price_del; ?></span><span class="course-price">$<?php echo $value->price; ?></span>
                                                                        </span>
                                                                    </div>
                                                                    <div class="sub-content">
                                                                        <div class="title">
                                                                            <a href="<?php echo site_url() . "cursos/$value->category_slug/$value->slug"; ?>"><?php echo $value->name; ?></a>
                                                                        </div>
                                                                        <div class="conocer_mas">
                                                                            <span class="date">Conoce Más <ion-icon name="arrow-redo-outline"></ion-icon></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix"></div>
                        </div>
                    </div>
                    <div class="container site-content ">
                        <div class=row>
                            <main id=main class="site-main col-sm-12 col-md-9 flex-first">
                                <article id=post-0 class="post-0 post type-post status-publish format-standard hentry pmpro-has-access page type-page">
                                    <div class=entry-content>
                                        <div id=lp-archive-courses class="lp-archive-courses">
                                        <div class="thim-course-top">
                                            <div class="display grid-list-switch lpr_course-switch " data-cookie=lpr_course-switch data-layout=grid><a href=javascript:; class="grid switchToGrid switcher-active"><i class="fa fa-th"></i></a>
                                                <a href=javascript:; class="list switchToList"><i class="fa fa-th-list"></i></a>
                                            </div>
                                            <div class=course-index><span><?php echo $total;?> Resultados</span></div>
                                            <div class=courses-searching>
                                                <form method="get" action="<?php echo site_url().'cursos';?>">
                                                    <input type="text" name="search" placeholder="Busca tu curso" class="form-control course-search-filter" autocomplete="off">
                                                    <button type="submit">
                                                        <ion-icon name="search-outline"></ion-icon>
                                                    </button>
                                                    <span class=widget-search-close></span>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="archive-courses course-grid archive_switch">
                                            <div class="learn-press-courses row">
                                                <?php foreach ($obj_courses as $value) { ?>
                                                    <article id=post-486 class="col-md-4 col-12 col-sm-6 col-xs-6 lpr-course post-486 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-business course_tag-business course_tag-theme course_tag-wordpress pmpro-has-access course">
                                                        <div class="content">
                                                            <div class="thumbnail">
                                                                <a href="<?php echo site_url()."cursos/$value->category_slug/$value->slug";?>">
                                                                    <img alt="<?php echo $value->name;?>" src="<?php echo site_url() . "assets/cms/img/cursos/$value->img";?>"/>
                                                                </a>
                                                                <?php if ($value->type == 1) { ?>
                                                                    <div class="price">
                                                                        <span class="course-price">Libre</span>
                                                                    </div>
                                                                <?php } else { ?>
                                                                    <div class="price">
                                                                        <span class="course-origin-price line-price">$<?php echo $value->price_del; ?></span><span class="course-price">$<?php echo $value->price; ?></span>
                                                                    </div>
                                                                <?php } ?>
                                                                <div class="button-when-logged has-wishlist"></div>
                                                            </div>
                                                            <div class=sub-content>
                                                                <h3 class="title">
                                                                    <a href="<?php echo site_url()."cursos/$value->category_slug/$value->slug";?>"><?php echo $value->name;?></a>
                                                                </h3>
                                                                <div class="conocer_mas">
                                                                <span class="date">Conoce Más <ion-icon name="arrow-redo-outline"></ion-icon></span>
                                                            </div>
                                                                <div class="content-list">
                                                                    <div class="course-description">
                                                                        <p><?php echo corta_texto($value->description, 300);?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                <?php } ?>
                                            </div>
                                            <nav class=learn-press-pagination>
                                                <?php echo $obj_pagination; ?>
                                            </nav>
                                            <div class=thim-loading-icon>
                                                <div class=sk-three-bounce>
                                                    <div class="sk-child sk-bounce1"></div>
                                                    <div class="sk-child sk-bounce2"></div>
                                                    <div class="sk-child sk-bounce3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </article>
                            </main>
                            <aside id="secondary" class="sidebar-courses widget-area col-md-3 sticky-sidebar flex-last">
                                <aside id=thim-courses-categories-2 class="widget widget_thim-courses-categories">
                                    <h4 class="widget-title">Categorías</h4>
                                    <ul class=courses-categories>
                                        <?php foreach ($obj_category as $value) { ?>
                                            <li class="cat-item">
                                                <a href="<?php echo site_url() . "cursos/$value->slug"; ?>"><?php echo $value->name; ?></a>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </aside>
                            </aside>
                        </div>
                    </div>
                </section>
            </div>
            <?php $this->load->view("footer"); ?>
        </div>
        <div id=back-to-top><i class="fa fa-angle-up" aria-hidden=true></i></div>
        <script src="<?php echo site_url().'assets/page_front/js/plugins/owl.carousel.min.js';?>"></script>
        <script src="<?php echo site_url().'assets/page_front/js/plugins/jquery.magnific-popup.min.js';?>"></script>
        <script src="<?php echo site_url().'assets/page_front/js/plugins/theia-sticky-sidebar.js';?>"></script>
        <script src="<?php echo site_url().'assets/page_front/js/plugins/imagesloaded.min.js';?>"></script>
        <script src="<?php echo site_url().'assets/page_front/js/main.min.js';?>"></script>
        <script src=https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js></script>
        <script>
            WebFont.load({google: {families: ['Roboto:300,400']}});
        </script>
        <script src="<?php echo site_url() . 'assets/page_front/js/plugins/js_composer_front.min.js'; ?>"></script>
    </body>

</html>