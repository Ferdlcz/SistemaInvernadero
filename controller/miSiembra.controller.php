<?php
    
    include '../config/dbconnection.php';
    include '../model/miSiembra.model.php';

    $siembraModel = new SiembraModel($conexion);

    $idUsuario = $_SESSION['id'];

    $plantaciones = $siembraModel->consultarPlantaciones($idUsuario);

    include '../views/components/tablaMiSiembra.php'
    
?>