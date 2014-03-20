<?php
include("../conexion/conexion.php");

mysql_query("UPDATE jk_embajadas SET pais='". $_POST["txtpais"] ."', 
													 direccion='". $_POST["txtdireccion"] ."', 
													 telefono='". $_POST["txttelefono"] ."', 
													 fax='". $_POST["txtfax"] ."', 
													 web='". $_POST["txtweb"] ."', 
													 requisitos='". $_POST["elm1"] ."' WHERE id=". $_REQUEST["id"].";", $conexion);

if (mysql_errno()!=0)
{
	echo "error al insertar los datos". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
} else {
	mysql_close($conexion);
	header("Location:lista_embajada.php");
}


?>
