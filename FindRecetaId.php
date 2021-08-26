<?php
    include 'Conexion.php';
    $IdentificacionPaciente = $_POST['IdentificacionPaciente'];
    $consultar=$connect->query("SELECT * FROM receta WHERE IdentificacionPaciente='".$IdentificacionPaciente."'");
    $resultado=array();

    while($extraerDatos=$consultar->fetch_assoc()){
        $resultado[]=$extraerDatos;
    }
    echo json_encode($resultado);
    ?>