<?php

session_start();
if (empty($_SESSION["id"])) {
    header("location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        
    <title>Registro de planta</title>
</head>
<body>

<?php
    include './components/userNavbar.php';
?>

<br>
    <div class="container mt-5">
        <h2>Registro de Siembra en Invernadero</h2>
        <form>
            <div class="mb-3">
                <label for="nombreSemilla" class="form-label">Nombre de la Semilla</label>
                <input type="text" class="form-control" id="nombreSemilla" name="nombreSemilla" required>
            </div>
            <div class="mb-3">
                <label for="tipoPlanta" class="form-label">Tipo de Planta</label>
                <input type="text" class="form-control" id="tipoPlanta" name="tipoPlanta" required>
            </div>
            <div class="mb-3">
                <label for="numCharolas" class="form-label">Número de Charolas</label>
                <input type="number" class="form-control" id="numCharolas" name="numCharolas" required>
            </div>
            <div class="mb-3">
                <label for="fechaSiembra" class="form-label">Fecha de Siembra</label>
                <input type="date" class="form-control" id="fechaSiembra" name="fechaSiembra" required>
            </div>
            <div class="mb-3">
                <label for="numInvernadero" class="form-label">Número de Invernadero</label>
                <input type="text" class="form-control" id="numInvernadero" name="numInvernadero" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrar Siembra</button>
        </form>
    </div>
    <br>
</body>
</html>
