<div class="pcoded-main-container">
  <div class="pcoded-wrapper">
    <div class="pcoded-content">
      <div class="pcoded-inner-content">
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-12">
                <div class="page-header-title">
                  <h5 class="m-b-10">Formulario de Boletin</h5>
                </div>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo site_url().'dashboard/panel';?>">
                          <span class="pcoded-micon"><i data-feather="home"></i></span>
                          </a></li>
                  <li class="breadcrumb-item"><a href="<?php echo site_url().'dashboard/boletin';?>">Listado de Boletines</a></li>
                  <li class="breadcrumb-item"><a href="#!">Boletin</a></li>
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
                        <form enctype="multipart/form-data" method="post" action="javascript:void(0);" onsubmit="validate_boletin();">
                        <div class="form-row">
                          <div class="form-group col-md-6">
                              <?php if(isset($obj_category)){ ?>
                                        <div class="form-group">
                                            <label>ID</label>
                                            <input class="form-control" type="text" value="<?php echo isset($obj_boletin)?$obj_boletin->boletin_id:"";?>" class="input-xlarge-fluid" placeholder="ID" disabled="">
                                        </div>
                              <?php } ?>
                              <input type="hidden" name="boletin_id" id="boletin_id" value="<?php echo isset($obj_boletin)?$obj_boletin->boletin_id:"";?>">
                              <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" id="email" name="email" value="<?php echo isset($obj_boletin->email)?$obj_boletin->email:"";?>" class="input-xlarge-fluid" placeholder="Email" required="">
                              </div>
                          </div>
                          <div class="form-group col-md-6">
                              <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputState">Estado</label>
                                    <select name="active" id="active" class="form-control" required="">
                                         <option value="">[ Seleccionar ]</option>
                                          <option value="1" <?php if(isset($obj_boletin)){
                                              if($obj_boletin->active == 1){ echo "selected";}
                                          }else{echo "";} ?>>Activo</option>
                                          <option value="0" <?php if(isset($obj_boletin)){
                                              if($obj_boletin->active == 0){ echo "selected";}
                                          }else{echo "";} ?>>Inactivo</option>
                                    </select>

                                </div>
                            </div>
                          </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button class="btn btn-danger" type="reset" onclick="cancel_boletin();">Cancelar</button>                    
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
<script src="<?php echo site_url();?>assets/cms/js/boletin.js"></script>
