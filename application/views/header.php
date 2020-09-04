<?php
$url = explode("/", uri_string());

if (isset($url[0])) {
    $nav = $url[0];
} else {
    $nav = "";
}

$inicio_syle = "";
$cursos_syle = "";
$iniciar_sesion_syle = "";
$registro_syle = "";
$contacto_syle = "";
switch ($nav) {
    case "cursos":
        $cursos_syle = "active_nav";
        break;
    case "iniciar-sesion":
        $iniciar_sesion_syle = "active_nav";
        break;
    case "registro":
        $registro_syle = "active_nav";
        break;
    case "contacto":
        $contacto_syle = "active_nav";
        break;
    default:
        $inicio_syle = "active_nav";
        break;
}
?>
<div id="header" class="transparent_header_off">
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
                                            <div class="search-toggler" data-toggle="modal" data-target="#searchModal"><i class="fa fa-search"></i></div>
                                        </div>
                                        <div class="pull-right">
                                            <div class="header_top_bar_socs">
                                                <ul class="clearfix">
                                                    <li><a href='https://instagram.com/jeloviar.online' target="_blank"><i class='fab fa-instagram'></i></a></li>
                                                    <li><a href='https://www.facebook.com/jeloviar.online/' target="_blank"><i class='fab fa-facebook'></i></a></li>
                                                    <li><a href='https://www.youtube.com/jeloviaronline/?sub_confirmation=1' target="_blank"><i class='fab fa-youtube'></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="collapse navbar-collapse pull-right">
                                        <ul class="header-menu clearfix">
                                            <li class="menu-item">
                                                <a href="<?php echo site_url(); ?>" class="<?php echo $inicio_syle; ?>">Inicio</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="<?php echo site_url() . 'cursos'; ?>" class="<?php echo $cursos_syle; ?>">Cursos</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="<?php echo site_url() . 'iniciar-sesion'; ?>" class="<?php echo $iniciar_sesion_syle; ?>">Iniciar Sesión</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="<?php echo site_url() . 'registro'; ?>" class="<?php echo $registro_syle; ?>">Registro</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="<?php echo site_url() . 'contacto'; ?>" class="<?php echo $contacto_syle; ?>">Contacto</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pull-right">
                                    <div class="header_top_bar_socs">
                                        <ul class="clearfix">
                                            <?php if (!empty($this->cart->contents())) { ?>
                                                <li>
                                                    <a href="<?php echo site_url() . 'backoffice/pay_order'; ?>" class="shopping_nav"><i class="fas fa-shopping-bag" aria-hidden="true"></i></a>
                                                </li>
                                            <?php } ?>
                                            <li><a href='https://instagram.com/jeloviar.online' target="_blank"><i class='fab fa-instagram'></i></a></li>
                                            <li><a href='https://www.facebook.com/jeloviar.online/' target="_blank"><i class='fab fa-facebook'></i></a></li>
                                            <li><a href='https://www.youtube.com/jeloviaronline/?sub_confirmation=1' target="_blank"><i class='fab fa-youtube'></i></a></li>
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
                            <a href="<?php echo site_url(); ?>"> 
                                <img class="img-responsive logo_transparent_static visible logo" src="<?php echo site_url() . 'assets/page_front/images/logo/logo.png'; ?>" alt="Jeloviar Logo"/> 
                            </a>
                        </div>
                        <div class="center-unit">
                            <div class="stm_courses_search">
                                <div class="stm_lms_categories"> <i class="stmlms-hamburger"></i> <span class="heading_font">Categorías</span>
                                    <div class="stm_lms_categories_dropdown">
                                        <div class="stm_lms_categories_dropdown__parents">
                                            <?php foreach ($obj_category as $value) { ?>
                                                <div class="stm_lms_categories_dropdown__parent"> 
                                                    <a href="<?php echo site_url() . "cursos/$value->slug"; ?>" class="sbc_h"><?php echo $value->name; ?></a>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="stm_lms_courses_search" id="stm_lms_courses_search" v-bind:class="{'is_vue_loaded' : vue_loaded}">
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
                            <?php if (isset($_SESSION['customer'])) { ?>
                                <div class="stm_lms_account_dropdown">
                                    <div class="dropdown">
                                        <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                                            <i class="lnr lnr-user"></i> <span class="login_name">Hola, <?php echo corta_texto($_SESSION['customer']['name'], 4); ?></span> <span class="caret"></span> 
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li> 
                                                <a href="<?php echo site_url() . 'backoffice'; ?>">Mi Cuenta</a>                      
                                                <a href="<?php echo site_url() . 'salir'; ?>">Salir</a>                      
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="stm_lms_settings_button">
                                    <a href="<?php echo site_url() . 'backoffice/' ?>#settings"><i class="lnr lnr-cog"></i></a>
                                </div>
                            <?php } else { ?>
                                <a href="<?php echo site_url() . 'iniciar-sesion' ?>" class="btn btn-default" data-text="Iniciar Sesión"> <span>Iniciar Sesión</span> </a>
                                <div class="stm_lms_wishlist_button">
                                    <a href="#" data-text="Favorites"> <i class="lnr lnr-bookmark "></i> </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="stm_lms_menu_popup">
            <div class="stm_lms_menu_popup__close"> <i class="lnr lnr-cross"></i></div>
            <div class="inner">
                <h2>Menu</h2>
                <div class="stm_menu_toggler" data-text="Menu"></div>
                <div class="header_main_menu_wrapper clearfix" style="margin-top:5px;">
                    <div class="pull-right hidden-xs right_buttons">
                        <div class="stm_lms_wishlist_button">
                            <a href="#" data-text="Favorites"> <i class="far fa-bookmark mtc_h"></i> </a>
                        </div>
                        <div class="pull-right">
                            <div class="header_top_bar_socs">
                                <ul class="clearfix">
                                    <li><a href='https://instagram.com/jeloviar.online' target="_blank"><i class='fab fa-instagram'></i></a></li>
                                    <li><a href='https://www.facebook.com/jeloviar.online/' target="_blank"><i class='fab fa-facebook'></i></a></li>
                                    <li><a href='https://www.youtube.com/jeloviaronline/?sub_confirmation=1' target="_blank"><i class='fab fa-youtube'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse pull-right">
                        <ul class="header-menu clearfix">
                            <li class="menu-item">
                                <a href="<?php echo site_url(); ?>" class="<?php echo $inicio_syle; ?>">Inicio</a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo site_url() . 'cursos'; ?>" class="<?php echo $cursos_syle; ?>">Cursos</a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo site_url() . 'iniciar-sesion'; ?>" class="<?php echo $iniciar_sesion_syle; ?>">Iniciar Sesión</a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo site_url() . 'registro'; ?>" class="<?php echo $registro_syle; ?>">Registro</a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo site_url() . 'contacto'; ?>" class="<?php echo $contacto_syle; ?>">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>