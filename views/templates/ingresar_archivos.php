<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
   
   
    $atributos = array(
            'name'        => 'file[]',
            'class' => 'btn btn-outline-primary btn-sm'
    );
    $atributos2 = array(
        'class' => 'btn btn-outline-success btn-sm'
    );
	echo form_open_multipart(base_url('upload/multiple_upload'));
	echo form_label('<br>Ingrese los archivos para asociar al inmueble cargado');
    echo form_upload($atributos, 'multiple');
    echo form_submit(null, 'Subir',$atributos2);
    echo form_close();
	?>