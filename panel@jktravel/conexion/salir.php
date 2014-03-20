<?php
session_start();
//unset($_SESSION["user"]);//destruye variable por variable/
session_destroy();//destruya todas las variables de sesion
setcookie("usuario_nombre","",-36000);//borrar las cookies con tiempo
header("Location:../index.php?nosesion=3");
?>