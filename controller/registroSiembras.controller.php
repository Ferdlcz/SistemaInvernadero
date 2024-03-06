<?php
    
    include '../config/dbconnection.php';
    include '../model/registroSiembra.model.php';

    $siembrasModel = new SiembrasModel($conexion);

    $plantaciones = $siembrasModel->consultarPlantaciones();

    include '../views/components/tablaSiembras.php'
    
?>