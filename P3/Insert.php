<?php  

// Insertar Datos a la Tabla

// function cargarDatos($Registros)
// {

$sql = "INSERT INTO persona_cab 
VALUES (null,'$Registros[NOMBREYAPELLIDO]','$Registros[DNI]','$Registros[T_DOCUMENTO]','$Registros[FECHA_NAC]','$Registros[DIRECCION]')";

	if ($conexion->query($sql)=== TRUE) 
	{
		$last_id = $conexion->insert_id;
    	echo "Registro creado correctamente". $last_id;
	} 
	else 
	{
		echo "ERROR registro no cargado";
	}

// return ( "Registro creado correctamente". $last_id);
// 	} 
// 	else 
// 	{
// 		return ( "ERROR registro no cargado");
// 	}

// }


//Modificar Datos de la Tabla


//Borrar Datos de la Tabla
?>
