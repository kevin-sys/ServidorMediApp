<?php
include 'conexion.php';

$queryResult=$connect->query("SELECT * FROM medicamento");

$result=array();

while($fetchData=$queryResult->fetch_assoc()){
	$result[]=$fetchData;
}

echo json_encode($result);

?>
