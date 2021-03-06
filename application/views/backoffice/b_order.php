<section class="pcoded-main-container">
  <div class="pcoded-wrapper">
    <div class="pcoded-content">
      <div class="pcoded-inner-content">
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-12">
                <div class="page-header-title">
                  <h5 class="m-b-10">Mis Compras</h5>
                </div>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a>Compras</a></li>
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
                    <h5>Todas mis Compras</h5>
                  </div>
                  <div class="card-block">
                    <div class="table-responsive">
                      <div id="zero-configuration_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                          <div class="col-sm-12">
                            <table id="zero-configuration" class="display table nowrap table-striped table-hover dataTable" style="width: 100%;" role="grid" aria-describedby="zero-configuration_info">
                              <thead>
                                <tr role="row">
                                  <th class="sorting_asc" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" style="width: 100px;" aria-sort="ascending"
                                    aria-label="Name: activate to sort column descending">ID Compra</th>
                                  <th class="sorting" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" style="width: 100px;"
                                    aria-label="Position: activate to sort column ascending">Fecha</th>
                                  <th class="sorting" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" style="width: 150px;"
                                    aria-label="Office: activate to sort column ascending">Cliente</th>
                                  <th class="sorting" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" style="width: 200px;"
                                    aria-label="Office: activate to sort column ascending">Concepto</th>
                                  <th class="sorting" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" style="width: 100px;"
                                    aria-label="Age: activate to sort column ascending">Total</th>
                                  <th class="sorting" tabindex="0" aria-controls="zero-configuration" rowspan="1" colspan="1" style="width: 100px;"
                                    aria-label="Age: activate to sort column ascending">Estado</th>
                                </tr>
                              </thead>
                              <tbody>
                                  
                                   <?php foreach ($obj_invoices as $value): ?>
                                <tr>
                                <th><?php echo $value->invoice_id;?></th>
                                <th><?php echo formato_fecha_barras($value->date);?></th>
                                <td>@<?php echo $value->name;?></td>
                                <td>Compra del curso - <?php echo $value->course_name;?></td>
                                <td class="text-c-green">
                                    <span class="badge badge-pill badge-success" style="font-size: 100%;">S/. <?php echo $value->total;?></span>
                                </td>
                                <td>
                                    <?php if ($value->active == 1) {
                                        $valor = "Pendiente";
                                        $stilo = "label label-warning";
                                    }else if($value->active == 2){
                                        $valor = "Procesado";
                                        $stilo = "label label-success";
                                    }else if($value->active == 0){
                                        $valor = "Sin Acción";
                                        $stilo = "label label-info";
                                    }else{
                                        $valor = "Cancelado";
                                        $stilo = "label label-danger";
                                    } ?>
                                    <span class="<?php echo $stilo;?>"><?php echo $valor;?></span>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                              </tbody>
                              <tfoot>
                                <tr>
                                  <th rowspan="1" colspan="1">ID Compra</th>
                                  <th rowspan="1" colspan="1">Fecha</th>
                                  <th rowspan="1" colspan="1">Cliente</th>
                                  <th rowspan="1" colspan="1">Concepto</th>
                                  <th rowspan="1" colspan="1">Total</th>
                                  <th rowspan="1" colspan="1">Estado</th>
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
<script src="<?php echo site_url();?>static/catalog/js/order.js"></script>