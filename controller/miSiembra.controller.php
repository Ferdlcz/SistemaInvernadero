<?php
    
    include '../config/dbconnection.php';
    include '../model/miSiembra.model.php';

    $siembraModel = new SiembraModel($conexion);

    $idUsuario = $_SESSION['id'];

    $plantaciones = $siembraModel->consultarPlantaciones($idUsuario);

    $datosSiembras = [];

    foreach ($plantaciones as $plantacion){
        $datosSiembras[$plantacion['idPlanta']] = $plantacion;
    }

    include '../views/components/tablaMiSiembra.php'
    
?>