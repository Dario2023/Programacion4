<?php 
	
	require('coneccion.php');
	$registros['nombre']=$_POST["nombre"];
	$registros['tipoDocumento']=$_POST["tipoDocumento"];
	$registros['nroDocumento']=$_POST["NumeroDocumento"];
	$registros['fechaNacimiento']=$_POST["FechaNacimiento"];
	$registros['direccion']=$_POST["Direccion"];
	$registros['cliente']=$_POST["esCliente"];
	$registros['producto']=$_POST["ProductoAdquirido"];
	$registros['asunto']=$_POST["ASUNTO"];
	$registros['mensaje']=$_POST["Mensaje"];

	?>

<!DOCTYPE html>
<html>
<head>
	<title>Guardar consulta</title>
	<link rel="stylesheet" type="text/css" href="css/estilosformulario.css">
</head>
<body>
<?php echo "<h1>".cargarDatos($registros)."</h1>"; ?>
<form name="Volver"  action="index.php">
<center><input type="submit" name="enviar" value="Volver a las consultas" /></center>
</form>
</body>
</html>