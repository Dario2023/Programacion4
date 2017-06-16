<?php 
include 'ConexionBD.php';

//Consulta de la Base de Dato

	$sql="SELECT * FROM PERSONA_CAB"; //Sentencia SQL
	$resultado=$conexion->prepare($sql); 
	$resultado->execute(array(""));
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tabla de Clientes</title>
</head>
	<body>
		<table border="1">

			<th>Apellido y Nombre</th>
			<th>Documento</th>
			<th>Tipo</th>
			<th>Fecha de Nacimiento</th>
			<th>Direccion</th>
			
			<?php 
				while ($registro = $resultado->fetch(PDO::FETCH_ASSOC))
				{
			?>
					<tr> 
						<td><?php echo $registro['NOMBREYAPELLIDO']; ?></td>
						<td><?php echo $registro['DNI']; ?></td>
						<td><?php echo $registro['T_DOCUMENTO']; ?></td>
						<td><?php echo $registro['FECHA_NAC']; ?></td>
						<td><?php echo $registro['DIRECCION']; ?></td>
					</tr>
			    
			<?php  
				}
			$resultado->closeCursor();	//Cieere del cursor que recorre el array para que no consuma recursos
			?>	

		</table>
	</body>
</html>

