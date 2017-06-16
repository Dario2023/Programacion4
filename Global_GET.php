<!-- Punto 5 Vincular los Punto 1 y 2 mediante el uso de hipervinculos y el uso de la variable global $_GET. -->
<?php 
// LLamada al archivo del array
include "ArrayAlumnos.php";
include "ArrayCondicion.php"; 
// Compactamos los Array (Antes de especificarlo dentro del enlace es necesario convertir estos array o codificarlos)
// $compact_arrayalumnos_info=serialize($arrayinformacion);
// $compact_arrayalumnos_info=urlencode($compact_arrayalumnos_info);
// $compact_arraycondicion=serialize($arrayalumnocondicion);
// $compact_arraycondicion=urlencode($compact_arraycondicion);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Planilla de Asistencia de Alumnos</title>
</head>
	<body>

		<table border="1"><!--Armado de la tabla y sus propiedades-->
			<tr><!--Impresion de encabezados-->
				<th rowspan="2"; bgcolor="red"><?php echo "Nro."; ?></th> <!-- celdas de encabezado, tamaño y coloreado de celda-->
				<th rowspan="2"; bgcolor="red"><?php echo "Apellido y Nombre"; ?></th>
				<th colspan="8"; bgcolor="red"><?php echo "Fecha"; ?></th>
				<th rowspan="2"; bgcolor="red"><?php echo "Condicion"; ?></th>
			</tr>
				<tr><!-- FECHAS DE ASISTENCIAS -->
					<td bgcolor="gray"><b>30-09</b></td>
					<td bgcolor="gray"><b>06/10</b></td> <!--negrita y coloreado de celda-->
					<td bgcolor="gray"><b>07/10</b></td>
					<td bgcolor="gray"><b>13/10</b></td>
					<td bgcolor="gray"><b>14/10</b></td>
					<td bgcolor="gray"><b>20/10</b></td>
					<td bgcolor="gray"><strong>21/10</strong></td> <!--negrita y coloreado de celda-->
					<td bgcolor="gray"><strong>27/10</strong></td>
				</tr>
					<?php //Recorrido de la matriz multidimensional para imprimir sus datos en pantalla

						foreach ($arrayalumnos as $key => $Alumnos) 
							{
					?>	
						<tr>
							<td>
								<?php
									echo "<a href= http://localhost/practico_github/P2/ArrayAlumnos_info.php?ID=".$Alumnos['Id'].">".$Alumnos['Id']."</a>"; //ID
								?>
							</td>
							<td>
						 			<?php echo $Alumnos ['Apellido']; ?> 
						 			<?php echo $Alumnos ['Nombre']; ?>
							</td>
								<td style="text-align: center;"><?php echo $Alumnos['Asistencia']['30/09']; ?></td>	<!--Alineacion del contenido de la celda-->
								<td style="text-align: center;"><?php echo $Alumnos['Asistencia']['06/10']; ?></td>
								<td style="text-align: center;"><?php echo $Alumnos['Asistencia']['07/10']; ?></td>
								<td style="text-align: center;"><?php echo $Alumnos['Asistencia']['13/10']; ?></td>
								<td style="text-align: center;"><?php echo $Alumnos['Asistencia']['14/10']; ?></td>
								<td style="text-align: center;"><?php echo $Alumnos['Asistencia']['20/10']; ?></td>
								<td style="text-align: center;"><?php echo $Alumnos['Asistencia']['21/10']; ?></td>
								<td style="text-align: center;"><?php echo $Alumnos['Asistencia']['27/10']; ?></td>			
								
							<!-- <td>
								<?php
									// echo "<a href= http://localhost/practico_github/P2/ArrayCondicion.php?CONDICION=$Alumnos['Condicion']>$Condicion</a>"; 
								?>
							</td> -->
							</tr>
					<?php
							}
					?>	
		</table>
	</body>
</html>

<?php 
	
?>	