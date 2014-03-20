<?php
	//include("../../../admin/paginas/servicios/conexion/verificar_sesion.php");
	
include("../../conexion/conexion.php");
header("Content-Type: text/html; charset=iso-8859-1");

	$rst_idioma=mysql_query("SELECT * FROM jk_tipo_paquete WHERE id>0 ORDER BY nombre ASC;", $conexion);
	$rst_publicar=mysql_query("SELECT * FROM jk_publicar WHERE id>0 ORDER BY id ASC;", $conexion);

?>
<link rel="stylesheet" type="text/css" href="../../css/style-listas.css" />
<script src="../../js/ckeditor.js" type="text/javascript"></script>
<script src="../../../SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="../../../SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="../../../css/jquery.ui.all.css"/>
<script src="../../../js/jquery-1.4.2.js" type="text/javascript"></script>
<script src="../../../js/jquery.ui.core.js" type="text/javascript"></script>
<script src="../../../js/jquery.ui.widget.js" type="text/javascript"></script>
<script src="../../../js/jquery.ui.datepicker.js" type="text/javascript"></script>
<script src="../../../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function() {
		var dates = $('#salida, #retorno').datepicker({
			defaultDate: "+1w",
			changeMonth: true,
			numberOfMonths: 1,
			onSelect: function(selectedDate) {
				var option = this.id == "salida" ? "minDate" : "maxDate";
				var instance = $(this).data("datepicker");
				var date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
				dates.not(this).datepicker("option", option, date);
			}
		});
	});
</script>

<link href="../../../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<div id="contenido">
  <div id="titulo_principal">
   	<h2>Agregar - Paquete</h2>
  </div><!-- FIN TITULO PRINCIPAL -->
    <div id="contenido_total">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
            	<td>
                <form action="guardar.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
            	  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                  <td align="center"><p><strong>Destino:</strong></p></td>
                  <td align="left"><input name="destino" type="text" id="destino" size="50" /></td>
                  </tr>
                <tr>
                  <td align="center" class="texto_negro16-MyriadPro"><p><strong>Dias:</strong></p></td>
                  <td align="left" class="texto_negro16-MyriadPro"><input type="text" name="dias" id="dias" /></td>
                  </tr>
                <tr>
                  <td align="center" class="texto_negro16-MyriadPro"><p><strong>Precio:</strong></p></td>
                  <td align="left" class="texto_negro16-MyriadPro"><span id="sprytextfield1">
                  <input type="text" name="precio" id="precio" />
<span class="textfieldInvalidFormatMsg">Formato no válido.</span></span></td>
                  </tr>
                <tr>
                  <td colspan="2" align="left"><p><strong>Contenido:</strong></p></td>
                </tr>
                <tr>
                  <td colspan="2" align="center"><textarea class="ckeditor" cols="80" id="contenido2" name="contenido" rows="10"></textarea></td>
                </tr>
                <tr>
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                  <td width="18%" align="center"><p><strong>Tipo Paquete:</strong></p></td>
                <td><span id="spryselect1">
                    <select name="tipo_paquete" id="tipo_paquete">
                      <option value="0">[ Seleccionar opcion ]</option>
                      <?php
							while ($fila1=mysql_fetch_array($rst_idioma))
							{
								echo "<option value='". $fila1["id"] ."'>". $fila1["nombre"] ."</option>";
							}
                        ?>
                    </select>
                  <span class="selectInvalidMsg">Selecciona una opci&oacute;n.</span><span class="selectRequiredMsg">Seleccione una opcion</span></span></td>
                  </tr>
                <tr>
                  <td align="center"><p><strong>Publicar:</strong></p></td>
                  <td><span id="spryselect2">
                    <select name="publicar" id="publicar">
                      <option value="0">[ Seleccionar opcion ]</option>
                      <?php
							while ($fila1=mysql_fetch_array($rst_publicar))
							{
								echo "<option value='". $fila1["id"] ."'>". $fila1["publicar"] ."</option>";
							}
                        ?>
                    </select>
                  <span class="selectInvalidMsg">Selecciona una opci&oacute;n.</span><span class="selectRequiredMsg">Seleccione una opcion</span></span></td>
                  </tr>
                <tr>
                  <td align="center"><p><strong>Fecha Salida:</strong></p></td>
                  <td><label>
                    <input type="text" name="salida" id="salida" />
                  </label></td>
                  </tr>
                <tr>
                  <td align="center"><p><strong>Fecha Regreso:</strong></p></td>
                  <td><label>
                    <input type="text" name="retorno" id="retorno" />
                  </label></td>
                  </tr>
                <tr>
                  <td align="center"><p><strong>Imagen:</strong></p></td>
                  <td><label>
                    <input type="file" name="file" id="file" va />
                  </label></td>
                  </tr>
                <tr>
                  <td align="center" class="texto_negro16-MyriadPro">&nbsp;</td>
                  <td align="center"><label>
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
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {invalidValue:"0"});
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2", {invalidValue:"0"});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "integer", {isRequired:false});
//-->
</script>
