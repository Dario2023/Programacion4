<?php 
//echo '<h3>'.'Punto 1-A - Arreglo Asociativo'.'</h3>';
$arrayalumnos = array
(
	array('Id' => 10,
		  'Apellido' => 'Acosta',
		  'Nombre' => 'Carlos Alberto',
		  'Asistencia' => array('30/09' =>'A',
		  						'06/10' => 'A',
		  						'07/10' =>'P',
		  						'13/10' => 'P',
		  						'14/10' =>'P',
		  						'20/10' =>'P',
		  						'21/10' =>'P','27/10'=>'P'),
		  'Condicion' => ''
		  ),
	array('Id' => 29,
		  'Apellido' => 'Aguilera Capra',
		  'Nombre' => 'Jesus Dario',
		  'Asistencia' => array('30/09' =>'P',
		  						'06/10' => 'P',
		  						'07/10' =>'P',
		  						'13/10' => 'P',
		  						'14/10' =>'A',
		  						'20/10' =>'P',
		  						'21/10' =>'P',
		  						'27/10'=>'P'),
		  'Condicion' => ''
		  ),	   
	array('Id' => 34,
		  'Apellido' => 'Ayala',
		  'Nombre' => 'Lenadro Jose',
		  'Asistencia' => array('30/09' =>'P',
		  						'06/10' => 'A',
		  						'07/10' =>'P',
		  						'13/10' =>'P' ,
		  						'14/10' =>'P',
		  						'20/10' =>'A',
		  						'21/10' =>'P',
		  						'27/10'=>'P') ,
		  'Condicion' => ''
		  ),
	array('Id' => 45,
		  'Apellido' => 'Benitez',
		  'Nombre' => 'Dario',
		  'Asistencia' => array('30/09' =>'P',
		  						'06/10' =>'P',
		  						'07/10' =>'P',
		  						'13/10' =>'A' ,
		  						'14/10' =>'P',
		  						'20/10' =>'P',
		  						'21/10' =>'P',
		  						'27/10' =>'P'),
		  'Condicion' => ''
		  ),
	array('Id' => 52,
		  'Apellido' => 'Britez',
		  'Nombre' => 'Pablo Fernando',
		  'Asistencia' => array('30/09' =>'P',
		  						'06/10' =>'P',
		  						'07/10' =>'P',
		  						'13/10' =>'A' ,
		  						'14/10' =>'A',
		  						'20/10' =>'P',
		  						'21/10' =>'A',
		  						'27/10' =>'P'),
		  'Condicion' => ''
		  ),
	array('Id' => 65,
		  'Apellido' => 'Canesin',
		  'Nombre' => 'Luis Oscar',
		  'Asistencia' => array('30/09' =>'P',
		  						'06/10' =>'A',
		  						'07/10' =>'P',
		  						'13/10' =>'P' ,
		  						'14/10' =>'P',
		  						'20/10' =>'A',
		  						'21/10' =>'P',
		  						'27/10' =>'P'),
		  'Condicion' => ''
		  ),
	array('Id' => 79,
		  'Apellido' => 'Degregorio',
		  'Nombre' => 'Nicolas Ezequiel',
		  'Asistencia' => array('30/09' =>'P',
		  						'06/10' =>'P',
		  						'07/10' =>'P',
		  						'13/10' =>'P' ,
		  						'14/10' =>'P',
		  						'20/10' =>'P',
		  						'21/10' =>'P',
		  						'27/10' =>'A'),
		  'Condicion' => ''
		  ),
	array('Id' => 84,
		  'Apellido' => 'Fernandez',
		  'Nombre' => 'Victor Hugo',
		  'Asistencia' => array('30/09' =>'P',
		  						'06/10' =>'A',
		  						'07/10' =>'P',
		  						'13/10' =>'A' ,
		  						'14/10' =>'A',
		  						'20/10' =>'P',
		  						'21/10' =>'P',
		  						'27/10' =>'P'),
		  'Condicion' => ''
		  ),
	array('Id' => 9,
		  'Apellido' => 'Bogado',
		  'Nombre' => 'Ezequiel',
		  'Asistencia' => array('30/09' =>'P',
		  						'06/10' =>'P',
		  						'07/10' =>'A',
		  						'13/10' =>'P' ,
		  						'14/10' =>'A',
		  						'20/10' =>'P',
		  						'21/10' =>'P',
		  						'27/10' =>'A'),
		  'Condicion' => ''
		  ),
	array('Id' => 103,
		  'Apellido' => 'Iza',
		  'Nombre' => 'Federico',
		  'Asistencia' => array('30/09' =>'P',
		  						'06/10' =>'P',
		  						'07/10' =>'A',
		  						'13/10' =>'P' ,
		  						'14/10' =>'A',
		  						'20/10' =>'P',
		  						'21/10' =>'A',
		  						'27/10' =>'P'),
		  'Condicion' => ''
		  ),
	array('Id' => 117,
		  'Apellido' => 'Gimenez',
		  'Nombre' => 'Mariana Itati',
		  'Asistencia' => array('30/09' =>'P',
		  						'06/10' =>'A',
		  						'07/10' =>'P',
		  						'13/10' =>'P' ,
		  						'14/10' =>'A',
		  						'20/10' =>'P',
		  						'21/10' =>'A',
		  						'27/10' =>'A'),
		  'Condicion' => ''
		  ),
	array('Id' => 124,
		  'Apellido' => 'Benitez Mendez',
		  'Nombre' => 'Junior Joel',
		  'Asistencia' => array('30/09' =>'P',
		  						'06/10' =>'P',
		  						'07/10' =>'P',
		  						'13/10' =>'P' ,
		  						'14/10' =>'P',
		  						'20/10' =>'A',
		  						'21/10' =>'P',
		  						'27/10' =>'P'),
		  'Condicion' => ''
		  ),
);
	//print_r($arrayalumnos);
	//print_r($arrayalumnos [0]['Id']['Apellido']);
	//echo $arrayalumnos ['Id']['Apellido']['Nombre'];
 ?>