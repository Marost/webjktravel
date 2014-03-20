<?php
include ("../conexion/conexion.php");
$destino=$_POST["nombre_destino"];
$paquete_dias=$_POST["paquete_dias"];
$precio=$_POST["nombre_precio"];
$texto=$_POST["elm1"];
$tipo_paquete=$_POST["tipo_paquete"];
$publicar=$_POST["publicar"];
$salida=$_POST["salida"];
$retorno=$_POST["retorno"];

mysql_query("INSERT INTO jk_paquetes (destino,paquete,precio,texto,tipo_paquete,publicar,fecha_salida,fecha_retorno) 
									  values ('$destino','$paquete_dias','$precio','$texto','$tipo_paquete','$publicar','$salida','$retorno');",$conexion);

if (mysql_errno()!=0)
{
	echo "error al insertar los datos". mysql_errno() . " - ". mysql_error();
	mysql_close($conexion);
} else {
	mysql_close($conexion);
	header("Location:lista_destinos.php");
}

?>
