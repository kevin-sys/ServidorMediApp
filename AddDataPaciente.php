<?php

	include 'conexion.php';

	$Identificacion = $_POST['Identificacion'];
	$Foto = $_POST['Foto'];
	$Nombres = $_POST['Nombres'];
	$Apellidos = $_POST['Apellidos'];

	$FechaNacimiento = $_POST['FechaNacimiento'];
	$Edad = $_POST['Edad'];
	$Direccion = $_POST['Direccion'];
	$Barrio = $_POST['Barrio'];
	$Telefono = $_POST['Telefono'];
	$Ciudad = $_POST['Ciudad'];

	
	$connect->query("INSERT INTO paciente (Identificacion,Foto,Nombres, Apellidos, FechaNacimiento, Edad, Direccion, Barrio, Telefono, Ciudad) VALUES ('".$Identificacion."','".$Foto."','".$Nombres."','".$Apellidos."', '".$FechaNacimiento."', '".$Edad."', '".$Direccion."', '".$Barrio."', '".$Telefono."', '".$Ciudad."')")
?>