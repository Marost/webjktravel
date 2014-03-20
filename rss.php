<?php

//LINK= <a type="application/rss+xml" href="rss.php">TEXTO RSS</a>
//HEAD= <link rel="alternate" type="application/rss+xml" title="My RSS Feed" href="rss.php" />

header('Content-type: text/xml; charset="iso-8859-1"', true);
 
// Escribimos el archivo RSS
echo '<?xml version="1.0" encoding="iso-8859-1"?>';

//Aquí la conexión o archivo de conexión a nuestra base de datos
include("panel@jktravel/conexion/conexion.php");

//Hacemos la consulta y la ordenamos por id para mostrar siempre el último
$resultado=mysql_query("select * from jk_paquetes order by id Desc LIMIT 10",$conexion);

//"Cortaremos" el artículo en 300 caracteres para hacer nuestra descripción
$descripcion=substr($row[texto],0,50)."…";

// Generamos nuestro documento
echo '<rss version="2.0">';
echo '<channel>
<title>JK Travel - Agencia de Viajes y Turismo</title>
<link>http://www.jktravelagency.com/</link>
<language>es-CL</language>
<description>JK Travel Agencia de Viajes y Turismo</description>
<generator>JKTravel</generator>';

//Creamos un while para poder generar todos los extractos de noticias de nuestro sitio
while($row = mysql_fetch_array($resultado))
{
	echo '<item>
	<title>'.$row[destino].'</title>
	<link>../paquetes.php?id='.$row[id].'</link>
	<category>'.$row[paquete_dias].'</category>
	<description><![CDATA['.$row[texto].']]></description>
	</item>';
}//cerramos el while

//Cerramos nuestras etiquetas channel y rss
echo '
</channel>
</rss>';
?>
