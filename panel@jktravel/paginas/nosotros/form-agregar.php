<?php
	//include("../../../admin/paginas/inicio/conexion/verificar_sesion.php");
	
include("../../conexion/conexion.php");
header("Content-Type: text/html; charset=iso-8859-1");

	$rst_idioma=mysql_query("SELECT * FROM ub_idioma WHERE id>0 ORDER BY idioma ASC;", $conexion);
	$rst_publicar=mysql_query("SELECT * FROM ub_publicar WHERE id>0 ORDER BY id ASC;", $conexion);

?>
<link rel="stylesheet" type="text/css" href="../../css/style.css" />
<script src="../../../SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="../../../SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<script src="../../js/ckeditor.js" type="text/javascript"></script>

<div id="contenido">
  <div id="titulo_principal">
   	<h2>Agregar - Inicio</h2>
  </div><!-- FIN TITULO PRINCIPAL -->
    <div id="contenido_total">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
            	<td>
                <form id="form1" name="form1" method="post" action="guardar.php">
            	  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td colspan="5">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="5" align="center"><label> <span class="texto_negro16-MyriadPro">Titulo:</span>
<input name="titulo" type="text" id="titulo" size="50" />
                  </label></td>
                </tr>
                <tr>
                  <td colspan="5">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="5" class="texto_negro16-MyriadPro">Contenido:</td>
                </tr>
                <tr>
                  <td colspan="5" align="center"><textarea class="ckeditor" cols="80" id="contenido" name="contenido" rows="10"></textarea></td>
                </tr>
                <tr>
                  <td colspan="5">&nbsp;</td>
                </tr>
                <tr>
                  <td width="18%" align="center" class="texto_negro16-MyriadPro">Idioma:</td>
                <td colspan="3"><span id="spryselect1">
                    <select name="idioma" id="idioma">
                      <option value="0">[ Seleccionar opcion ]</option>
                      <?php
							while ($fila1=mysql_fetch_array($rst_idioma))
							{
								echo "<option value='". $fila1["id"] ."'>". $fila1["idioma"] ."</option>";
							}
                        ?>
                    </select>
                  <span class="selectInvalidMsg">Selecciona una opci&oacute;n.</span><span class="selectRequiredMsg">Seleccione una opcion</span></span></td>
                  <td width="23%">&nbsp;</td>
                  </tr>
                <tr>
                  <td align="center">&nbsp;</td>
                  <td width="28%">&nbsp;</td>
                  <td width="8%">&nbsp;</td>
                  <td width="23%" align="right">&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td align="center" class="texto_negro16-MyriadPro">Publicar:</td>
                  <td colspan="3"><span id="spryselect2">
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
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td align="center" class="texto_negro16-MyriadPro">&nbsp;</td>
                  <td colspan="3">&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td align="center" class="texto_negro16-MyriadPro">&nbsp;</td>
                  <td colspan="3" align="center"><label>
                    <input type="submit" name="guardar" id="guardar" value="Guardar" />
                    &nbsp;
                    <input type="reset" name="button2" id="button2" value="Limpiar Datos" />
                  </label></td>
                  <td>&nbsp;</td>
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
//-->
</script>
