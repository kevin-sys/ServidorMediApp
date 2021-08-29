<?php

include 'conexion.php';

$Nombre = $_POST['Nombre'];
$Hora = $_POST['Hora'];
$Observacion = $_POST['Observacion'];
$Recordarme = $_POST['Recordarme'];


$connect->query("INSERT INTO recordatorio (Nombre,Hora,Observacion, Recordarme) VALUES ('".$Nombre."','".$Hora."','".$Observacion."','".$Recordarme."')")
?>