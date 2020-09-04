<!DOCTYPE html>
<html lang="es" class="no-js">
    <?php $this->load->view("backoffice/head"); ?>
    <body class="logged-in stm_lms_button skin_custom_color online-light wpb-js-composer js-comp-ver-5.6 vc_responsive">
        <div id="wrapper">
            <?php $this->load->view("header"); ?>
            <div id="main">
                <div class="stm-lms-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-12">
                                <div class="stm_lms_user_side">
                                    <div class="stm-lms-user-avatar-edit "> 
                                        <div class=""> 
                                            <?php if (!empty($obj_profile->img)) { ?>
                                                <img class="img-radius" src='<?php echo site_url() . "assets/backoffice/images/profile/$obj_profile->customer_id/$obj_profile->img"; ?>' class='avatar avatar-215 photo' height='215' width='215' alt='<?php echo $_SESSION['customer']['name'] . ' ' . $_SESSION['customer']['last_name']; ?>'/> 
                                            <?php } else { ?>
                                                <img class="img-radius" alt='avatar' src='<?php echo site_url() . 'assets/backoffice/images/avatar.png'; ?>' class='avatar avatar-215 photo' height='215' width='215'/> 
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <h3 class="stm_lms_update_field__first_name"><?php echo $obj_profile->name . ' ' . $obj_profile->last_name; ?></h3>
                                    <div class="stm_lms_profile_buttons_set">
                                        <div class="stm_lms_profile_buttons_set__inner">
                                            <div class="stm-lms-user_message_btn"> 
                                                <a href="#" class="btn btn-default">Mis Mensajes</a>
                                            </div>
                                            <div class="stm-lms-user_create_announcement_btn">
                                                <a href="<?php echo site_url() . 'backoffice'; ?>"><i class="fa fa-home"></i><span>Inicio</span></a>
                                            </div>
                                            <div class="stm-lms-user_create_announcement_btn">
                                                <a href="<?php echo site_url() . 'cursos'; ?>"><i class="fa fa-shopping-cart"></i><span>Comprar Curso</span></a>
                                            </div>
                                            <div class="stm-lms-user_edit_profile_btn" data-container=".stm_lms_edit_account">
                                                <a href="#"> <i class="fa fa-cog"></i> <span>Editar Perfil</span> </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php echo $body; ?>
                            <script src="<?php echo site_url() . 'assets/backoffice/js/script/profile.js'; ?>"></script>
                        </div>
                    </div>
                </div>
            </div>
            <!--#main-->
        </div>
        <!--#wrapper-->
<?php $this->load->view("footer"); ?>
        <link rel='stylesheet' id='stm-lms-cart-css' href='<?php echo site_url() . 'assets/backoffice/css/footer/cart.css?ver=75'; ?>' type='text/css' media='all' />
        <link rel='stylesheet' id='stm-lms-lesson-css' href='<?php echo site_url() . 'assets/backoffice/css/footer/lesson.css?ver=75'; ?>' type='text/css' media='all' />
        <link rel='stylesheet' id='stm-lms-user-css' href='<?php echo site_url() . 'assets/backoffice/css/footer/user.css?ver=75'; ?>' type='text/css' media='all' />
        <link rel='stylesheet' id='stm-lms_categories_megamenu-style_1-css' href='<?php echo site_url() . 'assets/backoffice/css/footer/lms_categories_megamenu.css?ver=3.2'; ?>' type='text/css' media='all' />
        <link rel='stylesheet' id='stm-header_mobile-account-css' href='<?php echo site_url() . 'assets/backoffice/css/footer/account.css?ver=3.2'; ?>' type='text/css' media='all' />
        <link rel='stylesheet' id='stm-lms-user-courses-css' href='<?php echo site_url() . 'assets/backoffice/css/footer/user-courses.css?ver=75'; ?>' type='text/css' media='all' />
        <link rel='stylesheet' id='stm-lms-edit_account-css' href='<?php echo site_url() . 'assets/backoffice/css/footer/edit_account.css?ver=75'; ?>' type='text/css' media='all' />
        <link rel='stylesheet' id='stm-lms-user-quizzes-css'  href='<?php echo site_url() . 'assets/backoffice/css/footer/user-quizzes.css?ver=88'; ?>' type='text/css' media='all' />
        <link rel='stylesheet' id='stm-lms-my-points-css'  href='<?php echo site_url() . 'assets/backoffice/css/footer/my-points.css?ver=88'; ?>' type='text/css' media='all' />
        <script src='<?php echo site_url() . 'assets/backoffice/js/bootstrap.min.js?ver=3.2'; ?>'></script>
        <script src='<?php echo site_url() . 'assets/backoffice/js/jquery.fancybox.js?ver=3.2'; ?>'></script>
        <script src='<?php echo site_url() . 'assets/backoffice/js/select2.full.min.js?ver=3.2'; ?>'></script>
        <script src='<?php echo site_url() . 'assets/backoffice/js/custom.js?ver=3.2'; ?>'></script>
        <script src='<?php echo site_url() . 'assets/backoffice/js/edit_account.js?ver=75'; ?>'></script>
        <script src='<?php echo site_url() . 'assets/backoffice/js/header_2.js?ver=3.2'; ?>'></script>
        <script type='text/javascript' src='<?php echo site_url() . 'assets/backoffice/js/co_courses.js?ver=88'; ?>'></script>
        <script type='text/javascript'>
            var stm_lms_edit_account_info = {"id": "", "avatar": "", "avatar_url": "", "email": "", "url": "", "meta": {}}
        </script>
    </body>
</html>