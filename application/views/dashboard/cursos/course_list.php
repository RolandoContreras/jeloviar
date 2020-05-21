<script src="<?php echo site_url() . 'assets/cms/js/core/bootbox.locales.min.js'; ?>"></script>
<script src="<?php echo site_url() . 'assets/cms/js/core/bootbox.min.js'; ?>"></script>
<section class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Mantenimientos de Cursos</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url() . 'dashboard/'; ?>">Panel</a></li>
                                    <li class="breadcrumb-item"><a>Cursos</a></li>
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
                                        <h5>Listado de Cursos</h5>
                                        <button class="btn btn-secondary" type="button" onclick="new_course();"><span><span class="pcoded-micon"><i data-feather="plus"></i></span> Nuevo</span></button>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <div id="zero-configuration_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table id="zero-configuration" class="display table nowrap table-striped table-hover dataTable" style="width: 100%;" role="grid" aria-describedby="zero-configuration_info">
                                                            <thead>
                                                                <tr role="row">
                                                                    <th class="sorting_asc" tabindex="0" rowspan="1" colspan="1" style="width: 150px;">ID</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">Fecha de Creación</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">Nombre</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">Categoría</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">Profesor</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">Precio</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">Imagen</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">Estado</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">Acciones</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                <?php foreach ($obj_courses as $value): ?>
                                                                    <tr>
                                                                        <th><?php echo $value->course_id; ?></th>
                                                                        <td><?php echo formato_fecha_barras($value->date); ?></td>
                                                                        <td><span class="badge badge-pill badge-info" style="font-size: 100%;"><?php echo $value->name; ?></span></td>
                                                                        <td><?php echo $value->category_name;?></td>
                                                                        <td><?php echo $value->teacher;?></td>
                                                                        <td>
                                                                            <span class="badge badge-pill badge-warning" style="font-size: 100%;">	&#8364; <?php echo $value->price; ?></span>
                                                                        </td>
                                                                        <td>
                                                                            <a href="<?php echo site_url() . "assets/cms/img/cursos/$value->img"; ?>" data-lightbox="roadtrip">
                                                                                <i class="fas fa-eye f-30 text-c-green"></i>
                                                                            </a>
                                                                        </td>
                                                                        <td>
                                                                            <?php
                                                                            if ($value->active == 0) {
                                                                                $valor = "No Activo";
                                                                                $stilo = "badge-danger";
                                                                            } else {
                                                                                $valor = "Activo";
                                                                                $stilo = "badge-success";
                                                                            }
                                                                            ?>
                                                                            <span class="badge badge-pill <?php echo $stilo ?>" style="font-size:90%;"><?php echo $valor; ?></span>
                                                                        </td>
                                                                        <td>
                                                                            <div class="operation">
                                                                                <div class="btn-group">
                                                                                    <button class="btn btn-secondary" type="button" onclick="edit_course('<?php echo $value->course_id; ?>');"><span><span class="pcoded-micon"><i data-feather="edit"></i></span> Editar</span></button>
                                                                                    <button class="btn btn-secondary" type="button" onclick="delete_course('<?php echo $value->course_id; ?>');"><span><span class="pcoded-micon"><i data-feather="trash-2"></i></span> Eliminar</span></button>
                                                                                    <button class="btn btn-secondary" type="button" onclick="view_modulos('<?php echo $value->course_id; ?>');"><span><span class="pcoded-micon"><i data-feather="eye"></i></span> Módulos</span></button>
                                                                                    <button class="btn btn-secondary" type="button" onclick="view_videos('<?php echo $value->course_id; ?>');"><span><span class="pcoded-micon"><i data-feather="eye"></i></span> Vídeos</span></button>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                <?php endforeach; ?>
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <th rowspan="1" colspan="1">ID</th>
                                                                    <th rowspan="1" colspan="1">Fecha de Creación</th>
                                                                    <th rowspan="1" colspan="1">Nombre</th>
                                                                    <th rowspan="1" colspan="1">Categoría</th>
                                                                    <th rowspan="1" colspan="1">Profesor</th>
                                                                    <th rowspan="1" colspan="1">Precio</th>
                                                                    <th rowspan="1" colspan="1">Imagen</th>
                                                                    <th rowspan="1" colspan="1">Estado</th>
                                                                    <th rowspan="1" colspan="1">Acciones</th>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
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
</section>
<script src="<?php echo site_url() . 'assets/cms/js/cursos.js'; ?>"></script>
<link rel="stylesheet" href="<?php echo site_url() . 'assets/cms/css/lightbox.min.css'; ?>">
<script src="<?php echo site_url() . 'assets/cms/js/core/lightbox.js'; ?>"></script>