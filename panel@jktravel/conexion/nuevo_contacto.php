<?php
include ("conexion.php");
$nombre=$_POST["nombre"];
$pais=$_POST["pais"];
$ciudad=$_POST["ciudad"];
$direccion=$_POST["direccion"];
$telefono=$_POST["telefono"];
$movil=$_POST["movil"];
$email=$_POST["email"];
$mensaje=$_POST["mensaje"];
$web="http://jktravelagency.com/";

mysql_query("INSERT INTO jk_contacto (nombre,pais,ciudad,direccion,telefono,movil,email,mensaje) values ('$nombre','$pais','$ciudad','$direccion','$telefono','$movil','$email','$mensaje');",$conexion);

	//ENVIAR A CORREO ELECTRONICO
	$msg= "";
	$msg= "CONTACTO -- J&K Travel - Agencia de Viajes y Turismo";
	$msg.="\nNombre y Apellidos: $nombre";
	$msg.="\nPais: $pais";
	$msg.="\nCiudad: $ciudad";
	$msg.="\nDireccion: $direccion";
	$msg.="\nTelefono: $telefono";
	$msg.="\nMovil: $movil";
	$msg.="\nEmail: $email";
	$msg.="\nMensaje: $mensaje";
	
	$remitente = "$email";
	$subject = "J&K Travel - Mensaje enviado por: '$nombre'";
	mail('jnanquen@jktravelagency.com', $subject, $msg, "FROM: $remitente");
	
	$remitente = "$email";
	$subject = "J&K Travel - Mensaje enviado por: '$nombre'";
	mail('jktravel2@hotmail.com', $subject, $msg, "FROM: $remitente");
	
	$remitente = "$email";
	$subject = "J&K Travel - Mensaje enviado por: '$nombre'";
	mail('devmarost@hotmail.com', $subject, $msg, "FROM: $remitente");
	
	$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>JK Travel - Agencia de Viajes y Turismo</title>
	<style type="text/css">
		body{ font-family: Arial, Helvetica, sans-serif; font-size: 12px;}
		body{ margin:0;}
	</style>
	</head>
	<body>
	<p><img src="'.$web.'imagenes/logo.jpg" height="39" />
	</p>
	<p>Gracias por contactarse con nosotros.</p>
	<p>Procederemos a trabajar su cotización y le daremos una respuesta a la brevedad posible.</p>
	<p>ES IMPORTANTE QUE INDIQUE EL DESTINO, LA FECHA Y CUANTAS PERSONAS VIAJAN, DE LO CONTRARIO LE PEDIMOS VUELVA A ENVIAR LA SOLICITUD CON LOS DATOS SOLICITADOS.</p>
	</body>
	</html>';
	
	$from="noreply@jktravelagency.com";
	$asunto="JK Travel - Agencia de Viajes y Turismo";
	$headers= "From: JK Travel <".strip_tags($from)."> \r\n";
	$headers.= "MIME-Version: 1.0\r\n";
	$headers.= "Content-Type: text/html; charset=UTF-8\r\n";

	mail($email, $asunto, $body, $headers);

if (mysql_errno()!=0)
{
	echo "error al insertar los datos". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
} else {
	mysql_close($conexion);
	header("Location:../../index.php");
}

?>
