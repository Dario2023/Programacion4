<?php 
include "coneccion.php";

$SQL = "SELECT * FROM alumno";

$resultado=consulta($SQL);
 ?>


	<html>
	<head>
			<title>Programacion IV Trabajo Practico N° 3</title>
		<link rel="stylesheet" type="text/css" href="css/estilosformulario.css">

	</head>
	<body>
		
			<center><h1>Programacion IV Trabajo Practico N° 3</h1></center>
		
		<h2><a href="nueva consulta.php">Nueva Consulta</a></h2>
		<p></p>
		<!-- <script type="text/javascript">alert("Tu mensaje");</script> -->
		<table class="page-wrap">
		<tbody>
			<thead>
				<tr>
					<th>Nombre y Apellido</th>
					<th>Numero Documento</th>
					<th>Fecha Nacimiento</th>
					<th>Direccion</th>
					<th>Cliente</th>
					<th>Producto</th>
					<th>Asunto</th>
					<th>Mensaje</th>
					<td></td>
					<td></td>
					
					
				</tr>
				
					<?php foreach ($resultado as $row){ ?>
						<tr>
							<td><?php echo $row['NOMBRE_ALUMNO'];?>
							</td>
							<td>
								<?php echo $row['TIPODOCUMENTO_ALUMNO'].":".$row['NUMERO_DOC_ALUMNO'];?>
							</td>
							<td>
								<?php echo $row['FECHA_NACIMIENTO_ALUMNO'];?>
							</td>
							<td>
								<?php echo $row['DIRECCION_ALUMNO'];?>
							</td>
							<td>
								<?php echo $row['CLIENTE_ALUMNO'];?>
							</td>
							<td>
								<?php echo $row['PRODUCT_ADQUIRIDO_ALUMNO'];?>
							</td>
							<td>
								<?php echo $row['ASUNTO_ALUMNO'];?>
							</td>
							<td>
								<?php echo $row['MENSAJE_ALUMNO'];?>
							</td>
							<td>
								<a href="modificar.php?id=<?php echo $row['ID_ALUMNO'];?>">Modificar</a>
							</td>
							<td>
								<a href="eliminar.php?id=<?php echo $row['ID_ALUMNO'];?>">Eliminar</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</body>
	</html>	