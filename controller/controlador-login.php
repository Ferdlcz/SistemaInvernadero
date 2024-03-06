<?php
session_start();

if (!empty($_POST['btningresar'])) {
    if (!empty($_POST["Username"]) && !empty($_POST["Password"])) {
        $Username = $_POST["Username"];
        $Password = $_POST["Password"];

        $sql = $conexion->query("SELECT * FROM Usuarios WHERE usuario='$Username' AND contraseña='$Password'");

        if ($datos = $sql->fetch_object()) {

            $rol = $datos->rol;

            if ($rol == 'admin') {
                // Usuario es administrador
                $_SESSION["id"] = $datos->id;
                $_SESSION["nombre"] = $datos->nombre;
                $_SESSION["apellidos"] = $datos->apellidos;
                $_SESSION["rol"] = $rol;
                header("location: ./views/administrador.php");
            } elseif ($rol == 'user') {
                // Usuario es normal
                $_SESSION["id"] = $datos->id;
                $_SESSION["nombre"] = $datos->nombre;
                $_SESSION["apellidos"] = $datos->apellidos;
                $_SESSION["rol"] = $rol;
                header("location: ./views/panelUsuario.php");
            } else {
                echo "<div class='alert alert-danger'>Acceso Denegado</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Acceso Denegado</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Campos vacíos</div>";
    }
}
?>
