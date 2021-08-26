<?php
    include 'conexion.php';
    $Identificacion = $_POST['Identificacion'];
    $consultar=$connect->query("SELECT * FROM paciente WHERE Identificacion='".$Identificacion."'");
    $resultado=array();

    while($extraerDatos=$consultar->fetch_assoc()){
        $resultado[]=$extraerDatos;
    }
    echo json_encode($resultado);
    ?>