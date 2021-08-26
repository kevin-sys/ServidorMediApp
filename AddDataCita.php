<?php

	include 'conexion.php';

	$CodigoCita = $_POST['CodigoCita'];
	$IdentificacionPaciente = $_POST['IdentificacionPaciente'];
	$NombresPaciente = $_POST['NombresPaciente'];
	$ApellidosPaciente = $_POST['ApellidosPaciente'];
	$IdentificacionPersonal = $_POST['IdentificacionPersonal'];
	$NombresPersonal = $_POST['NombresPersonal'];
	$ApellidosPersonal = $_POST['ApellidosPersonal'];
	$TipoPersonal = $_POST['TipoPersonal'];
	$HoraCita = $_POST['HoraCita'];
	$FechaCita = $_POST['FechaCita'];


	
	$connect->query("INSERT INTO citas (CodigoCita, IdentificacionPaciente,NombresPaciente,ApellidosPaciente, IdentificacionPersonal, NombresPersonal, ApellidosPersonal, TipoPersonal, HoraCita, FechaCita) VALUES ('".$CodigoCita."', '".$IdentificacionPaciente."','".$NombresPaciente."','".$ApellidosPaciente."','".$IdentificacionPersonal."', '".$NombresPersonal."', '".$ApellidosPersonal."', '".$TipoPersonal."', '".$HoraCita."', '".$FechaCita."')")
?>