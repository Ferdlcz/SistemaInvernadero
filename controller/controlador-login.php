<?php
session_start();

if (!empty($_POST['btningresar'])) {
    if (!empty($_POST["Username"]) && !empty($_POST["Password"])) {
        $Username = $_POST["Username"];
        $Password = $_POST["Password"];

        $sql = $conexion->prepare("SELECT * FROM Usuarios WHERE usuario=?");
        $sql->bind_param("s", $Username);
        $sql->execute();
        $result = $sql->get_result();

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if (password_verify($Password, $row['contraseña'])) {
                // Contraseña válida, iniciar sesión
                $_SESSION["id"] = $row['id'];
                $_SESSION["nombre"] = $row['nombre'];
                $_SESSION["apellidos"] = $row['apellidos'];
                $_SESSION["rol"] = $row['rol'];

                if ($row['rol'] == 'admin') {
                    header("location: ./views/administrador.php");
                } elseif ($row['rol'] == 'user') {
                    header("location: ./views/panelUsuario.php");
                }
                exit(); // Importante: detener la ejecución después de redirigir
            } else {
                echo "<div class='alert alert-danger'>Contraseña incorrecta</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Usuario no encontrado</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Campos vacíos</div>";
    }
}
?>