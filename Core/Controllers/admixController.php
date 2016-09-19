<?php namespace Core\Controllers;
use Core\Models\Pelicula as Pelicula;


class AdmixController{

	private $Pelicula;

	public function __construct(){
		$this->Pelicula = new Pelicula();

	}

	public function panel(){
		if (!empty($_SESSION['app_id'])) {
			//echo 	$_SESSION['app_id'];
		} else {
			//echo 	$_SESSION['app_id'];
				//header("Location:" . URL . "index");
		}
	}

	public function agregar() {
		
		if ($_POST) {
			$formaato = array("image/jpeg", "image/png", "image/jpg");
			$limite     = 700;
			if (in_array($_FILES['inputImagen']['type'], $formaato) and $_FILES['inputImagen']['size'] <= $limite*1024) {
				$nombre = 'caratula_'.$_POST['tituloLatino'];
				$ruta   = "HTML/Admix/Capturas/".$nombre;
				move_uploaded_file($_FILES['inputImagen']['tmp_name'], $ruta);
			} else {
				$nombre = null;
			}
			$this->Profesores->__set("tituloOficial", ucwords(mb_strtolower($_POST['inputNombres'], 'UTF-8')));
			$this->Profesores->__set("tituloLatino", ucwords(mb_strtolower($_POST['inputNombres'], 'UTF-8')));
			$this->Profesores->__set("director", ucwords(mb_strtolower($_POST['inputNombres'], 'UTF-8')));
			$this->Profesores->__set("reparto", $_POST['inputNombres'], 'UTF-8' );
			$this->Profesores->__set("sinopsis", $_POST['inputNombres'], 'UTF-8' );
			$this->Profesores->__set("genero", $_POST['inputNombres'], 'UTF-8' );
			$this->Profesores->__set("productora", $_POST['inputNombres'], 'UTF-8' );
			$this->Profesores->__set("duracion", $_POST['inputNombres'], 'UTF-8' );
			$this->Profesores->__set("fechaEstreno", $_POST['inputNombres'], 'UTF-8' );
			$this->Profesores->__set("calidad", $_POST['inputNombres'], 'UTF-8' );
			$this->Profesores->__set("subtitulos", $_POST['inputNombres'], 'UTF-8' );
			$this->Profesores->__set("idioma", $_POST['inputNombres'], 'UTF-8' );
			$this->Profesores->__set("resolucion", $_POST['inputNombres'], 'UTF-8' );
			$this->Profesores->__set("peso", $_POST['inputNombres'], 'UTF-8' );
			$this->Profesores->__set("trailer", $_POST['inputNombres'], 'UTF-8' );
			$this->Profesores->__set("portada", $_POST['inputNombres'], 'UTF-8' );
			$this->Profesores->__set("capturas", $_POST['inputNombres'], 'UTF-8' );
			$this->Profesores->__set("clasificacion", $_POST['inputNombres'], 'UTF-8' );
			$this->Profesores->__set("valoracion", $_POST['inputNombres'], 'UTF-8' );
			$this->Profesores->__set("enlaces", $_POST['inputNombres'], 'UTF-8' );
			$this->Profesores->__set("servidores", $_POST['inputNombres'], 'UTF-8' );
			$this->Profesores->__set("fuente", $_POST['inputNombres'], 'UTF-8' );
			$this->Profesores->__set("usuario", $_POST['inputNombres'], 'UTF-8' );
			
			$this->Profesores->add();
			header("Location:".URL."Profesores");
		}  

	}


}

$Salones= new AdmixController();


?>