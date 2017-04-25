<?php include "ArrayCondicion.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tabla de Notas</title>
</head>
<body>
<table border="1">
	<tr>
		
		<th bgcolor="red"><?php echo '<b>'."Nro".'</b>'; ?></th>
		<th bgcolor="red"><?php echo '<b>'."Parcial 1".'</b>'; ?></th>
		<th bgcolor="red"><?php echo '<b>'."Parcial 2".'</b>'; ?></th>
		<th bgcolor="red"><?php echo '<b>'."Recuperatorio".'</b>'; ?></th>


	</tr>
		<?php 
			foreach ($arrayalumnocondicion as $Notas => $valores) 
				{
		?>
	<tr>
					<td style="text-align: center;" bgcolor="red"><?php echo '<b>'.$valores['Id'].'</b>'; ?></td>
					<td style="text-align: center;"><?php echo $valores['Parcial 1']; ?></td>
					<td style="text-align: center;"><?php echo $valores['Parcial 2']; ?></td>
					<td style="text-align: center;"><?php echo $valores['Recuperatorio']; ?></td>
	</tr>
		<?php 
				}
		?>

</table>
</body>
</html>