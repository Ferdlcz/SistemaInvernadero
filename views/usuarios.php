<?php

session_start();
if (empty($_SESSION["id"]) || $_SESSION["rol"] !== "admin") {
    echo "<script>alert('Acceso denegado');</script>";
    echo "<script>window.location.href = '../index.php';</script>";
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    include './components/adminNavbar.php';
?>
    
</body>
</html>