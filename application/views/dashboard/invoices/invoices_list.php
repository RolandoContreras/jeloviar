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
                                    <h5 class="m-b-10">Mantenimientos de Facturas</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url() . 'dashboard/'; ?>">Panel</a></li>
                                    <li class="breadcrumb-item"><a>Facturas</a></li>
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
                                        <h5>Listado de Facturas</h5>
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
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">Fecha</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">Cliente</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">Usuario</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">Curso</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">Importe</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">Estado</th>
                                                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1">Acciones</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach ($obj_invoices as $key => $value): ?>
                                                                <td><?php echo $value->invoice_id; ?></td>
                                                                <td><?php echo formato_fecha_barras($value->date); ?></td>
                                                                <td><?php echo $value->name; ?></td>
                                                                <td><?php echo "@" . $value->email; ?></td>
                                                                <td><span class="badge badge-pill badge-info" style="font-size: 90%;"><?php echo $value->course_name; ?></span></td>
                                                                <td>
                                                                    <span class="badge badge-pill badge-warning" style="font-size: 100%;">
                                                                        	&#8364;<?php echo $value->total; ?>
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                    if ($value->active == 1) {
                                                                        $valor = "Esperando Activación";
                                                                        $stilo = "badge-warning";
                                                                    } elseif ($value->active == 2) {
                                                                        $valor = "Procesado";
                                                                        $stilo = "badge-success";
                                                                    } elseif ($value->active == 0) {
                                                                        $valor = "Sin Acción";
                                                                        $stilo = "badge-info";
                                                                    } else {
                                                                        $valor = "Cancelado";
                                                                        $stilo = "badge-danger";
                                                                    }
                                                                    ?>
                                                                    <span class="badge badge-pill <?php echo $stilo ?>" style="font-size: 100%;"><?php echo $valor; ?></span>
                                                                </td>
                                                                <td>
                                                                    <div class="operation">
                                                                        <div class="btn-group">
                                                                            <button class="btn btn-secondary" type="button" onclick="edit_invoices('<?php echo $value->invoice_id; ?>');"><span class="pcoded-micon"><i data-feather="edit"></i></span> Editar</button>
                                                                            <button class="btn btn-secondary" type="button" onclick="delete_invoices('<?php echo $value->invoice_id; ?>');"><span><span class="pcoded-micon"><i data-feather="trash-2"></i></span> Eliminar</span></button>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                </tr>
<?php endforeach; ?>
                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <th rowspan="1" colspan="1">ID</th>
                                                                    <th rowspan="1" colspan="1">Fecha</th>
                                                                    <th rowspan="1" colspan="1">Cliente</th>
                                                                    <th rowspan="1" colspan="1">Usuario</th>
                                                                    <th rowspan="1" colspan="1">Curso</th>
                                                                    <th rowspan="1" colspan="1">Importe</th>
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
<script src="<?php echo site_url(); ?>assets/cms/js/facturas.js"></script>