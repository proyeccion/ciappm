<?php
class Test_model extends CI_Model{

public function fecha(){
	//echo "test";
	$sql = "SELECT NOW() as fecha";
	$res = $this->db->query($sql);
	$fila = $res->row_array();
	return $fila['fecha'];

	



















  }

}

?>