<?php
	include("../../conexion/conexion.php");
	header("Content-Type: text/html; charset=iso-8859-1");
?>
<link rel="stylesheet" type="text/css" href="../../css/style-listas.css" />
<script src="../../js/ckeditor.js" type="text/javascript"></script>
<script src="../../../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="../../../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<div id="contenido">
  <div id="titulo_principal">
   	<h2>Agregar - Visas y Embajadas</h2>
  </div><!-- FIN TITULO PRINCIPAL -->
    <div id="contenido_total">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
            	<td>
                <form id="form1" name="form1" method="post" action="guardar.php">
            	  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
            	    <tr>
            	      <td align="center"><p><strong>Pais:</strong></p></td>
            	      <td align="left"><input name="pais" type="text" id="pais" size="50" /></td>
          	      </tr>
            	    <tr>
            	      <td align="center" class="texto_negro16-MyriadPro"><p><strong>Direccion:</strong></p></td>
            	      <td align="left" class="texto_negro16-MyriadPro"><input name="direccion" type="text" id="direccion" size="50" /></td>
          	      </tr>
            	    <tr>
            	      <td align="center" class="texto_negro16-MyriadPro"><p><strong>Telefono:</strong></p></td>
            	      <td align="left" class="texto_negro16-MyriadPro"><span id="sprytextfield1">
            	        <input type="text" name="telefono" id="telefono" />
            	        <span class="textfieldInvalidFormatMsg">Formato no v&aacute;lido.</span></span></td>
          	      </tr>
            	    <tr>
            	      <td align="center" class="texto_negro16-MyriadPro"><p><strong>Fax:</strong></p></td>
            	      <td align="left" class="texto_negro16-MyriadPro"><span id="sprytextfield2">
            	        <input type="text" name="fax" id="fax" />
            	        <span class="textfieldInvalidFormatMsg">Formato no v&aacute;lido.</span></span></td>
          	      </tr>
            	    <tr>
            	      <td align="center" class="texto_negro16-MyriadPro"><p><strong>Web:</strong></p></td>
            	      <td align="left" class="texto_negro16-MyriadPro"><input name="web" type="text" id="web" size="50" /></td>
          	      </tr>
            	    <tr>
            	      <td colspan="2" align="left"><p><strong>Requisitos:</strong></p></td>
          	      </tr>
            	    <tr>
            	      <td colspan="2" align="center"><textarea class="ckeditor" cols="80" id="contenido2" name="contenido" rows="10"></textarea></td>
          	      </tr>
            	    <tr>
            	      <td colspan="2">&nbsp;</td>
          	      </tr>
                <tr>
                  <td width="17%" align="center" class="texto_negro16-MyriadPro">&nbsp;</td>
                  <td width="83%" align="center"><label>
                    <input type="submit" name="guardar" id="guardar" value="Guardar" />
                    &nbsp;
                    <input type="reset" name="button2" id="button2" value="Limpiar Datos" />
                  </label></td>
                  </tr>
              </table>
                </form>
              </td>
            </tr>
        </table>
    </div><!-- FIN CONTENIDO TOTAL -->
</div><!-- FIN PANEL DERECHA -->
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "integer", {isRequired:false});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "integer", {isRequired:false});
//-->
</script>