<?php
include ("../../conexion/conexion.php");

mysql_query("DELETE FROM jk_usuario WHERE usuario='".$_REQUEST["usuario"]."';",$conexion);

mysql_query("DELETE FROM jk_privilegio_user WHERE usuario='".$_REQUEST["usuario"]."';",$conexion);

if (mysql_errno()!=0)
{
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	//header("Location:listar.php?mensaje=6");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=3");
}

?>