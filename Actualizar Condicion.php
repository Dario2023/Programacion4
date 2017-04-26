<?php 
// 3)Completar la condición de cada alumno 
include "ArrayCondicion.php";
	 foreach ($arrayalumnocondicion as $Notas => $Value) // <--- recorro los id alumnos
	 {																				
			
				if ((($Value["Parcial 1"] + $Value["Parcial 2"])/2)<6) // <--- desaprobaron parciales 
				{ 			
						if ((($Value["Parcial 1"] + $Value["Parcial 2"] + $Value["Recuperatorio"])/3)<=6) // <--- desaprobaron recuperatorio
						{		
								$ArrayCondicion[] = "libre";// <---guardo en array asistencia los libres

						} 
						else { $ArrayCondicion[] = "regular";} // <---guardo en array asistencia los aprobados en recuperatorios
				
				} 
				else if ((($Value["Parcial 1"] + $Value["Parcial 2"])/2)>=8) 
				{

							$ArrayCondicion[] = "promocional";// <---guardo en array asistencia los promocionales

				} 
				else {$ArrayCondicion[] = "regular";}// <---guardo en array asistencia los regular	
	 }

/*$i= 0;
foreach ($arrayalumnos as $key => $Value) 
{
	 $Value['Condicion']= $ArrayCondicion[$i];
	$i+=1;
}

 // print_r($arrayalumnos);*/
	 // print_r($ArrayCondicion);

?>		