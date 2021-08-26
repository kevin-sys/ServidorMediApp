<?php

	include 'conexion.php';

	$Identificacion = $_POST['Identificacion'];
	$Foto = $_POST['Foto'];
	$Nombres = $_POST['Nombres'];
	$Apellidos = $_POST['Apellidos'];
	$Tipo = $_POST['Tipo'];

	
	$connect->query("INSERT INTO personalatencion (Identificacion,Foto,Nombres, Apellidos, Tipo) VALUES ('".$Identificacion."','".$Foto."','".$Nombres."','".$Apellidos."', '".$Tipo."')")
?>