<?php
	include 'conexion.php';
	$IdentificacionEliminar=$_POST['IdentificacionEliminar'];
	$connect->query("DELETE FROM personalatencion WHERE Identificacion=".$IdentificacionEliminar);
?>