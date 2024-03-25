<?php

session_start();

include '../config/dbconnection.php';
include '../model/registrarSiembra.model.php';

$siembraModel = new Siembra($conexion);

if (!empty($_POST)) {

    $idUsuario = $_POST['idUsuario'];
    $variedad = $_POST['variedad'];
    $numCharolas = $_POST['numCharolas'];
    $fechaSiembra = $_POST['fechaSiembra'];
    $numInvernadero = $_POST['numInvernadero'];
    $fechaAproxEntrega = $_POST['fechaAproxEntrega'];
    $fechaEntrega = $_POST['fechaEntrega'];

    $siembraRegistrada = $siembraModel->insertarSiembra($idUsuario, $variedad, $numCharolas, $fechaSiembra, $numInvernadero, $fechaAproxEntrega, $fechaEntrega);

    if ($siembraRegistrada) {
        echo "<script>alert('Siembra registrada exitosamente');</script>";
        header("Location: ../views/miSiembra.php");
    } else {
        
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        
        try {
            $siembraRegistrada = $siembraModel->insertarSiembra($idUsuario, $variedad, $numCharolas, $fechaSiembra, $numInvernadero, $fechaAproxEntrega, $fechaEntrega);
        } catch (Exception $e) {
            echo "<script>alert('Error al registrar la siembra: {$e->getMessage()}');</script>";
        }
    }
}

$conexion->close();

?>

