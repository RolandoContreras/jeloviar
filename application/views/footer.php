 <footer id=colophon class="site-footer dark style_old">
    <div class="footer no-footer-sticky ">
      <div class=container>
        <div class="row footer-columns footer-sidebars">
          <div class="footer-col footer-col5 col-xs-12 col-md-3">
            <aside id=text-3 class="widget widget_text">
              <div class=textwidget>
                <p>
                    <img class="wp-image-4261 size-full alignnone" src="<?php echo site_url().'assets/page_front/images/logo/logo_color-white.png';?>" alt="logo" width="300">
                </p>
                <p>Únete a cientos de personas que están haciendo sus vidas diferentes. Aprovecha de todos los beneficios que tenemos para ti.</p>
              </div>
            </aside>
          </div>
          <div class="footer-col footer-col5 col-xs-12 col-md-2">
            <aside id=nav_menu-3 class="widget widget_nav_menu">
              <h3 class="widget-title">Mapa</h3>
              <div class=menu-links-container>
                <ul id=menu-links class=menu>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                      <a href="<?php echo site_url();?>" class=tc-menu-inner>Inicio</a>
                  </li>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-19 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                      <a href="<?php echo site_url().'cursos';?>" class=tc-menu-inner>Cursos</a></li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4235 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                      <a href="<?php echo site_url().'login';?>" class=tc-menu-inner>Iniciar Sesión</a>
                  </li>
                  <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4235 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                      <a href="<?php echo site_url().'registro';?>" class=tc-menu-inner>Registro</a>
                  </li>
                </ul>
              </div>
            </aside>
          </div>
          <div class="footer-col footer-col5 col-xs-12 col-md-2">
            <aside id=nav_menu-2 class="widget widget_nav_menu">
              <h3 class="widget-title">Contacto</h3>
              <div class=menu-company-container>
                <ul id=menu-company class=menu>
                  <li>
                      <i class="fa fa-envelope"></i>
                      contacto@jeloviaronline.com
                  </li>
                   <li>
                      <i class="fa fa-phone"></i>+ (51) 998 878 636
                  </li>
                  <li>
                      <i class="fa fa-map-marker"></i> No #200 Joseob, Lima.
                  </li>
                </ul>
              </div>
            </aside>
          </div>
          
          <div class="footer-col footer-col5 col-xs-12 col-md-2">
            <aside class="widget widget_nav_menu">
              <h3 class="widget-title">Cursos</h3>
              <div class=menu-support-container>
                <ul class=menu>
                    <?php 
                    foreach ($obj_category as $value) { ?>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-30 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                            <a href="<?php echo site_url()."cursos/$value->slug";?>" class=tc-menu-inner><?php echo $value->name;?></a>
                        </li>
                    <?php } ?>
                </ul>
              </div>
            </aside>
          </div>
            <div class="footer-col footer-col5 col-xs-12 col-md-2">
            <aside class="widget widget_nav_menu">
              <h3 class="widget-title">Terminos</h3>
              <div class=menu-support-container>
                <ul class=menu>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-30 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                      <a href="<?php echo site_url().'terminos-condiciones';?>" class=tc-menu-inner>Términos y condiciones</a>
                  </li>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-31 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                      <a href="<?php echo site_url().'politica-privacidad';?>" class=tc-menu-inner>Política De Privacidad</a>
                  </li>
                  <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-31 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                      <a href="<?php echo site_url().'politica-cookies';?>" class=tc-menu-inner>Política De Cookies</a>
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
              <div class=copyright-text>Construido por <a href="http://evolucionweb.tech/" target="_blank">Evolución</a><img src="<?php echo site_url().'assets/page_front/images/logo/evolucion_logo.png';?>" alt="evolucion logo" width="80"/></div>
            </div>
            <div class="col-sm-6 text-right">
              <ul id=copyright-menu class=list-inline>

                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-16 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                    <a href="https://www.facebook.com" class=tc-menu-inner>Facebook</a></li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4232 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                    <a href="https://www.youtube.com" class=tc-menu-inner>Youtube</a>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4232 tc-menu-item tc-menu-depth-0 tc-menu-align-left tc-menu-layout-default">
                    <a href="https://api.whatsapp.com/send?phone=393249099053" title="Whatssapp Jeloviaronline.com" target="_blank" rel="noopener" class="tc-menu-inner">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50"  viewBox="0 0 80 80"><defs><circle id="b" cx="30" cy="30" r="30"></circle><filter id="a" width="153.3%" height="153.3%" x="-26.7%" y="-23.3%" filterUnits="objectBoundingBox"><feOffset dy="2" in="SourceAlpha" result="shadowOffsetOuter1"></feOffset><feGaussianBlur in="shadowOffsetOuter1" result="shadowBlurOuter1" stdDeviation="5"></feGaussianBlur><feColorMatrix in="shadowBlurOuter1" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"></feColorMatrix></filter></defs><g fill="none" fill-rule="evenodd"><g transform="translate(10 8)"><use fill="#000" filter="url(#a)" xlink:href="#b"></use><use fill="#7ED321" xlink:href="#b"></use></g><path fill="#FFF" d="M56.705 37.57c0 8.988-7.343 16.274-16.401 16.274-2.876 0-5.578-.735-7.928-2.025l-9.08 2.886 2.96-8.732a16.103 16.103 0 0 1-2.354-8.403c0-8.988 7.343-16.275 16.402-16.275 9.06 0 16.4 7.287 16.4 16.275zM40.17 24.023c-7.613 0-13.806 6.117-13.806 13.636 0 2.984.977 5.747 2.63 7.995l-1.725 5.064 5.306-1.678a13.844 13.844 0 0 0 7.596 2.255c7.612 0 13.806-6.116 13.806-13.635 0-7.52-6.193-13.637-13.807-13.637zm8.295 17.233c-.102-.165-.37-.264-.772-.462-.403-.198-2.383-1.157-2.751-1.288-.37-.132-.638-.198-.906.198s-1.04 1.288-1.276 1.552c-.234.265-.469.298-.872.1-.402-.198-1.7-.617-3.237-1.966-1.197-1.05-2.005-2.345-2.24-2.742-.234-.396-.024-.61.177-.807.181-.178.403-.463.604-.694.202-.231.269-.396.402-.66.135-.265.068-.496-.033-.695-.1-.197-.907-2.146-1.242-2.94-.335-.792-.67-.66-.906-.66-.234 0-.503-.033-.771-.033-.269 0-.705.1-1.074.495-.37.397-1.409 1.355-1.409 3.304 0 1.948 1.442 3.831 1.644 4.095.201.264 2.784 4.393 6.877 5.979 4.093 1.585 4.093 1.056 4.832.99.737-.066 2.381-.958 2.718-1.882.335-.926.335-1.719.235-1.884z"></path></g></svg>
                    </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>