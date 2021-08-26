<?php

	include 'conexion.php';

	$Identificacion = $_POST['Identificacion'];
	$Usuario = $_POST['Usuario'];
	$Pass = $_POST['Pass'];

	$connect->query("INSERT INTO usuario (Identificacion,Usuario, Pass) VALUES ('".$Identificacion."','".$Usuario."','".$Pass."')")
?>