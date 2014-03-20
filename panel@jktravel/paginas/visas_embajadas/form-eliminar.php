<?php
	//include("../../../admin/paginas/faq/conexion/verificar_sesion.php");
	
include("../../conexion/conexion.php");
header("Content-Type: text/html; charset=iso-8859-1");

	$rst_query=mysql_query("SELECT * FROM jk_embajadas WHERE id=". $_REQUEST["id"].";", $conexion);
	$fila_query=mysql_fetch_array($rst_query);

?>
<link rel="stylesheet" type="text/css" href="../../css/style-listas.css" />

<div id="contenido">
  <div id="titulo_principal">
   	<h2>Eliminar - Visas y Embajadas</h2>
  </div><!-- FIN TITULO PRINCIPAL -->
    <div id="contenido_total">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
            	<td>
                <form id="form1" name="form1" method="post" action="eliminar.php?id=<?php echo $_REQUEST["id"]; ?>">
            	  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td colspan="2" align="center"><input type="submit" name="eliminar2" id="eliminar2" value="Eliminar" /></td>
                  </tr>
                <tr>
                  <td width="12%" align="center"><p><strong>Pais:</strong></p></td>
                  <td width="88%" align="left"><p><?php echo $fila_query["pais"]; ?></p></td>
                </tr>
                <tr>
                  <td align="center" class="texto_negro16-MyriadPro"><p><strong>Direccion:</strong></p></td>
                  <td align="left" class="texto_negro16-MyriadPro"><p><?php echo $fila_query["direccion"]; ?></p></td>
                </tr>
                <tr>
                  <td align="center" class="texto_negro16-MyriadPro"><p><strong>Telefono:</strong></p></td>
                  <td align="left" class="texto_negro16-MyriadPro"><p><?php echo $fila_query["telefono"]; ?></p></td>
                </tr>
                <tr>
                  <td align="center" class="texto_negro16-MyriadPro"><p><strong>Fax:</strong></p></td>
                  <td align="left" class="texto_negro16-MyriadPro"><p><?php echo $fila_query["fax"]; ?></p></td>
                </tr>
                <tr>
                  <td align="center" class="texto_negro16-MyriadPro"><p><strong>Web:</strong></p></td>
                  <td align="left" class="texto_negro16-MyriadPro"><p><?php echo $fila_query["web"]; ?></p></td>
                </tr>
                <tr>
                  <td height="20" colspan="2" valign="bottom"><p><strong>Requisitos:</strong></p></td>
                </tr>
                <tr>
                  <td colspan="2" align="left"><p><?php echo $fila_query["requisitos"]; ?></p></td>
                </tr>
                <tr>
                  <td colspan="2">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="2" align="center" class="texto_negro16-MyriadPro"><label>
                    <input type="submit" name="eliminar" id="eliminar" value="Eliminar" />
                  </label></td>
                  </tr>
              </table>
              </form>
              </td>
            </tr>
        </table>
    </div><!-- FIN CONTENIDO TOTAL -->
</div><!-- FIN PANEL DERECHA -->