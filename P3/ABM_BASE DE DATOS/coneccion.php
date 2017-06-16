<?php
// constantes
define('usuario', "root");
define('contraseña',"");




function conectaDb() {								// <---hace la coneccion a la base de datos y comprueba errores

	try {
			$coneccion = new PDO('mysql:
								host=localhost;
								dbname=alumnos',usuario,contraseña);
	 
	 		$coneccion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 		 return($coneccion);
	}catch(PDOException $e){

	    echo "ERROR: " . $e->getMessage();
		exit();
	}
		echo "conecion creada";
}

function cargarDatos(&$REGISTRO){						// <---carga los datos del formulario
	$db = conectaDB();

	$SQL = "INSERT INTO alumno 
	    VALUES (null,'$REGISTRO[nombre]', '$REGISTRO[tipoDocumento]','$REGISTRO[nroDocumento]', '$REGISTRO[fechaNacimiento]','$REGISTRO[direccion]','$REGISTRO[cliente]','$REGISTRO[producto]','$REGISTRO[asunto]','$REGISTRO[mensaje]')";
	

	

		if ($db->query($SQL)) {
		   return ( "Registro creado correctamente");
		} else {
		    return ( "ERROR registro no cargado");
		}
		$db = null;
}


function ActualizarDatos(&$REGISTRO,$id){						// <---carga los datos del formulario
	$db = conectaDB();





	$SQL = "UPDATE alumno 
	    SET NOMBRE_ALUMNO='$REGISTRO[nombre]', TIPODOCUMENTO_ALUMNO='$REGISTRO[tipoDocumento]', NUMERO_DOC_ALUMNO='$REGISTRO[nroDocumento]', FECHA_NACIMIENTO_ALUMNO='$REGISTRO[fechaNacimiento]', DIRECCION_ALUMNO='$REGISTRO[direccion]', CLIENTE_ALUMNO='$REGISTRO[cliente]', PRODUCT_ADQUIRIDO_ALUMNO='$REGISTRO[producto]', ASUNTO_ALUMNO='$REGISTRO[asunto]', MENSAJE_ALUMNO='$REGISTRO[mensaje]' WHERE ID_ALUMNO='$id'";
	

	

		if ($db->query($SQL)) {
		   return ( "Registro Actualizado correctamente");
		} else {
		    return ( "ERROR registro no cargado");
		}
		$db = null;
}




function consulta($sql){					// <---hace la consulta que se le pasa
$db = conectaDB();

$resultado = $db->query($sql);

$db = null;

if (!$resultado) {
     return ("<p>Error en la consulta.</p>"); 
} else {
    return ($resultado);
}

}

// (NOMBRE_ALUMNO,TIPODOCUMENTO_ALUMNO, NUMERO_DOC_ALUMNO, FECHA_NACIMIENTO_ALUMNO, DIRECCION_ALUMNO,CLIENTE_ALUMNO,PRODUCT_ADQUIRIDO_ALUMNO,ASUNTO_ALUMNO,MENSAJE_ALUMNO)


 $registros  = array('nombre' => "",
					'tipoDocumento' => "",
					'nroDocumento' => "",
					'fechaNacimiento' => "",
					'direccion' => "",
					'cliente' => "",
					'producto' => "",
					'asunto' => "",
					'mensaje' => "")
						

						




?>
