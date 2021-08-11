<?php

$destino = "pintogamer64@gmail.com";
//Esto es al correo que se enviarÃ¡ el mensaje

$nombre = $_POST['nombre']; 
$email = $_POST['email'];
$pais = $_POST['pais'];
$planes = $_POST['planes'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$mensajeCompleto = "Soporte de NewSpace | ";
$header = "\n" . "Nombre: " . $nombre . "\n" . "Correo: " . $email . "\n" . "Telefono: " . $telefono . "\n" . "\n" . "Mensaje: " . "\n" . $mensaje . "\n" . "\n" . "Tipo de plan Adquirido: " . $planes . "\n" . "País de Origen: " . $pais . "\n" . "\n" . "Este correo fue enviado desde el sistema de formularios de contacto - Contacto de NewSpace.";

mail($destino, $mensajeCompleto, $header,);
header('Location: mensaje-de-envio.html');
?>

