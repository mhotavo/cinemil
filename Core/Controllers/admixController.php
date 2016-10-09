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
				#Guardar imagenes
				$formato = array("image/jpeg", "image/png", "image/jpg");
				$limite     = 700;
				if (in_array($_FILES['capturas']['type'], $formato) and $_FILES['capturas']['size'] <= $limite*1024) {
					$capturas = 'caratula_'.$_POST['tituloLatino'];
					$rucapturasta   = "HTML/Admix/Capturas/".$capturas;
					move_uploaded_file($_FILES['capturas']['tmp_name'], $ruta);
				} else {
					$capturas = null;
				}
				#Guardar Pelicula
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
				$this->Pelicula->__set("fechaIngreso", $_POST['fechaIngreso'], 'UTF-8' );
				$this->Pelicula->__set("usuario", $_SESSION['app_id'], 'UTF-8' );
				$id=$this->Pelicula->add();

				#Guardar Enlaces
				for ($i=1; $i < $_POST['totalEnlaces']; $i++) { 
					$this->Pelicula->__set("tipoEnlace", 'online', 'UTF-8' );
					$this->Pelicula->__set("idPelicula", $id );
					$this->Pelicula->__set("idServidor", $_POST['servidor_'.$i], 'UTF-8' );
					$this->Pelicula->__set("idFuente", $_POST['fuente_'.$i], 'UTF-8' );
					$this->Pelicula->__set("enlace", $_POST['enlace_'.$i], 'UTF-8' );
					$this->Pelicula->addEnlace();
				}

				header("Location:".URL."admix/listar");
			}  

		} else {
			header("Location:" . URL . "index");
		}
	}


	public function editar($id) {
		if (!empty($_SESSION['app_id'])) {
			if ($_POST) {
				#Guardar imagenes
				$formato = array("image/jpeg", "image/png", "image/jpg");
				$limite     = 700;
				if (in_array($_FILES['capturas']['type'], $formato) and $_FILES['capturas']['size'] <= $limite*1024) {
					$capturas = 'caratula_'.$_POST['tituloLatino'];
					$rucapturasta   = "HTML/Admix/Capturas/".$capturas;
					move_uploaded_file($_FILES['capturas']['tmp_name'], $ruta);
				} else {
					$capturas = null;
				}
				#Guardar Pelicula
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
				$this->Pelicula->__set("fechaIngreso", $_POST['fechaIngreso'], 'UTF-8' );
				$this->Pelicula->__set("usuario", $_SESSION['app_id'], 'UTF-8' );
				$id=$this->Pelicula->add();

				#Guardar Enlaces
				for ($i=1; $i < $_POST['totalEnlaces']; $i++) { 
					$this->Pelicula->__set("tipoEnlace", 'online', 'UTF-8' );
					$this->Pelicula->__set("idPelicula", $id );
					$this->Pelicula->__set("idServidor", $_POST['servidor_'.$i], 'UTF-8' );
					$this->Pelicula->__set("idFuente", $_POST['fuente_'.$i], 'UTF-8' );
					$this->Pelicula->__set("enlace", $_POST['enlace_'.$i], 'UTF-8' );
					$this->Pelicula->addEnlace();
				}

				header("Location:".URL."admix/listar");
			}  else {
				$this->Pelicula->__set("id", $id);
				$datos=$this->Pelicula->view();
				return $datos;
			}

		} else {
			header("Location:" . URL . "index");
		}
	}

	public function listar(){
		$datos=$this->Pelicula->listar();
		return $datos;
	}



}

$Salones= new AdmixController();


?>