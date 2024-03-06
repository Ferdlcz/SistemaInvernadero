<?php

session_start();

include '../config/dbconnection.php';
include '../model/users.model.php';

$userModel = new UserModel($conexion);

$users = $userModel->getAllUsers();

include '../views/components/tablaUsuarios.php'

?>