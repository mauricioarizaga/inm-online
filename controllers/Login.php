<?php 
if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('Inmob_Model');
  }
  
  function index(){
    $this->load->view('login_view');
  } 
 
  function auth(){
    $dni    = $this->input->post('dni',TRUE);
    $password = md5($this->input->post('password',TRUE));
    $validate = $this->Inmob_Model->validate($dni,$password);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $nombre_completo = $data['nombre_completo'];
        $dni = $data['dni'];
        $level = $data['id_rol'];
        $sesdata = array(
            'nombre_completo'  => $nombre_completo,
            'email'     => $email,
            'id_rol'     => $level,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
            redirect('index');
        }else{
        echo $this->session->set_flashdata('msg','Dni o Password es incorrecto');
        redirect('login');
    }
  }
 
  function logout(){
      $this->session->sess_destroy();
      redirect('Login');
  }
 
}
?>