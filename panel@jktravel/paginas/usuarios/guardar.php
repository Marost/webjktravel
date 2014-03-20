<?php
include ("../../conexion/conexion.php");

//DATOS USUARIO
$nombre=$_POST["nombre"];
$apellidos=$_POST["apellidos"];
$usuario=$_POST["usuario"];
$email=$_POST["email"];
$clave=$_POST["clave"];

//PRIVILEGIOS USUARIO
$tipo_paquete=$_POST["tipo_paquete"];
$paquete=$_POST["paquete"];
$visas=$_POST["visas"];
$formulario=$_POST["formularios"];
$usuarios=$_POST["usuarios"];
$modificar=$_POST["modificar"];
$eliminar=$_POST["eliminar"];

mysql_query("INSERT INTO jk_usuario (usuario, clave, nombre, apellidos, email) VALUES ('$usuario', '$clave', '$nombre', '$apellidos', '$email');",$conexion);

mysql_query("INSERT INTO jk_privilegio_user (usuario, tipo_paquete, paquete, visas, formulario, usuarios, modificar, eliminar) VALUES ('$usuario', $tipo_paquete, $paquete, $visas, $formulario, $usuarios, $modificar, $eliminar);", $conexion);

if (mysql_errno()!=0)
{
	mysql_close($conexion);
	header("Location:listar.php?mensaje=4");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=1");
}

?>