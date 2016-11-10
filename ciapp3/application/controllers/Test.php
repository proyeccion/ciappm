<?php


class Test extends  CI_Controller{

    public function fecha(){
    $this->load->model('test_model');
	$f = $this->test_model->fecha();
	//echo $f;
	
	$datos = array();
	$datos['fecha'] = $f;
	$datos['nombre'] = 'magaly';




	$this->load->view('fecha',$datos);

	




    }

 }
 ?>
