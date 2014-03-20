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

mysql_query("UPDATE jk_usuario SET clave='$clave', nombre='$nombre', apellidos='$apellidos', email='$email' WHERE usuario='". $_REQUEST["usuario"]."';",$conexion);

mysql_query("UPDATE jk_privilegio_user SET tipo_paquete=$tipo_paquete, paquete=$paquete, visas=$visas, formulario=$formulario, usuarios=$usuarios, modificar=$modificar, eliminar=$eliminar WHERE usuario='". $_REQUEST["usuario"]."';", $conexion);

if (mysql_errno()!=0)
{
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	//header("Location:listar.php?mensaje=5");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=2");
}


?>
