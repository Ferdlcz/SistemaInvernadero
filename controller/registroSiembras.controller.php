<?php
    
    include '../config/dbconnection.php';
    include '../model/registroSiembra.model.php';

    $siembrasModel = new SiembrasModel($conexion);

    $plantaciones = $siembrasModel->consultarPlantaciones();

    $datosSiembras = [];

    foreach ($plantaciones as $plantacion){
        $datosSiembras[$plantacion['idPlanta']] = $plantacion;
    }

    include '../views/components/tablaSiembras.php'
    
?>