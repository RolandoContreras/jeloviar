<div class="pcoded-main-container">
  <div class="pcoded-wrapper">
    <div class="pcoded-content">
      <div class="pcoded-inner-content">
        <div class="page-header">
          <div class="page-block">
            <div class="row align-items-center">
              <div class="col-md-12">
                <div class="page-header-title">
                  <h5 class="m-b-10">Formulario de Profesores</h5>
                </div>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item">
                      <a href="<?php echo site_url().'dashboard/panel';?>">
                          <span class="pcoded-micon"><i data-feather="home"></i></span>
                      </a>
                  </li>
                  <li class="breadcrumb-item"><a href="<?php echo site_url().'dashboard/profesores';?>">Listado de Profesores</a></li>
                  <li class="breadcrumb-item"><a href="#!">Profesores</a></li>
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
                    <form enctype="multipart/form-data" method="post" action="<?php echo site_url()."dashboard/profesores/validate";?>">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <?php 
                                if(isset($obj_teacher)){ ?>
                                  <div class="form-group">
                                        <label>ID</label>
                                        <input class="form-control" type="text" value="<?php echo isset($obj_teacher->teacher_id)?$obj_teacher->teacher_id:"";?>" class="input-xlarge-fluid" placeholder="ID" disabled="">
                                        <input type="hidden" id="teacher_id" name="teacher_id" value="<?php echo isset($obj_teacher->teacher_id)?$obj_teacher->teacher_id:"";?>">
                                  </div>
                            <?php } ?>
                            </div>
                          <div class="form-group col-md-6">
                              <div class="form-group">
                                <label>Nombre</label>
                                <input class="form-control" type="text" id="name" name="name" value="<?php echo isset($obj_teacher->name)?$obj_teacher->name:"";?>" class="input-xlarge-fluid" placeholder="Nombre">
                              </div>
                              <div class="form-group">
                                <label>Profesión</label>
                                <input class="form-control" type="text" id="profetion" name="profetion" value="<?php echo isset($obj_teacher->profetion)?$obj_teacher->profetion:"";?>" class="input-xlarge-fluid" placeholder="Profesion / Especialidad">
                              </div>
                              <div class="form-group">
                               <label>Descripción</label>
                                   <textarea name="description" id="description" placeholder="Descripción"><?php echo isset($obj_teacher->description)?$obj_teacher->description:"";?></textarea>
                                    <script>
                                            CKEDITOR.replace('description');
                                    </script>
                              </div>
                          </div>
                          <div class="form-group col-md-6">
                              <?php 
                                  if(isset($obj_teacher)){ ?>
                                      <div class="form-group">
                                          <label>Imagen 1</label><br/>
                                          <img src='<?php echo site_url()."assets/cms/img/profesores/$obj_teacher->img";?>' width="100" />
                                          <input class="form-control" type="hidden" name="img2" id="img2" value="<?php echo isset($obj_teacher)?$obj_teacher->img:"";?>">
                                      </div>
                            <?php } ?>
                              <div class="form-group">
                                    <label>Imagen 1 (Tamaño 150 x 150)</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile" value="Upload Imagen de Envio" name="image_file" id="image_file">
                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                    </div>
                              </div>
                           <div class="form-group">
                                <label>Twitter</label>
                                <input class="form-control" type="text" id="twiter" name="twiter" value="<?php echo isset($obj_teacher->twiter)?$obj_teacher->twiter:"";?>" class="input-xlarge-fluid" placeholder="Enlace de Twitter">
                          </div>
                          <div class="form-group">
                                <label>Facebook</label>
                                <input class="form-control" type="text" id="facebook" name="facebook" value="<?php echo isset($obj_teacher->facebook)?$obj_teacher->facebook:"";?>" class="input-xlarge-fluid" placeholder="Enlace de Facebbok">
                          </div>
                          <div class="form-group">
                                <label>Instagram</label>
                                <input class="form-control" type="text" id="instagram" name="instagram" value="<?php echo isset($obj_teacher->instagram)?$obj_teacher->instagram:"";?>" class="input-xlarge-fluid" placeholder="Enlace de Instagram">
                          </div>
                              <div class="form-group">
                                <label for="inputState">Estado</label>
                                    <select name="active" id="active" class="form-control">
                                     <option value="">[ Seleccionar ]</option>
                                      <option value="1" <?php if(isset($obj_teacher)){
                                          if($obj_teacher->active == 1){ echo "selected";}
                                      }else{echo "";} ?>>Activo</option>
                                      <option value="0" <?php if(isset($obj_teacher)){
                                          if($obj_teacher->active == 0){ echo "selected";}
                                      }else{echo "";} ?>>Inactivo</option>
                                </select>
                            </div>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button class="btn btn-danger" type="reset" onclick="cancel_teacher();">Cancelar</button>                    
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
<script src="<?php echo site_url().'assets/cms/js/profesores.js'?>"></script>