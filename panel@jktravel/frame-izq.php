<?php
	session_start();
	include("conexion/conexion.php");
	include("conexion/verificar_sesion.php");
	
	$usuario=$_SESSION["user"];
	
	$rst_query=mysql_query("SELECT * FROM jk_privilegio_user WHERE usuario='$usuario';", $conexion);
	$fila_query=mysql_fetch_array($rst_query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administracion de Contenido</title>

<link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	//Menu desplegable
	$("#menu ul li ul").hide();	
	$("#menu ul li span.current").addClass("open").next("ul").show();
	$("#menu ul li span").click(function(){	
		$(this).next("ul").slideToggle("slow").parent("li").siblings("li").find("ul:visible").slideUp("slow");
		$("#menu ul li").find("span").removeClass("open");
		$(this).addClass("open");
	});

});
</script>
</head>

<body>
<div id="menu">
        <h3>Administrar</h3>
  		<div id="datos-usuario">
        	Usuario: <strong><?php echo $_SESSION["user"]; ?></strong><br />
        	Nombre: <strong><?php echo $_SESSION["user_nombre"]; ?> <?php echo $_SESSION["user_apellido"]; ?></strong><br /><br />
	  <a href="conexion/salir.php" target="_top"><strong>Cerrar sessión</strong></a>
    </div>
        <ul>
        	<?php if($fila_query["tipo_paquete"]==1){ ?>
            	<li><span <?php if($p == "posts"){echo 'class="current"';} ?>><a href='javascript:void(0);' id='link-tipo'>Tipo de Paquete</a></span>
                    <ul>
                        <li><a href='paginas/tipo_paquete/form-agregar.php' target='mainFrame' class='add'>Agregar</a></li>
                        <li><a href='paginas/tipo_paquete/listar.php' target='mainFrame' class='list'>Listar</a></li>
                    </ul>
                 </li>
            <?php }?>
            
            <?php if($fila_query["paquete"]==1){ ?>
            	<li><span <?php if($p == "posts"){echo 'class="current"';} ?>><a href='javascript:void(0);' id='link-paquete'>Paquetes</a></span>
                    <ul>
                        <li><a href='paginas/paquetes/form-agregar.php' target='mainFrame' class='add'>Agregar</a></li>
                        <li><a href='paginas/paquetes/listar.php' target='mainFrame' class='list'>Listar</a></li>
                    </ul>
                 </li>
            <?php }?>
            
            <?php if($fila_query["visas"]==1){ ?>
            	<li><span <?php if($p == "posts"){echo 'class="current"';} ?>><a href='javascript:void(0);' id='link-visas'>Visas y Embajadas</a></span>
                    <ul>
                        <li><a href='paginas/visas_embajadas/form-agregar.php' target='mainFrame' class='add'>Agregar</a></li>
                        <li><a href='paginas/visas_embajadas/listar.php' target='mainFrame' class='list'>Listar</a></li>
                    </ul>
                 </li>
            <?php }?>
            
            <?php if($fila_query["formulario"]==1){ ?>
            	<li><span <?php if($p == "posts"){echo 'class="current"';} ?>><a href='javascript:void(0);' id='link-formularios'>Formularios</a></span>
                    <ul>
                        <li><a href='paginas/formularios/contacto/listar.php' target='mainFrame' class='contacto'>Contacto</a></li>
                        <li><a href='paginas/formularios/boletin.php' target='mainFrame' class='boletines'>Boletines</a></li>
                    </ul>
                 </li>
            <?php } ?>
            
            <?php if($fila_query["usuarios"]==1){ ?>
            	<li><span <?php if($p == "posts"){echo 'class="current"';} ?>><a href='javascript:void(0);' id='link-usuarios'>Usuarios</a></span>
                    <ul>
                        <li><a href='paginas/usuarios/form-agregar.php' target='mainFrame' class='add'>Agregar</a></li>
                        <li><a href='paginas/usuarios/listar.php' target='mainFrame' class='list'>Listar</a></li>
                    </ul>
                 </li>
            <?php } ?>

        </ul>
</div>
    <!--/menu-->
</body>
</html>
