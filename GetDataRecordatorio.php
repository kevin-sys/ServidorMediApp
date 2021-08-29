<?php
include 'conexion.php';

$queryResult=$connect->query("SELECT * FROM recordatorio");

$result=array();

while($fetchData=$queryResult->fetch_assoc()){
	$result[]=$fetchData;
}

echo json_encode($result);

?>
