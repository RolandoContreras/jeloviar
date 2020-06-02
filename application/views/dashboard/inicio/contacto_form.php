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
                                    <h5 class="m-b-10">Texto de Contacto</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url() . 'dashboard/panel'; ?>">
                                            <span class="pcoded-micon"><i data-feather="home"></i></span>
                                        </a></li>
                                    <li class="breadcrumb-item"><a href="#!">Contacto</a></li>
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
                                        <form enctype="multipart/form-data" method="post" action="javascript:void(0);" onsubmit="save_contacto();">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <div class="alert alert-info">Los otros datos son modificables desde la seccion <a href="<?php echo site_url().'dashboard/textos/inicio';?>">INICIO</a> </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div class="form-group">
                                                        <label>Título Contacto</label>
                                                        <input class="form-control" type="text" id="titulo_contacto" name="titulo_contacto" value="<?php echo isset($obj_textos->titulo_contacto) ? $obj_textos->titulo_contacto : ""; ?>" class="input-xlarge-fluid" placeholder="Título Inicio" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Web:</label>
                                                        <input class="form-control" type="text" id="web" name="web" value="<?php echo isset($obj_textos->web) ? $obj_textos->web : ""; ?>" class="input-xlarge-fluid" placeholder="Boton Inicio" required>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div class="form-group">
                                                        <label>Título Mensaje</label>
                                                        <input class="form-control" type="text" id="titulo_mensaje" name="titulo_mensaje" value="<?php echo isset($obj_textos->titulo_mensaje) ? $obj_textos->titulo_mensaje : ""; ?>" class="input-xlarge-fluid" placeholder="Título Discos" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Boton</label>
                                                        <input class="form-control" type="text" id="boton_contacto" name="boton_contacto" value="<?php echo isset($obj_textos->boton_contacto) ? $obj_textos->boton_contacto : ""; ?>" class="input-xlarge-fluid" placeholder="Boton Boletin" required>
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