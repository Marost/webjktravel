<?php
include("../conexion/conexion.php");

mysql_query("UPDATE jk_paquetes SET destino='". $_POST["nombre_destino"] ."', paquete='". $_POST["paquete_dias"] ."', precio='". $_POST["nombre_precio"] ."', texto='". $_POST["elm1"] ."', tipo_paquete='". $_POST["tipo_paquete"] ."', publicar='". $_POST["publicar"] ."', fecha_salida='". $_POST["salida"] ."', fecha_retorno='". $_POST["retorno"] ."' WHERE id=". $_REQUEST["id"].";", $conexion);

header("Location:lista_destinos.php");
mysql_close($conexion);

?>
