<?php if (isset($_POST['nombre'])){
require '../common/config.php';
require '../common/lib/phpmailer/class.phpmailer.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth=true;
$mail->SMTPSecure="ssl";
$mail->SMTPDebug=1;
$mail->Host="ip-166-62-39-176.secureserver.net";
$mail->Port=465;
$mail->Username="paginaweb@desarrollo2.heedcom.com";
$mail->Password="hdc2015%";
$mail->AddReplyTo($_POST['correo'], $_POST['nombre']);
$mail->From="paginaweb@desarrollo2.heedcom.com";
$mail->FromName='Datos Enlace Web';
$mail->Subject='Datos Enlace Web';
$mail->AltBody='Datos Enlace Web';

$mail->CharSet="UTF-8";
$mail->MsgHTML("
<!DOCTYPE html>
<html>
<head>
	<meta charset='UTF-8'>
</head>
<body>

<div style='width:750px;margin: auto;'>
	<div style='color:#fff;text-align:center;background:#5A5959;padding-top:15px;padding-bottom:15px;'>
		<br><img src='app/img/inicio/logo.png'><h1>Datos enviados desde la página web </h1>
	</div>

	<div style='width:100%;border:1px solid #ccc;padding-top:15px;padding-bottom:15px;'>
		<table class='table table-bordered' style='margin: auto;'> 
			<thead> 
				<tr>  
					<th style='border:1px solid #000;padding:8px;'>Nombre</th> 
					<th style='border:1px solid #000;padding:8px;'>Direccion</th> 
					<th style='border:1px solid #000;padding:8px;'>Correo</th> 
					<th style='border:1px solid #000;padding:8px;'>Celular</th>
					<th style='border:1px solid #000;padding:8px;'>Mensaje</th> 
				</tr> 
			</thead> 
			<tbody> 
				<tr>  
					<td style='border:1px solid #000;padding:8px;'>".$_POST['nombre']."</td> 
					<td style='border:1px solid #000;padding:8px;'>".$_POST['direccion']."</td> 
					<td style='border:1px solid #000;padding:8px;'>".$_POST['correo']."</td> 
					<td style='border:1px solid #000;padding:8px;'>".$_POST['celular']."</td> 
					<td style='border:1px solid #000;padding:8px;'>".$_POST['mensaje']."</td> 
				</tr> 
			</tbody> 
		</table>
	</div>

	<div style='color:#fff;text-align:center;background:#5A5959;padding-top:15px;padding-bottom:15px;'>
		<h1></h1>
	</div>
</div>

</body>
</html>
");
$mail->AddCC('edeza.hdc@gmail.com','edeza.hdc@gmail.com');
$mail->IsHTML(true);
if(!$mail->Send()) { $rpta = $contact['msgok']; } else { $rpta = $contact['msgerror']; }
echo $rpta; exit(1);
} ?>
	<form name="frmcontactenos" id="frmcontactenos">
		<div class="col-md-6 col-xs-12 npl">
			<p class="fiL col-xs-12 np form_izquierda form-txt1">
				Nombre
			</p>	
			<input class="fiL col-xs-12 form_izquierda form-inp-st" name="nombre" id="nombre" type="text">
		</div>
		<div class="col-md-6 col-xs-12 npl">
			<p class="fiR col-xs-12 np derecha form-txt1">
				Dirección
			</p>
			<input class="fiR col-xs-12  derecha form-inp-st" type="text" name="direccion" id="direccion">
		</div>
		<div class="col-xs-12 col-md-6 npl">
			<p class="fiL col-xs-12 np form_izquierda form-txt1">
				E-mail
			</p>
			<input class="fiL col-xs-12  form_izquierda form-inp-st" type="text" name="correo" id="correo">
		</div>
		<div class="col-md-6 col-xs-12 npl">
			<p class="fiR col-xs-12 np derecha form-txt1">
				Móvil
			</p>
			<input class="fiR col-xs-12  derecha form-inp-st" type="text" name="celular" id="celular">
		</div>
		<div class="col-xs-12 npl">
			<p class="fiL col-xs-12 np derecha form-txt1">
				Comentarios
			</p>
			<textarea class="fiL col-xs-12 form-ta-st" name="mensaje" id="mensaje"></textarea>
		</div>
        <div class="col-xs-12" style="text-align: right;">
		<button class="btn-send form-send" id="button_enviar" type="submit" placeholder="Enviar"> Enviar</button>
		</div>
		<div id="dialog" title="Mensaje Contáctenos" style="display:none;">
		 <p id="rpta"></p>
		</div>
	</form>


<link rel="stylesheet" href="common/lib/jqueryui/css/ui-lightness/jquery-ui-1.9.2.custom.min.css"/>
<script src="common/lib/jqueryui/js/jquery-ui-1.9.2.custom.min.js"></script>
<script>
<!--
$(document).ready(function(){
$("#celular").keypress(function(e){
	var tecla = document.all?tecla=e.keyCode:tecla=e.which;
	return ((tecla>47 && tecla<58)||tecla==46);
	});
$("#button_enviar").click(function(e){
	e.preventDefault();
	var nombre = $("#nombre").val();
	var direccion = $("#direccion").val();
	var correo = $("#correo").val();
	var celular =$("#celular").val();
	var mensaje = $("#mensaje").val(); 
	if(nombre.length < 1){
	alert("El nombre es obligatorio");
	return false;
	}
	if(direccion.length < 1){
	alert("La direccion es obligatoria");
	return false;
	}
	if(celular.length < 1){
	alert("El celular es obligatorio");
	return false;
	}
	if(correo.length < 1){
	alert("El correo es obligatorio");
	return false;
	} else {
	var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
	if(filter.test(correo)){
	} else {
	alert("El correo no es válido");
	return false;
	}
	}
	if(mensaje.length < 1){
	alert("El mensaje es obligatorio");
	return false;
	}
	$.ajax({
		url:'module/frmcontactenos.php',
		type:'POST',
		data:{nombre:nombre, direccion:direccion,  correo:correo, celular:celular, mensaje:mensaje},
		datatype:'html',
	beforeSend:function(){
	$("#dialog").dialog({
		resizable:false,
		modal:true,
		autoOpen:true,
		width:350,
		height:120
	});
	$("#dialog #rpta").html("Enviando...");
	},
	success:function(html){
	$("#dialog #rpta").html(html);
	}
});
});
});
//-->
</script>
  <script>
  jQuery(document).ready(function() {
     jQuery('.fiL').addClass("").viewportChecker({
         classToAdd: 'visible animated fadeInLeft',
         offset: -0
   });
  });
  jQuery(document).ready(function() {
     jQuery('.fiR').addClass("").viewportChecker({
         classToAdd: 'visible animated fadeInRight',
         offset: -0
   });
  });
</script>