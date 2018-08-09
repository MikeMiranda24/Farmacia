<?php

	require 'Usuario_Control.php';

	$Usuario_Control = new Usuario_Control();

		if(isset($_POST['option']))
		{
			$option=$_POST['option'];
		}
		if(isset($_GET['option']))
		{
			$option=$_GET['option'];
		}
		if (isset($_REQUEST['option'])) {
			$option=$_REQUEST['option'];
		}
		if(isset($_GET['option'])||isset($_POST['option'])||isset($_REQUEST['option']))
		{
			switch ($option) {
				case '1':
						
						$Usuario_Control->Validar($_POST['usua'],$_POST['password']);
						
					break;
				case '2':
					
					break;
				case '3':
					
					break;
			}
		}
		

?>