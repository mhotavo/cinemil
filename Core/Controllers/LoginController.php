<?php namespace Core\Controllers;

use Core\Models\Login as Login;

class LoginController{

	private $Login;

	public function __construct(){
		$this->Login = new Login();
	}
	public function index(){
		
		if ($_POST) {
			$this->Login->validar();

		} else {
			header("Location:" . URL . "index");
		}
	}

	public function validarPassword(){
		if (!empty($_GET['id']) && !empty($_GET['actual']) ) {
			$this->Login->__set("id", $_GET['id']);
			$this->Login->__set("pass", $_GET['actual']);
			echo $datos=$this->Login->validarPass();
		

		}

	}


}

?>