<!DOCTYPE html>
<html lang="es" class="no-js">
    <?php $this->load->view("backoffice/head");?>
    <body class="logged-in stm_lms_button skin_custom_color online-light stm_preloader_1 wpb-js-composer js-comp-ver-5.6 vc_responsive" ontouchstart="">
        <div id="wrapper">
            <?php $this->load->view("backoffice/header");?>
            <!-- id header -->
            <div id="main">
                <div class="stm-lms-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-12">
                                <div class="stm_lms_user_side">
                                    <div class="stm-lms-user-avatar-edit "> 
                                        <input type="file" /> <i class="lnricons-pencil"></i>
                                        <div class="stm-lms-user_avatar"> 
                                            <img alt='avatar' src='<?php echo site_url().'assets/backoffice/images/avatar.png';?>' class='avatar avatar-215 photo' height='215' width='215'/> 
                                        </div>
                                    </div>
                                    <h3 class="stm_lms_update_field__first_name"><?php echo $_SESSION['customer']['name'];?></h3>
                                    <div class="stm_lms_profile_buttons_set 22">
                                        <div class="stm_lms_profile_buttons_set__inner">
                                            <div class="stm-lms-user_message_btn"> <i class="stm-lms-user_message_btn__counter">1</i> 
                                                <a href="#" class="btn btn-default">Mis Mensajes</a>
                                            </div>
                                            <div class="stm-lms-user_create_announcement_btn">
                                                <a href="<?php echo site_url().'backoffice';?>"><i class="fa fa-home"></i><span>Inicio</span></a>
                                            </div>
                                            <div class="stm-lms-user_create_announcement_btn">
                                                <a href="#"><i class="fa fa-medal"></i><span>Mis Certificados</span></a>
                                            </div>
                                            <div class="stm-lms-user_create_announcement_btn">
                                                <a href="#"><i class="fa fa-shopping-cart"></i><span>Comprar Curso</span></a>
                                            </div>
                                            <div class="stm-lms-user_edit_profile_btn" data-container=".stm_lms_edit_account">
                                                <a href="#"> <i class="fa fa-cog"></i> <span>Editar Perfil</span> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php echo $body;?>
                        </div>
                    </div>
                </div>
            </div>
            <!--#main-->
        </div>
        <!--#wrapper-->
        <?php $this->load->view("footer");?>
        <!-- Searchform -->
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body heading_font">
                        <div class="search-title">Buscar</div>
                        <form role="search" method="get" id="searchform" action="https://stylemixthemes.com/masterstudy/white-lms/">
                            <div class="search-wrapper"> <input placeholder="Start typing here..." type="text" class="form-control search-input" value="" name="s" id="s" /> <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>              </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <link rel='stylesheet' id='stm-lms_categories_megamenu-style_1-css' href='<?php echo site_url().'assets/backoffice/css/footer/lms_categories_megamenu?ver=3.2';?>' type='text/css' media='all' />
        <link rel='stylesheet' id='stm-lms-lesson-css' href='<?php echo site_url().'assets/backoffice/css/footer/lesson.css?ver=75';?>' type='text/css' media='all' />
        <link rel='stylesheet' id='stm-lms-user-css' href='<?php echo site_url().'assets/backoffice/css/footer/user.css?ver=75';?>' type='text/css' media='all' />
        <link rel='stylesheet' id='stm-header_mobile-account-css' href='<?php echo site_url().'assets/backoffice/css/footer/account.css?ver=3.2';?>' type='text/css' media='all' />
        <link rel='stylesheet' id='stm-lms-co_courses/list-css' href='https://stylemixthemes.com/masterstudy/white-lms/wp-content/plugins/masterstudy-lms-learning-management-system/assets/css/parts/co_courses/list.css?ver=75'
              type='text/css' media='all' />
        <link rel='stylesheet' id='stm-lms-user-courses-css' href='https://stylemixthemes.com/masterstudy/white-lms/wp-content/plugins/masterstudy-lms-learning-management-system/assets/css/parts/user-courses.css?ver=75'
              type='text/css' media='all' />
        <link rel='stylesheet' id='stm-lms-cart-css' href='https://stylemixthemes.com/masterstudy/white-lms/wp-content/plugins/masterstudy-lms-learning-management-system/assets/css/parts/cart.css?ver=75'
              type='text/css' media='all' />
        <link rel='stylesheet' id='stm-lms-datepicker-css' href='https://stylemixthemes.com/masterstudy/white-lms/wp-content/plugins/masterstudy-lms-learning-management-system/assets/css/parts/datepicker.css?ver=75'
              type='text/css' media='all' />
        <link rel='stylesheet' id='stm-lms-edit_account-css' href='https://stylemixthemes.com/masterstudy/white-lms/wp-content/plugins/masterstudy-lms-learning-management-system/assets/css/parts/edit_account.css?ver=75'
              type='text/css' media='all' />
        <script type='text/javascript' src='https://stylemixthemes.com/masterstudy/white-lms/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.1.6'></script>
        <script type='text/javascript' src='https://stylemixthemes.com/masterstudy/white-lms/wp-content/themes/masterstudy/assets/js/bootstrap.min.js?ver=3.2'></script>
        <script type='text/javascript' src='https://stylemixthemes.com/masterstudy/white-lms/wp-content/themes/masterstudy/assets/js/jquery.fancybox.js?ver=3.2'></script>
        <script type='text/javascript' src='https://stylemixthemes.com/masterstudy/white-lms/wp-content/themes/masterstudy/assets/js/select2.full.min.js?ver=3.2'></script>
        <script type='text/javascript' src='https://stylemixthemes.com/masterstudy/white-lms/wp-content/themes/masterstudy/assets/js/custom.js?ver=3.2'></script>
        <script type='text/javascript' src='https://stylemixthemes.com/masterstudy/white-lms/wp-content/themes/masterstudy/assets/js/vc_modules/header_js/header_2.js?ver=3.2'></script>
        <script type='text/javascript' src='https://stylemixthemes.com/masterstudy/white-lms/wp-content/plugins/masterstudy-lms-learning-management-system//wp-custom-fields-theme-options/metaboxes/assets/js/vue-resource.min.js?ver=2.0'></script>
        <script type='text/javascript'>
            /* <![CDATA[ */var stm_lms_co_courses = {"posts": [{"id": 1073, "time": 1582691233, "title": "How to be a DJ? Make Electronic Music", "link": "https:\/\/stylemixthemes.com\/masterstudy\/white-lms\/courses\/how-to-be-a-dj-make-electronic-music\/", "image": "<img srcset=\"https:\/\/stylemixthemes.com\/masterstudy\/white-lms\/wp-content\/uploads\/sites\/7\/2018\/08\/photo-1496307042754-b4aa456c4a2d-544x322.jpeg 2x\" class=\"\" src=\"https:\/\/stylemixthemes.com\/masterstudy\/white-lms\/wp-content\/uploads\/sites\/7\/2018\/08\/photo-1496307042754-b4aa456c4a2d-272x161.jpeg\" width=\"272\" height=\"161\" alt=\"photo-1496307042754-b4aa456c4a2d\" title=\"photo-1496307042754-b4aa456c4a2d\" \/>", "image_small": "<img srcset=\"https:\/\/stylemixthemes.com\/masterstudy\/white-lms\/wp-content\/uploads\/sites\/7\/2018\/08\/photo-1496307042754-b4aa456c4a2d-100x100.jpeg 2x\" class=\"\" src=\"https:\/\/stylemixthemes.com\/masterstudy\/white-lms\/wp-content\/uploads\/sites\/7\/2018\/08\/photo-1496307042754-b4aa456c4a2d-50x50.jpeg\" width=\"50\" height=\"50\" alt=\"photo-1496307042754-b4aa456c4a2d\" title=\"photo-1496307042754-b4aa456c4a2d\" \/>", "terms": ["<a href='https:\/\/stylemixthemes.com\/masterstudy\/white-lms\/course\/electronic\/' title='Electronic'>Electronic<\/a>"], "status": "publish", "status_label": "Published", "percent": 100, "is_featured": "", "average": 5, "total": 1, "views": 2877, "simple_price": "59", "price": "$59", "edit_link": "https:\/\/stylemixthemes.com\/masterstudy\/white-lms\/lms-manage\/1073", "post_status": {"status": "special", "label": "Special"}, "sale_price": "$49"}], "pages": "1"};/* ]]> */
        </script>
        <script type='text/javascript' src='https://stylemixthemes.com/masterstudy/white-lms/wp-content/plugins/masterstudy-lms-learning-management-system/assets/js/edit_account.js?ver=75'></script>
        <script type='text/javascript'>
            var stm_lms_edit_account_info = {"id": 3139, "login": "Demo Instructor", "avatar": "<img alt='' src='https:\/\/secure.gravatar.com\/avatar\/37fad8114a5e0bfca061260e332d2db2?s=215&#038;d=mm&#038;r=g' srcset='https:\/\/secure.gravatar.com\/avatar\/37fad8114a5e0bfca061260e332d2db2?s=430&#038;d=mm&#038;r=g 2x' class='avatar avatar-215 photo' height='215' width='215' \/>", "avatar_url": "https:\/\/secure.gravatar.com\/avatar\/37fad8114a5e0bfca061260e332d2db2?s=215&#038;d=mm&#038;r=g", "email": "instructor@stylemixthemes.com", "url": "https:\/\/stylemixthemes.com\/masterstudy\/white-lms\/lms-user_profile\/3139", "meta": {"facebook": "https:\/\/www.facebook.com\/", "twitter": "", "instagram": "https:\/\/www.instagram.com\/", "google-plus": "google.com\/home", "position": "Teacher", "description": "Demo Biography of Demo Instructor. \r\n\r\nTogether won't. Darkness make hath also moved dominion, they're. Don't is subdue had them sixth, cattle evening divided had fowl, kind cattle seas lesser made thing. Sea replenish doesn't it two given. Gathered life.\r\n\r\nOne blessed there thing good don't very stars thing. Kind moveth hath greater seasons Whose kind. Saying after divided that dominion. Our saw him.\r\n\r\nMeat beast. Said second. Kind, open meat beast air in behold likeness they're. Very. Seasons fourth first thing set from one one great open have two dominion fowl fourth. Cattle fish. Brought firmament our for stars without their waters. Isn't brought they're.", "first_name": "Demo", "": ""}}
        </script>
    </body>
</html>