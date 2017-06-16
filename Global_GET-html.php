<?php 

include "ArrayAlumnos_info.php";
// Recibo el $_GET y lo paso a una variable
if (isset($_GET['ID']));
{
	$idalumno=$_GET['ID'];
	
} 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
          
</body>

</html>
<?php  
// // Descompactamos el array recibido
 //    $arraydescomprimido=stripslashes ($_GET['alumnoscondicion']);
 //    $condicionarray=unserialize($arraydescomprimido);
?>
<?php  
	foreach ($condicionarray as $clave => $valor)
	{
		echo $clave[$valor].'<br>';
	}
?>       