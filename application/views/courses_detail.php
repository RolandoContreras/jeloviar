<!DOCTYPE html>
<html lang="en-US" class="no-js">
    <?php $this->load->view("head") ?>
    <body class="stm-courses-template-default single single-stm-courses postid-1073 logged-in stm_lms_button pmpro-body-has-access skin_custom_color online-light stm_preloader_1 wpb-js-composer js-comp-ver-5.6 vc_responsive" ontouchstart="">
        <div id="wrapper">
            <?php $this->load->view("header") ?>
            <div id="main">
                <div class="stm-lms-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9">
                                <h1 class="stm_lms_course__title"><?php echo str_to_mayusculas($obj_courses->name); ?></h1>
                                <div class="single_product_after_title">

                                    <div class="clearfix">
                                        <div class="pull-left meta_pull">
                                            <div class="pull-left stm_lms_teachers">
                                                <div class="meta-unit teacher clearfix">
                                                    <div class="pull-left"> 
                                                        <img alt='instructor' src='<?php echo site_url() . 'assets/page_front/images/profesor.png'; ?>' class='avatar avatar-215 photo' height='215' width='215' />
                                                    </div>
                                                    <div class="meta_values">
                                                        <div class="label h6">Instructor</div>
                                                        <div class="value heading_font h6"><?php echo $obj_courses->teacher; ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pull-left xs-product-cats-left stm_lms_teachers">
                                                <div class="meta-unit categories clearfix">
                                                    <div class="pull-left"> <i class="fa-icon-stm_icon_category secondary_color"></i></div>
                                                    <div class="meta_values">
                                                        <div class="label h6">Categoría:</div>
                                                        <div class="value h6"> 
                                                            <a href='<?php echo site_url() . "cursos/$obj_courses->category_slug"; ?>' title='<?php echo $obj_courses->category_name; ?>'> <?php echo $obj_courses->category_name; ?> </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pull-left xs-product-cats-left">
                                                <div class="meta-unit categories clearfix">
                                                    <?php if ($obj_courses->free == 1) { ?>
                                                        <div class="pull-left"> <i class="fa-icon-stm_icon_bullhorn secondary_color"></i></div>
                                                        <div class="meta_values">
                                                            <div class="label h6">Curso:</div>
                                                            <div class="value h6"> 
                                                                <b>Libre</b>
                                                            </div>
                                                        </div>
                                                    <?php } else { ?>
                                                        <div class="pull-left"> <i class="fa-icon-stm_icon_bullhorn secondary_color"></i></div>
                                                        <div class="meta_values">
                                                            <div class="label h6">Antes: <span style="text-decoration:line-through">&dollar;<?php echo $obj_courses->price_del; ?></span></div>
                                                            <div class="stm_lms_courses__single--price"> 
                                                                <b>Ahora: &dollar;<?php echo $obj_courses->price; ?></b>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"> <a href="#description" data-toggle="tab"> Descripción </a></li>
                                    <li role="presentation" class=""> <a href="#curriculum" data-toggle="tab"> Curriculum </a></li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="description">
                                        <div class="wpb_text_column wpb_content_element ">
                                            <div class="wpb_wrapper">
                                                <div style="padding-bottom: 56.25%;position: relative;">
                                                    <?php
                                                    foreach ($obj_videos as $value) {
                                                        if ($value->type == 1) {
                                                            echo $value->video;
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!--archivos para descargar-->
                                        <div class="stm_lms_downloadable_content__files">
                                            <?php foreach ($obj_archives as $value) { ?>
                                                <div class="stm_lms_downloadable_content">
                                                    <div class="stm_lms_downloadable_content__inner">
                                                        <div class="stm_lms_downloadable_content__icon stm_lms_downloadable_content__icon_mp4">
                                                            <img src="<?php echo site_url()."assets/page_front/images/46-512.png"?>" width="60"/>
                                                        </div>
                                                        <div class="stm_lms_downloadable_content__row">
                                                            <div class="stm_lms_downloadable_content__left">
                                                                <h4 class="stm_lms_downloadable_content__title"><?php echo $value->name;?></h4>
                                                            </div>
                                                            <div class="stm_lms_downloadable_content__right">
                                                                <div class="stm_lms_downloadable_content__size heading_font"> <span>Descargar:</span></div>
                                                                <a class="stm_lms_downloadable_content__url" href="<?php echo $value->content;?>" target="_blank"> 
                                                                    <i class="lnricons lnricons-download2"></i> </a>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                       <!--descripcion-->
                                        <div class="stm_lms_course__content">
                                            <div class="vc_row wpb_row vc_row-fluid">
                                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div class="wpb_text_column wpb_content_element ">
                                                                <div class="wpb_wrapper">
                                                                    <?php echo $obj_courses->description; ?>
                                                                </div>
                                                            </div>
                                                            <div class="stm-lms-buy-buttons stm-lms-buy-buttons-mixed stm-lms-buy-buttons-mixed-pro hide-boton">
                                                                <?php if ($obj_courses->free == 1) { ?>
                                                                    <a onclick="add_cart_free('<?php echo $obj_courses->course_id; ?>', '<?php echo $obj_courses->name; ?>', '<?php echo $obj_courses->img; ?>');" class="btn btn-success start-course btn-block">
                                                                        <span><i class="fas fa-shopping-bag"></i> ¡SÍ!, LO QUIERO</span> 
                                                                    </a>
                                                                <?php } else { ?>
                                                                    <a onclick="add_cart_home('<?php echo $obj_courses->course_id; ?>', '<?php echo $obj_courses->price; ?>', '<?php echo $obj_courses->name; ?>', '<?php echo $obj_courses->img; ?>');" class="btn btn-success start-course btn-block">
                                                                        <span><i class="fas fa-shopping-bag"></i> ¡SÍ!, LO QUIERO</span> 
                                                                    </a>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane " id="curriculum">
                                        <div class="stm-curriculum">
                                            <?php foreach ($obj_modules as $key => $value) { ?>
                                                <div class="stm-curriculum-section">
                                                    <h3>Módulo <?php echo $key = $key + 1; ?> : <?php echo $value->name ?></h3>
                                                </div>
                                                <?php
                                                foreach ($obj_videos as $key_2 => $value_video) {
                                                    if ($value->module_id == $value_video->module_id) {
                                                        ?>
                                                        <div class="stm-curriculum-item ">
                                                            <div class="stm-curriculum-item__num"> <?php echo $key_2 = $key_2 + 1; ?></div>
                                                            <div class="stm-curriculum-item__icon" data-toggle="tooltip" data-placement="bottom" title="Vídeo"> <i class="stmlms-slides"></i></div>
                                                            <div class="stm-curriculum-item__title">
                                                                <div class="heading_font"> <?php echo $value_video->name; ?></div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                <?php } ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="stm-lms-course__sidebar">
                                    <div class="stm-lms-buy-buttons stm-lms-buy-buttons-mixed stm-lms-buy-buttons-mixed-pro">
                                        <?php if ($obj_courses->free == 1) { ?>
                                            <a onclick="add_cart_free('<?php echo $obj_courses->course_id; ?>', '<?php echo $obj_courses->name; ?>', '<?php echo $obj_courses->img; ?>');" class="btn btn-success start-course btn-block">
                                                <span><i class="fas fa-shopping-bag"></i> ¡SÍ!, LO QUIERO</span> 
                                            </a>
                                        <?php } else { ?>
                                            <a onclick="add_cart_home('<?php echo $obj_courses->course_id; ?>', '<?php echo $obj_courses->price; ?>', '<?php echo $obj_courses->name; ?>', '<?php echo $obj_courses->img; ?>');" class="btn btn-success start-course btn-block">
                                                <span><i class="fas fa-shopping-bag"></i> ¡SÍ!, LO QUIERO</span> 
                                            </a>
                                        <?php } ?>
                                    </div>
                                    <div class="stm-lms-course-info heading_font">
                                        <div class="stm-lms-course-info__single">
                                            <div class="stm-lms-course-info__single_label"> <span>Enrolados</span>: <strong><?php echo $obj_courses->total_enrolados; ?> Estudiantes</strong></div>
                                            <div class="stm-lms-course-info__single_icon"> <i class="fa-icon-stm_icon_users"></i></div>
                                        </div>
                                        <div class="stm-lms-course-info__single">
                                            <div class="stm-lms-course-info__single_label"> <span>Duración</span>: <strong><?php echo $obj_courses->time; ?> Horas</strong></div>
                                            <div class="stm-lms-course-info__single_icon"> <i class="fa-icon-stm_icon_clock"></i></div>
                                        </div>
                                    </div>
                                    <div class="stm-lms-dynamic_sidebar">
                                        <div id="stm_lms_popular_courses-3" class="widget widget_stm_lms_popular_courses">
                                            <ul class="stm_product_list_widget widget_woo_stm_style_2">
                                                <?php foreach ($obj_courses_related as $value) { ?>
                                                    <li>
                                                        <a href="<?php echo site_url() . "cursos/$value->category_slug/$value->slug"; ?>"> 
                                                            <img width="75" height="75" src="<?php echo site_url() . "assets/cms/img/cursos/$value->img"; ?>" class="attachment-img-75-75 size-img-75-75 wp-post-image" alt="<?php echo $value->name; ?>" srcset="<?php echo site_url() . "assets/cms/img/cursos/$value->img"; ?> 75w, <?php echo site_url() . "assets/cms/img/cursos/$value->img"; ?> 150w, <?php echo site_url() . "assets/cms/img/cursos/$value->img"; ?> 129w, <?php echo site_url() . "assets/cms/img/cursos/$value->img"; ?> 122w, <?php echo site_url() . "assets/cms/img/cursos/$value->img"; ?> 69w, <?php echo site_url() . "assets/cms/img/cursos/$value->img"; ?> 50w" sizes="(max-width: 75px) 100vw, 75px" />
                                                            <div class="meta">
                                                                <div class="title h5"><?php echo $value->name; ?></div>
                                                                <div class="stm_featured_product_price">
                                                                    <div class="price price-free">&euro; <?php echo $value->price; ?></div>
                                                                </div>
                                                                <div class="expert">Por: Jesús Vilela</div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                        <div class="multiseparator"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view("footer"); ?>
        <script src="<?php echo site_url() . 'assets/page_front/js/script/pay_order.js'; ?>"></script>
        <script defer src="<?php echo site_url() . 'assets/page_front/js/autoptimize_54ab.js'; ?>"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </body>
</html>