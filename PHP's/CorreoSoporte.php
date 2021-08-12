<?php

$destino = "pintogamer64@gmail.com";
//Esto es al correo que se enviarÃ¡ el mensaje

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

if ($_REQUEST['Problema'] == 'Pagina' ){
    $problema = "Pagina Web";
}else if ($_REQUEST['Problema'] == 'Terminos' ){
    $problema = "Documentacion";
}else if ($_REQUEST['Problema'] == 'Servicios' ){
    $problema = "Servicios";
}else if ($_REQUEST['Problema'] == 'Correos' ){
    $problema = "Correos";
}else if ($_REQUEST['Problema'] == 'Hosting' ){
    $problema = "Hsoting";
}else if ($_REQUEST['Problema'] == 'SSL' ){
    $problema = "Certificados SSL";
}else if ($_REQUEST['Problema'] == 'Mantenimiento' ){
    $problema = "Mantenimiento";
}

$mensajeCompleto = "Soporte de NewSpace | Soporte";
$header = "\n" . "Nombres: " . $nombre . "\n" . "Correo: " . $email . "\n" . "Telefono: " . $telefono . "\n" . "\n" . "Mensaje: " . "\n" . $mensaje . "\n" . "\n" . "Tipo de Problema: " . $problema . "\n" . "País de Origen: " . $pais . "\n" . "\n" . "Este correo fue enviado desde el sistema de formularios de Soporte - Soporte de NewSpace.";

mail($destino, $mensajeCompleto, $header,);
header('Location: mensaje-de-soporte.html');
?>

