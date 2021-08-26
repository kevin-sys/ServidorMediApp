<?php

	include 'conexion.php';
	
	  
  $CodigoCita = $_POST['CodigoCita'];  
  $EstadoCita = $_POST['EstadoCita'];
  $Observacion = $_POST['Observacion'];

	$connect->query("UPDATE citas SET EstadoCita='$EstadoCita',Observacion='$Observacion' WHERE CodigoCita='$CodigoCita'");


?>