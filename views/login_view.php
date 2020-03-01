<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Iniciar Sesión</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
  </head>
  <body>

      <div class="container">
       <div class="col-md-4 col-md-offset-4">
         <form class="form-signin" action="<?php echo site_url('login/auth');?>" method="post">
           <h2 class="form-signin-heading">Por favor, inicie sesión</h2>
           <?php echo $this->session->flashdata('msg');?>
           <label for="dni" class="sr-only">Dni</label>
           <input type="dni" name="dni" class="form-control" placeholder="dni" required autofocus>
           <label for="password" class="sr-only">Contraseña</label>
           <input type="password" name="password" class="form-control" placeholder="Password" required>
           <div class="checkbox">
             
           </div>
           <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
         </form>
       </div>
       </div> <!-- /container -->
 
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>