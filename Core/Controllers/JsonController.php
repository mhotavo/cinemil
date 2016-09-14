<?php namespace Core\Controllers;
use Core\Models\Json as Json;


class JsonController{

	private $Json;

	public function __construct(){
		$this->Json = new Json();

	}

	public function Categoria(){
		#listar Salones
		$datos=$this->Json->categoria();
		echo json_encode( $datos, JSON_UNESCAPED_UNICODE );
	}

 

	

}

$Salones= new JsonController();


?>