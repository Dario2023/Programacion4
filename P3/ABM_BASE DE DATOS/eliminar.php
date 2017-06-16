<?php 
	
	require('coneccion.php');
	
	 $id=$_GET['id'];
 
	
	$query="DELETE FROM alumno WHERE ID_ALUMNO='$id'";
	consulta($query)
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>ELIMINAR consulta</title>
	<link rel="stylesheet" type="text/css" href="css/estilosformulario.css">
</head>
<body>
<?php echo "<h1>Se elimino correctamente</h1>"; ?>
<form name="Volver"  action="index.php">
<center><input type="submit" name="enviar" value="Volver a las consultas" /></center>
</form>
</body>
</html>