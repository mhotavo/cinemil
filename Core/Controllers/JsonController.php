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

	public function Pais(){
		$datos=$this->Json->pais();
		echo json_encode( $datos, JSON_UNESCAPED_UNICODE );
	}

	public function Idioma(){
		$datos=$this->Json->idioma();
		echo json_encode( $datos, JSON_UNESCAPED_UNICODE );
	}

	public function Fuente(){
		$datos=$this->Json->fuente();
		echo json_encode( $datos, JSON_UNESCAPED_UNICODE );
	}

	public function Servidor(){
		if (isset($_GET['servidor']) && !empty($_GET['servidor'])) {
			$this->Json->__set('id', $_GET['servidor']);
			$datos=$this->Json->nomServidor();
			echo $datos;
		} else {
			$datos=$this->Json->servidor();
			echo json_encode( $datos, JSON_UNESCAPED_UNICODE );			
		}
	}

	
}

$Salones= new JsonController();


?>