<html>
	<head>
		<title>Usuarios</title>
		<link rel="stylesheet" type="text/css" href="css/estilosformulario.css">
	</head>
	<body>
		
		<center><h1>Cargar Formulario</h1></center>
		
		<form name="nuevo_usuario" method="POST" action="guarda_consulta.php">
			
				<label for="nombre">Nombre:</label>
					<input type="text"  id="nombre" name="nombre" size="25" placeholder="Escribe tu Nombre" required/>

Tipo de Documento:
<P></P>

          			
					<input type="radio" name="tipoDocumento" id="DNI" value="DNI" required >
					DNI
					<P></P>
         			
         			<input type="radio" name="tipoDocumento" id="CI" value="CI">
         			CI
         			<P></P>
          			
         			<input type="radio" name="tipoDocumento" id="LI" value="LI">
         			LI
         			<P></P>
         			
         			<input type="radio" name="tipoDocumento" id="OTRO" value="OTRO">
         			OTRO
         			<P></P>
				 		

					<label for="nombre">Numero de Documento:</label>
					<input type="text"   name="NumeroDocumento" size="25" placeholder="Escribe tu Documento" required/></td>

					<label for="nombre">Fecha de Nacimiento:</label>
					<input type="text"   name="FechaNacimiento" size="25" placeholder="Escribe tu fecha de Nacimiento" /></td>

					<label for="nombre">Direccion:</label>
					<input type="text"   name="Direccion" size="25" placeholder="Escribe tu Direccion" required/></td>


					<label for="cliente">Es Cliente :</label>
					<P></P>
					<P></P>
         			

         			<input type="radio" name="esCliente" id="OTRO" value="SI" required >
         			SI
         			<P></P>

         			
         			<input type="radio" name="esCliente" id="OTRO" value="no">
         			NO
         			<P></P>



					<label for="nombre">Producto Adquirido :</label>
					<P></P>


         			
					<input type="radio" name="ProductoAdquirido" value="Caja de Ahorro $ y US$" required>
					Caja de Ahorro $ y US$
					<P></P>

         			
         			<input type="radio" name="ProductoAdquirido" value="Cuenta Corriente ">
         			Cuenta Corriente
         			<P></P>

         			
         			<input type="radio" name="ProductoAdquirido" value="Plazo Fijo ">
         			Plazo Fijo
         			<P></P>

         			
         			<input type="radio" name="ProductoAdquirido" value="Tarjeta de Crédito ">
         			Tarjeta de Crédito
         			<P></P>

         			
         			<input type="radio" name="ProductoAdquirido" value="Otro ">
         			Otro
         			<P></P>

					

					<label for="nombre">Asunto:</label>
					<input type="text"  name="ASUNTO" size="25" /></td>

					<label for="nombre">Mensaje:</label>
					<textarea name="Mensaje" cols="40" rows="6" placeholder="Escribe el Mensaje"></textarea>


          				
						<input type="checkbox" name="terminos" id="terminos" value="true" required>
						Acepto los Terminos y Condiciones
						<P></P>

						<td></td>
						<td></td>


					<td ><center><input type="submit" name="enviar" value="Realizar Consulta" /></center></td>
				</tr>
		
		</form>
	</body>
</html>						