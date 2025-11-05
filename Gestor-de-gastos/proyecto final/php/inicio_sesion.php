<?php

session_start();
require("../php/conexion.php");

// Recibo los datos del formulario
$correo = $_POST['correo'];
$clave = $_POST['pass'];

// Busco usuario en la base de datos
$sql = "SELECT * FROM usuarios WHERE correo = '$correo'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Si existe el correo verificamos la contraseña
    $row = $result->fetch_assoc();

    if ($row['pass'] === $clave) {
        // Inicio de sesión exitoso
        session_start();
        $_SESSION['nombre_user'] = $row['nombre_user']; // Guardo el nombre en sesión
        $_SESSION['id_user'] = $row['id_user']; // Guardo el id tambien
        header("Location: ../proyecto.php");
        exit();
    } else {
        // Contraseña incorrecta
        echo "<script>alert('Contraseña incorrecta'); window.location.href='../inicio_sesion/iniciar_sesion.html';</script>";
        exit();
    }
} else {
    // No existe el correo
    echo "<script>alert('El correo no está registrado'); window.location.href='../inicio_sesion/iniciar_sesion.html';</script>";
    exit();
}


?>