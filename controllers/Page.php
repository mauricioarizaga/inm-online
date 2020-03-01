<?php 
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
 
class Page extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_in') !== true) {
            redirect('login');
        } 
    }

    public function index()
    {
       
        $roles = $this->session->userdata('id_rol');
        $this->load->view('templates/header');
        switch ($roles) {
            case ($roles=0 || $roles=1):
                echo '<div class="container">';
                $this->load->view('admin_view');
                echo '</div>';
                break;
            case 2:
                $this->load->view('inmobiliaria_view');
                break;
            case 3:
                $this->load->view('propietario_view');
                break;
            case 4:
                $this->load->view('inquilino_view');
                break;
            default:
                echo "Acceso denegado. Este usuario no tiene un rol asignado.";
                break;

        }
    }

    public function agregar_personas()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/registro');
        $this->load->view('templates/footer');

    }

    public function registro_var_dir()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/registro_variable');
        $this->load->view('templates/footer');

    }
    public function registro_var_email()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/registro_variable_email');
        $this->load->view('templates/footer');

    }
    public function registro_var_tel()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/registro_variable_tel');
        $this->load->view('templates/footer');

    }
    public function agregar_inmueble()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/agregar_inmueble');
        $this->load->view('templates/footer');

    }
    public function ingresar_archivos()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/ingresar_archivos');
        $this->load->view('templates/footer');

    }
  
    /* function index(){
//Solo Admin
if($this->session->userdata('level')==='1'){
$this->load->view('dashboard_view');
}else{
echo "Access Denied";
}

}

function propietario(){
//Solo Propietarios
if($this->session->userdata('level')==='2'){
$this->load->view('dashboard_view');
}else{
echo "Access Denied";
}
}

function inquilinos(){
//Solo inquilinos
if($this->session->userdata('level')==='3'){
$this->load->view('dashboard_view');
}else{
echo "Access Denied";
}
}
function guest(){
//Allowing akses to author only
if($this->session->userdata('level')==='4'){
$this->load->view('dashboard_view');
}else{
echo "Access Denied";
}
}
function author(){
//Allowing akses to author only
if($this->session->userdata('level')==='5'){
$this->load->view('dashboard_view');
}else{
echo "Access Denied";
}
}

 */

}
