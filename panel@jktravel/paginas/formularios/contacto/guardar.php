<?php
session_start();
include("../../../../admin/paginas/conexion/conexion.php");

//DECLARACION DE VARIABLES
$persona="JK Travel - Agencia de Viajes y Turismo";
$email="jktravel2@hotmail.com";
$mensaje=$_POST["msj"];
$respuesta=1;
$email_dest=$_POST["email"];

mysql_query("INSERT INTO jk_contacto (persona, email, mensaje, respuesta) VALUES('$persona', '$email', '$mensaje', $respuesta);",$conexion);

if (mysql_errno()!=0)
{
	echo "error al insertar los datos ". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
	//header("Location:listar.php?mensaje=4");
} else {
	$destinatario = $email_dest; 
	$asunto = "Mensaje Contacto - JK Travel"; 
	$cuerpo = "<html><head><title>Mensaje Contacto - JK Travel</title>
	<style type='text/css'>
		body,td,th {color: #000;}
	</style>
	</head>
	<body>
		".$persona." ha respondido tu mensaje de contacto:<br/><br/>
		<strong>Mensaje:</strong>
		$mensaje<br/>
	</body></html>"; 

	//para el envío en formato HTML 
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; 
	
	//dirección del remitente 
	$headers .= 'From: <'.$email.'>' . "\r\n";
	
	mail($destinatario,$asunto,$cuerpo,$headers);
	mysql_close($conexion);
	header("Location:listar.php?mensaje=1");
}

?>