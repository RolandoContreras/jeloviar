<div class="col-xl-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h5 class="mb-3"><i class="fas fa-ticket-alt m-r-5"></i>Curso: <?php echo $obj_courses->name; ?></h5>
            <?php if ($complete == 1) { ?>
                <button class="btn btn-success float-right"><i class="fa fa-check m-r-5"></i>Completo</button>
            <?php } else { ?>
                <button class="btn btn-warning float-right"><i class="fa fa-circle-o-notch m-r-5"></i>En Progreso</button>
            <?php } ?>
        </div>
        <div class="card-block">
            <div class="m-b-20">
                <h6>Progreso</h6>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $percent; ?>%;" aria-valuenow="<?php echo $percent; ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $percent; ?>%</div>
                </div>
            </div>
            <hr/>
            <div class="card-header">
                <h4 class="mb-3"><i class="fas fa-ticket-alt m-r-5"></i>Vídeo: <?php echo $obj_courses_overview->name; ?></h4>
            </div>
            <div class="vc_col-sm-9">
                <div class="wpb_wrapper">
                    <div class="thim-block-1">
                        <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div>
                        <div class="feature-img">
                            <div class=wrapper>
                                <div class="row justify-content-center">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/<?php echo $video_link; ?>" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_empty_space" style="height: 50px"><span class="vc_empty_space_inner"></span></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div class="thim-block-1">
                            <div class="vc_empty_space" style="height: 10px"><span class="vc_empty_space_inner"></span></div>
                            <div id="main-course" style="overflow-y:auto">
                                <?php
                                foreach ($obj_videos as $value) {
                                    if ($value->video_id == $obj_courses_overview->video_id) {
                                        $style = "style_rep";
                                        $link = "javascript:void(0)";
                                    } else {
                                        $style = "";
                                        $link = site_url() . "plataforma/$slug/$obj_courses->slug/$value->slug";
                                    }
                                    ?>

                                    <div class="overflow">
                                        <div class="course-item" style="margin-bottom: 10px !important;" style_play>
                                            <a href="<?php echo $link; ?>">
                                                <div class="feature-img">
                                                    <img src="<?php echo site_url() . "assets/cms/img/cursos/$course_img"; ?>" alt="<?php echo $value->name; ?>" width="100" >
                                                    <div class="wrap-author <?php echo $style; ?>">
                                                        <div class="sc-review-stars">
                                                            <div class="review-stars-rated">
                                                                <i class="fa fa-play-circle fa-4x"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="course-detail">
                                                <h3 class="title" style="margin-top: 10px !important;">
                                                    <a href="<?php echo site_url() . "virtual/$slug/$obj_courses->slug/$value->slug"; ?>"><?php echo $value->name; ?></a>
                                                </h3>
                                                <div class="meta" style="margin-top: 10px !important;">
                                                    <span><i class="fa fa-history"></i> <?php echo $value->time . " min"; ?></span>
                                                </div>
                                                <a href="<?php echo site_url() . "virtual/$slug/$obj_courses->slug/$value->slug"; ?>">
                                                    <span class="lp-label lp-label-preview lp-landing" style="background: green !important;">Ver Vídeo</span>
                                                </a>
                                                <?php if ($value->video_id <= $video_actual->video_actual) { ?>
                                                    <label class="check-task done-task float-right" style="margin-left:20px;"><span class="leter-normal">Visto</span></label>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>     
<?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo site_url() . 'assets/course/js/script/c_home.js'; ?>"></script>  


