<?php  
function actualizarCondicion(&$notas,&$asistencia){

	 // 3)Completar la condición de cada alumno 

	 foreach ($notas as $nroPersona => $value) {																				// <--- recorro los id alumnos
			
				if ((($notas[$nroPersona] ["parcial_1"] + $notas[$nroPersona] ["parcial_2"])/2)<=6) { 			// <--- desaprobaron parciales
				
						if ((($notas[$nroPersona] ["parcial_1"] + $notas[$nroPersona] ["parcial_2"] + $notas[$nroPersona] ["recuperatorio"])/3)<=6){ // <--- desaprobaron recuperatorio
								
								$asistencia[$nroPersona] ["condicion"] = "libre";// <---guardo en array asistencia los libres

						} else { $asistencia[$nroPersona] ["condicion"] = "regular";} // <---guardo en array asistencia los aprobados en recuperatorios
				
				} else if ((($notas[$nroPersona] ["parcial_1"] + $notas[$nroPersona] ["parcial_2"])/2)>=8) {

							$asistencia[$nroPersona] ["condicion"] = "promocional";// <---guardo en array asistencia los promocionales

							 } else {$asistencia[$nroPersona] ["condicion"] = "regular";}// <---guardo en array asistencia los regular	

	 }

//condicion segun la asistencia
			
			foreach ($asistencia as $Alumn => $VALUE) {             	 // <---recorro alumno
				
				foreach ($VALUE as $key => $val) {
					$ausente=0;
					$totalDia=0;
				
					if (is_array($val)){					    	     // <--- si es el array (fecha) 

						foreach ($val as $fecha => $asist) { 			// <---recorro las fechas

							if  ($asist =="a"){							// <---total ausente 

								$ausente+=1;							// <---contador ausente

							}

							$totalDia+=1;								// <---total dia contador
										 					
						}
							  if (($ausente /$totalDia * 100) >= 20) {     // <--- si el total 20% de falta quedan libres
							  	  	$asistencia[$Alumn] ["condicion"] = "libre";
							  }

					}
			 	}
			 } 

}

?>