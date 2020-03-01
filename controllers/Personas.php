<?php 
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
} 

class Personas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_in') !== true) {
            redirect('login');
        }
        $this->load->library(array('form_validation', 'email'));
        $this->load->model('Inmob_Model');
    }

    public function store()
    { 
        $nombre_completo = $this->input->post('nombre_completo');
        $dni = $this->input->post('dni');
        $password = md5($this->input->post('password'));
        $fecha_nac = $this->input->post('fecha_nac');
        $nacionalidad = $this->input->post('nacionalidad');
        $observaciones = $this->input->post('observaciones');
        $token = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 10);
        $datos = array(
            'nombre_completo' => $nombre_completo,
            'dni' => $dni,
            'password' => $password,
            'fecha_nac' => $fecha_nac,
            'nacionalidad' => $nacionalidad,
            'observaciones' => $observaciones,
            'token' => $token,
        ); 

        $this->Inmob_Model->crear_persona($datos);
        $this->session->set_flashdata('msg', 'El usuario ha sido registrado');
        redirect('registro_variable_dir');
    }

    public function store_dinamico()
    { 

			//Nada por el momento
				}
}