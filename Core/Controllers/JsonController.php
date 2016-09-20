<?php namespace Core\Controllers;
use Core\Models\Json as Json;


class JsonController{

	private $Json;

	public function __construct(){
		$this->Json = new Json();

	}

	public function Categoria(){
		$datos=$this->Json->categoria();
		echo json_encode( $datos, JSON_UNESCAPED_UNICODE );
	}

	public function Productora(){
		$datos=$this->Json->productora();
		echo json_encode( $datos, JSON_UNESCAPED_UNICODE );
	}


	public function Genero(){
		$datos=$this->Json->genero();
		echo json_encode( $datos, JSON_UNESCAPED_UNICODE );
	}


	public function Login(){
		$datos=$this->Json->login();
		echo json_encode( $datos, JSON_UNESCAPED_UNICODE );
	}
	

}

$Salones= new JsonController();


?>