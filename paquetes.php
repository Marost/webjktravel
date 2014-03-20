<?php
include("panel@jktravel/conexion/conexion.php");
header("Content-Type: text/html; charset=iso-8859-1");
	
	
	$rst_destinos=mysql_query("SELECT * FROM jk_paquetes WHERE id=". $_REQUEST["id"].";", $conexion);
	$fila_destinos=mysql_fetch_array($rst_destinos); 
	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="keywords" content="agente viajes, turismo, agencia viajes, agencia viajes lima, agencia turismo, agencia viajes peru, tours peru, tours lima, tours internacionales, tours internacional, tours nacionales, turismo peru, turismo perú, turismo, turismo lima, paquetes turísticos, paquetes turísticos internacionales, paquetes turisticos peru, paquetes turísticos incluido, ofertas viajes, ofertas viajes internacionales, ofertas viajes peru, ofertas viajes caribe, varadero, punta cana, cancun, riviera maya, buenos aires, salinas, san andres, santa martha, habana, cali, cartagena, bogota, orlando, republica dominicana, cuba, disney" />
<meta http-equiv="description" content="J&K Travel es una agencia de viajes especializada en viajes turísticos dentro del Perú y por todo el mundo. Nuestra empresa se encuentra localizada geográficamente en Lima, Perú y desde aquí operamos nuestros viajes a los diferentes destinos solicitados para lograr su viaje anhelado." />
<title>J & K Travel - Agencia de Viajes y Turismo | <?php echo $fila_destinos["destino"]; ?> | <?php echo $fila_destinos["paquete"]; ?> | <?php 
											if ($fila_destinos["tipo_paquete"]=="Full Days")
											{
												if ($fila_destinos["precio"]>0)
												{
													echo "S/. ". $fila_destinos["precio"] . ".00";
												}
											} else
											{
												if ($fila_destinos["precio"]>0)
												{
													echo "$ ". $fila_destinos["precio"] . ".00";
												}
											}
										?></title>
<link href="css/estilo.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS ::: JK Travel - Agencia de Viajes y Turismo :::" href="rss.php" />
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#username=mals1990"></script>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>

<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/jquery.ui.all.css"/>
<script src="js/jquery-1.4.2.js" type="text/javascript"></script>
<script src="js/jquery.ui.core.js" type="text/javascript"></script>
<script src="js/jquery.ui.widget.js" type="text/javascript"></script>
<script src="js/jquery.ui.datepicker.js" type="text/javascript"></script>
<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<script type="text/javascript">
	$(function() {
		var dates = $('#salida, #retorno').datepicker({
			defaultDate: "+1w",
			changeMonth: true,
			numberOfMonths: 1,
			onSelect: function(selectedDate) {
				var option = this.id == "salida" ? "minDate" : "maxDate";
				var instance = $(this).data("datepicker");
				var date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
				dates.not(this).datepicker("option", option, date);
			}
		});
	});
</script>
    
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
<meta http-equiv="imagetoolbar" content="no">
<script language="Javascript">
	document.oncontextmenu = function(){return false}
<!-- Begin
function disableselect(e){
	return false
}
function reEnable(){
	return true
}
	document.onselectstart=new Function ("return false")
if (window.sidebar){
	document.onmousedown=disableselect
	document.onclick=reEnable
}
// End -->
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20229980-12']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body>
<div id="principal">
	<div id="hor_full1"><div id="fnd_sup_menu"></div></div><!--FIN HORIZONTAL FULL1-->
    <div id="hor_full2">
      <div id="interior">	
          <div id="menu_sup">
            <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1000" height="50">
              <param name="movie" value="flash/menu.swf" />
              <param name="quality" value="high" />
              <param name="wmode" value="transparent" />
              <param name="swfversion" value="8" />
              <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
              <param name="expressinstall" value="Scripts/expressInstall.swf" />
              <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
              <!--[if !IE]>-->
              <object type="application/x-shockwave-flash" data="flash/menu.swf" width="1000" height="50">
                <!--<![endif]-->
                <param name="quality" value="high" />
                <param name="wmode" value="transparent" />
                <param name="swfversion" value="8" />
                <param name="expressinstall" value="Scripts/expressInstall.swf" />
                <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
                <div> <img src="imagenes/fnd_menu_superior.png" alt="" width="901" height="50" border="0" usemap="#Map2" />
                  <map name="Map2" id="Map2">
                    <area shape="rect" coords="34,13,114,37" href="index.php" alt="INICIO" />
                    <area shape="rect" coords="184,14,264,39" href="nosotros.php" alt="NOSOTROS" />
                    <area shape="rect" coords="323,8,428,44" href="paq_nacionales.php" alt="PAQUETES NACIONALES" />
                    <area shape="rect" coords="463,7,588,43" href="paq_internacionales.php" alt="PAQUETES INTERNACIONALES" />
                    <area shape="rect" coords="630,6,721,43" href="visas_embajadas.php" alt="VISAS Y EMBAJADAS" />
                    <area shape="rect" coords="774,13,878,38" href="contacto.php" alt="CONTACTENOS" />
                  </map>
                </div>
                <!--[if !IE]>-->
              </object>
              <!--<![endif]-->
            </object>
  </div><!--FIN MENU SUPERIOR-->
            <div id="banner_logo">
              <object id="FlashID3" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="1000" height="200">
                <param name="movie" value="flash/banner_superior.swf" />
                <param name="quality" value="high" />
                <param name="wmode" value="transparent" />
                <param name="swfversion" value="8" />
                <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
                <param name="expressinstall" value="Scripts/expressInstall.swf" />
                <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
                <!--[if !IE]>-->
                <object type="application/x-shockwave-flash" data="flash/banner_superior.swf" width="1000" height="200">
                  <!--<![endif]-->
                  <param name="quality" value="high" />
                  <param name="wmode" value="transparent" />
                  <param name="swfversion" value="8" />
                  <param name="expressinstall" value="Scripts/expressInstall.swf" />
                  <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
                  <div>
                    <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
                    <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
                  </div>
                  <!--[if !IE]>-->
                </object>
                <!--<![endif]-->
              </object>
</div><!--FIN BANENR LOGO-->
            <div id="contenido_total">
                <div id="fnd_sup_contenido"></div>
                <div id="fnd_med_contenido">
                	<div id="panel_izq">
                    <div id="panel_busqueda">
                    	  <p><img src="imagenes/buscar.jpg" width="300" height="20" /></p>
                    	  <form id="form1" name="form1" method="post" action="index.php">
                    	    <span id="sprytextfield1">
                    	    <label><span id="sprytextfield2">
                            <input name="busqueda" type="text" id="busqueda" value="<?php echo $_GET["busqueda"];?>" size="30" />
                            <br />
                            <span class="textfieldRequiredMsg">Ingrese destino</span></span><br />
                            </label>
                    	    <span class="textfieldRequiredMsg">Ingrese destino</span></span>
                    	    <label><br />
                    	      <input type="submit" name="btnBuscar" id="btnBuscar" value="Buscar" />
                  	      </label>
                    	  </form>
                    	</div>
                         <div id="espacio_izq"></div>
                   	  <div id="busca_destino_izq">
                   	    <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
                   	      <tr>
                   	        <td>&nbsp;</td>
               	          </tr>
                   	      <tr>
                   	        <td><div id="Accordion1" class="Accordion" tabindex="0">
                   	          <div class="AccordionPanel">
                   	            <div class="AccordionPanelTab">Busqueda por Fechas</div>
                   	            <div class="AccordionPanelContent">
                   	              <form id="form3" name="form3" method="get" action="index.php">
                   	                <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
                   	                  <tr>
                   	                    <td width="40%">&nbsp;</td>
                   	                    <td width="60%">&nbsp;</td>
               	                      </tr>
                   	                  <tr>
                   	                    <td height="40" align="right"><strong>Salida:</strong></td>
                   	                    <td height="40"><span id="sprytextfield11">
                   	                      <input name="salida" type="text" id="salida" value="<?php echo $_GET["salida"];?>" />
                   	                      <br />
                   	                      <span class="textfieldRequiredMsg">Ingrese Fecha</span></span></td>
               	                      </tr>
                   	                  <tr>
                   	                    <td height="40" align="right"><strong>Retorno:</strong></td>
                   	                    <td height="40"><span id="sprytextfield12">
                   	                      <label>
                   	                        <input name="retorno" type="text" id="retorno" value="<?php echo $_GET["retorno"];?>" />
               	                          </label>
                   	                      <br />
                   	                      <span class="textfieldRequiredMsg">Ingrese Fecha</span></span></td>
               	                      </tr>
                   	                  <tr>
                   	                    <td colspan="2" align="center">&nbsp;</td>
               	                      </tr>
                   	                  <tr>
                   	                    <td colspan="2" align="center"><input type="submit" name="btnBuscarFechas" id="btnBuscarFechas" value="Buscar" /></td>
               	                      </tr>
                   	                  <tr> </tr>
                   	                  <tr> </tr>
               	                    </table>
               	                  </form>
</div>
</div>
                              <div class="AccordionPanel">
                                <div class="AccordionPanelTab">Busqueda por Precio ($)</div>
                                <div class="AccordionPanelContent">
                                  <form id="form4" name="form4" method="get" action="index.php">
                                    <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
                                      <tr>
                                        <td width="40%">&nbsp;</td>
                                        <td width="60%">&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td height="40" align="right"><strong>Desde:</strong></td>
                                        <td height="40"><span id="sprytextfield13">
                                          <input name="precio1" type="text" id="precio1" value="<?php echo $_GET["precio1"];?>" />
                                          <br />
                                          <span class="textfieldRequiredMsg">Ingrese Precio</span></span></td>
                                      </tr>
                                      <tr>
                                        <td height="40" align="right"><strong>A:</strong></td>
                                        <td height="40"><span id="sprytextfield14">
                                          <label>
                                            <input name="precio2" type="text" id="precio2" value="<?php echo $_GET["precio2"];?>" />
                                          </label>
                                          <br />
                                          <span class="textfieldRequiredMsg">Ingrese Precio</span></span></td>
                                      </tr>
                                      <tr>
                                        <td colspan="2" align="center">&nbsp;</td>
                                      </tr>
                                      <tr>
                                        <td colspan="2" align="center"><input type="submit" name="btnBuscarPrecios" id="btnBuscarPrecios" value="Buscar" /></td>
                                      </tr>
                                      <tr> </tr>
                                      <tr> </tr>
                                      <tr> </tr>
                                      <tr> </tr>
                                    </table>
                                  </form>
</div>
</div>
</div></td>
</tr>
                          <tr>
                            <td>&nbsp;</td>
                          </tr>
                          
               	        </table>
          </div><!--FIN PANEL BUSCA DESTINO-->
                        <div id="espacio_izq"></div><!--FIN ESPACIO IZQUIERDA-->
                        <div id="promociones_izq">
                          <object id="FlashID2" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="280" height="235">
                            <param name="movie" value="flash/banner-venta.swf" />
                            <param name="quality" value="high" />
                            <param name="wmode" value="opaque" />
                            <param name="swfversion" value="8" />
                            <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
                            <param name="expressinstall" value="Scripts/expressInstall.swf" />
                            <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
                            <!--[if !IE]>-->
                            <object type="application/x-shockwave-flash" data="flash/banner-venta.swf" width="280" height="235">
                              <!--<![endif]-->
                              <param name="quality" value="high" />
                              <param name="wmode" value="opaque" />
                              <param name="swfversion" value="8" />
                              <param name="expressinstall" value="Scripts/expressInstall.swf" />
                              <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
                              <div>
                                <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
                                <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
                              </div>
                              <!--[if !IE]>-->
                            </object>
                            <!--<![endif]-->
                          </object>
                  </div><!--FIN PANEL BUSCA DESTINO-->
                        <div id="espacio_izq"></div><!--FIN ESPACIO IZQUIERDA-->
                        <div id="contacto_izq"><img src="imagenes/contacto_izq.jpg" alt="Contacto" width="303" height="168" border="0" /></div><!--FIN PANEL BUSCA DESTINO-->
                    </div><!--FIN PANEL IZQUIERDA-->
                    <div id="panel_der">
                    	<div id="total_paquetes">
							<div id="fnd_sup_content_paq"></div><!--FIN FONDDO SUPERIOR CONTENIDO PAQUETE-->
                            <div id="fnd_med_content_paq">
                            	<div id="cabecera_contenido_paq">
                                	<div id="texto_contenido_paq">
                                    	<div id="destino_contenido_paq"><?php echo $fila_destinos["destino"]; ?></div><!--FIN DESTINO CONTENIDO PAQUETE-->
                                        <div id="dias_contenido_paq"><?php echo $fila_destinos["paquete"]; ?></div><!--FIN DIAS CONTENIDO PAQUETE-->
                                        <div id="precio_contenido_paq">
										<?php 
											if ($fila_destinos["tipo_paquete"]=="Full Days")
											{
												if ($fila_destinos["precio"]>0)
												{
													echo "S/. ". $fila_destinos["precio"] . ".00";
												}
											} else
											{
												if ($fila_destinos["precio"]>0)
												{
													echo "$ ". $fila_destinos["precio"] . ".00";
												}
											}
										?></div><!--FIN PRECIO CONTENIDO PAQUETE-->
                                    </div><!--FIN TEXTO CONTENIDO PAQUETE-->
                                    <div id="img_contenido_paq"><img src="imagenes/img-upload/<?php echo $fila_destinos["imagen"]; ?>" />
                                    <br />
                                      <br />

<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style">
<a href="http://www.addthis.com/bookmark.php?v=250&amp;username=mals1990" class="addthis_button_compact">Compartir: </a>
<span class="addthis_separator">|</span>
<a class="addthis_button_facebook"></a>
<a class="addthis_button_myspace"></a>
<a class="addthis_button_google"></a>
<a class="addthis_button_twitter"></a>
</div>
<!-- AddThis Button END -->
</div><!--FIN IMAGEN CONTENIDO PAQUETE-->
                                </div><!--FIN CABECERA CONTENIDO PAQUETE-->
                                <div id="cuerpo_contenido_paq">
                                	<div id="contenido_paq"><?php echo $fila_destinos["texto"]; ?></div><!--FIN CONTENIDO PAQUETE-->
                                </div><!--FIN CUERPO CONTENIDO PAQUETE-->
                            </div><!--FIN FONDDO MEDIO CONTENIDO PAQUETE-->
                            <div id="fnd_inf_content_paq"></div><!--FIN FONDDO INFERIOR CONTENIDO PAQUETE-->
                        </div><!--FIN TOTAL PAQUETES-->
                        <div id="tarjetas_operadores">
                        	<div id="tarjetas"><img src="imagenes/img_tarjetas.jpg" width="203" height="59" alt="TARJETAS" /></div>
                            <div id="operadores"><img src="imagenes/img_operadores.jpg" width="425" height="59" alt="OPERADORES" /></div>
                        </div>
                    </div><!--FIN PANEL DERECHA-->
                </div>
                <div id="fnd_inf_contenido"></div>
            </div><!--FIN CONTENIDO TOTAL-->
      </div><!--FIN INTERIOR-->
    </div><!--FIN HOT FULL2-->
    <?php
		include("footer.php");
	?>
</div><!--FIN PRINCIPAL-->
<script type="text/javascript">
<!--
swfobject.registerObject("FlashID");
swfobject.registerObject("FlashID2");
swfobject.registerObject("FlashID3");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield13 = new Spry.Widget.ValidationTextField("sprytextfield13");
var sprytextfield14 = new Spry.Widget.ValidationTextField("sprytextfield14");
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11");
var sprytextfield12 = new Spry.Widget.ValidationTextField("sprytextfield12");
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
//-->
</script>
</body>
</html>