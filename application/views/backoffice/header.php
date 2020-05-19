<div id="header" class="transparent_header_off" data-color="">
    <div class="header_default header_2">
        <div class="header_top_bar header_2_top_bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header_2_top_bar__inner">
                            <div class="top_bar_right_part">
                                <div class="stm_menu_toggler" data-text="Menu"></div>
                                <div class="header_main_menu_wrapper clearfix" style="margin-top:5px;">
                                    <div class="pull-right hidden-xs right_buttons">
                                        <div class="search-toggler-unit">
                                            <div class="search-toggler" data-toggle="modal" data-target="#searchModal"><i class="fa fa-search"></i> </div>
                                        </div>
                                        <div class="pull-right">
                                            <div class="header_top_bar_socs">
                                                <ul class="clearfix">
                                                    <li><a href='#'><i class='fab fa-twitter'></i></a></li>
                                                    <li><a href='#'><i class='fab fa-instagram'></i></a></li>
                                                    <li><a href='#'><i class='fab fa-facebook'></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="collapse navbar-collapse pull-right">
                                        <ul class="header-menu clearfix">
                                            <li id="menu-item-5" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2 current_page_item menu-item-5">
                                                <a href="<?php echo site_url() . 'cursos'; ?>" aria-current="page">Cursos</a> </li>
                                            <li id="menu-item-3363" class="stm_lms_badge_menu menu-item menu-item-type-custom menu-item-object-custom menu-item-3363">
                                                <a title="Nuevo" href="<?php echo site_url() . 'zoom'; ?>">Zoom</a> </li>
                                            <li class="stm_lms_badge_menu menu-item menu-item-type-custom menu-item-object-custom menu-item-3363">
                                                <a href="<?php echo site_url() . 'nosotros'; ?>">Nosotros</a> </li>
                                            <li class="stm_lms_badge_menu menu-item menu-item-type-custom menu-item-object-custom menu-item-3363">
                                                <a href="<?php echo site_url() . 'contacto'; ?>">Contacto</a> </li>
                                            <li class="stm_lms_badge_menu menu-item menu-item-type-custom menu-item-object-custom menu-item-3363">
                                                <a href="<?php echo site_url() . 'iniciar-sesion'; ?>">Iniciar Sesión / Registro</a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <div class="header_top_bar_socs">
                                        <ul class="clearfix">
                                            <li><a href='#'><i class='fab fa-twitter'></i></a></li>
                                            <li><a href='#'><i class='fab fa-instagram'></i></a></li>
                                            <li><a href='#'><i class='fab fa-facebook'></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="header_top">
                        <div class="logo-unit"> 
                            <a href="<?php echo site_url() . 'backoffice'; ?>"> <img class="img-responsive logo_transparent_static visible logo" src="<?php echo site_url() . 'assets/page_front/images/logo/logo.png'; ?>" alt="Edukate Pro Logo" /> </a>              
                        </div>
                        <div class="center-unit">
                            <div class="stm_courses_search">
                                <div class="stm_lms_categories"><i class="stmlms-hamburger"></i><span class="heading_font">Categorías</span>
                                    <div class="stm_lms_categories_dropdown">
                                        <div class="stm_lms_categories_dropdown__parents">
                                            <?php foreach ($obj_category as $value) { ?>
                                                <div class="stm_lms_categories_dropdown__parent"> <a href="<?php echo site_url() . "cursos/$value->slug"; ?>" class="sbc_h"><?php echo $value->name; ?></a> </div>
                                            <?php } ?> </div>
                                    </div>
                                </div>
                                <script>
                                    var stm_lms_search_value = '';
                                </script>
                                <div class="stm_lms_courses_search vue_is_disabled" id="stm_lms_courses_search" v-bind:class="{'is_vue_loaded' : vue_loaded}">
                                    <form method="get" action="<?php echo site_url() . 'cursos' ?>">
                                        <input type="text"  name="search" placeholder="Buscar Curso">
                                        <button type="submit" class="stm_lms_courses_search__button sbc style_search">
                                            <i class="lnr lnr-magnifier"></i> 
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="right-unit">
                            <div class="stm_lms_account_dropdown">
                                <div class="dropdown">
                                    <div class="stm-lms-user_message_btn__counter"> 1 </div> 
                                    <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                                        <i class="lnr lnr-user"></i> <span class="login_name">Hola, <?php echo corta_texto($_SESSION['customer']['name'], 4); ?></span> <span class="caret"></span> 
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                                        <li> 
                                            <a href="<?php echo site_url() . 'salir'; ?>" class="stm_lms_logout">Salir</a>                      
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="stm_lms_settings_button">
                                <a href="<?php echo site_url() . 'backoffice'; ?>#settings"><i class="lnr lnr-cog"></i></a>
                            </div>
                        </div>
                        <div class="stm_header_top_search sbc"> <i class="lnr lnr-magnifier"></i> </div>    
                        <div class="stm_header_top_toggler mbc"> <i class="lnr lnr-user"></i> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="stm_lms_account_popup">
            <div class="stm_lms_account_popup__close"> <i class="lnr lnr-cross"></i> </div>
            <div class="inner">
                <div class="stm_lms_account_popup__user"> 
                    <img alt='' src='https://secure.gravatar.com/avatar/37fad8114a5e0bfca061260e332d2db2?s=215&d=mm&r=g' srcset='https://secure.gravatar.com/avatar/37fad8114a5e0bfca061260e332d2db2?s=430&d=mm&r=g 2x' class='avatar avatar-215 photo' height='215' width='215' />
                    <div class="stm_lms_account_popup__user_info">
                        <h4><?php echo $_SESSION['customer']['name'];?></h4> 
                    </div>
                </div>
                <div class="stm_lms_account_popup__list heading_font"> 
                    <a class="stm_lms_account_popup__list_single" href="https://stylemixthemes.com/masterstudy/white-lms/courses/"> Mis Cursos </a> 
                    <a class="stm_lms_account_popup__list_single" href="https://stylemixthemes.com/masterstudy/white-lms/lms-checkout"> Checkout </a> 
                    <a class="stm_lms_account_popup__list_single has_number" href="https://stylemixthemes.com/masterstudy/white-lms/lms-chats"> Mensajes <span class="sbc">1</span> </a>
                    <a class="stm_lms_account_popup__list_single" href="<?php echo site_url().'backoffice/#settings';?>"> Settings </a> 
                    <a class="stm_lms_account_popup__list_single" href="<?php echo site_url() . 'salir'; ?>"> Salir </a>      
                </div>
            </div>
        </div>
        <div class="stm_lms_search_popup">
            <div class="stm_lms_search_popup__close"> <i class="lnr lnr-cross"></i> </div>
            <div class="inner">
                <h2>Search</h2>
                <div class="header_top">
                    <div class="stm_courses_search">
                        <div class="stm_lms_categories"><i class="stmlms-hamburger"></i><span class="heading_font">Category</span>
                            <div class="stm_lms_categories_dropdown">
                                <div class="stm_lms_categories_dropdown__parents">
                                    <div class="stm_lms_categories_dropdown__parent"> <a href="https://stylemixthemes.com/masterstudy/white-lms/course/art/" class="sbc_h"> Art </a>
                                        <div class="stm_lms_categories_dropdown__childs">
                                            <div class="stm_lms_categories_dropdown__child"> <a href="https://stylemixthemes.com/masterstudy/white-lms/course/artism/"> Artism </a> </div>
                                            <div class="stm_lms_categories_dropdown__child">
                                                <a href="https://stylemixthemes.com/masterstudy/white-lms/course/conceptual-art/"> Conceptual Art </a> </div>
                                            <div class="stm_lms_categories_dropdown__child">
                                                <a href="https://stylemixthemes.com/masterstudy/white-lms/course/minimalism/"> Minimalism </a> </div>
                                            <div class="stm_lms_categories_dropdown__child">
                                                <a href="https://stylemixthemes.com/masterstudy/white-lms/course/photography/"> Photography </a> </div>
                                            <div class="stm_lms_categories_dropdown__child">
                                                <a href="https://stylemixthemes.com/masterstudy/white-lms/course/pictures/"> Pictures </a> </div>
                                            <div class="stm_lms_categories_dropdown__child">
                                                <a href="https://stylemixthemes.com/masterstudy/white-lms/course/post-impressionism/"> Post-Impressionism </a> </div>
                                            <div class="stm_lms_categories_dropdown__child">
                                                <a href="https://stylemixthemes.com/masterstudy/white-lms/course/sculpting/"> Sculpting </a> </div>
                                            <div class="stm_lms_categories_dropdown__child">
                                                <a href="https://stylemixthemes.com/masterstudy/white-lms/course/textile-art/"> Textile Art </a> </div>
                                            <div class="stm_lms_categories_dropdown__child">
                                                <a href="https://stylemixthemes.com/masterstudy/white-lms/course/theatre/"> Theatre </a> </div>
                                            <div class="stm_lms_categories_dropdown__child">
                                                <a href="https://stylemixthemes.com/masterstudy/white-lms/course/video-art/"> Video Art </a> </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <script>
                            var stm_lms_search_value = '';
                        </script>
                        <div class="stm_lms_courses_search vue_is_disabled" id="stm_lms_courses_search" v-bind:class="{'is_vue_loaded' : vue_loaded}"> {{ search }}
                            <a v-bind:href="'https://stylemixthemes.com/masterstudy/white-lms/courses/?search=' + url" class="stm_lms_courses_search__button sbc">
                                <i class="lnr lnr-magnifier"></i> </a>
                            <autocomplete name="search" placeholder="Search courses" url="https://stylemixthemes.com/masterstudy/white-lms/wp-json/stm-lms/v1/courses"
                                          param="search" anchor="value" label="label" :on-select="searchCourse" :on-input="searching" :on-ajax-loaded="loaded" :debounce="1000" model="search">
                            </autocomplete>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="stm_lms_menu_popup">
            <div class="stm_lms_menu_popup__close"> <i class="lnr lnr-cross"></i> </div>
            <div class="inner">
                <h2>Menu</h2>
                <div class="stm_menu_toggler" data-text="Menu"></div>
                <div class="header_main_menu_wrapper clearfix" style="margin-top:5px;">
                    <div class="pull-right hidden-xs right_buttons">
                        <div class="search-toggler-unit">
                            <div class="search-toggler" data-toggle="modal" data-target="#searchModal"><i class="fa fa-search"></i> </div>
                        </div>
                        <div class="pull-right">
                            <div class="header_top_bar_socs">
                                <ul class="clearfix">
                                    <li><a href='#'><i class='fab fa-twitter'></i></a></li>
                                    <li><a href='#'><i class='fab fa-instagram'></i></a></li>
                                    <li><a href='#'><i class='fab fa-facebook'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse pull-right">
                        <ul class="header-menu clearfix">
                            <li id="menu-item-5" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2 current_page_item menu-item-5">
                                <a href="<?php echo site_url() . 'cursos'; ?>" aria-current="page">Cursos</a> </li>
                            <li id="menu-item-3363" class="stm_lms_badge_menu menu-item menu-item-type-custom menu-item-object-custom menu-item-3363">
                                <a title="Nuevo" href="<?php echo site_url() . 'zoom'; ?>">Zoom</a> </li>
                            <li class="stm_lms_badge_menu menu-item menu-item-type-custom menu-item-object-custom menu-item-3363">
                                <a href="<?php echo site_url() . 'nosotros'; ?>">Nosotros</a> </li>
                            <li class="stm_lms_badge_menu menu-item menu-item-type-custom menu-item-object-custom menu-item-3363">
                                <a href="<?php echo site_url() . 'contacto'; ?>">Contacto</a> </li>
                            <li class="stm_lms_badge_menu menu-item menu-item-type-custom menu-item-object-custom menu-item-3363">
                                <a href="<?php echo site_url() . 'iniciar-sesion'; ?>">Iniciar Sesión / Registro</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>