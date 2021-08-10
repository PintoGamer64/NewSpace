<?php

$destino = "pintogamer64@gmail.com";
//Esto es al correo que se enviarÃ¡ el mensaje

$nombre = $_POST['nombre']; 
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$header = "Enviado desde formulario de NewSpaceCol";
$mensajeCompleto = "\n Nombre: " . $nombre . "\n" . "Email: " . $email . "\n" . "Telefono :" . $telefono . "\n" . "Mensaje :" . $mensaje;
mail($destino, $mensajeCompleto, $header);
header('Location: mensaje-de-envio.html');
?>

