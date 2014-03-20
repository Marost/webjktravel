<?php
include ("conexion.php");
$nombre=$_POST["nombre"];
$email=$_POST["email"];

mysql_query("INSERT INTO jk_boletin (nombre,email) values ('$nombre','$email');",$conexion);

if (mysql_errno()!=0)
{
	echo "error al insertar los datos". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
} else {
	mysql_close($conexion);
	header("Location:../index.php");
}

//ENVIAR A CORREO ELECTRONICO

$msg= "";
$msg= "BOLETIN -- J&K Travel - Agencia de Viajes y Turismo";
$msg.="\nNombre y Apellidos: $nombre";
$msg.="\nEmail: $email";

$remitente = "$email";
//$subject = "J&K Travel - Mensaje enviado por: '$nombre'";
//mail('comunicaciones@salonperu.org', $subject, $msg, "FROM: $remitente");

$remitente = "$email";
$subject = "J&K Travel - Mensaje enviado por: '$nombre'";
mail('devmarost@hotmail.com', $subject, $msg, "FROM: $remitente");

?>
