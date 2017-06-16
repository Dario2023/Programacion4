<?php 

if (isset ($_POST)) 
	{	
		$apellidoyNombre = $_POST['Txt1'];
		$tipoDoc = $_POST['CmbTipoDoc'];
		$numeroDoc = $_POST['Txt2'];
		$fechaNac = $_POST['Txt3'];
		$direcion = $_POST['Txt4'];
		$cliente = $_POST['CmbCliente'];
		$productos = $_POST['CmbProductos'];
		$asunto = $_POST['Txt5'];
		$mensaje = $_POST['texto'];
		
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Informe Cliente</title>
</head>
	<body>
		<form>
			<table border="1">
				<tr>
					<td><?php echo $apellidoyNombre ?></td>
				</tr>
				<tr>	
					<td><?php echo $tipoDoc ?></td>
				</tr>	
				<tr>
				<td><?php echo $numeroDoc ?></td>
					
				</tr>
				<tr>
					
					<td><?php echo $fechaNac ?></td>
				</tr>
				<tr>
					
					<td><?php echo $direcion ?></td>
				</tr>
				<tr>
					
					<td><?php echo $cliente ?></td>
				</tr>
				<tr>
					<td><?php echo $productos ?></td>
					
				</tr>
				<tr>
					
					<td><?php echo $asunto ?></td>
				</tr>
				<tr>
					
					<td><?php echo $mensaje ?></td>
				</tr>
				
			</table>
			<input type="submit" name="aceptar" value="Aceptar">
		</form>
	</body>
</html>
