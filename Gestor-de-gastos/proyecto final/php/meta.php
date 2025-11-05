<?php

session_start();
require("../php/conexion.php");

$id_user = $_SESSION['id_user']; // Recupero el id del usuario

$meta = $_POST['meta'];

$sql = "INSERT INTO movimientos (meta) VALUES ('$meta')";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
  echo "<script>
          window.location.href='../inicio_sesion/iniciar_sesion.html';
        </script>";
} else {
  echo "<script>
          alert('Error al crear la cuenta: " . $conn->error . "');
          window.location.href='../inicio_sesion/crear_cuenta.html';
        </script>";
}
$conn->close();
?>