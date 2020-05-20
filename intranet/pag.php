<?php
session_start();

?>
<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenido <?php echo $_SESSION['nombre']?></h1>
    <a href="salir.php">cerrar sesion</a>
</body>
</html>