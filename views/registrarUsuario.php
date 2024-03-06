<?php
session_start();

if (empty($_SESSION["id"]) || $_SESSION["rol"] !== "admin") {
    echo "<script>alert('Acceso denegado');</script>";
    echo "<script>window.location.href = '../index.php';</script>";
    exit;
}


// Aquí deberías incluir tu archivo de conexión a la base de datos
include_once "../config/dbconnection.php";

// Verifica si se ha enviado el formulario de registro
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtén los datos del formulario
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $role = $_POST["role"];

    // Hash de la contraseña (deberías utilizar funciones más seguras en un entorno de producción)
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepara la consulta SQL para insertar un nuevo usuario
    $sql = $conexion->prepare("INSERT INTO Usuarios (usuario, correo_electronico, telefono, contraseña, rol) VALUES (?, ?, ?, ?, ?)");

    // Vincula los parámetros y ejecuta la consulta
    $sql->bind_param("sssss", $username, $email, $phone, $hashedPassword, $role);
    $sql->execute();

    // Cierra la conexión y redirige después de agregar el nuevo usuario
    $sql->close();
    $conexion->close();
    header("location: usuarios.php"); // Reemplaza 'lista_usuarios.php' con la página donde muestras la lista de usuarios
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        
    <title>Registro de Usuario</title>
</head>
<body>

<?php
    include './components/adminNavbar.php';
?>

    <div class="container mt-5">
        <h2>Registro de Nuevo Usuario</h2>
        <form method="POST">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" required>
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Nombre de Usuario</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Telefono</label>
                <input type="phone" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Rol del Usuario</label>
                <select class="form-select" id="role" name="role" required>
                    <option value="admin">Administrador</option>
                    <option value="user">Usuario</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Registrar Usuario</button>
        </form>
    </div>
</body>
</html>
