<!DOCTYPE html>
<html lang="es">
    <?php $this->load->view("head"); ?>
    <body class="bp-nouveau lp_course-template-default single single-lp_course postid-444 wp-embed-responsive theme-wordpress-lms wordpress-lms learnpress learnpress-page pmpro-body-has-access woocommerce-no-js pagetitle-show bg-type-color thim-body-visual-composer responsive lp_login_popup box-shadow auto-login ltr learnpress-v3 course-no-free header-template-overlay thim-lp-layout-1 lp-landing wpb-js-composer js-comp-ver-6.0.5 vc_responsive no-js">
        <div id=wrapper-container class="content-pusher creative-right bg-type-color">
            <div class=overlay-close-menu></div>
            <?php $this->load->view("header"); ?>
            <?php $this->load->view("nav"); ?>
            <div id=main-content>
                <section class=content-area>
                    <div class="page-title layout-2">
                        <div class="main-top parallax" style="background-image:url(<?php echo site_url() . 'assets/page_front/images/background.jpg'; ?>);"><span class=overlay-top-header style="background-color: rgba(0,0,0,0.6);"></span>
                            <div class="content container">
                                <div class=text-title>
                                    <div id="message"></div>
                                    <h1><?php echo $obj_courses->name; ?></h1>
                                </div>
                                <div class=text-description>
                                    <div class=banner-description>Compra ahora y obtén este curso con un 70% del precio original. Apúrate que se acaba el beneficio.
                                        <div class=price><span class="course-origin-price line-price">€<?php echo $obj_courses->price_del; ?></span><span class=course-price>€<?php echo $obj_courses->price; ?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="breadcrumb-content ">
                            <div class="breadcrumbs-wrapper container">
                                <div class="learn-press-course-buttons lp-course-buttons">
                                    <button onclick="add_cart_home('<?php echo $obj_courses->course_id; ?>', '<?php echo $obj_courses->price; ?>', '<?php echo $obj_courses->name; ?>');" class="button"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp; Comprar el Curso </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container site-content ">
                        <div class=row>
                            <main id=main class="site-main col-sm-12 full-width">
                                <article id=post-444 class="sidebar-right post-444 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-web-development course_tag-business course_tag-theme course_tag-wordpress pmpro-has-access course">
                                    <div class=entry-content>
                                        <div id=lp-single-course class=lp-single-course>
                                            <div id=learn-press-course>
                                                <div class=course-summary>
                                                    <div class=landing-1>
                                                        <div class=course-info>
                                                            <ul class="list-inline clearfix">
                                                                <li class="list-inline-item item-author">
                                                                    <div class="author">
                                                                        <span class="avatar">
                                                                            <img width=60 height=60 alt="<?php echo $obj_courses->teacher; ?>" src="<?php echo site_url() . "assets/cms/img/profesores/$obj_courses->teacher_img"; ?>" class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo">
                                                                        </span>
                                                                        <div class="info">
                                                                            <label>Profesor</label>
                                                                            <a><?php echo $obj_courses->teacher; ?></a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-inline-item item-categories">
                                                                    <label>Categoría</label>
                                                                    <span class="cat-links">
                                                                        <a href="<?php echo site_url() . "cursos/$obj_courses->category_slug"; ?>" rel="tag"><?php echo $obj_courses->category_name; ?></a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class=course-thumbnail>
                                                            <img alt="<?php echo $obj_courses->name; ?>" title="<?php echo $obj_courses->name; ?>" src="<?php echo site_url() . "assets/cms/img/cursos/$obj_courses->img2"; ?>">                          
                                                            <?php
                                                            foreach ($obj_videos as $value) {
                                                                if ($value->type == 1) {
                                                                    $link_video = $value->video;
                                                                }
                                                            }
                                                            ?>
                                                            <a href="<?php echo $link_video; ?>" class="play-button video-thumbnail">
                                                                <span class="video-thumbnail hvr-push">
                                                                    <i class="fa fa-play-circle fa-5x"></i>
                                                                </span>
                                                            </a>
                                                            <div
                                                                class=time>
                                                                <div class=date-start><?php echo formato_fecha_dia($obj_courses->date); ?></div>
                                                                <div class=month-start><?php echo formato_fecha_mes($obj_courses->date); ?></div>
                                                            </div>
                                                        </div>
                                                        <div class="course-landing-summary has-social">
                                                            <div class="share sticky-sidebar">
                                                                <div class="text share-text">Compartir</div>
                                                                <div class="thim-social-share popup" data-link="<?php echo site_url() . "cursos/$obj_courses->category_slug/$obj_courses->slug"; ?>">
                                                                    <?php $url_social = site_url() . "cursos/$obj_courses->category_slug/$obj_courses->slug";
                                                                    $url = convert_url_social($url_social);
                                                                    ?>
                                                                    <ul class=links>
                                                                        <li>
                                                                            <a class="link facebook" title="Facebook2" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>" rel=nofollow onclick="window.open(this.href, this.title, 'width=600,height=600,top=200px,left=200px'); return false;" target="_blank">
                                                                                <i class="fa fa-facebook"></i>
                                                                            </a>
                                                                        </li>
                                                                </div>
                                                            </div>
                                                            <div class=content-landing-1>
                                                                <div class=course-description id=learn-press-course-description>
                                                                    <div id=tab-overview>
                                                                        <h4>Descripción del Curso</h4>
<?php echo $obj_courses->description; ?>
                                                                    </div>
                                                                </div>
                                                                <div id=tab-curriculum style="height: 68px;"></div>
                                                                <div class=course-curriculum id=learn-press-course-curriculum>
                                                                    <div class=curriculum-heading>
                                                                        <div class=title>
                                                                            <h2 class="course-curriculum-title">Contenido del Curso</h2>
                                                                        </div>
                                                                        <span class=total-lessons>Módulos: <span class="text"><?php echo $total_modules; ?> Modulos</span></span>
                                                                        <span class="total-time">Lecciones: <span class=text><?php echo $total_videos; ?> Lecciones</span></span>
                                                                    </div>
                                                                    <ul class="curriculum-sections">
<?php foreach ($obj_modules as $value) { ?>
                                                                            <li class=section id=section-257 data-id=257>
                                                                                <h4 class="section-header">
                                                                                    <span class=collapse></span><?php echo $value->name; ?>
                                                                                </h4>
                                                                                <ul class="section-content">
                                                                                    <?php
                                                                                    foreach ($obj_videos as $video) {
                                                                                        if ($value->module_id == $video->module_id) {
                                                                                            ?>
                                                                                            <li class="course-item course-item-lp_lesson course-item-445 item-locked" data-type=lp_lesson>
                                                                                                <span class=course-format-icon><i class="fa fa-play-circle"></i></span>
                                                                                                <div class=meta-rank>
                                                                                                    <div class=rank><span class=label>Vídeo</span></div>
                                                                                                </div>
                                                                                                <a class=section-item-link>
                                                                                                    <span class=item-name><?php echo $video->name; ?></span>
                                                                                                    <span class=course-item-meta><span class="item-meta duration"><?php echo $video->time; ?> min</span><span class="lp-icon item-status"></span></span>
                                                                                                </a>
                                                                                            </li>
                                                                                        <?php } ?>
    <?php } ?>
                                                                                </ul>
                                                                            </li>
<?php } ?>
                                                                    </ul>
                                                                </div>
                                                                <div id=tab-instructor style="height: 40px"></div>
                                                                <div class=course-author>
                                                                    <h3>Profesor</h3>
                                                                    <div class="thim-course-author teacher">
                                                                        <div class=author-avatar>
                                                                            <img alt="<?php $obj_courses->teacher; ?>" src="<?php echo site_url() . "assets/cms/img/profesores/$obj_courses->teacher_img"; ?>" class="avatar avatar-150 wp-user-avatar wp-user-avatar-150 alignnone photo">
                                                                            <ul class="social-link">
                                                                                <li>
                                                                                    <a class="social_color" target="_blank" href="<?php echo $obj_courses->twiter; ?>">
                                                                                        <i class="fa fa-twitter"></i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="social_color" target="_blank" href="<?php echo $obj_courses->facebook; ?>">
                                                                                        <i class="fa fa-facebook"></i>
                                                                                    </a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class="social_color" target="_blank" href="<?php echo $obj_courses->instagram; ?>">
                                                                                        <i class="fa fa-instagram"></i>
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class=author-bio>
                                                                            <div class=name>
                                                                                <a><?php echo $obj_courses->teacher; ?></a>
                                                                            </div>
                                                                            <div class=major><?php echo $obj_courses->profetion; ?></div>
                                                                            <p class=description><?php echo $obj_courses->teacher_description; ?></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="wpb_wrapper">
                                                                    <div class="thim-course-block-3 title-center has-filter">
                                                                        <div class="wrapper-title">
                                                                            <h3 class="related-title">Cursos Relacionados</h3>
                                                                        </div>
                                                                        <div class="masonry-items">
                                                                            <div class="row">
                                                                                <?php foreach ($obj_courses_related as $value) { ?>
                                                                                <div class="course-item col-sm-4">
                                                                                    <div class="wrapper">
                                                                                        <div class="featured-img">
                                                                                            <img src="<?php echo site_url() . "assets/cms/img/cursos/$value->img"; ?>" alt="<?php echo $value->name; ?>">
                                                                                            <a href="<?php echo site_url() . "cursos/$value->category_slug/$value->slug"; ?>" class="img-link"></a>
                                                                                            <div class="course-meta">
                                                                                                <div class="price">
                                                                                                    <span class="course-origin-price-2 line-price">€<?php echo $value->price_del;?></span><span class="course-price course-price-2">€<?php echo $value->price;?></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <h4 class="course-title">
                                                                                            <a href="<?php echo site_url() . "cursos/$value->category_slug/$value->slug"; ?>"><?php echo $value->name; ?></a>
                                                                                        </h4>
                                                                                        <div class="conocer_mas">
                                                                                            <span class="date">Conoce Más <ion-icon name="arrow-redo-outline" role="img" class="md hydrated" aria-label="arrow redo outline"></ion-icon></span>
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </main>
                        </div>
                    </div>
                </section>
            </div>
<?php $this->load->view("footer"); ?>
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
        <script src=<?php echo site_url() . 'assets/page_front/js/plugins/theia-sticky-sidebar.js'; ?>></script>
        <script src="<?php echo site_url() . 'assets/backoffice/js/script/pay_order.js'; ?>"></script>
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        
        <script src="<?php echo site_url().'assets/backoffice/js/core/sweetalert.min.js';?>"></script>
    </body>
</html>