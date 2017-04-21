 
<?php

$arrayalumnos = array
(
	array('Id' => 10,
		  'Apellido' => 'Acosta',
		  'Nombre' => 'Carlos Alberto',
		  'Asistencia' => array('30-09' =>'A',
		  						'06/10' => 'A',
		  						'07/10' =>'P',
		  						'13/10' => 'P',
		  						'14/10' =>'P',
		  						'20/10' =>'P',
		  						'21/10' =>'P','27/10'=>'P'),
		  ),
	array('Id' => 29,
		  'Apellido' => 'Aguilera Capra',
		  'Nombre' => 'Jesus Dario',
		  'Asistencia' => array('30-09' =>'P',
		  						'06/10' => 'P',
		  						'07/10' =>'P',
		  						'13/10' => 'P',
		  						'14/10' =>'A',
		  						'20/10' =>'P',
		  						'21/10' =>'P',
		  						'27/10'=>'P'),
		  ),	   
	array('Id' => 34,
		  'Apellido' => 'Ayala',
		  'Nombre' => 'Lenadro Jose',
		  'Asistencia' => array('30-09' =>'P',
		  						'06/10' => 'A',
		  						'07/10' =>'P',
		  						'13/10' =>'P' ,
		  						'14/10' =>'P',
		  						'20/10' =>'A',
		  						'21/10' =>'P',
		  						'27/10'=>'P') ,
		  ),
	array('Id' => 45,
		  'Apellido' => 'Benitez',
		  'Nombre' => 'Dario',
		  'Asistencia' => array('30-09' =>'P',
		  						'06/10' =>'P',
		  						'07/10' =>'P',
		  						'13/10' =>'A' ,
		  						'14/10' =>'P',
		  						'20/10' =>'P',
		  						'21/10' =>'P',
		  						'27/10' =>'P'),
		  ),
	array('Id' => 52,
		  'Apellido' => 'Britez',
		  'Nombre' => 'Pablo Fernando',
		  'Asistencia' => array('30-09' =>'P',
		  						'06/10' =>'P',
		  						'07/10' =>'P',
		  						'13/10' =>'A' ,
		  						'14/10' =>'A',
		  						'20/10' =>'P',
		  						'21/10' =>'A',
		  						'27/10' =>'P'),
		  ),
	array('Id' => 65,
		  'Apellido' => 'Canesin',
		  'Nombre' => 'Luis Oscar',
		  'Asistencia' => array('30-09' =>'P',
		  						'06/10' =>'A',
		  						'07/10' =>'P',
		  						'13/10' =>'P' ,
		  						'14/10' =>'P',
		  						'20/10' =>'A',
		  						'21/10' =>'P',
		  						'27/10' =>'P'),
		  ),
	array('Id' => 79,
		  'Apellido' => 'Degregorio',
		  'Nombre' => 'Nicolas Ezequiel',
		  'Asistencia' => array('30-09' =>'P',
		  						'06/10' =>'P',
		  						'07/10' =>'P',
		  						'13/10' =>'P' ,
		  						'14/10' =>'P',
		  						'20/10' =>'P',
		  						'21/10' =>'P',
		  						'27/10' =>'A'),
		  ),
	array('Id' => 84,
		  'Apellido' => 'Fernandez',
		  'Nombre' => 'Victor Hugo',
		  'Asistencia' => array('30-09' =>'P',
		  						'06/10' =>'A',
		  						'07/10' =>'P',
		  						'13/10' =>'A' ,
		  						'14/10' =>'A',
		  						'20/10' =>'P',
		  						'21/10' =>'P',
		  						'27/10' =>'P'),
		  ),
	array('Id' => 9,
		  'Apellido' => 'Bogado',
		  'Nombre' => 'Ezequiel',
		  'Asistencia' => array('30-09' =>'P',
		  						'06/10' =>'P',
		  						'07/10' =>'A',
		  						'13/10' =>'P' ,
		  						'14/10' =>'A',
		  						'20/10' =>'P',
		  						'21/10' =>'P',
		  						'27/10' =>'A'),
		  ),
	array('Id' => 103,
		  'Apellido' => 'Iza',
		  'Nombre' => 'Federico',
		  'Asistencia' => array('30-09' =>'P',
		  						'06/10' =>'P',
		  						'07/10' =>'A',
		  						'13/10' =>'P' ,
		  						'14/10' =>'A',
		  						'20/10' =>'P',
		  						'21/10' =>'A',
		  						'27/10' =>'P'),
		  ),
	array('Id' => 117,
		  'Apellido' => 'Gimenez',
		  'Nombre' => 'Mariana Itati',
		  'Asistencia' => array('30-09' =>'P',
		  						'06/10' =>'A',
		  						'07/10' =>'P',
		  						'13/10' =>'P' ,
		  						'14/10' =>'A',
		  						'20/10' =>'P',
		  						'21/10' =>'A',
		  						'27/10' =>'A'),
		  ),
	array('Id' => 124,
		  'Apellido' => 'Benitez Mendez',
		  'Nombre' => 'Junior Joel',
		  'Asistencia' => array('30-09' =>'P',
		  						'06/10' =>'P',
		  						'07/10' =>'P',
		  						'13/10' =>'P' ,
		  						'14/10' =>'P',
		  						'20/10' =>'A',
		  						'21/10' =>'P',
		  						'27/10' =>'P'),
		  ),
);



?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Programacion 3 Practico N°2 Punto 2-A</title>
 </head>
 <body>
 <table border="1">

 	<tr>
		<th rowspan="2"><?php echo "Nro."; ?></th>
		<th rowspan="2"><?php echo "Apellido y Nombre"; ?></th>
		<th colspan="8"><?php echo "Fecha"; ?></th>
		<th rowspan="2"><?php echo "Condicion"; ?></th>
	</tr>
	<tr>
			
		  	<td>30-09</td>
			<td>06/10</td>
			<td>07/10</td>
			<td>13/10</td>
			<td>14/10</td>
			<td>20/10</td>
			<td>21/10</td>
			<td>27/10</td>

	</tr>
<?php
	foreach ($arrayalumnos as $key => $Alumnos) 
		{
?>	
		<tr>
			<td>
				 <?php echo $Alumnos ['Id']; ?> 
			</td>
			<td>
				 <?php echo $Alumnos ['Apellido']; ?> 
				 <?php echo $Alumnos ['Nombre']; ?>
			</td>
			<?php 
				foreach ($Alumnos as $Asistencia => $dias) 
					{
			 ?>

			<td>
				<?php echo $Asistencia; ?>
			</td>				
			<?php 
					}
			?>		
		</tr>
<?php 
		}
?>
		
				

	
 </table>

 </body>
 </html>