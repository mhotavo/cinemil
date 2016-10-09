<?php namespace Core\Controllers;
use Core\Models\Json as Json;


class JsonController{

	private $Json;

	public function __construct(){
		$this->Json = new Json();

	}

	public function categoria(){
		$datos=$this->Json->categoria();
		echo json_encode( $datos, JSON_UNESCAPED_UNICODE );
	}

	public function productora(){
		$datos=$this->Json->productora();
		echo json_encode( $datos, JSON_UNESCAPED_UNICODE );
	}


	public function genero(){
		$datos=$this->Json->genero();
		echo json_encode( $datos, JSON_UNESCAPED_UNICODE );
	}

	public function pais(){
		$datos=$this->Json->pais();
		echo json_encode( $datos, JSON_UNESCAPED_UNICODE );
	}

	public function calidad(){
		$datos=$this->Json->calidad();
		echo json_encode( $datos, JSON_UNESCAPED_UNICODE );
	}

	public function idioma(){
		$datos=$this->Json->idioma();
		echo json_encode( $datos, JSON_UNESCAPED_UNICODE );
	}

	public function fuente(){
		if (isset($_GET['fuente']) && !empty($_GET['fuente'])) {
			$this->Json->__set('id', $_GET['fuente']);
			$datos=$this->Json->nomFuente();
			echo $datos;
		} else {
			$datos=$this->Json->fuente();
			echo json_encode( $datos, JSON_UNESCAPED_UNICODE );			
		}
	}

	public function servidor(){
		if (isset($_GET['servidor']) && !empty($_GET['servidor'])) {
			$this->Json->__set('id', $_GET['servidor']);
			$datos=$this->Json->nomServidor();
			echo $datos;
		} else {
			$datos=$this->Json->servidor();
			echo json_encode( $datos, JSON_UNESCAPED_UNICODE );			
		}
	}

	public function enlaces(){
		if (isset($_GET['id']) && !empty($_GET['id'])) {
			$this->Json->__set('id', $_GET['id']);
			$datos=$this->Json->enlacesPelicula();
			echo json_encode( $datos, JSON_UNESCAPED_UNICODE );	
		} else {
			echo "Ha sucedido un error (O.o) "	;
		}
	}	
}

$Salones= new JsonController();


?>