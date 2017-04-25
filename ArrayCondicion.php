<?php 
echo '<h3>'.'Punto 3-A - Arreglo Asociativo Condicion Alumnos'.'</h3>';
$arrayalumnocondicion = array
(
	array('Id' => 10,
		  'Parcial 1' => 4,
		  'Parcial 2' => 6,
		  'Recuperatorio' => 7
		  ),
	array('Id' => 29,
		  'Parcial 1' => 7,
		  'Parcial 2' => 6,
		  'Recuperatorio' => ''
		  ),
	array('Id' => 34,
		  'Parcial 1' => 5,
		  'Parcial 2' => 8,
		  'Recuperatorio' => 5
		  ),
	array('Id' => 45,
		  'Parcial 1' => 7,
		  'Parcial 2' => 10,
		  'Recuperatorio' => ''
		  ),
	array('Id' => 52,
		  'Parcial 1' => 9,
		  'Parcial 2' => 9,
		  'Recuperatorio' => ''
		  ),
	array('Id' => 65,
		  'Parcial 1' => 4,
		  'Parcial 2' => 6,
		  'Recuperatorio' => 10
		  ),
	array('Id' => 79,
		  'Parcial 1' => 9,
		  'Parcial 2' => 6,
		  'Recuperatorio' => '' 
		  ),
	array('Id' => 84,
		  'Parcial 1' => 8,
		  'Parcial 2' => 9,
		  'Recuperatorio' => ''
		  ),
	array('Id' => 9,
		  'Parcial 1' => 8,
		  'Parcial 2' => 4,
		  'Recuperatorio' => 9
		  ),
	array('Id' => 103,
		  'Parcial 1' => 9,
		  'Parcial 2' => 6,
		  'Recuperatorio' => ''
		  ),
	array('Id' => 117,
		  'Parcial 1' => 9,
		  'Parcial 2' => 9,
		  'Recuperatorio' => ''
		  ),
	array('Id' => 124,
		  'Parcial 1' => 5,
		  'Parcial 2' => 5,
		  'Recuperatorio' => 4
		  ),
);
//print_r($arrayalumnocondicion);
?>

<?php 

		foreach ($arrayalumnocondicion as $Notas => $valores) 
		{
		if (($valores['Parcial 1'] + $valores['Parcial 2'])/2 < 6) {
				echo "El Alumno es: LIBRE ".'<br>';
				}
				elseif (($valores['Parcial 1'] + $valores['Parcial 2'])/2 > 5 and ($valores['Parcial 1'] + $valores['Parcial 2'])/2 <= 8) {
				echo "El Alumno es: REGULAR ".'<br>';
				}
				elseif (($valores['Parcial 1'] + $valores['Parcial 2'])/2 > 8) {
				echo "El Alumno es: PROMOCIONAL ".'<br>';
				}
		}		

			(($valores['Parcial 1'] and $valores['Parcial 2']) > $valores['Recuperatorio']) // a y b > c
			(($valores['Parcial 1'] and $valores['Recuperatorio']) > $valores['Parcial 2']) // a y c > b
			(($valores['Parcial 2'] and $valores['Recuperatorio']) > $valores['Parcial 1']) // b y c > a


			/*if ($valores['Parcial 1']> $valores['Recuperatorio'] and $valores['Parcial 2']> $valores['Recuperatorio']){
				
				if (($valores['Parcial 1'] + $valores['Parcial 2'])/2 < 6) {
				echo "El Alumno es: LIBRE ".'<br>';
				}
				elseif (($valores['Parcial 1'] + $valores['Parcial 2'])/2 > 5 and ($valores['Parcial 1'] + $valores['Parcial 2'])/2 <= 8) {
				echo "El Alumno es: REGULAR ".'<br>';
				}
				elseif (($valores['Parcial 1'] + $valores['Parcial 2'])/2 > 8) {
				echo "El Alumno es: PROMOCIONAL ".'<br>';
				}	
			}
			elseif ($valores['Parcial 1']< $valores['Recuperatorio'] and $valores['Parcial 2']> $valores['Recuperatorio']){
				if (($valores['Recuperatorio'] + $valores['Parcial 2'])/2 < 6) {
				echo "El Alumno es: LIBRE ".'<br>';
				}
				elseif (($valores['Recuperatorio'] + $valores['Parcial 2'])/2 > 5 and ($valores['Parcial 1'] + $valores['Parcial 2'])/2 <= 8) {
				echo "El Alumno es: REGULAR ".'<br>';
				}
				elseif (($valores['Recuperatorio'] + $valores['Parcial 2'])/2 > 8) {
				echo "El Alumno es: PROMOCIONAL ".'<br>';
				}		
			}
			elseif ($valores['Parcial 1']> $valores['Recuperatorio'] and $valores['Parcial 2']< $valores['Recuperatorio']){
				if (($valores['Parcial 1'] + $valores['Recuperatorio'])/2 < 6) {
				echo "El Alumno es: LIBRE ".'<br>';
				}
				elseif (($valores['Parcial 1'] + $valores['Recuperatorio'])/2 > 5 and ($valores['Parcial 1'] + $valores['Parcial 2'])/2 <= 8) {
				echo "El Alumno es: REGULAR ".'<br>';
				}
				elseif (($valores['Parcial 1'] + $valores['Recuperatorio'])/2 > 8) {
				echo "El Alumno es: PROMOCIONAL ".'<br>';
				}		
			}
		}*/	
?>