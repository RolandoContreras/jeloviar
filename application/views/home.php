<!DOCTYPE html>
<html lang="en-US" class="no-js">
    <?php $this->load->view("head") ?>
    <body class="stm_preloader_1 vc_responsive">
        <div id="wrapper">
            <?php $this->load->view("header") ?>
            <div id="main">
                <div class="breadcrumbs_holder"></div>
                <div class="container">
                    <div class="post_type_exist clearfix">
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row animate-style">
                            <div class="wpb_column vc_column_container vc_col-sm-8 vc_col-lg-6 vc_col-md-6 vc_col-xs-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="space-98"></div>
                                        <div>
                                            <h2 class="h2-title text-align-left capacitacion-title"><?php echo $obj_textos->titulo_home;?></h2>
                                        </div>
                                        <div class="">
                                            <h3 class="text-align-left header-plataforma"><?php echo $obj_textos->description_home;?></h3>
                                        </div>
                                        <center>
                                            <a class="btn btn-danger lg" href="<?php echo $obj_textos->link_boton;?>" title="Contacto"><?php echo $obj_textos->boton_home;?></a>
                                        </center>
                                        <div class="space-18"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1535369584754 vc_row-has-fill"
                             style="position: relative; left: -351.5px; box-sizing: border-box; width: 1903px;;">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="container">
                                            <div class="padding-bottom-44 padding-top-20">
                                                <div class="col-md-offset-2 col-sm-8 col-md-offset-2">
                                                    <div class="vc_custom_heading">
                                                        <h2 class="text-master-mind"><?php echo $obj_textos->titulo_masterclass;?></h2>
                                                    </div>

                                                    <div class="vc_custom_heading fwl">
                                                        <h4 style="font-size: 18px;line-height: 28px;text-align: center"><?php echo $obj_textos->texto_masterclass;?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="space-27"></div>
                                        <div class="stm_lms_recent_courses">
                                            <div class="stm_lms_courses__grid stm_lms_courses__grid_12 stm_lms_courses__grid_center">
                                                <?php
                                                foreach ($obj_courses as $key => $value) {
                                                    if ($value->top == 1) {
                                                        ?>
                                                        <div class="stm_lms_courses__single">
                                                            <div class="stm_lms_courses__single__inner">
                                                                <div class="stm_lms_courses__single--image">
                                                                    <div class="stm_lms_post_status new"> Nuevo</div>
                                                                    <a href="<?php echo site_url() . "cursos/$value->category_slug/$value->slug"; ?>" class="heading_font" data-preview="Vista Previa del Curso">
                                                                        <div>
                                                                            <div class="stm_lms_lazy_image stm_lms_lazy_image__lazyloaded">
                                                                                <img src="<?php echo site_url() . "assets/cms/img/cursos/$value->img"; ?>" class="lazyload" alt="<?php echo $value->name; ?>" title="<?php echo $value->name; ?>"/>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <div class="stm_lms_courses__single--inner">
                                                                    <div class="stm_lms_courses__single--terms">
                                                                        <div class="stm_lms_courses__single--term"> <?php echo $value->category_name; ?></div>
                                                                    </div>
                                                                    <div class="stm_lms_courses__single--title">
                                                                        <a href="<?php echo site_url() . "programas/$value->category_slug/$value->slug"; ?>">
                                                                            <h5><?php echo $value->name; ?></h5>
                                                                        </a>
                                                                    </div>
                                                                    <div class="stm_lms_courses__single--meta">
                                                                        <div class="stm_lms_courses__hours"> <i class="stmlms-lms-clocks"></i> <span><?php echo $value->time; ?> horas</span></div>
                                                                        <div class="stm_lms_courses__single--price heading_font">
                                                                            <?php if ($value->free == 1) { ?>
                                                                                <b>Libre</b>
                                                                            <?php } else { ?>
                                                                                <span>&dollar;<?php echo $value->price_del; ?></span><strong>&dollar;<?php echo $value->price; ?></strong>
                                                                            <?php } ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="stm_lms_courses__single--info">
                                                                    <div class="stm_lms_courses__single--info_author">
                                                                        <div class="stm_lms_courses__single--info_author__avatar"> 
                                                                            <?php if (!empty($value->instructor_img)) { ?>
                                                                                <img src="<?php echo site_url() . "assets/backoffice/images/profile/$value->customer_id/$value->instructor_img"; ?>" class="avatar lazyload" alt="<?php echo $value->name; ?>">
                                                                            <?php } else { ?>
                                                                                <img src="<?php echo site_url() . 'assets/page_front/images/profesor.png'; ?>" class="avatar lazyload" alt="Instructor">
                                                                            <?php } ?>
                                                                        </div>
                                                                        <div class="stm_lms_courses__single--info_author__login">
                                                                            Expansión Consciente
                                                                        </div>
                                                                    </div>
                                                                    <div class="stm_lms_courses__single--info_title">
                                                                        <a href="<?php echo site_url() . "programas/$value->category_slug/$value->slug"; ?>">
                                                                            <h4><?php echo $value->name; ?></h4>
                                                                        </a>
                                                                    </div>
                                                                    <div class="stm_lms_courses__single--info_excerpt"> 
                                                                        <?php echo corta_texto($value->description, 300); ?>
                                                                    </div>
                                                                    <div class="stm_lms_courses__single--info_meta">
                                                                        <div class="stm_lms_course__meta"><i class="stmlms-lms-clocks"></i><?php echo $value->time; ?> Horas</div>
                                                                    </div>
                                                                    <div class="stm_lms_courses__single--info_preview"> 
                                                                        <a href="<?php echo site_url() . "programas/$value->category_slug/$value->slug"; ?>" title="<?php echo $value->name; ?>" class="heading_font"> Vista previa de este curso</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="cursos">
                            <div class="wpb_column vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="padding-bottom-44">
                                            <h2 class="h2-title text-align-center"><?php echo $obj_textos->titulo_cursos;?></h2>
                                        </div>
                                        <div class="stm_lms_recent_courses">
                                            <div class="stm_lms_courses__grid stm_lms_courses__grid_6 stm_lms_courses__grid_center">
                                                <?php foreach ($obj_courses as $value) { ?>
                                                    <div class="stm_lms_courses__single">
                                                        <div class="stm_lms_courses__single__inner">
                                                            <div class="stm_lms_courses__single--image">
                                                                <div class="stm_lms_post_status new"> Nuevo</div>
                                                                <a href="<?php echo site_url() . "cursos/$value->category_slug/$value->slug"; ?>" class="heading_font" data-preview="Vista Previa del Curso">
                                                                    <div>
                                                                        <div class="stm_lms_lazy_image stm_lms_lazy_image__lazyloaded">
                                                                            <img data-srcset="<?php echo site_url() . "assets/cms/img/cursos/$value->img"; ?> 2x" class="lazyload " data-src="<?php echo site_url() . "assets/cms/img/cursos/$value->img"; ?>" width="272" height="161" alt="<?php echo $value->name; ?>" title="<?php echo $value->name; ?>"/>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="stm_lms_courses__single--inner">
                                                                <div class="stm_lms_courses__single--terms">
                                                                    <div class="stm_lms_courses__single--term"> <?php echo $value->category_name; ?></div>
                                                                </div>
                                                                <div class="stm_lms_courses__single--title">
                                                                    <a href="<?php echo site_url() . "cursos/$value->category_slug/$value->slug"; ?>">
                                                                        <h5><?php echo str_to_mayusculas($value->name); ?></h5>
                                                                    </a>
                                                                </div>
                                                                <div class="stm_lms_courses__single--meta">
                                                                    <div class="stm_lms_courses__hours"> <i class="stmlms-lms-clocks"></i> <span>6 hours</span></div>
                                                                    <div class="stm_lms_courses__single--price heading_font"> 
                                                                        <span>&euro;<?php echo $value->price_del; ?></span><strong>&euro;<?php echo $value->price; ?></strong>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="stm_lms_courses__single--info">
                                                                <div class="stm_lms_courses__single--info_author">
                                                                    <div class="stm_lms_courses__single--info_author__avatar"> 
                                                                        <img alt="profesor" src="<?php echo site_url() . 'assets/page_front/images/profesor.png'; ?>" class="avatar">
                                                                    </div>
                                                                    <div class="stm_lms_courses__single--info_author__login">Jesus Vilela</div>
                                                                </div>
                                                                <div class="stm_lms_courses__single--info_title">
                                                                    <a href="<?php echo site_url() . "cursos/$value->category_slug/$value->slug"; ?>">
                                                                        <h4><?php echo strtoupper($value->name); ?></h4>
                                                                    </a>
                                                                </div>
                                                                <div class="stm_lms_courses__single--info_excerpt"> 
                                                                    <?php echo corta_texto($value->description, 300); ?>
                                                                </div>
                                                                <div class="stm_lms_courses__single--info_meta">
                                                                    <div class="stm_lms_course__meta"> <i class="stmlms-lms-clocks"></i><?php echo $value->time; ?> Horas</div>
                                                                </div>
                                                                <div class="stm_lms_courses__single--info_preview"> 
                                                                    <a href="<?php echo site_url() . "cursos/$value->category_slug/$value->slug"; ?>" title="<?php echo $value->name; ?>" class="heading_font"> Vista previa de este curso</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                            <div class="stm_lms_recent_courses__all text-center"> 
                                                <a href="<?php echo site_url() . 'cursos'; ?>" class="btn btn-default"><?php echo $obj_textos->boton_cursos;?></a>
                                            </div>
                                        </div>
                                        <div class="space-75"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row margin-bottom-0 suscriber bg_suscriber">
                            <div class="vc_column_container vc_col-sm-12 vc_col-lg-7 vc_col-md-7">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="space-27"></div>
                                        <h4 class="h4-title text-align-left"><?php echo $obj_textos->titulo_boletin;?></h4>
                                        <h5 class="h5-title text-align-left"><?php echo $obj_textos->description_boletin;?></h5>
                                        <div class="space-45"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_column_container vc_col-sm-12 vc_col-lg-5 vc_col-md-5">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="space-18"></div>
                                        <div class="stm_subscribe">
                                            <div class="widget_mailchimp">
                                                <h5 class="stm_subscribe_title white">Ingrese su E-mail</h5>
                                                <form action="javascript:void(0);" onsubmit="boletin();">
                                                    <div class="stm_mailchimp_unit">
                                                        <div class="form-group">
                                                            <input type="email" name="email" id="email" class="form-control stm_subscribe_email" placeholder="Ingrese su E-mail" required="">
                                                        </div>
                                                        <button type="submit" class="button"><span class="h5"><?php echo $obj_textos->boton_boletin;?></span></button>
                                                        <div class="stm_subscribe_preloader">Por favor espera...</div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->load->view("footer"); ?>
        <script defer src="<?php echo site_url() . 'assets/page_front/js/autoptimize_278f.js'; ?>"></script>
        <script defer src="<?php echo site_url() . 'assets/page_front/js/script/home.js'; ?>"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </body>
</html>