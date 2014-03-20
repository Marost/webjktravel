<?php
include("../../conexion/conexion.php");
header("Content-Type: text/html; charset=iso-8859-1");

	$rst_query1=mysql_query("SELECT * FROM jk_usuario WHERE usuario='". $_REQUEST["usuario"]."';", $conexion);
	$fila_query1=mysql_fetch_array($rst_query1);

?>
<link rel="stylesheet" type="text/css" href="../../css/style-listas.css" />

<div id="contenido">
  <div id="titulo_principal">
   	<h2>Eliminar - Usuario</h2>
  </div><!-- FIN TITULO PRINCIPAL -->
    <div id="contenido_total">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
            	<td>
                <form id="form1" name="form1" method="post" action="eliminar.php?usuario=<?php echo $_REQUEST["usuario"]; ?>">
            	  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
            	    <tr>
            	      <td width="18%" align="right">&nbsp;</td>
            	      <td width="59%" align="left">&nbsp;</td>
          	      </tr>
            	    <tr>
            	      <td align="right"><p> <strong>Nombre: </strong></p></td>
            	      <td align="left"><p><?php echo $fila_query1["nombre"]; ?></p></td>
          	      </tr>
            	    <tr>
            	      <td align="right"><p> <strong>Apellidos:</strong></p></td>
            	      <td align="left"><p><?php echo $fila_query1["apellidos"]; ?></p></td>
          	      </tr>
            	    <tr>
            	      <td align="right"><p> <strong>Email:</strong></p></td>
            	      <td align="left"><p><?php echo $fila_query1["email"]; ?></p></td>
          	      </tr>
            	    <tr>
            	      <td align="right"><p><strong>Usuario:</strong></p></td>
            	      <td align="left"><p><?php echo $fila_query1["usuario"]; ?></p></td>
          	      </tr>
            	    <tr>
            	      <td align="center">&nbsp;</td>
            	      <td>&nbsp;</td>
          	      </tr>
                <tr>
                  <td colspan="2" align="center"><label>
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
