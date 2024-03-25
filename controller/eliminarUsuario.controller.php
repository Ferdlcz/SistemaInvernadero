<?php

include '../config/dbconnection.php';
include '../model/eliminarUsuario.model.php';

if (isset($_POST['usuario_id'])) {

    $usuario_id = $_POST['usuario_id'];
    $usuarioModel = new UsuarioModel($conexion);

    $usuarioModel->eliminarUsuario($usuario_id);

    header("Location: ../views/usuarios.php");
    exit();
} else {

    header("Location: ../views/usuarios.php");
    exit();
}
?>