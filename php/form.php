<?php

$email = $_POST['email'];
$mensaje = $_POST['textarea'];
$check = $_POST['check'];

$para = 'sportsshopoficial@gmail.com';
$asunto = 'SportsShop SS';

$mensaje .= "Este mensaje fue enviado por " . $email . " \r\n";
$mensaje .= "Mensaje: " . $_POST['textarea'] . " \r\n";
$mensaje .= $check . " \r\n";
$mensaje .= "Enviado el " . date("d/m/Y", time());

mail($para, $asunto, utf8_decode($mensaje), $header);

header('Location:../paginas/exito.html');
?>