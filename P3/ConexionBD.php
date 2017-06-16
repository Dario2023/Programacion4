<?php
	
	include 'Config.cfg';
	try 
	{
		$conexion = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER
			,DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND=> "SET NAMES utf8"));
			// echo "Se conecta correctamente !!!";
		// set the PDO error mode to the exception
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
		
	}
	catch (PDOException $e) 
	{
		//echo "Fallo de la Conexion: " .$e->getMessage();
		die('Error'.$e->getMessage());
	exit;
	}
	finally
	{
		$base=null;
	}
?>
	<!-- <!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<script type="text/javascript"> 
					var opciones = "width=120,height=300,scrollbars=NO"; 
					window.open("urlqueabrelaventana.com","nombreventa na", opciones);
		</script>;
	</body>
	</html> -->