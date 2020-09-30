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
                                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 482.139 482.139"
                                                                 style="enable-background:new 0 0 482.139 482.139;" xml:space="preserve"> <g> <path d="M227.775,125.798l-9.835,16.045v0.235h16.486v-16.28c0-4.412,0.252-8.936,0.566-13.679h-0.44 C232.189,116.862,230.267,121.164,227.775,125.798z"></path> <path d="M178.761,119.92c0-7.014-4.886-11.189-13.459-11.189c-3.499,0-5.896,0.347-7.124,0.678v22.49 c1.482,0.346,3.278,0.457,5.769,0.457C173.087,132.355,178.761,127.722,178.761,119.92z"></path> <path d="M357.169,0H163.52c-28.289,0-51.316,23.041-51.316,51.315v9.504h-88.43c-11.428,0-20.678,9.251-20.678,20.677v105.295 c0,11.426,9.25,20.678,20.678,20.678h88.43v223.355c0,28.305,23.027,51.315,51.316,51.315h264.222c28.275,0,51.3-23.01,51.3-51.315 V121.449L357.169,0z M141.094,97.32c5.327-0.916,12.798-1.594,23.293-1.594c10.622,0,18.188,2.034,23.294,6.115 c4.855,3.831,8.133,10.166,8.133,17.62c0,7.471-2.49,13.79-6.998,18.093c-5.894,5.532-14.594,8.022-24.775,8.022 c-2.238,0-4.288-0.109-5.863-0.331v27.234h-17.084V97.32z M111.086,172.48l-1.134-29.156c-0.347-9.156-0.661-20.236-0.661-31.316 h-0.348c-2.364,9.725-5.549,20.566-8.479,29.504l-9.268,29.725H77.737l-8.133-29.505c-2.489-8.92-5.09-19.779-6.902-29.724h-0.221 c-0.442,10.291-0.787,22.049-1.356,31.536l-1.355,28.936H43.837l4.854-76.185h22.947l7.455,25.438 c2.379,8.81,4.76,18.313,6.445,27.234h0.331c2.144-8.811,4.759-18.866,7.25-27.346l8.131-25.326h22.507l4.161,76.185H111.086z M427.742,450.713H163.52c-10.953,0-19.873-8.92-19.873-19.889V207.469h139.73c11.426,0,20.677-9.252,20.677-20.678V81.496 c0-11.426-9.251-20.677-20.677-20.677h-139.73v-9.504c0-10.938,8.92-19.858,19.873-19.858l181.89-0.189v67.234 c0,19.637,15.934,35.586,35.587,35.586l65.863-0.189l0.74,296.925C447.601,441.793,438.696,450.713,427.742,450.713z M259.548,142.078v12.877h-8.824v17.525h-16.297v-17.525h-32.529v-11.189l27.801-44.76h21.025v43.072H259.548z"></path> <path d="M253.591,374.811c-5.139-2.018-10.906-3.247-17.146-3.247c-20.048,0-36.313,11.742-36.313,26.225 c0,14.484,16.265,26.226,36.313,26.226c20.047,0,36.311-11.741,36.311-26.226V288.334l85.735-18.123v88.462 c-5.138-2.017-10.906-3.247-17.147-3.247c-20.047,0-36.311,11.742-36.311,26.225c0,14.484,16.265,26.226,36.311,26.226 c20.047,0,36.312-11.741,36.312-26.226V229.344l-124.066,26.225V374.811z"></path> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> 
                                                            </svg>
                                                        </div>
                                                        <div class="stm_lms_downloadable_content__row">
                                                            <div class="stm_lms_downloadable_content__left">
                                                                <h4 class="stm_lms_downloadable_content__title"><?php echo $value->name;?></h4>
                                                            </div>
                                                            <div class="stm_lms_downloadable_content__right">
                                                                <div class="stm_lms_downloadable_content__size heading_font"> <span>Descargar:</span></div>
                                                                <a class="stm_lms_downloadable_content__url" href="<?php echo site_url()."assets/cms/archives/$value->course_id/$value->content";?>" target="_blank" download="<?php echo $value->content;?>"> 
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