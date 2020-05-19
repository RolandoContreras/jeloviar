<div class="col-md-9 col-sm-12">
    <div class="stm_lms_private_information" data-container-open=".stm_lms_private_information">
        <div class="stm_lms_user_info_top">
            <h1><?php echo $_SESSION['customer']['name']; ?></h1>
            <div class="stm_lms_user_info_top__socials">
                <a href="<?php echo $obj_profile->facebook; ?>" target="_blank" class="facebook stm_lms_update_field__facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="<?php echo $obj_profile->instagram; ?>" target="_blank" class="instagram stm_lms_update_field__instagram"><i class="fab fa-instagram"></i></a>
                <a href="<?php echo $obj_profile->twitter; ?>" target="_blank" class="twitter twitter stm_lms_update_field__twitter"><i class="fab fa-twitter"></i></a>
                <a href="<?php echo $obj_profile->google; ?>" target="_blank" class="google-plus stm_lms_update_field__google-plus"><i class="fab fa-google-plus-g"></i></a>
            </div>
        </div>
        <div class="stm_lms_user_bio">
            <h3>Biografía</h3>
            <div class="stm_lms_update_field__description"><?php echo $obj_profile->bio; ?></div>
        </div>
        <div class="stm_lms_instructor_courses__top">
            <a href="<?php echo site_url() . 'backoffice/cursos' ?>" class="btn btn-default"> <i class="fa fa-plus"></i>Adquirir Nuevo Curso </a>
        </div>
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"> <a href="#my-courses" data-toggle="tab">Mis Cursos </a> </li>
            <li role="presentation" class=""> <a href="#my-memberships" data-toggle="tab">Mis Pedidos </a> </li>
        </ul>
        <div class="tab-content">
            <!--Mis Cursos-->
            <div role="tabpanel" class="tab-pane vue_is_disabled active" v-bind:class="{'is_vue_loaded' : vue_loaded}" id="my-courses">
                <div class="stm-lms-user-courses">
                    <div class="stm_lms_instructor_courses__grid">
                        <?php foreach ($obj_courses_by_customer as $value) { ?>
                            <div class="stm_lms_instructor_courses__single">
                                <div class="stm_lms_instructor_courses__single__inner">
                                    <div class="stm_lms_instructor_courses__single--image">
                                        <div>
                                            <img srcset="<?php echo site_url()."assets/cms/img/cursos/$value->img"?> 2x" src="<?php echo site_url()."assets/cms/img/cursos/$value->img"?>" alt="<?php echo $value->name;?>" title="<?php echo $value->name;?>" width="272" height="161">
                                        </div>
                                    </div>
                                    <div class="stm_lms_instructor_courses__single--inner">
                                        <div class="stm_lms_instructor_courses__single--terms">
                                            <div class="stm_lms_instructor_courses__single--term">
                                                <a href="<?php echo site_url()."cursos/$value->category_slug";?>" title="<?php echo $value->name;?>"><?php echo $value->category_name;?></a>
                                            </div>
                                        </div>
                                        <div class="stm_lms_instructor_courses__single--title">
                                            <a href="<?php echo site_url()."virtual";?>">
                                                <h5><?php echo $value->name;?></h5>
                                            </a>
                                        </div>
                                        <div class="stm_lms_instructor_courses__single--progress">
                                            <div class="stm_lms_instructor_courses__single--progress_top">
                                                <div class="stm_lms_instructor_courses__single--duration"><i class="far fa-clock"></i> 6 hours </div>
                                                <div class="stm_lms_instructor_courses__single--completed"> 0% Complete </div>
                                            </div>
                                            <div class="stm_lms_instructor_courses__single--progress_bar">
                                                <div class="stm_lms_instructor_courses__single--progress_filled" style="width: 0%;"></div>
                                            </div>
                                        </div>
                                        <div class="stm_lms_instructor_courses__single--enroll">
                                            <a href="<?php echo site_url()."virtual";?>" class="btn btn-default">
                                                <span>Iniciar Curso</span>
                                            </a>
                                        </div>
                                        <div class="stm_lms_instructor_courses__single--started">Inicio <?php echo formato_fecha($value->date_start)?></div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!--Mis pedidos-->
            <div role="tabpanel" class="tab-pane vue_is_disabled " v-bind:class="{'is_vue_loaded' : vue_loaded}" id="my-memberships">
                <div class="stm-lms-user-memberships">
                    <div id="pmpro_account">
                        <div id="pmpro_account-invoices" class="pmpro_box">
                            <h3>Facturas</h3>
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Level</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($obj_orders as $value) { ?>
                                        <tr id="pmpro_account-invoice-3B9914E266">
                                            <td><?php echo formato_fecha_dia_de_mes_de_ano($value->date); ?></td>
                                            <td><?php echo $value->course_name; ?></td>
                                            <td><sup>S/.</sup><?php echo $value->total; ?></td>
                                            <td><?php echo $value->active == 2 ? "Pagado" : "Pendiente"; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-container-open=".stm_lms_edit_account">
        <div class="stm_lms_edit_account" id="stm_lms_edit_account">
            <div class="stm_lms_user_info_top">
                <h1>Editar Perfil</h1>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="heading_font">Nombre</label>
                        <input class="form-control" id="name" name="name" placeholder="Ingresa tu nombre" value="<?php echo $obj_profile->name; ?>" required/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="heading_font">Apellidos</label>
                        <input id="last_name" name="last_name" class="form-control" placeholder="Ingresa tus apellidos" value="<?php echo $obj_profile->last_name; ?>" required/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group"> 
                        <label class="heading_font">Biografía</label> 
                        <textarea id="last_name" name="last_name" placeholder="Ingresa tu biografia"><?php echo $obj_profile->bio; ?></textarea> 
                    </div>
                </div>
            </div>
            <div class="stm_lms_edit_socials">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Sociales</h3>
                        <p>Agregue sus enlaces de sus redes sociales, estos se mostrarán en su perfil público.</p>
                    </div>
                </div>
                <div class="stm_lms_edit_socials_list">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group"> <label class="heading_font">Facebook</label>
                                <div class="form-group-social"> 
                                    <input class="form-control" placeholder="Ingresa tu enlace de Facebook" value="<?php echo $obj_profile->facebook; ?>"/> <i class="fab fa-facebook-f"></i>                      
                                </div>
                            </div>
                            <div class="form-group"> <label class="heading_font">Google Plus</label>
                                <div class="form-group-social"> 
                                    <input class="form-control" placeholder="Enter your Google Plus URL" /> <i class="fab fa-google-plus-g"></i>                      
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"> <label class="heading_font">Twitter</label>
                                <div class="form-group-social"> <input v-model="data.meta.twitter" class="form-control" placeholder="Enter your Twitter URL" /> <i class="fab fa-twitter"></i> </div>
                            </div>
                            <div class="form-group"> <label class="heading_font">Instagram</label>
                                <div class="form-group-social"> <input v-model="data.meta.instagram" class="form-control" placeholder="Enter your Instagram URL" /> <i class="fab fa-instagram"></i>                      </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="stm_lms_edit_socials">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Change Password</h3>
                    </div>
                </div>
                <div class="stm_lms_edit_socials_list">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group"> <label class="heading_font">New Password</label>
                                <div class="form-group-social"> <input v-model="data.meta.new_pass" class="form-control" placeholder="Enter your New Password" /> <i class="fa fa-key"></i> </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group"> <label class="heading_font">Re-type new password</label>
                                <div class="form-group-social"> <input v-model="data.meta.new_pass_re" class="form-control" placeholder="Enter your new password" /> <i class="fa fa-key"></i> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"> 
                    <button class="btn btn-default">Guardar Cambios</button> 
                </div>
            </div>
        </div>
    </div>
</div>