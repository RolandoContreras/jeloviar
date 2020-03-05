<header id=masthead class="site-header affix-top template-layout-2 sticky-header has-retina-logo has-retina-logo-sticky palette-custom header-overlay custom-sticky">
    <div id=thim-header-topbar>
        <div class=container>
            <div id=thim_layout_builder-8 class="widget widget_thim_layout_builder">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-7">
                        <div class=vc_column-inner>
                            <div class=wpb_wrapper>
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class=wpb_wrapper>
                                        <ul class=list-inline>
                                            <li class=list-inline-item>¿Alguna pregunta?</li>
                                            <li class=list-inline-item><a><ion-icon name="call-outline"></ion-icon> (00) 123 456 789</a></li>
                                            <li class=list-inline-item><a><ion-icon name="mail-unread-outline"></ion-icon> <span class="">contacto@jeloviar.online</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pull-right wpb_column vc_column_container vc_col-sm-5">
                        <div class=vc_column-inner>
                            <div class=wpb_wrapper>
                                <div class="thim-sc-login ">
                                    <div class="widget widget_thim-login">
                                        <div class="thim-link-login thim-login-popup">
                                            <a class=register href="#">Registro</a><span class=slash>/</span><a href="#" class=login>Login</a>
                                        </div>
                                        <div id=thim-popup-login>
                                            <div class=thim-login-container>
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
                                </div>
                                <div class="thim-sc-course-search ">
                                    <form role=search method=get action="#">
                                        <input type=text value name=s placeholder="¿Qué quieres aprender hoy?" class="form-control courses-search-input" autocomplete="off">
                                        <button type="submit"><ion-icon name="search-outline"></ion-icon></button>
                                        <div class=thim-loading-icon>
                                            <div class=sk-three-bounce>
                                                <div class="sk-child sk-bounce1"></div>
                                                <div class="sk-child sk-bounce2"></div>
                                                <div class="sk-child sk-bounce3"></div>
                                            </div>
                                        </div><span class=widget-search-close></span></form>
                                    <ul class="courses-list-search list-unstyled"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id=woocommerce_widget_cart-3 class="widget woocommerce widget_shopping_cart">
                <div class=minicart_hover id=header-mini-cart>
                    <span class=cart-items-number><span class=text>My Cart</span> 
                        <ion-icon name="cart-outline"></ion-icon>
                        <span class="wrapper-items-number"><span class=items-number>0</span>
                        </span>
                    </span>
                    <div class=clear></div>
                </div>
                <div class=widget_shopping_cart_content style="display: none;"></div>
            </div>
        </div>
    </div>
    <div class="header-wrapper header-v2 default">
        <div class="main-header container">
            <div class="menu-mobile-effect navbar-toggle" data-effect=mobile-effect>
                <div class=icon-wrap><span class=icon-bar></span><span class=icon-bar></span><span class=icon-bar></span></div>
            </div>
            <div class="width-logo">
                <a class=no-sticky-logo href="<?php echo site_url(); ?>" title="Bievenido a Jeloviar Academy">
                    <img class=logo src="<?php echo site_url() . 'assets/page_front/images/logo/logo_color-white.png'; ?>" alt="logo" width="300">
                    <img class=retina-logo src="<?php echo site_url() . 'assets/page_front/images/logo/logo_color-white.png'; ?>" alt="logo" width="300">
                    <img class=mobile-logo src="<?php echo site_url() . 'assets/page_front/images/logo/logo_color-white.png'; ?>" alt="logo" width="300"></a>
                <a href="<?php echo site_url(); ?>"  class="sticky-logo">
                    <img src="<?php echo site_url() . 'assets/page_front/images/logo/logo_color-white.png';?>" alt="Logo" width="250">
                    <img class=retina-logo-sticky src="<?php echo site_url() . 'assets/page_front/images/logo/logo_color-white.png'; ?>" alt="Logo" width="695"></a>
            </div>
            <div class=width-navigation>
                <ul class=main-menu>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-parent menu-item-3824 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                        <a href="<?php echo site_url(); ?>" class=tc-menu-inner>Inicio</a> 
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3816 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                        <a href="<?php echo site_url() . 'cursos'; ?>" class=tc-menu-inner>Cursos</a>
                        <ul class="sub-menu">
                            <?php 
                            foreach ($obj_category as $value) { ?>
                                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23 tc-menu-item tc-menu-depth-1 tc-menu-align-left">
                                    <a href="<?php echo site_url()."cursos/$value->slug";?>" class="tc-menu-inner tc-megamenu-title"><?php echo $value->name;?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                </ul>        
            </div>
        </div>
    </div>
</header>
