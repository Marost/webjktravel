<?php
	//include("../../../admin/paginas/info/conexion/verificar_sesion.php");
	
include("../../conexion/conexion.php");
header("Content-Type: text/html; charset=iso-8859-1");

	$rst_info=mysql_query("SELECT * FROM jk_tipo_paquete WHERE id=". $_REQUEST["id"].";", $conexion);
	$fila_info=mysql_fetch_array($rst_info);

?>
<link rel="stylesheet" type="text/css" href="../../css/style-listas.css" />
<script type="text/javascript" src="../../js/ckeditor.js"></script>
<div id="contenido">
  <div id="titulo_principal">
   	<h2>Modificar - Tipo Paquete</h2>
  </div><!-- FIN TITULO PRINCIPAL -->
    <div id="contenido_total">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
            	<td>
                <form id="form1" name="form1" method="post" action="actualizar.php?id=<?php echo $_REQUEST["id"]; ?>">
            	  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                  <td align="center"><p>
                    <strong>
                    <label> Tipo Paquete:</label>
                  </strong></p></td>
                  <td align="left"><input name="tipo_paquete" type="text" id="tipo_paquete" value="<?php echo $fila_info["nombre"]; ?>" size="50" /></td>
                  </tr>
                <tr>
                  <td width="18%" align="center" class="texto_negro16-MyriadPro">&nbsp;</td>
                  <td width="59%">&nbsp;</td>
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
