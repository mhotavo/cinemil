<?php namespace Core\Models;

class Json {

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

	public function categoria(){
		$sql="SELECT * FROM categoria ORDER BY NOM_CATEGORIA ASC";
		$data = $this->db->consultaRetorno($sql);
		while ($row = mysqli_fetch_assoc($data)) {
			$datos[]=$row;
		}
		return $datos;
	}

	public function productora(){
		$sql="SELECT * FROM productora ORDER BY NOM_PRODUCTORA ASC";
		$data = $this->db->consultaRetorno($sql);
		while ($row = mysqli_fetch_assoc($data)) {
			$datos[]=$row;
		}
		return $datos;
	}


	public function genero(){
		$sql="SELECT * FROM genero ORDER BY NOM_GENERO ASC";
		$data = $this->db->consultaRetorno($sql);
		while ($row = mysqli_fetch_assoc($data)) {
			$datos[]=$row;
		}
		return $datos;
	}



} 


?>