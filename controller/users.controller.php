<?php

session_start();

include '../config/dbconnection.php';
include '../model/users.model.php';

$userModel = new UserModel($conexion);

$usuarios = $userModel->getAllUsers();

$datosUsuario = [];

foreach ($usuarios as $usuario){
    $datosUsuario[$usuario['id']] = $usuario;
}

include '../views/components/tablaUsuarios.php'

?>