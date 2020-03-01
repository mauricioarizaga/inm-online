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
						<td><select name="tipo_inmueble[]">
                         <option value="casa">Casa</option>
  <option value="departamento">Depto</option>
  <option value="oficina">Oficina</option>
  <option value="lote">Lote</option>
</select></td>
						<td><textarea name="descripcion[]" rows="3" cols="15"></textarea></td>
                        <td><input type="number" min="0" name="mts2[]" placeholder="Mtrs2"/></td>
                        <td><input type="number" min="0" name="ambientes[]" placeholder="Ambientes"/></td>
                        <td><input type="number" min="0" name="habitaciones[]" placeholder="Habitaciones"/></td>
                        <td><input type="text" name="ubicacion[]" placeholder="Ubicación"/></td>
                        <td><input type="number" min="0" name="valor_alquiler[]" placeholder="Valor Alquiler"/></td>
                        <td><input type="number" min="0" max="100" name="actualizacion[]" placeholder="Actualización Valor Alquiler"/></td>
                        <td class="eliminar"><input type="button" value="Eliminar"/></td>
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
/*		$this->db->SELECT('id_persona');
	//	$this->db->AS('id_direccion_persona');
		$this->db->from('personas');
		$this->db->ORDER_BY('id_persona','DESC');
		$this->db->LIMIT(1);
		$sql=$this->db->get();
		$retorno = $sql->row();
		$valor_id =$retorno->id_persona;                    
*/

$items1 = ($_POST['tipo_inmueble']);
$items2 = ($_POST['descripcion']);
$items3 = ($_POST['mts2']);
$items4 = ($_POST['ambientes']);
$items5 = ($_POST['habitaciones']);
$items6 = ($_POST['ubicacion']);
$items7 = ($_POST['valor_alquiler']);
$items8 = ($_POST['actualizacion']);

while(true) {

    $item1 = current($items1);
    $item2 = current($items2);
    $item3 = current($items3);
    $item4 = current($items4);
    $item5 = current($items5);
    $item6 = current($items6);
    $item7 = current($items7);
    $item8 = current($items8);
    
    

    $t_inm=(( $item1 !== false) ? $item1 : ", &nbsp;");
    $des=(( $item2 !== false) ? $item2 : ", &nbsp;");
    $mts2=(( $item3 !== false) ? $item3 : ", &nbsp;");
    $amb=(( $item4 !== false) ? $item4 : ", &nbsp;");
    $hab=(( $item5 !== false) ? $item5 : ", &nbsp;");
    $ubic=(( $item6 !== false) ? $item6 : ", &nbsp;");
    $v_alq=(( $item7 !== false) ? $item7 : ", &nbsp;");
    $v_act_alq=(( $item8 !== false) ? $item8 : ", &nbsp;");
       
	

	
	$array_insert = array(
		'inmueble_tipo' => $t_inm,
        'descripcion' => $des,
        'mts2' => $mts2,
        'ambientes' => $amb,
        'habitaciones' => $hab,
        'ubicacion' => $ubic,
        'valor_alquiler' => $v_alq,
        'actualizacion' => $v_act_alq

	);


	$this->db->insert('inmuebles', $array_insert);
	
   // print_r($this->db->last_query());

	// Up! Next Value
	$item1 = next( $items1 );
    $item2 = next( $items2 );
	$item3 = next( $items3 );
    $item4 = next( $items4 );
    $item5 = next( $items5 );
    $item6 = next( $items6 );
	$item7 = next( $items7 );
    $item8 = next( $items8 );
    
   
	// Check terminator
	if($item1 === false && $item2 === false && $item3 === false && $item4 === false && $item5 === false && $item6 === false && $item7 === false && $item8 === false) break;

}
redirect('ingresar_archivos');
}
?>