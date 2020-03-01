<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Bienvenidos - Acceso Sistema Inmobiliario</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/csspropios.css');?>" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  </head>
  <body>
      <nav class="navbar navbar-expand-md navbar-light bg-light " style="text-decoration:none">
      <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse-target">
      <span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="collapse-target">        
    <span class="navbar-brand hidden-md-down">Bienvenido, <?php echo $this->session->userdata('nombre_completo');?></span>
    <ul class="nav navbar-nav mr-auto no">
    
    <?php //Acceso SuperAdmin - Admin
           if($this->session->userdata('id_rol')=="0" || $this->session->userdata('id_rol')=="1"):?>        
            <li class="navbar item"><a class="navbar-link nounderline" href="index"> Inicio</a></li>
            <li class="navbar item"><a class="navbar-link nounderline" href="registro_personas"> Agregar persona</a></li>
            <li class="navbar item"><a class="navbar-link nounderline" href="agregar_inmueble"> Agregar inmueble</a></li>
            <li class="navbar item"><a class="navbar-link nounderline" href="#"> Incidencias</a></li>
            <li class="navbar item"><a class="navbar-link nounderline" href="#"> Buscador</a></li>
            <li class="navbar item"><a class="navbar-link nounderline" href="#"> Editar Perfil</a></li>
            <li class="navbar item"><a class="navbar-link nounderline" href="#"> Opciones</a></li>
            <li class="navbar item"><a class="navbar-link nounderline" href="<?php echo site_url('login/logout');?>">Cerrar Sesion</a></li>
            </ul></div>
            </nav>

                <?php //MENU ACCESO ROL 2 
                elseif($this->session->userdata('id_rol')=='2'):?>
                  <li class="active"><a href="#">Dashboard </a></li>
                  <li><a href="#">Pages2 </a></li>
                  <li><a href="#">Media </a></li>
                 
                <?php //MENU ACCESO ROL 3 -->
                 elseif($this->session->userdata('id_rol')=='3'):?>
                  <li class="active"><a href="#">Dashboard </a></li>
                  <li><a href="#">Pages3 </a></li>
                  <li><a href="#">Media </a></li>
                   
                <?php //MENU ACCESO ROL 4 -->
                elseif($this->session->userdata('id_rol')=='4'):?>
                  <li class="active"><a href="#">Dashboard </a></li>
                  <li><a href="#">Pages4 </a></li>
                  <li><a href="#">Media </a></li>
                 
                <?php //MENU ACCESO ROL 5 -->
             else:?>
                  <li class="active"><a href="#">Dashboard</a></li>
                  <li><a href="#">No se te ha asignado rol. Contacta al administrador por mail a: mauricioarizaga@hotmail.com</a></li>
                <?php endif;?>
              
      
 