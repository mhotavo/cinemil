<?php namespace Core\Controllers;
use Core\Models\Json as Json;


class AdmixController{

	private $Json;

	public function __construct(){
		$this->Json = new Json();

	}

	public function panel(){
		if (!empty($_SESSION['app_id'])) {
			//echo 	$_SESSION['app_id'];
		} else {
			//echo 	$_SESSION['app_id'];
				//header("Location:" . URL . "index");
		}
	}


}

$Salones= new AdmixController();


?>