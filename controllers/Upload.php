<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->library(array(
			'custom_upload',
			'form_validation'
		));
		$this->load->helper('url');
	}
public function multiple_upload(){
         $this->db->SELECT('id_inmueble');
	//	$this->db->AS('id_direccion_persona');
		$this->db->from('inmuebles');
		$this->db->ORDER_BY('id_inmueble','DESC');
		$this->db->LIMIT(1);
		$sql=$this->db->get();
		$retorno = $sql->row();
		$valor_id =$retorno->id_inmueble;        
        $token = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 25);
        $file = $this->custom_upload->multiple_upload('file', array(
			'upload_path' => 'uploads/'.$valor_id.'/',
			'allowed_types' => 'jpg|jpeg|bmp|png|gif|pdf|doc|docx|txt' // etc
		));
		$image = array();
		foreach ($file as $f) {
			array_push($image, array(
                'archivo' => $f,
                'id_rel_inmueble' => $valor_id
			));
		}
		$this->db->insert_batch('archivos', $image);
		redirect(base_url('ingresar_archivos'));
    }
}
?>