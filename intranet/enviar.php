<?php  
require 'conexion.php';
// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];


// Datos para el correo
$destinatario = $correo;
$asunto = "Inscrit amb exit a la MAMUT CUP";

$carta = $carta = "L'equip inscrit amb el correu electrònic $correo amb nom $nombre a sigut inscrit amb èxit, per posar-nos amb contacte utilitzarem el numero de telefon $telefono";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:torneo.html');

$insertar = "INSERT INTO regis VALUES('$nombre', '$correo', '$telefono')";
$query = mysqli_query($conexion, $insertar);

if ($query){
    echo "<script> alert ('Se te enviara un mail de verrificacion');
    location.href = '../proces.html';
    </script>";
} else {
    echo "<script> alert ('Error al registrarse. Compruebe los datos');
    location.href = 'torneo.html';
    </script>";
}

?>