<?php namespace Core\Models;

	class Profesor {
		private $documento;
		private $nombres;
		private $primerApellido;
		private $segundoApellido;
		private $telefono;
		private $email;
		private $imagen;
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
			$sql="SELECT * FROM profesores";
			$datos=$this->db->consultaRetorno($sql);
			return $datos;
		}

		public function add(){
			$sql="INSERT INTO profesores
					(DOCUMENTO,
					 NOMBRES,
					 PRIMER_APELLIDO, 
					 SEGUNDO_APELLIDO, 
					 TELEFONO, 
					 EMAIL, 
					 IMAGEN) 
				VALUES 
					(NULL, 
					'{$this->nombres}', 
					'{$this->primerApellido}', 
					'{$this->segundoApellido}', 
					'{$this->telefono}', 
					'{$this->email}', 
					'{$this->imagen}'); ";
			$this->db->consultaSimple($sql);

		}

		public function delete(){
			$sql="DELETE FROM profesor_salon WHERE ID_PROFESOR='{$this->documento}'";
			$this->db->consultaSimple($sql);			
			$sql="DELETE FROM profesores WHERE DOCUMENTO='{$this->documento}'";
			$this->db->consultaSimple($sql);

		}

		 public function edit() {
		       $sql="UPDATE profesores SET 
		            NOMBRES='{$this->nombres}',
		            PRIMER_APELLIDO ='{$this->primerApellido}',
		            SEGUNDO_APELLIDO ='{$this->segundoApellido}',
		            TELEFONO ='{$this->telefono}',
		            EMAIL ='{$this->email}',
		            IMAGEN ='{$this->imagen}'
		            WHERE DOCUMENTO='{$this->documento}';";
		       $this->db->consultaSimple($sql);
		  }

		 public function view(){
			$sql="SELECT * FROM profesores WHERE DOCUMENTO='{$this->documento}'";
			$datos = $this->db->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}



	} 


 ?>