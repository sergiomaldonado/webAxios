<?php
$result =false;

if(!empty($_POST)) {
	$destine = "axios@gmail.com"; //correo al que se enviará
	$user = $_POST["user"];
	$message = $_POST["message"];
	$content = "Nombre: $user \nMensaje: $message";
	$result = mail($destine, 'Contáctame', $content);
}

