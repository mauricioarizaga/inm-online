<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}
?>
<script type="text/javascript" src="<?php echo base_url('assets/js/custom.js');?>"></script>
<div class="row">
<div class="col-12 col-md-12">
<br />
<div class="form-group">
<form method="post">
				<table class="table bg-info"  id="tabla">
					<tr class="fila-fija">
						<td><input type="email" required name="email[]" placeholder="Email"/></td>
						<td class="eliminar"><input type="button" value="Eliminar"/></td>
                        <td></td>
                        <td></td>
					</tr>
				</table>
				<div class="btn-der">
					<input type="submit" name="insertar" value="Enviar" class="btn btn-info"/>
					<button id="adicional" name="adicional" type="button" class="btn btn-warning">Agregar campo</button>
					

				</div>
			</form>
</div>
</div>
</div>
<?php
if(isset($_POST['insertar']))

{
		$this->db->SELECT('id_persona');
	//	$this->db->AS('id_direccion_persona');
		$this->db->from('personas');
		$this->db->ORDER_BY('id_persona','DESC');
		$this->db->LIMIT(1);
		$sql=$this->db->get();
		$retorno = $sql->row();
		$valor_id =$retorno->id_persona;                    
$items1 = ($_POST['email']);

while(true) {

	$item1 = current($items1);

	$em=(( $item1 !== false) ? $item1 : ", &nbsp;");     
	
//print_r($retorno);
	
	$array_insert = array(
		'email' => $em,
		'id_rel_email' => $retorno->id_persona

	);


	$this->db->insert('emails', $array_insert);
	


	// Up! Next Value
	$item1 = next( $items1 );
 /*   $item2 = next( $items2 );
	$item3 = next( $items3 );
	$item4 = next( $items4 );
 */   
	// Check terminator
	if($item1 === false) break;

}
redirect('registro_variable_tel');
}
?>