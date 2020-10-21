<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$para = 'lauracamargo.1d@gmail.com'; 
$asunto = 'Consulta'; 

$mensaje = "
    Nombre del remitente: ".$nombre."
    Correo: ".$email."
    Telefono: ".$telefono.."
    Mensaje: ".$mensaje. " 
    ";

mail($para,$asunto,utf8_decode($mensaje));

header("location: index.html");

?>