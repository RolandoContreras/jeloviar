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
                                                                <div class="text share-text">Share</div>
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
                                                                                    class="lp-button button button-purchase-course">Buy this course </button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=course-description id=learn-press-course-description>
                                                                <div id=tab-overview>
                                                                    <h4>Course Description</h4>
                                                                    <p>If you are a newbie to managing a WordPress website, then congratulations! You are here at the right track with us because
                                                                        we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site the best
                                                                        WordPress Hosting service. This process is often overlooked by most of the website owners. But it can be considered the most
                                                                        important key point to bring your site to stand out of the crowd. A great hosting service could help you to improve SEO and
                                                                        increase sales as well.</p>
                                                                    <h4>Certification</h4>
                                                                    <p>If you are a newbie to managing a WordPress website, then congratulations! You are here at the right track with us because
                                                                        we are going to introduce you one of the most basic knowledge when owning a WordPress page: how to find your site the best
                                                                        WordPress Hosting service. This process is often overlooked by most of the website owners. But it can be considered the most
                                                                        important key point to bring your site to stand out of the crowd. A great hosting service could help you to improve SEO and
                                                                        increase sales as well.</p>
                                                                    <h4>Learning Outcomes</h4>
                                                                    <ul>
                                                                        <li>Over 37 lectures and 55.5 hours of content!</li>
                                                                        <li>LIVE PROJECT End to End Software Testing Training Included.</li>
                                                                        <li>Learn Software Testing and Automation basics from a professional trainer from your own desk.</li>
                                                                        <li>Information packed practical training starting from basics to advanced testing techniques.</li>
                                                                        <li>Best suitable for beginners to advanced level users and who learn faster when demonstrated.</li>
                                                                        <li>Course content designed by considering current software testing technology and the job market.</li>
                                                                        <li>Practical assignments at the end of every session.</li>
                                                                        <li>Practical learning experience with live project work and examples.</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div id=tab-curriculum style="height: 68px;"></div>
                                                            <div class=course-curriculum id=learn-press-course-curriculum>
                                                                <div class=curriculum-heading>
                                                                    <div class=title>
                                                                        <h2 class="course-curriculum-title">Course Content</h2>
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
                                                                <h3>Instructor</h3>
                                                                <div class="thim-course-author teacher">
                                                                    <div class=author-avatar><img width=150 height=150 alt="Maxine Waters" data-src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/uploads/sites/5/2017/07/1-e1503481962715-150x150.jpg
                                                                                                  class="avatar avatar-150 wp-user-avatar wp-user-avatar-150 alignnone photo lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><imgsrc=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/uploads/sites/5/2017/07/1-e1503481962715-150x150.jpg width=150 height=150 alt="Maxine Waters" class="avatar avatar-150 wp-user-avatar wp-user-avatar-150 alignnone photo"></noscript>
                                                                            <ul
                                                                                class=social-link>
                                                                                <li>
                                                                                    <a class=lp_info_facebook href="https://facebook.com/thimpress"></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class=lp_info_twitter href="https://twitter.com/thimpress"></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a class=lp_info_google_plus href="https://plus.google.com/thimpress"></a>
                                                                                </li>
                                                                            </ul>
                                                                    </div>
                                                                    <div class=author-bio>
                                                                        <div class=name><a href=http://wordpresslms.thimpress.com/demo-elearning-2/lp-profile/admin2/>Maxine Waters</a>
                                                                        </div>
                                                                        <div class=major>University Professor</div>
                                                                        <p class=description>I was well-trained with skills and abilities to provides all kind of services in my teaching. Making my students happy is
                                                                            also my happiness.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="thim-course-co-instructor teacher">
                                                                    <div class=author-avatar><img width=150 height=150 alt="John Purcell" data-src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/uploads/sites/5/2017/08/home-1-bg-e1503482222736-150x150.jpg
                                                                                                  class="avatar avatar-150 wp-user-avatar wp-user-avatar-150 alignnone photo lazyload" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><imgsrc=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/uploads/sites/5/2017/08/home-1-bg-e1503482222736-150x150.jpg width=150 height=150 alt="John Purcell" class="avatar avatar-150 wp-user-avatar wp-user-avatar-150 alignnone photo"></noscript>
                                                                            <ul
                                                                                class=social-link>
                                                                                <li>
                                                                                    <a href="https://facebook.com/thimpress"></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="https://twitter.com/thimpress"></a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="https://plus.google.com/thimpress"></a>
                                                                                </li>
                                                                            </ul>
                                                                    </div>
                                                                    <div class=author-bio>
                                                                        <div class=name><a href=http://wordpresslms.thimpress.com/demo-elearning-2/lp-profile/admin3/>John Purcell</a>
                                                                        </div>
                                                                        <div class=major>Computer Science</div>
                                                                        <p class=description>In 2013 I started teaching my first course online in the training center in iSecur1ty, again this course received amazing
                                                                            feedback for learners, which motivated me to create an English version of this course.The english course was the most popular
                                                                            and the top paid course in Udemy for almost a year, again the feedback was amazing, therefore I decided to make more courses
                                                                            on ethical hacking, so I released a number of other courses which are doing just as good as that one.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class=landing-review>
                                                                <div class=reviews id=tab-reviews>
                                                                    <div class=average-rating><span class=number-rate> 0.0 </span>
                                                                        <div class=review-stars-rated title="0 out of 5 stars">
                                                                            <div class="review-stars empty"></div>
                                                                            <div class="review-stars filled" style=width:0%;></div>
                                                                        </div>
                                                                        <p class=review-number>0 rating</p>
                                                                    </div>
                                                                    <div class=detailed_rating>
                                                                        <div class=course-rate><span class=number-star>5 stars</span>
                                                                            <div class=review-bar>
                                                                                <div class=rating style="width:0% "></div>
                                                                            </div><span class=percent>0%</span></div>
                                                                        <div class=course-rate><span class=number-star>4 stars</span>
                                                                            <div class=review-bar>
                                                                                <div class=rating style="width:0% "></div>
                                                                            </div><span class=percent>0%</span></div>
                                                                        <div class=course-rate><span class=number-star>3 stars</span>
                                                                            <div class=review-bar>
                                                                                <div class=rating style="width:0% "></div>
                                                                            </div><span class=percent>0%</span></div>
                                                                        <div class=course-rate><span class=number-star>2 stars</span>
                                                                            <div class=review-bar>
                                                                                <div class=rating style="width:0% "></div>
                                                                            </div><span class=percent>0%</span></div>
                                                                        <div class=course-rate><span class=number-star>1 star</span>
                                                                            <div class=review-bar>
                                                                                <div class=rating style="width:0% "></div>
                                                                            </div><span class=percent>0%</span></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="wrapper-info-bar infobar-single">
                                                                <div class=info-bar>
                                                                    <div class=price-box><span class=course-origin-price> &#36;44.00</span><span class=course-price>&#36;33.00</span></div>
                                                                    <div class=inner-content>
                                                                        <div class=button-box>
                                                                            <div class="learn-press-course-buttons lp-course-buttons">
                                                                                <form name=purchase-course class="purchase-course guest_checkout" method=post enctype=multipart/form-data><input type=hidden name=purchase-course value=444><input type=hidden name=purchase-course-nonce value=223bfc660e>
                                                                                    <button
                                                                                        class="lp-button button button-purchase-course">Buy this course </button>
                                                                                </form>
                                                                            </div>
                                                                            <p class=intro>30-Day Money-Back Guarantee</p>
                                                                        </div>
                                                                        <div class=includes-box>
                                                                            <h4 class="title">Includes</h4>
                                                                            <ul>
                                                                                <li><i class="fa fa-file-video-o"></i> 46 hours on-demand video</li>
                                                                                <li><i class="fa fa-file-word-o"></i> 16 Articles</li>
                                                                                <li><i class="fa fa-address-book"></i> 39 Supplemental Resources</li>
                                                                                <li><i class="fa fa-pagelines"></i> Full lifetime access</li>
                                                                                <li><i class="fa fa-language"></i> Language: English</li>
                                                                                <li><i class="fa fa-certificate"></i> Certificate of Completion</li>
                                                                            </ul>
                                                                            <p style="text-align: center; font-size: 15px; font-weight: 300; letter-spacing: 0.3px;"><a href=#>have a coupon?</a></p>
                                                                        </div>
                                                                        <div class="text share-text">Share</div>
                                                                        <div class="thim-social-share popup" data-link=http://wordpresslms.thimpress.com/demo-elearning-2/courses/aws-certified-solutions-architect/>
                                                                        <ul class=links>
                                                                            <li>
                                                                                <a class="link facebook" title=Facebook href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwordpresslms.thimpress.com%2Fdemo-elearning-2%2Fcourses%2Faws-certified-solutions-architect%2F"
                                                                                   rel=nofollow onclick="window.open(this.href, this.title, 'width=600,height=600,top=200px,left=200px'); return false;" target=_blank><i class=ion-social-facebook></i></a>
                                                                            </li>
                                                                            <li>
                                                                                <a class="link twitter" title=Twitter href="https://twitter.com/intent/tweet?url=http%3A%2F%2Fwordpresslms.thimpress.com%2Fdemo-elearning-2%2Fcourses%2Faws-certified-solutions-architect%2F&#38;text=AWS+Certified+Solutions++Architect"
                                                                                   rel=nofollow onclick="window.open(this.href, this.title, 'width=600,height=600,top=200px,left=200px'); return false;" target=_blank><i class=ion-social-twitter></i></a>
                                                                            </li>
                                                                            <li><a class="link pinterest" title=Pinterest href="https://pinterest.com/pin/create/button/?url=http%3A%2F%2Fwordpresslms.thimpress.com%2Fdemo-elearning-2%2Fcourses%2Faws-certified-solutions-architect%2F&#38;media=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/uploads/sites/5/2017/06/shutterstock_184641842-5-e1503481994491-300x188.jpg&description=AWS+Certified+Solutions++Architect"
                                                                                   onclick="window.open(this.href, 'mywin', 'left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class=ion-social-pinterest aria-hidden=true></i></a></li>
                                                                            <li><a title=LinkedIn target=_blank class="link linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=http%3A%2F%2Fwordpresslms.thimpress.com%2Fdemo-elearning-2%2Fcourses%2Faws-certified-solutions-architect%2F&title=AWS%20Certified%20Solutions%20%20Architect&summary=&source=It%20is%20a%20long%20established%20fact%20that%20a%20reader%20will%20be%20distracted%20by%20the%20readable%20content%20of%20a%20page%20when%20looking%20at%20its%20layout.%20The%20point%20of%20using%20Lorem%20Ipsum%20is%20that%20it%20has%20a%20more-or-less%20normal%20distribution%20of%20letters%2C%20as%20opposed%20to%20using%20%26%23039%3BContent%20here."
                                                                                   onclick="window.open(this.href, this.title, 'width=600,height=600,top=200px,left=200px'); return false;"><i class="fa fa-linkedin-square"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class=thim-related-course>
                                                            <h3 class="related-title">Related Courses</h3>
                                                            <div class="courses-carousel archive-courses course-grid owl-carousel owl-theme" data-cols=3>
                                                                <div class="inner-course ">
                                                                    <div class=wrapper-course-thumbnail>
                                                                        <a href=http://wordpresslms.thimpress.com/demo-elearning-2/courses/the-ultimate-ethical-hacking-boot-camp/ class=img_thumbnail><img width=277 height=310 alt="The Ultimate Ethical Hacking Boot Camp" data-src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/uploads/sites/5/2017/06/Half-Marathon-2014-70-1-277x310.jpg
                                                                                                                                                                                                        class=lazyload src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><imgwidth=277 height=310 src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/uploads/sites/5/2017/06/Half-Marathon-2014-70-1-277x310.jpg alt="The Ultimate Ethical Hacking Boot Camp" class></noscript></a>
                                                                        <div
                                                                            class=course-price>
                                                                            <div class="value free-course" itemprop=price content=Free>Free</div>
                                                                        </div>
                                                                        <div class=course-rating>
                                                                            <div class=review-stars-rated title="0 out of 5 stars">
                                                                                <div class="review-stars empty"></div>
                                                                                <div class="review-stars filled" style=width:0%;></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=item-list-center>
                                                                        <div class=course-title>
                                                                            <h2 class="title"><a href=http://wordpresslms.thimpress.com/demo-elearning-2/courses/the-ultimate-ethical-hacking-boot-camp/> The Ultimate
                                                                                Ethical Hacking Boot Camp</a>
                                                                            </h2>
                                                                        </div><span class=date-comment><span class=date>July 21, 2017 / </span><span class=comment>No Comments</span></span>
                                                                        <div class=author>ThimPress</div>
                                                                    </div>
                                                                </div>
                                                                <div class="inner-course in-membership">
                                                                    <div class=wrapper-course-thumbnail>
                                                                        <a href=http://wordpresslms.thimpress.com/demo-elearning-2/courses/affiliate-marketing-a-beginners-guide/ class=img_thumbnail><img width=277 height=310 alt="Affiliate Marketing &#8211; A Beginner&#8217;s Guide" data-src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/uploads/sites/5/2017/08/layer-86-e1503482220669-277x310.jpg
                                                                                                                                                                                                        class=lazyload src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><imgwidth=277 height=310 src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/uploads/sites/5/2017/08/layer-86-e1503482220669-277x310.jpg alt="Affiliate Marketing &#8211; A Beginner&#8217;s Guide" class></noscript></a>
                                                                        <div
                                                                            class=course-price>
                                                                            <div class="value free-course" itemprop=price content=Free>Free</div>
                                                                        </div>
                                                                        <div class=course-rating>
                                                                            <div class=review-stars-rated title="0 out of 5 stars">
                                                                                <div class="review-stars empty"></div>
                                                                                <div class="review-stars filled" style=width:0%;></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=item-list-center>
                                                                        <div class=course-title>
                                                                            <h2 class="title"><a href=http://wordpresslms.thimpress.com/demo-elearning-2/courses/affiliate-marketing-a-beginners-guide/> Affiliate Marketing
                                                                                &#8211; A Beginner&#8217;s Guide</a>
                                                                            </h2>
                                                                        </div><span class=date-comment><span class=date>July 21, 2017 / </span><span class=comment>No Comments</span></span>
                                                                        <div class=author>Selena Unique</div>
                                                                    </div>
                                                                </div>
                                                                <div class="inner-course in-membership">
                                                                    <div class=wrapper-course-thumbnail>
                                                                        <a href=http://wordpresslms.thimpress.com/demo-elearning-2/courses/the-ultimate-ethical-hacking-boot-camp-beginner-to-pro/ class=img_thumbnail><img width=277 height=310 alt="The Ultimate Ethical Hacking Boot Camp: Beginner to Pro" data-src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/uploads/sites/5/2017/08/pexels-photo-40120-e1500018015404-1-277x310.jpg
                                                                                                                                                                                                        class=lazyload src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><imgwidth=277 height=310 src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/uploads/sites/5/2017/08/pexels-photo-40120-e1500018015404-1-277x310.jpg alt="The Ultimate Ethical Hacking Boot Camp: Beginner to Pro" class></noscript></a>
                                                                        <div
                                                                            class=course-price><span class=course-origin-price>&#36;68.00</span><span class=price>&#036;50.00</span></div>
                                                                        <div class=course-rating>
                                                                            <div class=review-stars-rated title="0 out of 5 stars">
                                                                                <div class="review-stars empty"></div>
                                                                                <div class="review-stars filled" style=width:0%;></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=item-list-center>
                                                                        <div class=course-title>
                                                                            <h2 class="title"><a href=http://wordpresslms.thimpress.com/demo-elearning-2/courses/the-ultimate-ethical-hacking-boot-camp-beginner-to-pro/> The
                                                                                Ultimate Ethical Hacking Boot Camp: Beginner to Pro</a>
                                                                            </h2>
                                                                        </div><span class=date-comment><span class=date>July 21, 2017 / </span><span class=comment>No Comments</span></span>
                                                                        <div class=author>Colt Steele</div>
                                                                    </div>
                                                                </div>
                                                                <div class="inner-course ">
                                                                    <div class=wrapper-course-thumbnail>
                                                                        <a href=http://wordpresslms.thimpress.com/demo-elearning-2/courses/become-a-php-master-and-make-money-fast/ class=img_thumbnail><img width=277 height=310 alt="Become a PHP Master and Make Money Fast" data-src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/uploads/sites/5/2017/08/pexels-photo-270700-1-277x310.jpg
                                                                                                                                                                                                        class=lazyload src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><imgwidth=277 height=310 src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/uploads/sites/5/2017/08/pexels-photo-270700-1-277x310.jpg alt="Become a PHP Master and Make Money Fast" class></noscript></a>
                                                                        <div
                                                                            class=course-price><span class=course-origin-price>&#36;200.00</span><span class=price>&#036;15.00</span></div>
                                                                        <div class=course-rating>
                                                                            <div class=review-stars-rated title="0 out of 5 stars">
                                                                                <div class="review-stars empty"></div>
                                                                                <div class="review-stars filled" style=width:0%;></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=item-list-center>
                                                                        <div class=course-title>
                                                                            <h2 class="title"><a href=http://wordpresslms.thimpress.com/demo-elearning-2/courses/become-a-php-master-and-make-money-fast/> Become a PHP Master
                                                                                and Make Money Fast</a>
                                                                            </h2>
                                                                        </div><span class=date-comment><span class=date>July 21, 2017 / </span><span class=comment>No Comments</span></span>
                                                                        <div class=author>Laura Bush</div>
                                                                    </div>
                                                                </div>
                                                                <div class="inner-course ">
                                                                    <div class=wrapper-course-thumbnail>
                                                                        <a href=http://wordpresslms.thimpress.com/demo-elearning-2/courses/the-java-spring-tutorial-learn-javas-popular-web/ class=img_thumbnail><img width=277 height=310 alt="The Java Spring Tutorial: Learn Java&#8217;s Popular" data-src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/uploads/sites/5/2017/08/designer-typography-table-shop-1-277x310.jpg
                                                                                                                                                                                                        class=lazyload src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><imgwidth=277 height=310 src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/uploads/sites/5/2017/08/designer-typography-table-shop-1-277x310.jpg alt="The Java Spring Tutorial: Learn Java&#8217;s Popular" class></noscript></a>
                                                                        <div
                                                                            class=course-price>
                                                                            <div class="value free-course" itemprop=price content=Free>Free</div>
                                                                        </div>
                                                                        <div class=course-rating>
                                                                            <div class=review-stars-rated title="0 out of 5 stars">
                                                                                <div class="review-stars empty"></div>
                                                                                <div class="review-stars filled" style=width:0%;></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=item-list-center>
                                                                        <div class=course-title>
                                                                            <h2 class="title"><a href=http://wordpresslms.thimpress.com/demo-elearning-2/courses/the-java-spring-tutorial-learn-javas-popular-web/> The Java Spring
                                                                                Tutorial: Learn Java&#8217;s Popular</a>
                                                                            </h2>
                                                                        </div><span class=date-comment><span class=date>July 21, 2017 / </span><span class=comment>No Comments</span></span>
                                                                        <div class=author>Maxine Waters</div>
                                                                    </div>
                                                                </div>
                                                                <div class="inner-course in-membership">
                                                                    <div class=wrapper-course-thumbnail>
                                                                        <a href=http://wordpresslms.thimpress.com/demo-elearning-2/courses/complete-java-masterclass/ class=img_thumbnail><img width=277 height=310 alt="Complete Java Masterclass" data-src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/uploads/sites/5/2017/07/1-e1503481962715-277x310.jpg
                                                                                                                                                                                               class=lazyload src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><imgwidth=277 height=310 src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/uploads/sites/5/2017/07/1-e1503481962715-277x310.jpg alt="Complete Java Masterclass" class></noscript></a>
                                                                        <div
                                                                            class=course-price><span class=price>&#036;200.00</span></div>
                                                                        <div class=course-rating>
                                                                            <div class=review-stars-rated title="0 out of 5 stars">
                                                                                <div class="review-stars empty"></div>
                                                                                <div class="review-stars filled" style=width:0%;></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=item-list-center>
                                                                        <div class=course-title>
                                                                            <h2 class="title"><a href=http://wordpresslms.thimpress.com/demo-elearning-2/courses/complete-java-masterclass/> Complete Java Masterclass</a>
                                                                            </h2>
                                                                        </div><span class=date-comment><span class=date>July 21, 2017 / </span><span class=comment>No Comments</span></span>
                                                                        <div class=author>John Purcell</div>
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
            <footer id=colophon class="site-footer dark style_old">
                <div class="footer no-footer-sticky ">
                    <div class=container>
                        <div class="row footer-columns footer-sidebars">
                            <div class="footer-col footer-col6 col-xs-12 col-md-2">
                                <aside id=text-3 class="widget widget_text">
                                    <h3 class="widget-title">Contact</h3>
                                    <div class=textwidget>
                                        <ul>
                                            <li><i class="fa fa-envelope-o"></i> <a href="/cdn-cgi/l/email-protection#f8b1969e97b88c909195888a9d8b8bd69b9795"><span class="__cf_email__" data-cfemail="2f664149406f5b4746425f5d4a5c5c014c4042">[email&#160;protected]</span></a></li>
                                            <li><i class="fa fa-phone"></i> <a href=tel:0122456789>+ (0122) 456 789</a></li>
                                            <li><i class="fa fa-fax"></i> + (0123) 456 789</li>
                                            <li><i class="fa fa-map-marker"></i> No 200 Joseob, Canada.</li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                            <div class="footer-col footer-col6 col-xs-12 col-md-2">
                                <aside id=nav_menu-2 class="widget widget_nav_menu">
                                    <h3 class="widget-title">Company</h3>
                                    <div class=menu-company-container>
                                        <ul id=menu-company class=menu>
                                            <li id=menu-item-14 class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default"><a href=http://wordpresslms.thimpress.com/demo-elearning-2/about-us/ class=tc-menu-inner>About us</a></li>
                                            <li id=menu-item-13 class="menu-item menu-item-type-post_type menu-item-object-page current_page_parent menu-item-13 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default"><a href=http://wordpresslms.thimpress.com/demo-elearning-2/blog/ class=tc-menu-inner>Blog</a></li>
                                            <li id=menu-item-15 class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default"><a href=# class=tc-menu-inner>Buddy Profile</a></li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                            <div class="footer-col footer-col6 col-xs-12 col-md-2">
                                <aside id=nav_menu-3 class="widget widget_nav_menu">
                                    <h3 class="widget-title">Programs</h3>
                                    <div class=menu-programs-container>
                                        <ul id=menu-programs class=menu>
                                            <li id=menu-item-26 class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default"><a href=# class=tc-menu-inner>Nanodegree Plus</a></li>
                                            <li id=menu-item-27 class="menu-item menu-item-type-custom menu-item-object-custom menu-item-27 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default"><a href=# class=tc-menu-inner>Veterans</a></li>
                                            <li id=menu-item-28 class="menu-item menu-item-type-custom menu-item-object-custom menu-item-28 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default"><a href=# class=tc-menu-inner>Georgia</a></li>
                                            <li id=menu-item-29 class="menu-item menu-item-type-custom menu-item-object-custom menu-item-29 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default"><a href=# class=tc-menu-inner>Self-Driving Car</a></li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                            <div class="footer-col footer-col6 col-xs-12 col-md-2">
                                <aside id=nav_menu-4 class="widget widget_nav_menu">
                                    <h3 class="widget-title">Links</h3>
                                    <div class=menu-links-container>
                                        <ul id=menu-links class=menu>
                                            <li id=menu-item-4218 class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4218 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default"><a href=http://wordpresslms.thimpress.com/demo-elearning-2/courses/ class=tc-menu-inner>Courses</a></li>
                                            <li id=menu-item-19 class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default"><a href=http://wordpresslms.thimpress.com/demo-elearning-2/events class=tc-menu-inner>Events</a></li>
                                            <li id=menu-item-20 class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default"><a href=# class=tc-menu-inner>Gallery</a></li>
                                            <li id=menu-item-21 class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default"><a href=# class=tc-menu-inner>FAQs</a></li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                            <div class="footer-col footer-col6 col-xs-12 col-md-2">
                                <aside id=nav_menu-5 class="widget widget_nav_menu">
                                    <h3 class="widget-title">Support</h3>
                                    <div class=menu-support-container>
                                        <ul id=menu-support class=menu>
                                            <li id=menu-item-30 class="menu-item menu-item-type-custom menu-item-object-custom menu-item-30 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default"><a href=# class=tc-menu-inner>Documentation</a></li>
                                            <li id=menu-item-31 class="menu-item menu-item-type-custom menu-item-object-custom menu-item-31 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default"><a href=http://wordpresslms.thimpress.com/demo-elearning-2/forums class=tc-menu-inner>Forums</a></li>
                                            <li id=menu-item-32 class="menu-item menu-item-type-custom menu-item-object-custom menu-item-32 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default"><a href=# class=tc-menu-inner>Language Packs</a></li>
                                            <li id=menu-item-33 class="menu-item menu-item-type-custom menu-item-object-custom menu-item-33 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default"><a href=# class=tc-menu-inner>Release Status</a></li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                            <div class="footer-col footer-col6 col-xs-12 col-md-2">
                                <aside id=text-4 class="widget widget_text">
                                    <h3 class="widget-title">Mobile</h3>
                                    <div class=textwidget>
                                        <ul>
                                            <li>
                                                <a href=http://wordpresslms.thimpress.com/demo-elearning-2/#app-store><img alt width=132 height=47 data-src=http://wordpresslms.thimpress.com/wp-content/uploads/2017/06/layer-138.png class="alignnone wp-image-61 size-full lazyload"
                                                                                                                           src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><imgclass="alignnone wp-image-61 size-full" src=http://wordpresslms.thimpress.com/wp-content/uploads/2017/06/layer-138.png alt width=132 height=47></noscript></a>
                                            </li>
                                            <li>
                                                <a href=http://wordpresslms.thimpress.com/demo-elearning-2/#google-play><img alt width=132 height=47 data-src=http://wordpresslms.thimpress.com/wp-content/uploads/2017/06/layer-131.png class="alignnone wp-image-60 size-full lazyload"
                                                                                                                             src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><imgclass="alignnone wp-image-60 size-full" src=http://wordpresslms.thimpress.com/wp-content/uploads/2017/06/layer-131.png alt width=132 height=47></noscript></a>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="copyright-area no-footer-sticky ">
                    <div class=container>
                        <div class=copyright-content>
                            <div class=row>
                                <div class=col-sm-6>
                                    <div class=copyright-text>Course Builder 2019. Powered by <a href=http://thimpress.com>ThimPress.</a></div>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <ul id=copyright-menu class=list-inline>
                                        <li id=menu-item-16 class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default"><a href=# class=tc-menu-inner>Terms of Service</a></li>
                                        <li id=menu-item-17 class="menu-item menu-item-type-custom menu-item-object-custom menu-item-17 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default"><a href=# class=tc-menu-inner>Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <div id=back-to-top><i class="fa fa-angle-up" aria-hidden=true></i></div>
        <div id=tp_chameleon_list_google_fonts></div>
        <link rel=stylesheet id=js_composer_front-css href=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/js_composer/assets/css/js_composer.min.css
              type=text/css media=all>
        <script>
            var wpcf7 = {"apiSettings": {"root": "http:\/\/wordpresslms.thimpress.com\/demo-elearning-2\/wp-json\/contact-form-7\/v1", "namespace": "contact-form-7\/v1"}, "cached": "1"};
        </script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/contact-form-7/includes/js/scripts.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js></script>
        <script>
            var woocommerce_params = {"ajax_url": "\/demo-elearning-2\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/demo-elearning-2\/?wc-ajax=%%endpoint%%"};
        </script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js></script>
        <script>
            var wc_cart_fragments_params = {"ajax_url": "\/demo-elearning-2\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/demo-elearning-2\/?wc-ajax=%%endpoint%%", "cart_hash_key": "wc_cart_hash_bfb2715e9ccfc5f548a02cc77cf263ba", "fragment_name": "wc_fragments_bfb2715e9ccfc5f548a02cc77cf263ba", "request_timeout": "5000"};
        </script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-includes/js/jquery/ui/core.min.js></script>
        <script>
            var _wpUtilSettings = {"ajax": {"url": "\/demo-elearning-2\/wp-admin\/admin-ajax.php"}};
        </script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-includes/js/wp-util.min.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-includes/js/backbone.min.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/wp-events-manager/inc/libraries//countdown/js/jquery.plugin.min.js></script>
        <script>
            var WPEMS = {"gmt_offset": "7", "current_time": "Mar 7, 2020 02:33:00 +0000", "l18n": {"labels": ["Years", "Months", "Weeks", "Days", "Hours", "Minutes", "Seconds"], "labels1": ["Year", "Month", "Week", "Day", "Hour", "Minute", "Second"]}, "ajaxurl": "http:\/\/wordpresslms.thimpress.com\/demo-elearning-2\/wp-admin\/admin-ajax.php", "something_wrong": "Something went wrong", "register_button": "f198557462"};
        </script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/wp-events-manager/inc/libraries//countdown/js/jquery.countdown.min.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/wp-events-manager/assets//js/frontend/events.min.js></script>
        <script>
            var BP_Nouveau = {"ajaxurl": "http:\/\/wordpresslms.thimpress.com\/demo-elearning-2\/wp-admin\/admin-ajax.php", "confirm": "Are you sure?", "show_x_comments": "Show all %d comments", "unsaved_changes": "Your profile has unsaved changes. If you leave the page, the changes will be lost.", "object_nav_parent": "#buddypress", "objects": {"0": "activity", "1": "members", "4": "xprofile", "7": "settings", "8": "notifications"}, "nonces": {"activity": "65e2e5695a", "members": "3144cc3ce8", "xprofile": "5bc0f064d8", "settings": "52c3625a4d", "notifications": "b8e21f0009"}};
        </script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/buddypress/bp-templates/bp-nouveau/js/buddypress-nouveau.min.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-includes/js/comment-reply.min.js></script>
        <script>
            window.lazySizesConfig = window.lazySizesConfig || {};window.lazySizesConfig.lazyClass = 'lazyload';window.lazySizesConfig.loadingClass = 'lazyloading';window.lazySizesConfig.loadedClass = 'lazyloaded';
            lazySizesConfig.loadMode = 1;
        </script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/wp-smushit/app/assets/js/smush-lazy-load.min.js></script>
        <script>
            lazySizes.init();
        </script>
        <script>
            var learn_press_course_review = {"localize": {"empty_title": "Please enter the review title", "empty_content": "Please enter the review content", "empty_rating": "Please select your rating"}};
        </script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/learnpress-course-review/assets/js/course-review.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/themes/wordpress-lms/assets/js/libs/owl.carousel.min.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/thim-course-builder/brands/assets/js/brands-custom.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/thim-course-builder/google-map/assets/js/google-map-custom.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/themes/wordpress-lms/assets/js/libs/circle-progress.min.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/thim-course-builder/skills-bar/assets/js/skills-bar-custom.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/thim-course-builder/count-down/assets/js/libs/jquery.countdown.min.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/thim-course-builder/count-down/assets/js/count-down.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/thim-course-builder/scroll-heading/assets/js/scroll-heading.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/thim-course-builder/testimonials/assets/js/testimonials.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/themes/wordpress-lms/assets/js/libs/jquery.waypoints.min.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/thim-course-builder/counter-box/assets/js/counter-box.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/thim-course-builder/video-box/assets/js/video-box-custom.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/thim-course-builder/photo-wall/assets/js/photo-wall.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/thim-course-builder/gallery-carousel/assets/js/gallery-carousel-custom.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/thim-course-builder/pricing/assets/js/pricing-custom.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.min.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/themes/wordpress-lms/assets/js/libs/jquery.magnific-popup.min.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/thim-course-builder/gallery/assets/js/gallery-custom.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/thim-course-builder/posts/assets/js/post-custom.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/thim-course-builder/courses-carousel/assets/js/courses-carousel-custom.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/thim-course-builder/course-search/assets/js/course-search.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/thim-course-builder/courses-block-1/assets/js/courses-block-1-custom.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/thim-course-builder/courses-block-3/assets/js/courses-block-3-custom.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/thim-course-builder/courses-block-4/assets/js/course-block-4-custom.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/thim-course-builder/instructors/assets/js/instructors-custom.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/thim-course-builder/events/assets/js/events-custom.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/themes/wordpress-lms/assets/js/libs/sly.min.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/thim-course-builder/courses-collection/assets/js/courses-collection-custom.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/thim-course-builder/portfolio/assets/js/jquery.appear.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/thim-course-builder/portfolio/assets/js/portfolio.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/themes/wordpress-lms/assets/js/libs/1_tether.min.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/themes/wordpress-lms/assets/js/libs/change-layout.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/themes/wordpress-lms/assets/js/libs/jquery.cookie.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/js_composer/assets/lib/bower/flexslider/jquery.flexslider-min.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/themes/wordpress-lms/assets/js/libs/jquery.thim-content-slider.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/themes/wordpress-lms/assets/js/libs/theia-sticky-sidebar.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/themes/wordpress-lms/assets/js/libs/toggle-tabs.js></script>
        <script>
            var thim_loadmore_params = {"ajaxurl": "http:\/\/wordpresslms.thimpress.com\/demo-elearning-2\/wp-admin\/admin-ajax.php", "posts": "a:65:{s:4:\"page\";i:0;s:9:\"lp_course\";s:33:\"aws-certified-solutions-architect\";s:9:\"post_type\";s:9:\"lp_course\";s:4:\"name\";s:33:\"aws-certified-solutions-architect\";s:5:\"error\";s:0:\"\";s:1:\"m\";s:0:\"\";s:1:\"p\";i:0;s:11:\"post_parent\";s:0:\"\";s:7:\"subpost\";s:0:\"\";s:10:\"subpost_id\";s:0:\"\";s:10:\"attachment\";s:0:\"\";s:13:\"attachment_id\";i:0;s:8:\"pagename\";s:0:\"\";s:7:\"page_id\";i:0;s:6:\"second\";s:0:\"\";s:6:\"minute\";s:0:\"\";s:4:\"hour\";s:0:\"\";s:3:\"day\";i:0;s:8:\"monthnum\";i:0;s:4:\"year\";i:0;s:1:\"w\";i:0;s:13:\"category_name\";s:0:\"\";s:3:\"tag\";s:0:\"\";s:3:\"cat\";s:0:\"\";s:6:\"tag_id\";s:0:\"\";s:6:\"author\";s:0:\"\";s:11:\"author_name\";s:0:\"\";s:4:\"feed\";s:0:\"\";s:2:\"tb\";s:0:\"\";s:5:\"paged\";i:0;s:8:\"meta_key\";s:0:\"\";s:10:\"meta_value\";s:0:\"\";s:7:\"preview\";s:0:\"\";s:1:\"s\";s:0:\"\";s:8:\"sentence\";s:0:\"\";s:5:\"title\";s:0:\"\";s:6:\"fields\";s:0:\"\";s:10:\"menu_order\";s:0:\"\";s:5:\"embed\";s:0:\"\";s:12:\"category__in\";a:0:{}s:16:\"category__not_in\";a:0:{}s:13:\"category__and\";a:0:{}s:8:\"post__in\";a:0:{}s:12:\"post__not_in\";a:0:{}s:13:\"post_name__in\";a:0:{}s:7:\"tag__in\";a:0:{}s:11:\"tag__not_in\";a:0:{}s:8:\"tag__and\";a:0:{}s:12:\"tag_slug__in\";a:0:{}s:13:\"tag_slug__and\";a:0:{}s:15:\"post_parent__in\";a:0:{}s:19:\"post_parent__not_in\";a:0:{}s:10:\"author__in\";a:0:{}s:14:\"author__not_in\";a:0:{}s:19:\"ignore_sticky_posts\";b:0;s:16:\"suppress_filters\";b:0;s:13:\"cache_results\";b:1;s:22:\"update_post_term_cache\";b:1;s:19:\"lazy_load_term_meta\";b:1;s:22:\"update_post_meta_cache\";b:1;s:14:\"posts_per_page\";i:9;s:8:\"nopaging\";b:0;s:17:\"comments_per_page\";s:2:\"50\";s:13:\"no_found_rows\";b:0;s:5:\"order\";s:4:\"DESC\";}", "current_page": "1", "max_page": "0"};
        </script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/themes/wordpress-lms/assets/js/libs/thim-loadmore.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-includes/js/imagesloaded.min.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/themes/wordpress-lms/assets/js/main.min.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/themes/wordpress-lms/assets/js/libs/smoothscroll.min.js></script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-includes/js/wp-embed.min.js></script>
        <script src=https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js></script>
        <script>
            WebFont.load({google: {families: ['Roboto:300,400']}});
        </script>
        <script src=http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js></script>
        <script data-cfasync=true>
            (function ($) {
                "use strict";
                $(document).on('click touch', 'body:not(".logged-in") .enroll-course .button-enroll-course, body:not(".logged-in") form.purchase-course:not(".guest_checkout") .button', function (e) {
                    e.preventDefault();if ($('body').hasClass('lp_login_popup')) {
                        $('.thim-login-popup .login').trigger('click');
                    } else {
                        window.location.href = $(this).parent().find('input[name=redirect_to]').val();
                    }
                });
            })(jQuery);
        </script>
        <div class=tp_chameleon_overlay>
            <div class=tp_chameleon_progress>
                <div class=tp_chameleon_heading>Processing!</div>
            </div>
        </div>
        <script>
            var tp_chameleon_url_stylesh
            eet = 'http://c2a2v9c8.stackpathcdn.com/demo-elearning-2/wp-content/themes/wordpress-lms/style.css';
            var tp_chameleon_ur
            l_admin_ajax = 'http://wordpresslms.thimpress.com/demo-elearning-2/wp-admin/admin-ajax.php';var tp_chameleon_wp_nonce = '0834340de0';var tp_chameleon_primary_color = 'rgb(0, 0, 0)';var tp_chameleon_selector_wrapper_box = '.content-pusher';var tp_chameleon_class_boxed = 'boxed-area';
            var tp_cha
            meleon_src_patterns = 'http://wordpresslms.thimpress.com/demo-elearning-2/wp-content/plugins/tp-chameleon/images/patterns/';
            v
            ar tp_chameleon_setting = {layout:tp_chameleon_getCookie('tp_chameleon_layout'), p attern_type:tp_chameleon_getCookie('tp_chameleon_pattern_type'), p attern_src:tp_chameleon_getCookie('tp_chameleon_pattern_src'), p rimary_color:tp_chameleon_getCookie('tp_chameleon_primary_color'), p rimary_color_rgb: tp_chameleon_getCookie('tp_chameleon_primary_color_rgb'),  body_font: tp_chameleon_getCookie('tp_chameleon_body_font'),  body_font_code: tp_chameleon_getCookie('tp_chameleon_body_font_code'),  heading_font: tp_chameleon_getCookie('tp_chameleon_heading_font'),  heading_font_code: tp_chameleon_getCookie('tp_chameleon_heading_font_code')}; < !---- > //if (top !== self) top.location.replace(self.location.href);//var tp_chameleon_site_url = '//wordpresslms.thimpress.com/demo-elearning-2';function tp_chameleon_setCookie(cname, cvalue, exdays) {var d = new Date();d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));var expires = "expires=" + d.toUTCString();document.cookie = cname + "=" + cvalue + "; " + expires;}function tp_chameleon_deleteCookie(cname) {var d = new Date();d.setTime(d.getTime() + (24 * 60 * 60 * 1000));var expires = "expires=" + d.toUTCString();document.cookie = cname + "=; " + expires;}function tp_chameleon_deleteAllCookie() {var all_cookie = ['tp_chameleon_layout','tp_chameleon_pattern_type','tp_chameleon_pattern_src','tp_chameleon_primary_color','tp_chameleon_primary_color_rgb','tp_chameleon_body_font','tp_chameleon_body_font_code','tp_chameleon_heading_font','tp_chameleon_heading_font_code'];for (var i = 0; i < all_cookie.length; i++) {tp_chameleon_deleteCookie(all_cookie[i]);}}function tp_chameleon_getCookie(cname) {var name = cname + "=";var ca = document.cookie.split(';');for (var i = 0; i < ca.length; i++) {var c = ca[i];while (c.charAt(0) == ' ') c = c.substring(1);if (c.indexOf(name) == 0) return c.substring(name.length, c.length);}return '';}function tp_chameleon_set_first_visit() {tp_chameleon_setCookie('tp_chameleon_first_visit', 1, 1);}function tp_chameleon_check_first_visit() {return !(tp_chameleon_getCookie('tp_chameleon_first_visit') == '1' );}jQuery(document).ready(function ($) {var $preview = $('.tp-preview-images');$('.tp_demo').hover(function (event) {var url_prewview = $(this).attr('data-preview');if (url_prewview) {$preview.find('img').attr('src', url_prewview);$preview.show();}},function () {$preview.hide();});$('.tp_demo').mousemove(function (event) {var y = (event.clientY);$preview.css('top', y - 250);});function tp_chameleon_open() {tp_chameleon_set_first_visit();$('#tp_style_selector').addClass('show').animate({right: '0px'}, 'medium');$('#tp_style_selector .open').hide();$('#tp_style_selector .close').show();}function tp_chameleon_close() {$('#tp_style_selector').removeClass('show').animate({right: '-300px'}, 'medium');$('#tp_style_selector .close').hide();$('#tp_style_selector .open').show();}function tp_change_background_pattern(url_pattern) {var $body = $('body');$body.removeClass('tp_background_image');$body.addClass('tp_background_pattern');$body.css('background-image', 'url("' + url_pattern + '")')}function tp_change_background_image(url_image) {var $body = $('body');$body.removeClass('tp_background_pattern');$body.addClass('tp_background_image');$body.css('background-image', 'url("' + url_image + '")')}function tp_chameleon_change_layout_wide() {tp_chameleon_setCookie('tp_chameleon_layout', 'wide', 1);var $body = $('body');$('.tp-change-layout').removeClass('active');$('.tp-change-layout.layout-wide').addClass('active');$('#tp_style_selector .boxed-mode').slideUp(300);$(tp_chameleon_selector_wrapper_box).removeClass(tp_chameleon_class_boxed);$body.css('background-image', 'none');}function tp_chameleon_change_layout_boxed() {tp_chameleon_setCookie('tp_chameleon_layout', 'boxed', 1);$('.tp-change-layout').removeClass('active');$('.tp-change-layout.layout-boxed').addClass('active');$('#tp_style_selector .boxed-mode').slideDown(300);$(tp_chameleon_selector_wrapper_box).addClass(tp_chameleon_class_boxed);}function tp_chameleon_change_background_pattern(pattern_src) {tp_chameleon_setCookie('tp_chameleon_pattern_src', pattern_src, 1);tp_chameleon_setCookie('tp_chameleon_pattern_type', 'pattern', 1);var pattern_url = tp_chameleon_src_patterns + pattern_src;tp_change_background_pattern(pattern_url);}function tp_chameleon_change_background_image(pattern_src) {tp_chameleon_setCookie('tp_chameleon_pattern_src', pattern_src, 1);tp_chameleon_setCookie('tp_chameleon_pattern_type', 'image', 1);var pattern_url = tp_chameleon_src_patterns + pattern_src;tp_change_background_image(pattern_url);}var $body_font = '<style id=tp_chameleon_body_font></style>';var $heading_font = '<style id=tp_chameleon_heading_font></style>';var $stylesheet = '<link id=tp_chameleon_stylesheet type=text/css rel=stylesheet>';var $tp_head = $('head');$tp_head.append($stylesheet);var $tp_body = $('body');$tp_body.append($body_font);$tp_body.append($heading_font);if (tp_chameleon_setting.layout == 'wide') {tp_chameleon_change_layout_wide();}if (tp_chameleon_setting.layout == 'boxed') {tp_chameleon_change_layout_boxed();if (tp_chameleon_setting.pattern_type == 'pattern' && tp_chameleon_setting.pattern_src != '') {tp_chameleon_change_background_pattern(tp_chameleon_setting.pattern_src);$('.tp_pattern[data-src="' + tp_chameleon_setting.pattern_src + '"]').addClass('active');}if (tp_chameleon_setting.pattern_type == 'image' && tp_chameleon_setting.pattern_src != '') {tp_chameleon_change_background_image(tp_chameleon_setting.pattern_src);$('.tp_image[data-src="' + tp_chameleon_setting.pattern_src + '"]').addClass('active');}}$('.tp-chameleon-clear').click(function (event) {event.preventDefault();tp_chameleon_deleteAllCookie();document.location.reload();});$('.tp-btn.tp-change-layout').click(function (event) {event.preventDefault();if ($(this).hasClass('layout-wide')) {tp_chameleon_change_layout_wide();} else {tp_chameleon_change_layout_boxed();}});$('.tp_pattern').click(function (event) {event.preventDefault();$('.tp_pattern').removeClass('active');$('.tp_image').removeClass('active');$(this).addClass('active');var pattern_src = $(this).attr('data-src');tp_chameleon_change_background_pattern(pattern_src);});$('.tp_image').click(function (event) {event.preventDefault();$('.tp_pattern').removeClass('active');$('.tp_image').removeClass('active');$(this).addClass('active');var pattern_src = $(this).attr('data-src');tp_chameleon_change_background_image(pattern_src);});/** * Open/Close box */$('#tp_style_selector .close').click(function (e) {e.preventDefault();tp_chameleon_close();});$('#tp_style_selector .open').click(function (e) {e.preventDefault();tp_chameleon_open();});$(window).load(function () {var $btn = $('.tp-chameleon-btn-buy');$btn.animate({bottom: $btn.attr('data-bottom')}, 500);//Set view-more-slider button$('.view-more-slider .text:last-child').hide();setInterval(function () {$('.view-more-slider .text:first-child').hide();$('.view-more-slider .text:last-child').show();setTimeout(function () {$('.view-more-slider .text:first-child').show();$('.view-more-slider .text:last-child').hide();}, 2000);}, 4500);});/** * Check firt visit */if (tp_chameleon_check_first_visit()) {setTimeout(tp_chameleon_open, 5000);} else {$('#tp_style_selector').click(function (event) {tp_chameleon_set_first_visit();});}//remove iframe// if ( (!$('body').hasClass('logged-in')) && (!$('body').hasClass('lp-learning'))) {// if (top !== self) {// top.location.replace(self.location.href);// }// } });
        </script>
    </body>

</html>