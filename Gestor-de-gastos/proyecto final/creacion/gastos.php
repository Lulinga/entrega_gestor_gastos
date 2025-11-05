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
    <title>Gestor de Gastos - Gastos</title>
    <link rel="stylesheet" href="../creacion/gastos_ingresos.css"> <!--CSS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../logo_gestor.png">
</head>
<body>
    <header>
        <nav>
            <h2>Panel de control</h2> <!--PANEL DE CONTROL (AJUSTES, CALENDARIO)-->
            <ul>
                <li><button onclick="window.location.href='../calendario/enero.php'">Calendario</button></li>
                <li><button onclick="window.location.href='../ajustes/ajustes.php'">Ajustes</button></li>
            </ul>
        </nav>
        <hr>
    </header>
    <section class="menu"> <!--MENÚ DE NAVEGACIÓN-->
        <ul>
            <li><button onclick="window.location.href='../proyecto.php'">General</button></li>
            <li><button onclick="window.location.href='../creacion/gastos.php'">Gastos</button></li>
            <li><button onclick="window.location.href='../creacion/ingresos.php'">Ingresos</button></li>
        </ul>
    </section>
    <section class="panel_crear">
        <h3>Categorías</h3>
        <section> <!--Cada 'boton' permite agregar un gasto-->
            <a href="../creacion/crear_gasto.php?categoria=alimentos" class="agregar">+<br>Alimentos</a>
            <a href="../creacion/crear_gasto.php?categoria=compras" class="agregar">+<br>Compras</a>
            <a href="../creacion/crear_gasto.php?categoria=vivienda" class="agregar">+<br>Vivienda</a>
            <a href="../creacion/crear_gasto.php?categoria=transporte" class="agregar">+<br>Transporte</a>
            <a href="../creacion/crear_gasto.php?categoria=educacion" class="agregar">+<br>Educación</a>
            <a href="../creacion/crear_gasto.php?categoria=salud" class="agregar">+<br>Salud</a>
            <a href="../creacion/crear_gasto.php?categoria=reparaciones" class="agregar">+<br>Reparaciones</a>
            <a href="../creacion/crear_gasto.php?categoria=otros" class="agregar">+<br>Otros</a>
        </section>
    </section>
</body>
</html>