<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Formulario de Archivos</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url() . 'dashboard/panel'; ?>">
                                            <span class="pcoded-micon"><i data-feather="home"></i></span>
                                        </a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo site_url() . "dashboard/archivos/$course_id"; ?>">Listado de Archivos</a></li>
                                    <li class="breadcrumb-item"><a href="#!">Archivos</a></li>
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
                                        <form enctype="multipart/form-data" method="post" action="javascript:void(0);" onsubmit="validate_archivos();" id="form-archives">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <?php if (isset($obj_archives)) { ?>
                                                        <div class="form-group">
                                                            <label>ID</label>
                                                            <input class="form-control" type="text" value="<?php echo isset($obj_archives->archive_id) ? $obj_archives->archive_id : ""; ?>" class="input-xlarge-fluid" placeholder="ID" disabled="">
                                                        </div>
                                                    <?php } ?>
                                                    <input type="hidden" id="archive_id" name="archive_id" value="<?php echo isset($obj_archives->archive_id) ? $obj_archives->archive_id : ""; ?>">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div class="form-group">
                                                        <label>Nombre</label>
                                                        <input class="form-control" type="text" id="name" name="name" value="<?php echo isset($obj_archives->name) ? $obj_archives->name : ""; ?>" class="input-xlarge-fluid" placeholder="Titulo" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Contenido</label><br/>
                                                        <input class="form-control" type="text" id="content" name="content" value="<?php echo isset($obj_archives->content) ? $obj_archives->content : ""; ?>" class="input-xlarge-fluid" placeholder="Contenido" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div class="form-group">
                                                        <label for="inputState">Curso</label>
                                                        <select name="course_id" id="course_id" class="form-control" >
                                                            <option selected="" value="<?php echo $obj_courses->course_id; ?>"><?php echo $obj_courses->name; ?></option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputState">Estado</label>
                                                        <select name="active" id="active" class="form-control" required="">
                                                            <option value="">[ Seleccionar ]</option>
                                                            <option value="1" <?php
                                                        if (isset($obj_archives)) {
                                                            if ($obj_archives->active == 1) {
                                                                echo "selected";
                                                            }
                                                        } else {
                                                            echo "";
                                                        }
                                                        ?>>Activo</option>
                                                            <option value="0" <?php
                                                            if (isset($obj_archives)) {
                                                                if ($obj_archives->active == 0) {
                                                                    echo "selected";
                                                                }
                                                            } else {
                                                                echo "";
                                                            }
                                                        ?>>Inactivo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <button id="archive-boton" type="submit" class="btn btn-primary">Guardar</button>
                                            <button class="btn btn-danger" type="reset" onclick="cancel_archives('<?php echo $course_id; ?>');">Cancelar</button>                    
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
<script src="<?php echo site_url() . 'assets/cms/js/archives.js' ?>"></script>
