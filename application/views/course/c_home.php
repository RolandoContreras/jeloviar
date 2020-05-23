<div id="stm-lms-lessons">
    <div class="stm-lms-course__content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="stm-lms-course__lesson-content__top">
                        <h1><?php echo $obj_courses_overview->name; ?></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="stm-lms-course__content_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="stm-lms-course__lesson-content">
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <?php echo $obj_courses_overview->video; ?>
                                                </div>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <p>
                                                        <?php echo $obj_courses_overview->description; ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo site_url() . 'assets/course/js/script/c_home.js'; ?>"></script>  
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>


