 
<!--Llamada de los Archivos a utilizar-->
<?php include "ArrayAlumnos.php"; ?>
<?php include "ArrayAlumnos_info.php"; ?>
<?php include "Actualizar Condicion.php"; ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Practico N°2</title>
 </head>
 <body>
<?php echo '<h3>'.'Punto 1-B - Mostrar en formato de Tabla en Arreglo Asociativo'.'</h3>'; ?>
<!--Llamada del Archivo a utilizar-->
<?php include "Array to Tabla.html"; ?>

<?php 	echo '<h3>'.'Punto 2-B - Motrar el Arreglo en una Lista'.'</h3>';?>
<!--Llamada de el Archivo a utilizar-->
<?php include "ArrayPHP to ListHTML.html"; ?>
<?php $i= 0;
foreach ($arrayalumnos as $key => $Value) 
{
	 $Value['Condicion']= $ArrayCondicion[$i];
	$i+=1;
	 // echo $Value['Condicion'];	
} ?>
// Punto 5 Vincular los Punto 1 y 2 mediante el uso de hipervinculos y el uso de la variable global $_GET.
<a href=""></a>
</body>
</html>