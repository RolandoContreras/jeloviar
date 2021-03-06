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
                                                <a href="<?php echo site_url() . 'iniciar-sesion'; ?>">Iniciar Sesión</a> 
                                            </li>
                                            <li class="stm_lms_badge_menu menu-item menu-item-type-custom menu-item-object-custom menu-item-3363">
                                                <a href="<?php echo site_url() . 'registro'; ?>">Registro</a> 
                                            </li>
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
                            <a href="<?php echo site_url() . 'backoffice'; ?>"> 
                                <img class="img-responsive logo_transparent_static visible logo" src="<?php echo site_url() . 'assets/page_front/images/logo/logo.png'; ?>" alt="Jeloviar Logo" /> 
                            </a>              
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
                                            <a href="<?php echo site_url() . 'backoffice'; ?>" class="stm_lms_logout">Inicio</a>                      
                                        </li>
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