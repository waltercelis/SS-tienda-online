<?php

$email = $_POST['email'];
$mensaje = $_POST['textarea'];
$check = $_POST['check'];

$header = "Content-Type: text/plain";

$para = 'sportsshopoficial@gmail.com';
$asunto = 'SportsShop SS';

$mensaje = "Enviado por " . $email . "\r\n";
$mensaje .= "Mensaje: " . $_POST['textarea'] . "\r\n";
$mensaje .= "Recibir mas información: " . $check . "\r\n";
$mensaje .= "Enviado el " . date("d/m/Y", time());

mail($para, $asunto, utf8_decode($mensaje), $header);
echo "<script>alert('Correo enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href='../paginas/contacto.html'\",2000)</script>";
?>