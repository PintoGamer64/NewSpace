<?php

$destino = "pintogamer64@gmail.com";
//correo que se enviara el mensaje

$nombre = $_POST['nombre']; 
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

if ($_REQUEST['pais'] == 'Colombia' ){
    $pais = "Colombia";
}else if ($_REQUEST['pais'] == 'Peru' ){
    $pais = "Peru";
}else if ($_REQUEST['pais'] == 'Brasil' ){
    $pais = "Brasil";
}else if ($_REQUEST['pais'] == 'Argetina' ){
    $pais = "Argentina";
}else if ($_REQUEST['pais'] == 'Panama' ){
    $pais = "Panama";
}else if ($_REQUEST['pais'] == 'Mexico' ){
    $pais = "Mexico";
}else if ($_REQUEST['pais'] == 'Chile' ){
    $pais = "Chile";
}else if ($_REQUEST['pais'] == 'Ecuador' ){
    $pais = "Ecuador";
}else if ($_REQUEST['pais'] == 'Bolivia' ){
    $pais = "Bolivia";
}else if ($_REQUEST['pais'] == 'Venezuela' ){
    $pais = "Venezuela";
}

if ($_REQUEST['planes'] == 'Inicial' ){
    $planes = "Inical";
}else if ($_REQUEST['planes'] == 'Profesional' ){
    $planes = "Profesional";
}else if ($_REQUEST['planes'] == 'Ultimate' ){
    $planes = "Ultimate";
}

$mensajeCompleto = "Enviado desde formulario de NewSpaceCol | Formulario de contacto";
$header = "\n" . "Nombre: " . $nombre . "\n" . "Correo: " . $email . "\n" . "Telefono: " . $telefono . "\n" . "\n" . "Mensaje: " . "\n" . $mensaje . "\n" . "\n" . "Tipo de plan Adquirido: " . $planes . "\n" . "\n" . "País de Origen: " . $pais . "\n" . "\n" . "Este correo fue enviado desde el sistema de formularios de contacto - Contacto de NewSpace.";

mail($destino, $mensajeCompleto, $header,);
header('Location: mensaje-de-contacto.html');
?>

