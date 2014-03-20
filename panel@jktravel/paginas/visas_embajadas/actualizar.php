<?php
include ("../../conexion/conexion.php");

//declaracion de variables
$pais=$_POST["pais"];
$direccion=$_POST["direccion"];
$telefono=$_POST["telefono"];
$fax=$_POST["fax"];
$web=$_POST["web"];
$contenido=$_POST["contenido"];

mysql_query("UPDATE jk_embajadas SET pais='$pais', direccion='$direccion', telefono='$telefono', fax='$fax', web='$web', requisitos='$contenido' WHERE id=". $_REQUEST["id"].";", $conexion);

if (mysql_errno()!=0)
{
	mysql_close($conexion);
	header("Location:listar.php?mensaje=5");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=2");
}


?>
