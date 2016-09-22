<?php namespace Core\Controllers;
use Core\Models\Pelicula as Pelicula;


class AdmixController{

	private $Pelicula;

	public function __construct(){
		$this->Pelicula = new Pelicula();

	}

	public function agregar() {
		if (!empty($_SESSION['app_id'])) {
			if ($_POST) {
				$formato = array("image/jpeg", "image/png", "image/jpg");
				$limite     = 700;
				if (in_array($_FILES['capturas']['type'], $formato) and $_FILES['capturas']['size'] <= $limite*1024) {
					$capturas = 'caratula_'.$_POST['tituloLatino'];
					$rucapturasta   = "HTML/Admix/Capturas/".$capturas;
					move_uploaded_file($_FILES['capturas']['tmp_name'], $ruta);
				} else {
					$capturas = null;
				}
				$this->Pelicula->__set("tituloOficial", ucwords(mb_strtolower($_POST['tituloOficial'], 'UTF-8')));
				$this->Pelicula->__set("tituloLatino", ucwords(mb_strtolower($_POST['tituloLatino'], 'UTF-8')));
				$this->Pelicula->__set("director", ucwords(mb_strtolower($_POST['director'], 'UTF-8')));
				$this->Pelicula->__set("reparto", $_POST['reparto'], 'UTF-8' );
				$this->Pelicula->__set("sinopsis", $_POST['sinopsis'], 'UTF-8' );
				$this->Pelicula->__set("genero", $_POST['genero'], 'UTF-8' );
				$this->Pelicula->__set("pais", $_POST['pais'], 'UTF-8' );
				$this->Pelicula->__set("productora", $_POST['productora'], 'UTF-8' );
				$this->Pelicula->__set("duracion", $_POST['duracion'], 'UTF-8' );
				$this->Pelicula->__set("fechaEstreno", $_POST['fechaEstreno'], 'UTF-8' );
				$this->Pelicula->__set("calidad", $_POST['calidad'], 'UTF-8' );
				$this->Pelicula->__set("subtitulos", $_POST['subtitulada'], 'UTF-8' );
				$this->Pelicula->__set("idioma", $_POST['idioma'], 'UTF-8' );
				$this->Pelicula->__set("resolucion", $_POST['resolucion'], 'UTF-8' );
				$this->Pelicula->__set("peso", $_POST['peso'], 'UTF-8' );
				$this->Pelicula->__set("trailer", $_POST['trailer'], 'UTF-8' );
				$this->Pelicula->__set("portada", $_POST['portada'], 'UTF-8' );
				$this->Pelicula->__set("capturas", $capturas, 'UTF-8' );
				$this->Pelicula->__set("clasificacion", $_POST['clasificacion'], 'UTF-8' );
				$this->Pelicula->__set("valoracion", $_POST['valoracion'], 'UTF-8' );
				$this->Pelicula->__set("enlaces", $_POST['enlaces'], 'UTF-8' );
				$this->Pelicula->__set("servidores", $_POST['servidores'], 'UTF-8' );
				$this->Pelicula->__set("fuente", $_POST['fuente'], 'UTF-8' );
				$this->Pelicula->__set("usuario", $_SESSION['app_id'], 'UTF-8' );

				$this->Pelicula->add();
				header("Location:".URL."listar");
			}  
		} else {
			header("Location:" . URL . "index");
		}
	}


}

$Salones= new AdmixController();


?>