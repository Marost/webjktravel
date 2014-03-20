<?php
include("../conexion/conexion.php");

$rst_destinos=mysql_query("SELECT * FROM jk_paquetes WHERE id=". $_REQUEST["id"].";", $conexion);

$fila_destinos=mysql_fetch_array($rst_destinos);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>JK TRAVEL</title>
<link rel="stylesheet" type="text/css" href="../../css/estilo.css"/>
<!-- TinyMCE -->
<script type="text/javascript" src="../../admin/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "textareas",
		theme : "advanced",
		plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
<!-- /TinyMCE -->

<link rel="stylesheet" type="text/css" href="../../css/jquery.ui.all.css"/>
<script src="../../js/jquery-1.4.2.js" type="text/javascript"></script>
<script src="../../js/jquery.ui.core.js" type="text/javascript"></script>
<script src="../../js/jquery.ui.widget.js" type="text/javascript"></script>
<script src="../../js/jquery.ui.datepicker.js" type="text/javascript"></script>
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

</head>
<body>

<form method="post" action="actualizar_destino.php?id=<?php echo $_REQUEST["id"]; ?>">
<table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="29%" height="40">Nombre de Destino:</td>
    <td width="71%" height="40" align="left"><label>
      <input name="nombre_destino" type="text" id="nombre_destino" value="<?php echo $fila_destinos["destino"]; ?>" size="40" />
    </label></td>
  </tr>
  <tr>
    <td height="40">Nombre Paquete - Dias:</td>
    <td height="40" align="left"><label>
      <input name="paquete_dias" type="text" id="paquete_dias" value="<?php echo $fila_destinos["paquete"]; ?>" size="40" />
    </label></td>
  </tr>
  <tr>
    <td height="40">Precio:</td>
    <td height="40" align="left"><label>
      <input name="nombre_precio" type="text" id="nombre_precio" value="<?php echo $fila_destinos["precio"]; ?>" size="40" />
    </label></td>
  </tr>
  <tr>
    <td height="40" colspan="2" align="center">
    	<textarea id="elm1" name="elm1" rows="25" cols="80" style="width: 80%"><?php echo $fila_destinos["texto"]; ?></textarea>
    </td>
    </tr>
  <tr>
    <td height="40">Tipo de Paquete:</td>
    <td height="40" align="left"><label>
      <select name="tipo_paquete" id="tipo_paquete">
        <option value="0" selected="selected">[Seleccionar Tipo de Paquete]</option>
        <option value="Paquete Nacional">Paquete Nacional</option>
        <option value="Paquete Internacional">Paquete Internacional</option>
        <option value="Full Days">Full Days</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <td height="40">Publicar:</td>
    <td height="40" align="left"><label>
      <select name="publicar" id="publicar">
        <option value="0">[Publicar en Pagina Principal]</option>
        <option value="SI">SI</option>
        <option value="NO">NO</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <td height="40">Fecha Salida:</td>
    <td height="40" align="left"><label>
      <input name="salida" type="text" id="salida" value="<?php echo $fila_destinos["fecha_salida"]; ?>" />
    </label></td>
  </tr>
  <tr>
    <td height="40">Fecha Retorno:</td>
    <td height="40" align="left"><label>
      <input name="retorno" type="text" id="retorno" value="<?php echo $fila_destinos["fecha_retorno"]; ?>" />
    </label></td>
  </tr>
  <tr>
    <td height="40" colspan="2" align="center" valign="middle"><label>
      <input type="submit" name="btnguardar" id="btnguardar" value="Guardar" />
    </label>
      <label>
        <input type="reset" name="btnlimpiar" id="btnlimpiar" value="Limpiar datos" />
      </label></td>
    </tr>
</table>

	
</form>

</body>
</html>
