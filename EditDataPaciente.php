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
	$Estado = $_POST['Estado'];

	$connect->query("UPDATE paciente SET Foto='$Foto',Nombres='$Nombres',Apellidos='$Apellidos',FechaNacimiento='$FechaNacimiento',Edad='$Edad',Direccion='$Direccion',Barrio='$Barrio', Telefono='$Telefono',Ciudad='$Ciudad',Estado='$Estado' WHERE Identificacion='$Identificacion'");


?>