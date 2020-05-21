<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Formulario de Clientes</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo site_url() . 'dashboard/panel'; ?>">
                                            <span class="pcoded-micon"><i data-feather="home"></i></span>
                                        </a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo site_url() . 'dashboard/clientes'; ?>">Listado de Clientes</a></li>
                                    <li class="breadcrumb-item"><a href="#!">Cliente</a></li>
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
                                        <form enctype="multipart/form-data" method="post" action="javascript:void(0);" onsubmit="validate_customer();">
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <div class="form-group">
                                                        <label>ID</label>
                                                        <input class="form-control" type="text" id="customer_id" name="customer_id" value="<?php echo isset($obj_customer->customer_id) ? $obj_customer->customer_id : ""; ?>" class="input-xlarge-fluid" placeholder="ID" disabled="">
                                                        <input type="hidden" name="customer_id" id="customer_id" value="<?php echo isset($obj_customer) ? $obj_customer->customer_id : ""; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div class="form-group">
                                                        <label>Nombres</label>
                                                        <input class="form-control" type="text" id="name" name="name" value="<?php echo isset($obj_customer->name) ? $obj_customer->name : ""; ?>" class="input-xlarge-fluid" placeholder="Nombre" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Apellidos</label>
                                                        <input class="form-control" type="text" id="last_name" name="last_name" value="<?php echo isset($obj_customer->last_name) ? $obj_customer->last_name : ""; ?>" class="input-xlarge-fluid" placeholder="Apellidos" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Contraseña</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="validationTooltipUsernamePrepend" style="cursor: pointer;" onclick="show_pass();"><i class="fa fa-eye"></i></span>
                                                            </div>
                                                            <input class="form-control" type="password" id="password" name="password" value="<?php echo isset($obj_customer->password) ? $obj_customer->password : ""; ?>" class="input-xlarge-fluid" placeholder="Password" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>E-mail</label>
                                                        <input class="form-control" type="email" id="email" name="email" value="<?php echo isset($obj_customer->email) ? $obj_customer->email : ""; ?>" class="input-xlarge-fluid" placeholder="Correo Electrónico" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Teléfono</label>
                                                        <input class="form-control" type="text" id="phone" name="phone" value="<?php echo isset($obj_customer->phone) ? $obj_customer->phone : ""; ?>" class="input-xlarge-fluid" placeholder="Teléfono">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Bio</label>
                                                        <textarea class="form-control" id="bio" name="bio" rows="3"><?php echo isset($obj_customer->bio) ? $obj_customer->bio : ""; ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div class="form-group">
                                                        <label>Facebook</label>
                                                        <input class="form-control" type="text" id="facebook" name="facebook" value="<?php echo isset($obj_customer->facebook) ? $obj_customer->facebook : ""; ?>" class="input-xlarge-fluid" placeholder="Enlace de Facebook">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Twitter</label>
                                                        <input class="form-control" type="text" id="twitter" name="twitter" value="<?php echo isset($obj_customer->twitter) ? $obj_customer->twitter : ""; ?>" class="input-xlarge-fluid" placeholder="Enlace de Twitter">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Instagram</label>
                                                        <input class="form-control" type="text" id="instagram" name="instagram" value="<?php echo isset($obj_customer->instagram) ? $obj_customer->instagram : ""; ?>" class="input-xlarge-fluid" placeholder="Enlace de Instagram">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Google +</label>
                                                        <input class="form-control" type="text" id="google" name="google" value="<?php echo isset($obj_customer->google) ? $obj_customer->google : ""; ?>" class="input-xlarge-fluid" placeholder="Enlace de Google +">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label>Fecha de Creación</label>
                                                        <input class="form-control" type="text" id="date" name="date" class="input-small-fluid" placeholder="Fecha de Creación" value="<?php echo isset($obj_customer->date) ? formato_fecha($obj_customer->date) : ""; ?>" disabled="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputState">Pais</label>
                                                        <select name="pais" id="pais" class="form-control" required>
                                                            <option value="">[ Seleccionar ]</option>
                                                            <?php foreach ($obj_paises as $value): ?>
                                                                <option value="<?php echo $value->id; ?>"
                                                                <?php
                                                                if (isset($obj_customer->country)) {
                                                                    if ($obj_customer->country == $value->id) {
                                                                        echo "selected";
                                                                    }
                                                                } else {
                                                                    echo "";
                                                                }
                                                                ?>><?php echo $value->nombre; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="inputState">Estado</label>
                                                        <select name="active" id="active" class="form-control" required>
                                                            <option value="">[ Seleccionar ]</option>
                                                            <option value="1" <?php
                                                            if (isset($obj_customer)) {
                                                                if ($obj_customer->active == 1) {
                                                                    echo "selected";
                                                                }
                                                            } else {
                                                                echo "";
                                                            }
                                                            ?>>Activo</option>
                                                            <option value="0" <?php
                                                            if (isset($obj_customer)) {
                                                                if ($obj_customer->active== 0) {
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
                                            <button type="submit" class="btn btn-primary">Guardar</button>
                                            <button class="btn btn-danger" type="reset" onclick="cancelar_customer();">Cancelar</button>                    
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
<script src="<?php echo site_url() . 'assets/cms/js/customer.js' ?>"></script>
<script>
  function show_pass(){
      var tipo = document.getElementById("password");
      if(tipo.type == "password"){
          tipo.type = "text";
      }else{
          tipo.type = "password";
      }
  }
</script>