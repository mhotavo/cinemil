<?php namespace Core\Models;

class Json {

	private $db;
	private $id;

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

	public function pais(){	
		$sql="SELECT * FROM pais ORDER BY NOM_PAIS ASC";
		$data = $this->db->consultaRetorno($sql);
		while ($row = mysqli_fetch_assoc($data)) {
			$datos[]=$row;
		}
		return $datos;
	}

	public function idioma(){
		$sql="SELECT * FROM idioma ORDER BY NOM_IDIOMA ASC";
		$data = $this->db->consultaRetorno($sql);
		while ($row = mysqli_fetch_assoc($data)) {
			$datos[]=$row;
		}
		return $datos;
	}

	public function fuente(){
		$sql="SELECT * FROM fuente ORDER BY NOM_FUENTE ASC";
		$data = $this->db->consultaRetorno($sql);
		while ($row = mysqli_fetch_assoc($data)) {
			$datos[]=$row;
		}
		return $datos;
	}

	public function servidor(){
		$sql="SELECT * FROM servidor ORDER BY NOM_SERVIDOR ASC";
		$data = $this->db->consultaRetorno($sql);
		while ($row = mysqli_fetch_assoc($data)) {
			$datos[]=$row;
		}
		return $datos;
	}


	public function nomServidor(){
		$sql="SELECT NOM_SERVIDOR FROM servidor WHERE ID_SERVIDOR='$this->id' LIMIT 1 ";
		$data = $this->db->consultaRetorno($sql);
		$row = mysqli_fetch_assoc($data);
		$datos= $row['NOM_SERVIDOR'];
		return $datos;
	}
} 


?>