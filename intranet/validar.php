<?php

require 'conexion.php';
session_start();

$nombre = $_POST['nombre'];
$clave = $_POST['clave'];

$q = "SELECT * FROM jefes WHERE nombre = '$nombre' and clave = '$clave'";
$consulta = mysqli_query($conexion,$q);

$filas = mysqli_num_rows($consulta);

if ($filas>0){
    $_SESSION['nombre']= $nombre;
    echo "<META HTTP-EQUIV='REFRESH' CONTENT='0;URL=pag.php'>";
} else{
    echo "Error de autentificación";
    echo "<META HTTP-EQUIV='REFRESH' CONTENT='2;URL=login.html'>";
}
mysqli_free_result($consulta);
mysqli_close($conexion);
?>