<?php
include("../../conexion/conexion.php");
header("Content-Type: text/html; charset=iso-8859-1");
	
	$rst_publicar=mysql_query("SELECT * FROM jk_publicar WHERE id>0 ORDER BY id ASC;", $conexion);
	$rst_publicar1=mysql_query("SELECT * FROM jk_publicar WHERE id>0 ORDER BY id ASC;", $conexion);
	$rst_publicar2=mysql_query("SELECT * FROM jk_publicar WHERE id>0 ORDER BY id ASC;", $conexion);
	$rst_publicar3=mysql_query("SELECT * FROM jk_publicar WHERE id>0 ORDER BY id ASC;", $conexion);
	$rst_publicar4=mysql_query("SELECT * FROM jk_publicar WHERE id>0 ORDER BY id ASC;", $conexion);
	$rst_publicar5=mysql_query("SELECT * FROM jk_publicar WHERE id>0 ORDER BY id ASC;", $conexion);
	$rst_publicar6=mysql_query("SELECT * FROM jk_publicar WHERE id>0 ORDER BY id ASC;", $conexion);
?>
<link rel="stylesheet" type="text/css" href="../../css/style-listas.css" />

<script src="../../../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="../../../SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<script src="../../../SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="../../../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="../../../SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<link href="../../../SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<div id="contenido">
  <div id="titulo_principal">
   	<h2>Agregar - Usuario</h2>
  </div><!-- FIN TITULO PRINCIPAL -->
    <div id="contenido_total">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
            	<td>
                <form id="form1" name="form1" method="post" action="guardar.php">
            	  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                  <td align="right"><p> <strong>
                    <label> Nombre</label>:
                  </strong></p></td>
                  <td align="left"><input name="nombre" type="text" id="nombre" size="50" /></td>
                </tr>
                <tr>
                  <td align="right"><p> <strong>
                    <label> Apellidos:</label>
                  </strong></p></td>
                  <td align="left"><input name="apellidos" type="text" id="apellidos" size="50" /></td>
                </tr>
                <tr>
                  <td align="right"><p> <strong>
                    <label> Email:</label>
                  </strong></p></td>
                  <td align="left"><span id="sprytextfield1">
                  <input name="email" type="text" id="email" size="50" />
                  <span class="textfieldRequiredMsg">Ingrese un Email</span><span class="textfieldInvalidFormatMsg">Email no válido.</span></span></td>
                </tr>
                <tr>
                  <td align="right"><p> <strong>
                    <label> Usuario:</label>
                  </strong></p></td>
                  <td align="left"><input name="usuario" type="text" id="usuario" size="30" /></td>
                </tr>
                <tr>
                  <td align="right"><p> <strong>
                    <label> Contrase&ntilde;a:</label>
                  </strong></p></td>
                  <td align="left"><span id="spryconfirm1">
                  <input name="rpt-clave" type="password" id="rpt-clave" size="30" />
                  <span class="confirmRequiredMsg">Ingrese una contrase&ntilde;a</span><span class="confirmInvalidMsg">Las contrase&ntilde;as no coinciden.</span></span></td>
                </tr>
                <tr>
                  <td align="right"><p> <strong>
                    <label> Repetir Contrase&ntilde;a:</label>
                  </strong></p></td>
                  <td align="left"><input name="clave" type="password" id="clave" size="30" /></td>
                </tr>
                <tr>
                  <td width="18%" align="center" class="texto_negro16-MyriadPro">&nbsp;</td>
                  <td width="82%">&nbsp;</td>
                  </tr>
                <tr>
                  <td colspan="2" align="center" class="texto_negro16-MyriadPro"><p class="mensaje">PRIVILEGIOS DE USUARIO</p></td>
                  </tr>
                <tr>
                  <td align="right"><p><strong>Tipo Paquete:</strong></p></td>
                  <td><span id="spryselect2">
                    <select name="tipo_paquete" id="tipo_paquete">
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
                  <td align="right"><p><strong> Paquete:</strong></p></td>
                  <td><span id="spryselect3">
                    <select name="paquete" id="paquete">
                      <option value="0">[ Seleccionar opcion ]</option>
                      <?php
							while ($fila2=mysql_fetch_array($rst_publicar1))
							{
								echo "<option value='". $fila2["id"] ."'>". $fila2["publicar"] ."</option>";
							}
                        ?>
                    </select>
                    <span class="selectInvalidMsg">Selecciona una opci&oacute;n.</span><span class="selectRequiredMsg">Seleccione una opcion</span></span></td>
                </tr>
                <tr>
                  <td align="right"><p><strong> Visas:</strong></p></td>
                  <td><span id="spryselect4">
                    <select name="visas" id="visas">
                      <option value="0">[ Seleccionar opcion ]</option>
                      <?php
							while ($fila3=mysql_fetch_array($rst_publicar2))
							{
								echo "<option value='". $fila3["id"] ."'>". $fila3["publicar"] ."</option>";
							}
                        ?>
                    </select>
                    <span class="selectInvalidMsg">Selecciona una opci&oacute;n.</span><span class="selectRequiredMsg">Seleccione una opcion</span></span></td>
                </tr>
                <tr>
                  <td align="right"><p><strong> Formularios:</strong></p></td>
                  <td><span id="spryselect5">
                    <select name="formularios" id="formularios">
                      <option value="0">[ Seleccionar opcion ]</option>
                      <?php
							while ($fila4=mysql_fetch_array($rst_publicar3))
							{
								echo "<option value='". $fila4["id"] ."'>". $fila4["publicar"] ."</option>";
							}
                        ?>
                    </select>
                    <span class="selectInvalidMsg">Selecciona una opci&oacute;n.</span><span class="selectRequiredMsg">Seleccione una opcion</span></span></td>
                </tr>
                <tr>
                  <td align="right"><p><strong> Usuarios:</strong></p></td>
                  <td><span id="spryselect6">
                    <select name="usuarios" id="usuarios">
                      <option value="0">[ Seleccionar opcion ]</option>
                      <?php
							while ($fila5=mysql_fetch_array($rst_publicar4))
							{
								echo "<option value='". $fila5["id"] ."'>". $fila5["publicar"] ."</option>";
							}
                        ?>
                    </select>
                    <span class="selectInvalidMsg">Selecciona una opci&oacute;n.</span><span class="selectRequiredMsg">Seleccione una opcion</span></span></td>
                </tr>
                <tr>
                  <td align="right"><p><strong>Modificar:</strong></p></td>
                  <td><span id="spryselect7">
                    <select name="modificar" id="modificar">
                      <option value="0">[ Seleccionar opcion ]</option>
                      <?php
							while ($fila6=mysql_fetch_array($rst_publicar5))
							{
								echo "<option value='". $fila6["id"] ."'>". $fila6["publicar"] ."</option>";
							}
                        ?>
                    </select>
                    <span class="selectInvalidMsg">Selecciona una opci&oacute;n.</span><span class="selectRequiredMsg">Seleccione una opcion</span></span></td>
                </tr>
                <tr>
                  <td align="right"><p><strong> Eliminar:</strong></p></td>
                  <td><span id="spryselect8">
                    <select name="eliminar" id="eliminar">
                      <option value="0">[ Seleccionar opcion ]</option>
                      <?php
							while ($fila7=mysql_fetch_array($rst_publicar6))
							{
								echo "<option value='". $fila7["id"] ."'>". $fila7["publicar"] ."</option>";
							}
                        ?>
                    </select>
                    <span class="selectInvalidMsg">Selecciona una opci&oacute;n.</span><span class="selectRequiredMsg">Seleccione una opcion</span></span></td>
                </tr>
                <tr>
                  <td align="center" class="texto_negro16-MyriadPro">&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="2" align="center" class="texto_negro16-MyriadPro"><label>
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
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "email");
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "clave");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2", {invalidValue:"0"});
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3", {invalidValue:"0"});
var spryselect4 = new Spry.Widget.ValidationSelect("spryselect4", {invalidValue:"0"});
var spryselect5 = new Spry.Widget.ValidationSelect("spryselect5", {invalidValue:"0"});
var spryselect6 = new Spry.Widget.ValidationSelect("spryselect6", {invalidValue:"0"});
var spryselect7 = new Spry.Widget.ValidationSelect("spryselect7", {invalidValue:"0"});
var spryselect8 = new Spry.Widget.ValidationSelect("spryselect8", {invalidValue:"0"});
//-->
</script>
