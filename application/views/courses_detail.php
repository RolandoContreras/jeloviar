<!DOCTYPE html>
<html lang="es">
    <?php $this->load->view("head"); ?>
    <body class="bp-nouveau lp_course-template-default single single-lp_course postid-444 wp-embed-responsive theme-wordpress-lms wordpress-lms learnpress learnpress-page pmpro-body-has-access woocommerce-no-js pagetitle-show bg-type-color thim-body-visual-composer responsive lp_login_popup box-shadow auto-login ltr learnpress-v3 course-no-free header-template-overlay thim-lp-layout-1 lp-landing wpb-js-composer js-comp-ver-6.0.5 vc_responsive no-js">
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
                    <div class="page-title layout-2">
                        <div class="main-top parallax" style="background-image:url(<?php echo site_url() . 'assets/page_front/images/background.jpg'; ?>);"><span class=overlay-top-header style="background-color: rgba(0,0,0,0.6);"></span>
                            <div class="content container">
                                <div class=text-title>
                                    <h1><?php echo $obj_courses->name; ?></h1>
                                </div>
                                <div class=text-description>
                                    <div class=banner-description>Compra ahora y obtén este curso con un 70% del precio original. Apúrate que se acaba el beneficio.
                                        <div class=price><span class="course-origin-price line-price">$<?php echo $obj_courses->price_del; ?></span><span class=course-price>$<?php echo $obj_courses->price; ?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="breadcrumb-content ">
                            <div class="breadcrumbs-wrapper container">
                                <div class="learn-press-course-buttons lp-course-buttons">
                                    <form name=purchase-course class="purchase-course guest_checkout" method=post enctype=multipart/form-data><input type=hidden name=purchase-course value=444><input type=hidden name=purchase-course-nonce value=223bfc660e><button class="lp-button button button-purchase-course">Compra el Curso</button></form>
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
                                                                            <img width=60 height=60 alt="Maxine Waters" data-src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/uploads/sites/5/2017/07/1-e1503481962715-150x150.jpg class="avatar avatar-60 wp-user-avatar wp-user-avatar-60 alignnone photo lazyload"></span>
                                                                        <div class=info><label>Profesor</label><a href=http://wordpresslms.thimpress.com/demo-elearning-2/lp-profile/admin2/>Maxine Waters</a>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="list-inline-item item-categories">
                                                                    <label>Categoría</label>
                                                                    <span class="cat-links">
                                                                        <a href="<?php echo site_url()."cursos/$obj_courses->category_slug";?>" rel="tag"><?php echo $obj_courses->category_name;?></a>
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class=course-thumbnail>
                                                            <img alt="<?php echo $obj_courses->name;?>" title="<?php echo $obj_courses->name;?>" src="<?php echo site_url()."assets/cms/img/cursos/$obj_courses->img2"; ?>">                          
                                                                <a href="https://www.youtube.com/watch?v=TtoHkSuKJwE" class="play-button video-thumbnail">
                                                                    <span class="video-thumbnail hvr-push"><ion-icon name="play-circle-outline"></ion-icon></span>
                                                                </a>
                                                                <div
                                                                    class=time>
                                                                    <div class=date-start><?php echo formato_fecha_dia($obj_courses->date);?></div>
                                                                    <div class=month-start><?php echo formato_fecha_mes($obj_courses->date);?></div>
                                                                </div>
                                                        </div>
                                                        <div class="course-landing-summary has-social">
                                                            <div class="share sticky-sidebar">
                                                                <div class="text share-text">Compartir</div>
                                                                <div class="thim-social-share popup" data-link=http://wordpresslms.thimpress.com/demo-elearning-2/courses/aws-certified-solutions-architect/>
                                                                <ul class=links>
                                                                    <li>
                                                                        <a class="link facebook" title=Facebook href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwordpresslms.thimpress.com%2Fdemo-elearning-2%2Fcourses%2Faws-certified-solutions-architect%2F"
                                                                           rel=nofollow onclick="window.open(this.href, this.title, 'width=600,height=600,top=200px,left=200px'); return false;" target=_blank><i class=ion-social-facebook></i></a>
                                                                    </li>
                                                            </div>
                                                        </div>
                                                        <div class=content-landing-1>
                                                            <div class=course-meta></div>
                                                            <div id=thim-landing-course-menu-tab>
                                                                <div class="container wrapper clearfix">
                                                                    <ul class=course-landing-tab>
                                                                        <li role=presentation class="course-nav-tab-overview active"><a href=#tab-overview>Vista Global</a></li>
                                                                        <li role=presentation class=course-nav-tab-instructor><a href=#tab-instructor>Profesor</a></li>
                                                                    </ul>
                                                                    <div class="course-purchase-info has-wishlist"><span class=course-origin-price> &#36;44.00</span><span class=course-price>&#36;33.00</span>
                                                                        <div class="learn-press-course-buttons lp-course-buttons">
                                                                            <form name=purchase-course class="purchase-course guest_checkout" method=post enctype=multipart/form-data><input type=hidden name=purchase-course value=444><input type=hidden name=purchase-course-nonce value=223bfc660e>
                                                                                <button
                                                                                    class="lp-button button button-purchase-course">Comprar el Curso </button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=course-description id=learn-press-course-description>
                                                                <div id=tab-overview>
                                                                    <h4>Descripción del Curso</h4>
                                                                    <?php echo $obj_courses->description;?>
                                                                </div>
                                                            </div>
                                                            <div id=tab-curriculum style="height: 68px;"></div>
                                                            <div class=course-curriculum id=learn-press-course-curriculum>
                                                                <div class=curriculum-heading>
                                                                    <div class=title>
                                                                        <h2 class="course-curriculum-title">Contenido del Curso</h2>
                                                                    </div>
                                                                    <div class=search>
                                                                        <form role=search method=get class=search-form action=http://wordpresslms.thimpress.com/demo-elearning-2/><input type=text class=search-field placeholder=Search... value name=s><input type=hidden name=post_type value=lp_lession>
                                                                        <button
                                                                            type=submit class=search-submit><span class=ion-android-search></span></button>
                                                                        </form>
                                                                    </div><span class=total-lessons>Total learning: <span class=text>12 lessons</span></span><span class=total-time>Time: <span class=text>10 weeks</span></span>
                                                                </div>
                                                                <nav class="thim-font-heading learn-press-breadcrumb" itemprop=breadcrumb><a href=http://wordpresslms.thimpress.com/demo-elearning-2>Home</a> <span class=delimiter>/</span> <a href=http://wordpresslms.thimpress.com/demo-elearning-2/courses/>Courses</a>
                                                                    <span class=delimiter>/</span> <a href=http://wordpresslms.thimpress.com/demo-elearning-2/course-category/web-development/>Web
                                                                    Development</a> <span class=delimiter>/</span> <span class=item-name>AWS Certified Solutions Architect</span></nav>
                                                                <ul class=curriculum-sections>
                                                                    <li class=section id=section-257 data-id=257>
                                                                        <h4 class="section-header"><span class=collapse></span>Introduction to this Course&nbsp;<span class=meta><span class=step>0/5</span></span>
                                                                        </h4>
                                                                        <ul class=section-content>
                                                                            <li class="course-item course-item-lp_lesson course-item-445 item-locked" data-type=lp_lesson><span class=course-format-icon><i class="fa fa-file-o"></i></span>
                                                                                <div class=meta-rank>
                                                                                    <div class=rank><span class=label>Lecture</span>1.1</div>
                                                                                </div><a class=section-item-link href=http://wordpresslms.thimpress.com/demo-elearning-2/courses/aws-certified-solutions-architect/lessons/a-note-on-asking-for-hel/>
                                                                                <span
                                                                                    class=item-name>A Note On Asking For Help</span><span class=course-item-meta><span class="item-meta duration">30 min</span><span class="lp-icon item-status"></span></span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="course-item course-item-lp_lesson course-item-446 item-locked" data-type=lp_lesson><span class=course-format-icon><i class="fa fa-file-o"></i></span>
                                                                                <div class=meta-rank>
                                                                                    <div class=rank><span class=label>Lecture</span>1.2</div>
                                                                                </div><a class=section-item-link href=http://wordpresslms.thimpress.com/demo-elearning-2/courses/aws-certified-solutions-architect/lessons/introducing-our-ta-11/>
                                                                                <span
                                                                                    class=item-name>Introducing Our TA</span><span class=course-item-meta><span class="item-meta duration">30 min</span><span class="lp-icon item-status"></span></span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="course-item course-item-lp_lesson course-item-447 item-locked" data-type=lp_lesson><span class=course-format-icon><i class="fa fa-file-o"></i></span>
                                                                                <div class=meta-rank>
                                                                                    <div class=rank><span class=label>Lecture</span>1.3</div>
                                                                                </div><a class=section-item-link href=http://wordpresslms.thimpress.com/demo-elearning-2/courses/aws-certified-solutions-architect/lessons/our-class-chat-room-3-2/>
                                                                                <span
                                                                                    class=item-name>Our Class Chat Room</span><span class=course-item-meta><span class="item-meta duration">30 min</span><span class="lp-icon item-status"></span></span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="course-item course-item-lp_lesson course-item-448 item-locked" data-type=lp_lesson><span class=course-format-icon><i class="fa fa-file-o"></i></span>
                                                                                <div class=meta-rank>
                                                                                    <div class=rank><span class=label>Lecture</span>1.4</div>
                                                                                </div><a class=section-item-link href=http://wordpresslms.thimpress.com/demo-elearning-2/courses/aws-certified-solutions-architect/lessons/why-this-course-c3/>
                                                                                <span
                                                                                    class=item-name>Why This Course?</span><span class=course-item-meta><span class="item-meta duration">30 min</span><span class="lp-icon item-status"></span></span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="course-item course-item-lp_lesson course-item-449 item-locked" data-type=lp_lesson><span class=course-format-icon><i class="fa fa-file-o"></i></span>
                                                                                <div class=meta-rank>
                                                                                    <div class=rank><span class=label>Lecture</span>1.5</div>
                                                                                </div><a class=section-item-link href=http://wordpresslms.thimpress.com/demo-elearning-2/courses/aws-certified-solutions-architect/lessons/syllabus-download-c2/>
                                                                                <span
                                                                                    class=item-name>Syllabus Download</span><span class=course-item-meta><span class="item-meta duration">30 min</span><span class="lp-icon item-status"></span></span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class=section id=section-258 data-id=258>
                                                                        <h4 class="section-header"><span class=collapse></span>Introduction to Front End Development&nbsp;<span class=meta><span class=step>0/3</span></span>
                                                                        </h4>
                                                                        <ul class=section-content>
                                                                            <li class="course-item course-item-lp_lesson course-item-450 item-locked" data-type=lp_lesson><span class=course-format-icon><i class="fa fa-file-o"></i></span>
                                                                                <div class=meta-rank>
                                                                                    <div class=rank><span class=label>Lecture</span>2.1</div>
                                                                                </div><a class=section-item-link href=http://wordpresslms.thimpress.com/demo-elearning-2/courses/aws-certified-solutions-architect/lessons/unit-objectives-c3/>
                                                                                <span
                                                                                    class=item-name>Unit Objectives</span><span class=course-item-meta><span class="item-meta duration">30 min</span><span class="lp-icon item-status"></span></span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="course-item course-item-lp_lesson course-item-451 item-locked" data-type=lp_lesson><span class=course-format-icon><i class="fa fa-file-o"></i></span>
                                                                                <div class=meta-rank>
                                                                                    <div class=rank><span class=label>Lecture</span>2.2</div>
                                                                                </div><a class=section-item-link href=http://wordpresslms.thimpress.com/demo-elearning-2/courses/aws-certified-solutions-architect/lessons/setting-up-front-end-developer-environmen/>
                                                                                <span
                                                                                    class=item-name>Setting Up Front-End Developer</span><span class=course-item-meta><span class="item-meta duration">30 min</span>
                                                                                    <span
                                                                                        class="lp-icon item-status"></span>
                                                                                </span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="course-item course-item-lp_lesson course-item-452 item-locked" data-type=lp_lesson><span class=course-format-icon><i class="fa fa-file-o"></i></span>
                                                                                <div class=meta-rank>
                                                                                    <div class=rank><span class=label>Lecture</span>2.3</div>
                                                                                </div><a class=section-item-link href=http://wordpresslms.thimpress.com/demo-elearning-2/courses/aws-certified-solutions-architect/lessons/introduction-to-the-web-c3/>
                                                                                <span
                                                                                    class=item-name>Introduction to the Web</span><span class=course-item-meta><span class="item-meta duration">30 min</span><span class="lp-icon item-status"></span></span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class=section id=section-259 data-id=259>
                                                                        <h4 class="section-header"><span class=collapse></span>Introduction to HTML&nbsp;<span class=meta><span class=step>0/4</span></span>
                                                                        </h4>
                                                                        <ul class=section-content>
                                                                            <li class="course-item course-item-lp_lesson course-item-453 item-locked" data-type=lp_lesson><span class=course-format-icon><i class="fa fa-file-o"></i></span>
                                                                                <div class=meta-rank>
                                                                                    <div class=rank><span class=label>Lecture</span>3.1</div>
                                                                                </div><a class=section-item-link href=http://wordpresslms.thimpress.com/demo-elearning-2/courses/aws-certified-solutions-architect/lessons/unit-objectives-c4/>
                                                                                <span
                                                                                    class=item-name>Unit Objectives</span><span class=course-item-meta><span class="item-meta duration">30 min</span><span class="lp-icon item-status"></span></span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="course-item course-item-lp_lesson course-item-454 item-locked" data-type=lp_lesson><span class=course-format-icon><i class="fa fa-file-o"></i></span>
                                                                                <div class=meta-rank>
                                                                                    <div class=rank><span class=label>Lecture</span>3.2</div>
                                                                                </div><a class=section-item-link href=http://wordpresslms.thimpress.com/demo-elearning-2/courses/aws-certified-solutions-architect/lessons/html-basics-3/>
                                                                                <span
                                                                                    class=item-name>HTML Basics</span><span class=course-item-meta><span class="item-meta duration">30 min</span><span class="lp-icon item-status"></span></span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="course-item course-item-lp_lesson course-item-455 item-locked" data-type=lp_lesson><span class=course-format-icon><i class="fa fa-file-o"></i></span>
                                                                                <div class=meta-rank>
                                                                                    <div class=rank><span class=label>Lecture</span>3.3</div>
                                                                                </div><a class=section-item-link href=http://wordpresslms.thimpress.com/demo-elearning-2/courses/aws-certified-solutions-architect/lessons/introduction-to-mdn-c3-2/>
                                                                                <span
                                                                                    class=item-name>Introduction to MDN</span><span class=course-item-meta><span class="item-meta duration">30 min</span><span class="lp-icon item-status"></span></span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="course-item course-item-lp_lesson course-item-456 item-locked" data-type=lp_lesson><span class=course-format-icon><i class="fa fa-file-o"></i></span>
                                                                                <div class=meta-rank>
                                                                                    <div class=rank><span class=label>Lecture</span>3.4</div>
                                                                                </div><a class=section-item-link href=http://wordpresslms.thimpress.com/demo-elearning-2/courses/aws-certified-solutions-architect/lessons/html-boilerplate-and-comments-5/>
                                                                                <span
                                                                                    class=item-name>HTML Boilerplate and Comments</span><span class=course-item-meta><span class="item-meta duration">30 min</span>
                                                                                    <span
                                                                                        class="lp-icon item-status"></span>
                                                                                </span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div id=tab-instructor style="height: 40px"></div>
                                                            <div class=course-author>
                                                                <h3>Profesor</h3>
                                                                <div class="thim-course-author teacher">
                                                                    <div class=author-avatar>
                                                                        <img width=150 height=150 alt="Maxine Waters" src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/uploads/sites/5/2017/07/1-e1503481962715-150x150.jpg class="avatar avatar-150 wp-user-avatar wp-user-avatar-150 alignnone photo">
                                                                            <ul class="social-link">
                                                                                <li>
                                                                                    <a class="lp_info_facebook" href="https://facebook.com"></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class=lp_info_twitter href="https://twitter.com"></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class=lp_info_google_plus href="https://plus.google.com"></a>
                                                                                </li>
                                                                            </ul>
                                                                    </div>
                                                                    <div class=author-bio>
                                                                        <div class=name>
                                                                            <a href=http://wordpresslms.thimpress.com/demo-elearning-2/lp-profile/admin2/>Maxine Waters</a>
                                                                        </div>
                                                                        <div class=major>University Professor</div>
                                                                        <p class=description>I was well-trained with skills and abilities to provides all kind of services in my teaching. Making my students happy is
                                                                            also my happiness.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <div class=thim-related-course>
                                                            <h3 class="related-title">Cursos Relacionados</h3>
                                                            <div class="courses-carousel archive-courses course-grid owl-carousel owl-theme" data-cols=3>
                                                                    <?php 
                                                                    foreach ($obj_courses_related as $value) { ?>
                                                                      <div class="inner-course ">
                                                                          <div class=wrapper-course-thumbnail>
                                                                              <a href="<?php echo site_url()."cursos/$value->category_slug/$value->slug";?>" class=img_thumbnail>
                                                                                <img width=277 height=310 src="<?php echo site_url()."assets/cms/img/cursos/$value->img";?>" alt="<?php echo $value->name;?>">
                                                                            </a>
                                                                            <div class="course-price">
                                                                                <span class="course-origin-price">S/.<?php echo $value->price_del;?></span>
                                                                                <span class="price">S/.<?php echo $value->price;?></span>
                                                                            </div>
                                                                          </div>
                                                                          <div class=item-list-center>
                                                                            <div class=course-title>
                                                                              <h2 class="title">
                                                                                  <a href="<?php echo site_url()."cursos/$value->slug";?>"><?php echo $value->name;?></a>
                                                                              </h2>
                                                                            </div>
                                                                              <span class="date-comment">
                                                                                <span class="date"><?php echo formato_fecha_dia_mes_ano($value->date);?></span>
                                                                            </span>
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
                                </article>
                            </main>
                        </div>
                    </div>
                </section>
            </div>
            <?php $this->load->view("footer");?>
        </div>
        <div id=back-to-top><i class="fa fa-angle-up" aria-hidden=true></i></div>
        <script src="<?php echo site_url().'assets/page_front/js/plugins/owl.carousel.min.js';?>"></script>
        <script src="<?php echo site_url().'assets/page_front/js/plugins/jquery.magnific-popup.min.js';?>"></script>
        <script src="<?php echo site_url().'assets/page_front/js/plugins/imagesloaded.min.js';?>"></script>
        <script src="<?php echo site_url().'assets/page_front/js/main.min.js';?>"></script>
        <script src=https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js></script>
        <script>
            WebFont.load({google: {families: ['Roboto:300,400']}});
        </script>
        <script src="<?php echo site_url() . 'assets/page_front/js/plugins/js_composer_front.min.js';?>"></script>
        <script src="<?php echo site_url() . 'assets/page_front/js/plugins/skrollr.min.js';?>"></script>
        <script src=<?php echo site_url() . 'assets/page_front/js/plugins/theia-sticky-sidebar.js';?>></script>
        <script src=https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js></script>
    </body>
</html>