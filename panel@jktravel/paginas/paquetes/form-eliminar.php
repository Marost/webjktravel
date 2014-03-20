<?php
	//include("../../../admin/paginas/servicios/conexion/verificar_sesion.php");
	
include("../../conexion/conexion.php");
header("Content-Type: text/html; charset=iso-8859-1");

	$rst_idioma=mysql_query("SELECT * FROM jk_tipo_paquete WHERE id>0 ORDER BY nombre ASC;", $conexion);
	$fila_query2=mysql_fetch_array($rst_idioma);
	$rst_publicar=mysql_query("SELECT * FROM jk_publicar WHERE id>0 ORDER BY id ASC;", $conexion);
	
	$rst_query=mysql_query("SELECT * FROM jk_paquetes WHERE id=". $_REQUEST["id"].";", $conexion);
	$fila_query=mysql_fetch_array($rst_query);

?>
<link rel="stylesheet" type="text/css" href="../../css/style.css" />
<div id="contenido">
  <div id="titulo_principal">
   	<h2>Eliminar - Paquete</h2>
  </div><!-- FIN TITULO PRINCIPAL -->
    <div id="contenido_total">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
            	<td>
                <form id="form1" name="form1" method="post" action="eliminar.php?id=<?php echo $_REQUEST["id"]; ?>">
            	  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td>&nbsp;</td>
                  <td align="center"><input type="submit" name="eliminar2" id="eliminar2" value="Eliminar" /></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                  <td align="center"><span class="texto_negro16-MyriadPro">Destino</span></td>
                  <td align="left"><?php echo $fila_query["destino"]; ?></td>
                  <td align="center">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                  <td align="center"><span class="texto_negro16-MyriadPro">Dias: </span></td>
                  <td align="left"><?php echo $fila_query["paquete"]; ?></td>
                  <td align="center">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                  <td align="center"><span class="texto_negro16-MyriadPro">Precio: </span></td>
                  <td align="left"><?php echo $fila_query["precio"]; ?></td>
                  <td align="center">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                  <td height="25" colspan="3" class="texto_negro16-MyriadPro">Contenido:</td>
                </tr>
                <tr>
                  <td colspan="3" align="left"><p><?php echo $fila_query["texto"]; ?></p></td>
                </tr>
                <tr>
                  <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                  <td width="18%" align="center" class="texto_negro16-MyriadPro">Tipo paquete:</td>
                <td>
						  <?php
                            if ($fila_query2["id"]==$fila_query["tipo_paquete"])
								echo $fila_query2["nombre"];
                          ?>
                    <td width="23%">&nbsp;</td>
                  </tr>
                <tr>
                  <td align="center">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td align="center" class="texto_negro16-MyriadPro">Publicar:</td>
                  <td>
                      <?php
							if ($fila_query["publicar"]==1)
								echo "SI";
							else
							{
								if ($fila_query["publicar"]==2)
									echo "NO";
							}
					  ?>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                  <td align="center" class="texto_negro16-MyriadPro">&nbsp;</td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td align="center" class="texto_negro16-MyriadPro">&nbsp;</td>
                  <td align="center"><label>
                    <input type="submit" name="eliminar" id="eliminar" value="Eliminar" />
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
