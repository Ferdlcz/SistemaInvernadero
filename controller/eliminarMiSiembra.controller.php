<?php

include '../config/dbconnection.php';
include '../model/eliminarSiembra.model.php';

if (isset($_POST['siembra_id'])) {

    $siembra_id = $_POST['siembra_id'];
    $siembrasModel = new SiembrasModel($conexion);

    $siembrasModel->eliminarSiembra($siembra_id);

    header("Location: ../views/miSiembra.php");
    exit();
} else {

    header("Location: ../views/miSiembra.php");
    exit();
}
?>
