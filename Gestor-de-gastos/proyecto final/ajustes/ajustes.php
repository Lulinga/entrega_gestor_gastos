<?php
session_start();    
if(!isset( $_SESSION['nombre_user'])){
    // REDIRECT TO LOGIN
    header("Location: ../inicio_sesion/iniciar_sesion.html");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Gastos - Ajustes</title>
    <link rel="stylesheet" href="../ajustes/ajustes.css"> <!--CSS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../logo_gestor.png">
</head>
<body>
    <header>
        <nav>
            <h2>Ajustes</h2> <!--PANEL DE CONTROL (AJUSTES, CALENDARIO)-->
            <ul>
                <li><button onclick="window.location.href='../proyecto.php'">General</button></li>
                <li><button onclick="window.location.href='../calendario/enero.php'">Calendario</button></li>
            </ul>
        </nav>
        <hr>
    </header>
    <section class="opciones">
        <h3>Opciones</h3>
        <section class="boton"> <!--Cada boton permite agregar un ingreso-->
            <a href="../php/logout.php">Cerrar Sesión</a>
        </section>
    </section>
</body>
</html>