<?php
include("../conexion/conexion.php");
header("Content-Type: text/html; charset=iso-8859-1");
	if($_REQUEST["btnbuscar"]!="" && $_REQUEST["busqueda"]!="")
	{
		$filtro = " and pais like '%". $_REQUEST["busqueda"]."%'";
		
	} else{
		$mensaje="Escriba en el cuadro de texto";
	}


$rst_embajada=mysql_query("SELECT * FROM jk_embajadas WHERE id>0 $filtro;", $conexion);
$num_registros=mysql_num_rows($rst_embajada);
if ($num_registros==0)
{
	echo "No se han encontrado Destinos en la Base de Datos - <a href='nuevo_emabajada.php'>Nueva Embajada</a>";
	mysql_close($conexion);
	exit();
}

	$registros=20;	
	$pagina=$_GET["pag"];
	if (is_numeric($pagina))
	$inicio=(($pagina-1)*$registros);
	else
	$inicio=0;
	
	$rst_embajada=mysql_query("SELECT * FROM jk_embajadas WHERE id>0 $filtro LIMIT $inicio, $registros;", $conexion);
	$paginas=ceil($num_registros/$registros);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JK TRAVEL - LISTADO DE EMBAJADA</title>
<link rel="stylesheet" type="text/css" href="../../css/estilo.css"/>
</head>
<body>
<table width="95%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="40" colspan="3" align="center" class="titulo_lista"><h1>LISTADO DE REGISTRO DE DESTINOS</h1></td>
  </tr>
  <tr>
    <td height="30" colspan="3" align="center"><a href="../../admin/embajadas/nuevo_destino.php">Nuevo Destino</a></td>
  </tr>
  <tr>
    <td height="30" colspan="3" align="center"><form id="form1" name="form1" method="get" action="lista_embajada.php">
      <p>Buscar:
  <input name="busqueda" type="text" id="busqueda" value="<?php echo $_GET["busqueda"]; ?>" />
        <input type="submit" name="btnbuscar" id="btnbuscar" value="Buscar" />
        <br />
        <?php echo $mensaje ?></p>
    </form></td>
  </tr>
  <tr class="titulo_lista2">
    <td width="10%" height="30" align="center">Codigo</td>
    <td height="30" align="center">PAIS</td>
    <td width="14%" height="30" align="center">Modificar</td>
  </tr>
  <?php
  while ($fila=mysql_fetch_array($rst_embajada))
  {
	  
  ?>
  <tr>
    <td width="10%" height="30" align="center"><?php echo $fila["id"]; ?></td>
    <td height="30"> <strong><?php echo $fila["pais"]; ?></strong></td>
    <td width="14%" height="30" align="center"><a href="modificar_embajada.php?id=<?php echo $fila["id"] ?>">Modificar</a></td>
  </tr>
  <?php
  }
  ?>
  <tr>
    <td height="30" colspan="3" align="center"><?php
		if (!isset($_GET["pag"]))
	$pag = 1;
	else
	$pag = $_GET["pag"];

	function paginar1($actual, $total, $por_pagina, $enlace, $maxpags=0)
	{
		$total_paginas = ceil($total/$por_pagina);
		$anterior = $actual - 1;
		$posterior = $actual + 1;
		$minimo = $maxpags ? max(1, $actual-ceil($maxpags/2)): 1;
		$maximo = $maxpags ? min($total_paginas, $actual+floor($maxpags/2)): $total_paginas;
		if ($actual>1)
		$texto = "<a href=\"$enlace$anterior\">Anterior</a> ";
		else
		$texto = "<b>&lt;&lt;</b> ";
		if ($minimo!=1) $texto.= "... ";
		for ($i=$minimo; $i<$actual; $i++)
		$texto .= "<a href=\"$enlace$i\">$i</a> ";
		$texto .= "<b>$actual</b> ";
		for ($i=$actual+1; $i<=$maximo; $i++)
		$texto .= "<a href=\"$enlace$i\">$i</a> ";
		if ($maximo!=$total_paginas) $texto.= "... ";
		if ($actual<$total_paginas)
		$texto .= "<a href=\"$enlace$posterior\">Siguiente</a>";
		else
		$texto .= "<b>&gt;&gt;</b>";
		return $texto;
	}

	echo paginar1($pag, $num_registros, $registros, "$url?pag=", 10);
		?></td>
  </tr>
  
</table>
<br />
</body>
</html>