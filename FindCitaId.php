<?php
    include 'conexion.php';
    $IdentificacionPersonal = $_POST['IdentificacionPersonal'];
    $consultar=$connect->query("SELECT * FROM citas WHERE IdentificacionPersonal='".$IdentificacionPersonal."'");
    $resultado=array();

    while($extraerDatos=$consultar->fetch_assoc()){
        $resultado[]=$extraerDatos;
    }
    echo json_encode($resultado);
    ?>