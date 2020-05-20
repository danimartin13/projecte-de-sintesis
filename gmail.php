<?php  

// Llamando a los campos
$nombre = $_POST['nom'];
$correo = $_POST['mail'];
$mensaje = $_POST['msg'];

// Datos para el correo
$destinatario = "mamutcup@gmail.com";
$asunto = "Contacte desde la nostra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:contacto.html');