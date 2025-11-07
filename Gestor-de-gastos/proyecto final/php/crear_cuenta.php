<?php
session_start();
require("../php/conexion.php");

// Tomo los datos del formulario
$nombre = $_POST['nombre_user'];
$correo = $_POST['correo'];
$clave = $_POST['pass'];

// Inserto esos datos en la tabla
$sql = "INSERT INTO usuarios (nombre_user, correo, pass)
        VALUES ('$nombre', '$correo', '$clave')";

if ($conn->query($sql) === TRUE) {
  echo "<script>
          alert('Cuenta creada con éxito. Ahora puedes iniciar sesión.');
          window.location.href='../inicio_sesion/iniciar_sesion.html';
        </script>";
} else {
  echo "<script>
          alert('Error al crear la cuenta: " . $conn->error . "');
          window.location.href='../inicio_sesion/crear_cuenta.html';
        </script>";
}

// Cerrar conexión
$conn->close();
?>