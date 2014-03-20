<?php
include ("../../conexion/conexion.php");

$nombre=$_POST["tipo_paquete"];

mysql_query("UPDATE jk_tipo_paquete SET nombre='$nombre' WHERE id=". $_REQUEST["id"].";", $conexion);

if (mysql_errno()!=0)
{
	mysql_close($conexion);
	header("Location:listar.php?mensaje=5");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=2");
}


?>
