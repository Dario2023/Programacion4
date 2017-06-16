
<!DOCTYPE html>
<html>
<head>
	<title>P3-Formulario de Carga de Cliente</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/estilosformularios.css"> -->
<head>
 <body>
 <div align="center">
<form name="FormCliente" method="post" action="AccionesBD.php">
   <table bgcolor ="" border="1" cellpadding="0" cellspacing="0" width="40%">
    <tr>
      <th bgcolor="">Apellido y Nombre:</th>
      <td><input type="text" size="53" name="Txt1" placeholder="Apellido Nombre"></td>
    </tr>
    <tr>
      <th>Tipo de Documento:</th>
      <td><select name="CmbTipoDoc" >
                        <option value="0">Selecione...</option>
                        <option value="1">DNI</option>
                        <option value="2">CE</option>
                        <option value="3">LI</option>                     
                        <option value="4">Otro</option>
                      </select>
      <th>Nro.:</th>
      <td><input type="text" size="8" name="Txt2" ></td>
    </tr>
    <tr>
    </tr>
    <tr>
      <th>Fecha de Nacimineto:</th>
      <td><input type="text" size="8" name="Txt3" placeholder="00/00/0000"></td>
    </tr>
    <tr>
      <th>Direccion:</th>
      <td><input type="text" size="53" name="Txt4" spellcheck="true"></td>
    </tr>
    <th>Es Cliente:</th>
      <td><select name="CmbCliente">
                        <option value="0">Selecione...</option>
                        <option value="1">SI</option>
                        <option value="2">NO</option>
                      </select>
    <tr>
      <th>Productos Adquiridos:</th>
      <!-- <label><td><input type="checkbox" id="Chk1" name="CheckProductos">Caja de Ahorro $ y US$</label></td>
      <label><td><input type="checkbox" name="CheckProductos">Cuenta Corriente</label></td>
      <label><td><input type="checkbox" name="CheckProductos">Plazo Fijo</label></td>
      <label><td><input type="checkbox" name="CheckProductos">Seguro</label></td>
      <label><td><input type="checkbox" name="CheckProductos">Tarjeta de Credito</label></td>
      <label><td><input type="checkbox" name="CheckProductos">Otro</label></td>
 -->
      <td><select name="CmbProductos">
                        <option value="0">Selecione...</option>
                        <option value="1">Caja de Ahorro $ y US$</option>
                        <option value="2">Cuenta Corriente</option>
                        <option value="3">Plazo Fijo</option>                     
                        <option value="4">Seguro</option>
                        <option value="5">Tarjeta de Credito</option>
                        <option value="6">Otro</option>
                      </select>
    </tr>
    <tr>
      <th>Asunto:</th>
      <td><input type="text" size="20" name="Txt5" ></td>
    </tr>
    <tr>
      <th>Mensaje:</th>
      <!--Si el atributo spellcheck está a true, el navegador comprobará la ortografía-->
      <!--escribir sugerencias de usuario en el atributo placeholder-->
      <td><textarea name="texto" cols="40" rows="10" spellcheck="true" placeholder="Ingrese su Mensaje"></textarea></td>
      <td><input type="submit" name="enviar" value="Enviar"></td>
    </tr>
   </table>
</form>
</div>
</body>
</html>
