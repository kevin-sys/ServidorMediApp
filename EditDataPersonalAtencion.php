<?php

	include 'conexion.php';
	
	$Identificacion = $_POST['Identificacion'];
	$Foto = $_POST['Foto'];
	$Nombres = $_POST['Nombres'];
	$Apellidos = $_POST['Apellidos'];
	$Tipo = $_POST['Tipo'];
	$Estado = $_POST['Estado'];
	$Trabajando = $_POST['Trabajando'];

	$connect->query("UPDATE personalatencion SET Foto='$Foto',Nombres='$Nombres',Apellidos='$Apellidos',Tipo='$Tipo',Estado='$Estado',Trabajando='$Trabajando' WHERE Identificacion='$Identificacion'");


?>