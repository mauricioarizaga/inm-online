 <?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Inmob_Model extends CI_Model
{
    public function validate($dni, $password)
    {
        $this->db->where('dni', $dni);
        $this->db->where('password', $password);
        $result = $this->db->get('personas', 1);
        return $result;
    }

    public function crear_persona($datos)
    {

        $this->db->insert('personas', $datos);
    }

    public function crear_direccion($valoresQ,$return)
    {       
    //Por ahora no la vamos a utilizar
    }

    public function crear_mail($mail)
    {
 
        $this->db->insert('emails', $mail);
   }
    public function crear_tel($tel)
    {
      
        $this->db->insert('telefonos', $tel);
    }

}