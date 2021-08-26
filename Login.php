<?php
    include 'Conexion.php';
    $Usuario = $_POST['Usuario'];
    $Pass = $_POST['Pass'];
    $consultar=$connect->query("SELECT * FROM usuario WHERE Usuario='".$Usuario."' and Pass='".$Pass."'");
    $resultado=array();

    while($extraerDatos=$consultar->fetch_assoc()){
        $resultado[]=$extraerDatos;
    }

    echo json_encode($resultado);

    ?>