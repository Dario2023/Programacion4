<?php
require('coneccion.php');
	 $id=$_GET['id'];
	 



$SQL = "SELECT * FROM alumno WHERE ID_ALUMNO=$id";

 
$resultado=consulta($SQL);


foreach ($resultado as $row){

	$nombre=$row['NOMBRE_ALUMNO'];


?>


<html>
	<head>
		<title>Usuarios</title>
		<link rel="stylesheet" type="text/css" href="css/estilosformulario.css">
	</head>
	<body>
		
		<center><h1>Modificar Consulta</h1></center>





		
		<form name="nuevo_usuario" method="POST" action="guardarModificacion.php">

<input type="hidden" name="miID" value="<?php echo $id;?>" />


			
				<label for="nombre">Nombre:</label>
					<input type="text"  id="nombre" name="nombre" size="25" value="<?php echo $row['NOMBRE_ALUMNO'];?>" required/>
         			
            <p>Tipo de Documento: </p>
            <P>
            </P>
          			<?php 
          			if ($row['TIPODOCUMENTO_ALUMNO']=="DNI") {
          				echo "<input type='radio' name='tipoDocumento' id='DNI' value='DNI' checked required>";
          			}else{echo "<input type='radio' name='tipoDocumento' id='DNI' value='DNI' required >";}
				 		?>
            
            DNI   
               <p></p>
					        			
         			<?php 
          			if ($row['TIPODOCUMENTO_ALUMNO']=="CI") {
          				echo "<input type='radio' name='tipoDocumento' id='CI' value='CI' checked >";
          			}else{echo "<input type='radio' name='tipoDocumento' id='CI' value='CI'  >";}
				 		?>
            
            CI
               <p></p>      		
      			
          			<?php 
          			if ($row['TIPODOCUMENTO_ALUMNO']=="LI") {
          				echo "<input type='radio' name='tipoDocumento' id='LI' value='LI' checked >";
          			}else{echo "<input type='radio' name='tipoDocumento' id='LI' value='LI' >";}

            ?>
            LI
             <p></p>         			

         			<?php 
          			if ($row['TIPODOCUMENTO_ALUMNO']=="OTRO") {
          				echo "<input type='radio' name='tipoDocumento' id='OTRO' value='OTRO' checked >";
          			}else{echo "<input type='radio' name='tipoDocumento' id='OTRO' value='OTRO' >";}

				 		?>
            OTRO
             <p></p>

         		
					<label for="nombre">Numero de Documento:</label>
					<input type="text"   name="NumeroDocumento" size="25" value="<?php echo $row['NUMERO_DOC_ALUMNO'];?>" required/></td>

					<label for="nombre">Fecha de Nacimiento:</label>
					<input type="text"   name="FechaNacimiento" size="25" value="<?php echo $row['FECHA_NACIMIENTO_ALUMNO'];?>"  /></td>

					<label for="nombre">Direccion:</label>
					<input type="text"   name="Direccion" size="25" value="<?php echo $row['DIRECCION_ALUMNO'];?>"  required/></td>

					<label for="cliente">Es Cliente :</label>
          <P></P>
          <P></P>
					<td>
         			

         			<?php 
          			if ($row['CLIENTE_ALUMNO']=="SI") {
          				echo "<input type='radio' name='esCliente'  value='SI' checked required >";
          			}else{echo "<input type='radio' name='esCliente'  value='SI' >";}

				 		?>
              SI
             <p></p>

         			<?php 
          			if ($row['CLIENTE_ALUMNO']=="no") {
          				echo "<input type='radio' name='esCliente'  value='no' checked >";
          			}else{echo "<input type='radio' name='esCliente'  value='no' >";}

				 		   ?>
                NO
             <p></p>

         		
					<label for="nombre">Producto Adquirido :</label>
          <P></P>
          <P></P>         			

         				<?php 
          			if ($row['PRODUCT_ADQUIRIDO_ALUMNO']=="Caja de Ahorro $ y US$") {
          				echo "<input type='radio' name='ProductoAdquirido'  value='Caja de Ahorro $ y US$' checked required >";
          			}else{echo "<input type='radio' name='ProductoAdquirido'  value='Caja de Ahorro $ y US$' >";}

				 		?>

            Caja de Ahorro $ y US$
             <p></p>

         			<?php 
          			if ($row['PRODUCT_ADQUIRIDO_ALUMNO']=="Cuenta Corriente ") {
          				echo "<input type='radio' name='ProductoAdquirido'  value='Cuenta Corriente ' checked  >";
          			}else{echo "<input type='radio' name='ProductoAdquirido'  value='Cuenta Corriente ' >";}

				 		?>

            Cuenta Corriente 
            <P></P>      			
         			
         			<?php 
          			if ($row['PRODUCT_ADQUIRIDO_ALUMNO']=="Plazo Fijo ") {
          				echo "<input type='radio' name='ProductoAdquirido'  value='Plazo Fijo ' checked  >";
          			}else{echo "<input type='radio' name='ProductoAdquirido'  value='Plazo Fijo ' >";}

				 		?>
            Plazo Fijo
            <P></P>       			

      			<?php 
          			if ($row['PRODUCT_ADQUIRIDO_ALUMNO']=="Tarjeta de Crédito ") {
          				echo "<input type='radio' name='ProductoAdquirido'  value='Tarjeta de Crédito ' checked  >";
          			}else{echo "<input type='radio' name='ProductoAdquirido'  value='Tarjeta de Crédito ' >";}

				 		?> 
            Tarjeta de Crédito
              <P></P>       			


         				<?php 
          			if ($row['PRODUCT_ADQUIRIDO_ALUMNO']=="Otro ") {
          				echo "<input type='radio' name='ProductoAdquirido'  value='Otro ' checked  >";
          			}else{echo "<input type='radio' name='ProductoAdquirido'  value='Otro ' >";}

				 		?> 
            OTRO
            <p></p>
    			

					<label for="nombre">Asunto:</label>
					<input type="text"  name="ASUNTO" value="<?php echo $row['ASUNTO_ALUMNO'];?>"  /></td>

					<label for="nombre">Mensaje:</label>
					<textarea name="Mensaje" cols="40" rows="6" value="<?php echo $row['MENSAJE_ALUMNO'];?>" ></textarea>


          				<label for="terminos">Acepto los Terminos y Condiciones</label>
						<input type="checkbox" name="terminos" id="terminos" value="true" required>

            Acepto los Terminos y Condiciones
            <P></P>

						<td></td>
						<td></td>
						<td ><center><input type="submit" name="enviar" value="Realizar Consulta" /></center></td>
					<?php } ?>
