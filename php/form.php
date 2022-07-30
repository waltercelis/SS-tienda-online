<?php

$email = $_POST['email'];
$mensaje = $_POST['textarea'];
$check = $_POST['check'];

$mensaje .= "Este mensaje fue enviado por " . $email . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= $check . " \r\n";
$mensaje .= "Enviado el " . date("d/m/Y", time());

$para = 'sportsshopoficial@gmail.com';

mail($para, utf8_decode($mensaje), $header);

header('Location:../paginas/exito.html');
?>