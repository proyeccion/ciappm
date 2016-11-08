<?php
class Mamifero extends CI_controller{
	private  $edad = 0;
    public function crecer(){
    	$this->edad +=1; //$this->edad = $this->edad +1;
    	//echo "Ahora tiene {$this->edad} años <br>";
    	$datos = array();

        $datos['edad2'] = $this->edad;
        $datos['nombre'] = "Magaly";

    	$this->load->view("vista_edad", $datos );















    }

}


?>