<?php
	include 'conexion.php';
	$IdentificacionEliminar=$_POST['IdentificacionEliminar'];
	$connect->query("DELETE FROM paciente WHERE Identificacion=".$IdentificacionEliminar);
?>