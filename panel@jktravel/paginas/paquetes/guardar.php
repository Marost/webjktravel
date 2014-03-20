<?php
include ("../../conexion/conexion.php");

//BUSQUEDA DE TIPO DE PAQUETE
	$id_query=$_POST["tipo_paquete"];
	$rst_query=mysql_query("SELECT * FROM jk_tipo_paquete WHERE id=$id_query;", $conexion);
	$fila_query=mysql_fetch_array($rst_query);

	// IMAGEN PORTADA
	if(is_uploaded_file($_FILES['file']['tmp_name']))
	{ 
		$fileName=$_FILES['file']['name'];
		$uploadDir="../../../imagenes/img-upload/";
		$uploadFile=$uploadDir.$fileName;
		$num = 0;
		
		$name = $fileName;
		$extension = end(explode('.',$fileName));     
		$onlyName = substr($fileName,0,strlen($fileName)-(strlen($extension)+1));
		while(file_exists($uploadDir.$name))
		{
			$num++;         
			$name = $onlyName."".$num.".".$extension; 
		}
		$uploadFile = $uploadDir.$name; 
		
		move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile);
		chmod($uploadFile, 0644);
		$name;
    }

//declaracion de variables
$destino=$_POST["destino"];
$dias=$_POST["dias"];
$precio=$_POST["precio"];
$contenido=$_POST["contenido"];
$salida=$_POST["salida"];
$retorno=$_POST["retorno"];
$paquete=$_POST["tipo_paquete"];
$nombre_paquete=$fila_query["nombre"];
$publicar=$_POST["publicar"];

mysql_query("INSERT INTO jk_paquetes (destino, paquete, precio, texto, tipo_paquete, publicar, fecha_salida, fecha_retorno, imagen, nombre_tp) 
									  VALUES ('$destino', '$dias', $precio, '$contenido', $paquete, $publicar, '$salida', '$retorno', '$name', '$nombre_paquete');",$conexion);

if (mysql_errno()!=0)
{
	mysql_close($conexion);
	header("Location:listar.php?mensaje=4");
} else {
	mysql_close($conexion);
	header("Location:listar.php?mensaje=1");
}

?>