<script src="<?php echo site_url() . 'assets/cms/js/core/bootbox.locales.min.js'; ?>"></script>
<script src="<?php echo site_url() . 'assets/cms/js/core/bootbox.min.js'; ?>"></script>
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Texto de Inicio</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url() . 'dashboard/panel'; ?>">
                                            <span class="pcoded-micon"><i data-feather="home"></i></span>
                                        </a></li>
                                    <li class="breadcrumb-item"><a href="#!">Inicio</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-body">
                    <div class="page-wrapper">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Datos</h5>
                                    </div>
                                    <div class="card-body">
                                        <form enctype="multipart/form-data" method="post" action="javascript:void(0);" onsubmit="save();">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <div class="form-group">
                                                        <label>Título</label>
                                                        <input class="form-control" type="text" id="titulo_home" name="titulo_home" value="<?php echo isset($obj_textos->titulo_home) ? $obj_textos->titulo_home : ""; ?>" class="input-xlarge-fluid" placeholder="Título Inicio" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Contenido</label>
                                                        <textarea name="description_home" id="description_home" placeholder="Contenido"><?php echo isset($obj_textos->description_home) ? $obj_textos->description_home : ""; ?></textarea>
                                                        <script>CKEDITOR.replace('description_home');</script>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Boton</label>
                                                        <input class="form-control" type="text" id="boton_home" name="boton_home" value="<?php echo isset($obj_textos->boton_home) ? $obj_textos->boton_home : ""; ?>" class="input-xlarge-fluid" placeholder="Boton Inicio" required>
                                                    </div>
                                                    <br/>
                                                    <hr>
                                                    <div class="form-group">
                                                        <label>Título Boletin</label>
                                                        <input class="form-control" type="text" id="titulo_boletin" name="titulo_boletin" value="<?php echo isset($obj_textos->titulo_boletin) ? $obj_textos->titulo_boletin : ""; ?>" class="input-xlarge-fluid" placeholder="Título Boletin" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Contenido</label>
                                                        <textarea name="description_boletin" id="description_boletin" placeholder="Texto 1"><?php echo isset($obj_textos->description_home) ? $obj_textos->description_home : ""; ?></textarea>
                                                        <script>CKEDITOR.replace('description_boletin');</script>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Boton</label>
                                                        <input class="form-control" type="text" id="boton_boletin" name="boton_boletin" value="<?php echo isset($obj_textos->boton_boletin) ? $obj_textos->boton_boletin : ""; ?>" class="input-xlarge-fluid" placeholder="Boton Boletin" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Enlace del Boton</label>
                                                        <input class="form-control" type="text" id="link_boton" name="link_boton" value="<?php echo isset($obj_textos->link_boton) ? $obj_textos->link_boton : ""; ?>" class="input-xlarge-fluid" placeholder="Boton Boletin" required>
                                                    </div>
                                                    <hr>
                                                    <div class="form-group">
                                                        <label>Título MasterClass</label>
                                                        <input class="form-control" type="text" id="titulo_masterclass" name="titulo_masterclass" value="<?php echo isset($obj_textos->titulo_masterclass) ? $obj_textos->titulo_masterclass : ""; ?>" class="input-xlarge-fluid" placeholder="Título MasterClass" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Texto MasterClass</label>
                                                        <textarea name="texto_masterclass" id="texto_masterclass" placeholder="Contenido"><?php echo isset($obj_textos->texto_masterclass) ? $obj_textos->texto_masterclass : ""; ?></textarea>
                                                        <script>CKEDITOR.replace('texto_masterclass');</script>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div class="form-group">
                                                        <label>Título Cursos</label>
                                                        <input class="form-control" type="text" id="titulo_cursos" name="titulo_cursos" value="<?php echo isset($obj_textos->titulo_cursos) ? $obj_textos->titulo_cursos : ""; ?>" class="input-xlarge-fluid" placeholder="Título Discos" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Boton</label>
                                                        <input class="form-control" type="text" id="boton_cursos" name="boton_cursos" value="<?php echo isset($obj_textos->boton_cursos) ? $obj_textos->boton_cursos : ""; ?>" class="input-xlarge-fluid" placeholder="Boton" required>
                                                    </div>
                                                    <br/>
                                                    <hr>
                                                    <div class="form-group">
                                                        <label>Título Footer</label>
                                                        <input class="form-control" type="text" id="nosotros_footer" name="nosotros_footer" value="<?php echo isset($obj_textos->nosotros_footer) ? $obj_textos->nosotros_footer : ""; ?>" class="input-xlarge-fluid" placeholder="Título Footer" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Contenido</label>
                                                        <textarea name="text_nosotros_footer" id="text_nosotros_footer" placeholder="Contenido"><?php echo isset($obj_textos->text_nosotros_footer) ? $obj_textos->text_nosotros_footer : ""; ?></textarea>
                                                        <script>CKEDITOR.replace('text_nosotros_footer');</script>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Título Contacto</label>
                                                        <input class="form-control" type="text" id="titulo_contacto_footer" name="titulo_contacto_footer" value="<?php echo isset($obj_textos->titulo_contacto_footer) ? $obj_textos->titulo_contacto_footer : ""; ?>" class="input-xlarge-fluid" placeholder="Título Contacto Footer" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email Contacto</label>
                                                        <input class="form-control" type="text" id="email_footer" name="email_footer" value="<?php echo isset($obj_textos->email_footer) ? $obj_textos->email_footer : ""; ?>" class="input-xlarge-fluid" placeholder="Título Footer" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Teléfonos de Contacto</label>
                                                        <textarea name="phone_footer" id="phone_footer" placeholder="Teléfonos de Contacto"><?php echo isset($obj_textos->phone_footer) ? $obj_textos->phone_footer : ""; ?></textarea>
                                                        <script>CKEDITOR.replace('phone_footer');</script>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Dirección de Contacto</label>
                                                        <textarea name="address_footer" id="address_footer" placeholder="Dirección de Contacto"><?php echo isset($obj_textos->address_footer) ? $obj_textos->address_footer : ""; ?></textarea>
                                                        <script>CKEDITOR.replace('address_footer');</script>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                        </form>
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
<script src="<?php echo site_url(); ?>assets/cms/js/textos.js"></script>