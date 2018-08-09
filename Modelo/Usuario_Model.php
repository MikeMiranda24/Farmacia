<?php 

require 'Conexion.php';


class Usuario_Model{
	
	public function Usuario($usua,$password)
{
	$db = new Conectar();
	$db->Base();

	$registro=$db->Datos('SELECT * FROM "DatosFarmacia"."Registro_Usuario" WHERE Nombre_Usuario="'.$usua.'" and Password="'.$password.'"');
	echo $db->sumar($registro);
	if($db->sumar($registro)>0)
	{
		return 1;
	}
	else
	{
		return 0;
	}

	}
}







 ?>