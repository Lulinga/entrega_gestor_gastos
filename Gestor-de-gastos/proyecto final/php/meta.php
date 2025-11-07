<?php

session_start();
require("../php/conexion.php");

$id_user = $_SESSION['id_user']; // Recupero el id del usuario

$meta = $_POST['meta'];

$sql = "INSERT INTO movimientos (id_user, meta) VALUES ('$id_user', '$meta')";
$_SESSION['meta'] = $meta; // Guardo el dato para mostrarlo después

if ($conn->query($sql) === TRUE) {
    echo "<script>
            window.location.href='../proyecto.php';
          </script>";
} else {
    echo "<script>
            alert('Error al crear la meta: " . $conn->error . "');
            window.location.href='../proyecto.php';
          </script>";
}

$conn->close();
?>