<?php 

require "../Modelo/Usuario_Model.php";


class Usuario_Control{
	
	public function Validar($usua,$password)
	{
		$Usuario_Model = new Usuario_Model();
		if($Usuario_Model->Usuario($usua,$password)==1)
		{
			header('location:../Vistas/Exito.php');
		}
		else
		{
			header('location:../Vistas/Login_Usuario.php');
		}
	}
}




 ?>