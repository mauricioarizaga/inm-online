<form class="form-horizontal" action="<?php echo base_url('personas/store');?>" method="post">
<fieldset>


<div class="col-sm-10 col-sm offset-1">
<legend>Registro Personas</legend>
<div class="form-group">
  <label class="col-md-4 control-label" for="nombre_completo">Nombre Completo/Empresa</label>  
  <div class="col-md-5">
  <input id="nombre_completo" name="nombre_completo" type="text" placeholder="" class="form-control input-md" required="">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="dni">Dni/Pasaporte</label>  
  <div class="col-md-4">
  <input id="dni" name="dni" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="password">Contraseña</label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="fecha_nac">Fecha de Nacimiento</label>  
  <div class="col-md-4">
  <input id="fecha_nac" name="fecha_nac" type="date" placeholder="" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="nacionalidad">Nacionalidad</label>  
  <div class="col-md-4">
  <input id="nacionalidad" name="nacionalidad" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="observaciones">Observaciones</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="observaciones" name="observaciones"></textarea>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Siguiente</button>
  </div>
  </div>
</div>
</fieldset>
</form>
