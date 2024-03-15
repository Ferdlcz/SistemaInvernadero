<?php
session_start();
if (empty($_SESSION["id"]) || $_SESSION["rol"] !== "admin") {
    echo "<script>alert('Acceso denegado');</script>";
    echo "<script>window.location.href = '../index.php';</script>";
    exit;
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
<title>Administrador</title>

</head>
<body>

<?php
    include './components/adminNavbar.php';
?>

<div class="container" >
    <div class="row">
        
        <div class="col-12" style="margin-top: 100px;">
    
            <h1 class="my-4 text-center">Bienvenido administrador</h1>
    
        </div>

    </div>

    <div class="row bg-success">
        <div class="col-12 border-bottom">
            <h3 class="p-3 text-center text-white">¿Que desea hacer?</h3>
        </div>
        <div class="col-4 text-center p-3 text-white fs-5">
            <a class="text-light text-decoration-none hover-effect" href="./registrarUsuario.php">Registrar nuevo usuario</a>
        </div>
        <div class="col-4 text-center p-3 text-white fs-5">
            <a class="text-light text-decoration-none hover-effect" href="./usuarios.php">Ver usuarios registrados</a>
        </div>
        <div class="col-4 text-center p-3 text-white fs-5">
            <a class="text-light text-decoration-none hover-effect" href="./registroSiembras.php">Ver registro de siembras</a>
        </div>
    </div>

</div>
 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>