<?php

session_start();

include '../config/dbconnection.php';
include '../model/registrarSiembra.model.php';

$siembraModel = new Siembra($conexion);

if (!empty($_POST)) {
    $idUsuario = $_POST['idUsuario'];
    $nombreSemilla = $_POST['nombreSemilla'];
    $tipoPlanta = $_POST['tipoPlanta'];
    $numCharolas = $_POST['numCharolas'];
    $fechaSiembra = $_POST['fechaSiembra'];
    $numInvernadero = $_POST['numInvernadero'];

    $siembraRegistrada = $siembraModel->insertarSiembra($idUsuario, $nombreSemilla,  $tipoPlanta, $numCharolas, $fechaSiembra, $numInvernadero);

    if ($siembraRegistrada) {
        echo "<script>alert('Siembra registrada exitosamente');</script>";
    } else {
        // Habilitar el modo de errores de MySQLi
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        
        // Capturar cualquier excepción que ocurra durante la ejecución de la consulta
        try {
            $siembraRegistrada = $siembraModel->insertarSiembra($idUsuario, $nombreSemilla, $tipoPlanta, $numCharolas, $fechaSiembra, $numInvernadero);
        } catch (Exception $e) {
            // Mostrar el mensaje de error
            echo "<script>alert('Error al registrar la siembra: {$e->getMessage()}');</script>";
        }
    }
}

$conexion->close();

?>

