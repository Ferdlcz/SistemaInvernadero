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
    <title>Document</title>
</head>
<body>

<?php
    include './components/adminNavbar.php';
?>
    
</body>
</html>