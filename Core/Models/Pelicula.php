<?php namespace Core\Models;

	class Pelicula {
		private $id;
		private $tituloOficial;
		private $tituloLatino;
		private $director;
		private $reparto;
		private $productora;
		private $sinopsis;
		private $genero;
		private $pais;
		private $duracion;
		private $fechaEstreno;
		private $idioma;
		private $subtitulos;
		private $calidad;
		private $peso;
		private $resolucion;
		private $trailer;
		private $portada;
		private $capturas;
		private $clasificacion;
		private $valoracion;
		private $enlaces;
		private $servidores;
		private $fuente;
		private $usuario;
		private $db;

		public function __construct(){
			$this->db = new Conexion();
		}

		public function __set($var, $valor) {  
		     if (property_exists(__CLASS__, $var)) {  
		       $this->$var = $valor;  
		     } else {  
		       echo "No existe el atributo $var.";  
		     }  
		   }  

		public function __get($var) {  
		     if (property_exists(__CLASS__, $var)) {  
		       return $this->$var;  
		     }  
		     return NULL;  
		   }  
 

		public function listar(){
			$sql="SELECT * FROM pelicula";
			$datos=$this->db->consultaRetorno($sql);
			return $datos;
		}

		public function add(){
			echo $sql="INSERT INTO pelicula
					(ID,
					 TITULO_OFICIAL,
					 TITULO_LATINO, 
					 DIRECTOR, 
					 REPARTO, 
					 PRODUCTORA, 
					 SINOPSIS, 
					 GENERO, 
					 PAIS, 
					 DURACION, 
					 FECHA_ESTRENO, 
					 IDIOMA, 
					 SUBTITULOS, 
					 CALIDAD, 
					 PESO, 
					 RESOLUCION, 
					 TRAILER, 
					 PORTADA, 
					 CAPTURAS, 
					 CLASIFICACION, 
					 VALORACION, 
					 ENLACES, 
					 SERVIDORES, 
					 FUENTE, 
					 USUARIOLOG) 
				VALUES 
					(NULL, 
					'{$this->tituloOficial}', 
					'{$this->tituloLatino}', 
					'{$this->director}', 
					'{$this->reparto}', 
					'{$this->productora}', 
					'{$this->sinopsis}', 
					'{$this->genero}', 
					'{$this->pais}', 
					'{$this->duracion}', 
					'{$this->fechaEstreno}', 
					'{$this->idioma}', 
					'{$this->subtitulos}', 
					'{$this->calidad}', 
					'{$this->peso}', 
					'{$this->resolucion}', 
					'{$this->trailer}', 
					'{$this->portada}', 
					'{$this->capturas}', 
					'{$this->clasificacion}', 
					'{$this->valoracion}', 
					'{$this->enlaces}', 
					'{$this->servidores}', 
					'{$this->fuente}', 
					'{$this->usuario}'); "; exit();
			$this->db->consultaSimple($sql);

		}

		public function delete(){
			$sql="DELETE FROM pelicula WHERE ID='{$this->id}'";
			$this->db->consultaSimple($sql);			

		}

		 public function edit() {
		       $sql="UPDATE pelicula SET 
		            TITULO_OFICIAL='{$this->tituloOficial}',
		            TITULO_LATINO ='{$this->tituloLatino}',
		            DIRECTOR ='{$this->director}',
		            REPARTO ='{$this->reparto}',
		            PRODUCTORA ='{$this->productora}',
		            SINOPSIS ='{$this->sinopsis}',
		            GENERO ='{$this->genero}',
		            PAIS ='{$this->pais}',
		            DURACION ='{$this->duracion}',
		            FECHA_ESTRENO ='{$this->fechaEstreno}',
		            IDIOMA ='{$this->idioma}',
		            SUBTITULOS ='{$this->subtitulos}',
		            CALIDAD ='{$this->calidad}',
		            PESO ='{$this->peso}',
		            RESOLUCION ='{$this->resolucion}',
		            TRAILER ='{$this->trailer}',
		            PORTADA ='{$this->portada}',
		            CAPTURAS ='{$this->capturas}',
		            CLASIFICACION ='{$this->clasificacion}',
		            VALORACION ='{$this->valoracion}',
		            ENLACES ='{$this->enlaces}',
		            SERVIDORES ='{$this->servidores}',
		            FUENTE ='{$this->fuente}',
		            USUARIOLOG ='{$this->usuario}'
		            WHERE ID='{$this->id}';";
		       $this->db->consultaSimple($sql);
		  }

		 public function view(){
			$sql="SELECT * FROM pelicula WHERE ID='{$this->ID}'";
			$datos = $this->db->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}



	} 


 ?>