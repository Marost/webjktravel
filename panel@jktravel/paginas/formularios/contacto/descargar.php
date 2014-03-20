<?php
include("../../../conexion/conexion.php");
header("Content-type: application/vnd.ms-excel; name='excel'");
header("Content-Disposition: filename=contacto.xls");
header("Pragma: no-cache");
header("Expires: 0");

$rst_query=mysql_query("SELECT * FROM jk_contacto ORDER BY nombre ASC", $conexion);

echo "<table border=1>\n";
echo "<tr>\n";
echo "<th>Nombre</th>\n";
echo "<th>Telefono</th>\n";
echo "<th>Email</th>\n";
echo "</tr>\n";

while ($row = mysql_fetch_array($rst_query))
{
	echo "<tr>\n";
	echo "<td>".$row['nombre']."</td>\n";
	echo "<td>".$row['telefono']."</td>\n";
	echo "<td>".$row['email']."</td>\n";
	echo "</tr>\n";
}
echo "</table>\n";

?>