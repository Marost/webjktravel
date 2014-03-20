<?php
include ("../../conexion/conexion.php");

//declaracion de variables
$pais=$_POST["pais"];
$direccion=$_POST["direccion"];
$telefono=$_POST["telefono"];
$fax=$_POST["fax"];
$web=$_POST["web"];
$contenido=$_POST["contenido"];

mysql_query("INSERT INTO jk_embajadas (pais, direccion, telefono, fax, web, requisitos) 
									  VALUES ('$pais', '$direccion', '$telefono', '$fax', '$web', '$contenido');",$conexion);

if (mysql_errno()!=0)
{
	mysql_close($conexion);
	header("Location:listar.php?mensaje=4");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=1");
}

?>