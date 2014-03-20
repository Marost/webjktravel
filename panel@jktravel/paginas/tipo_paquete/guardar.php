<?php
include ("../../conexion/conexion.php");

$nombre=$_POST["tipo_paquete"];

mysql_query("INSERT INTO jk_tipo_paquete (nombre) VALUES ('$nombre');",$conexion);

if (mysql_errno()!=0)
{
	mysql_close($conexion);
	header("Location:listar.php?mensaje=4");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=1");
}

?>