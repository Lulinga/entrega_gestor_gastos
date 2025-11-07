<?php
session_start();
if (!isset($_SESSION['nombre_user'])) {
    // REDIRECT TO LOGIN
    header("Location: ../inicio_sesion/iniciar_sesion.html");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Gastos - Ingresos</title>
    <link rel="stylesheet" href="../creacion/gastos_ingresos.css"> <!--CSS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="../logo_gestor.png">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
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
        <section class="actu" style="background-color: lightcyan;">
            <form method="post" action="../php/crear_gasto_ingreso.php" class="form">
                <label>Importe: </label>
                <input placeholder="$$$" name="importe" required><br><br><br>
                <label>Comentarios: </label>
                <input placeholder="Agregue una pequeña descripción" name="comentario"
                    style="width: 250px;"><br><br><br>
                <button type="submit">Guardar :D</button>
                <input type="hidden" name="movimiento" value="ingreso">
                <input type="hidden" name="categoria" value="<?= $_GET['categoria'] ?>">
            </form>
            <img rel="dinero"
                src="https://imgs.search.brave.com/HMglPdVOYDRdDI1jlzSk8bHoJfBzF01Q8bRb9ojunOo/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMudmV4ZWxzLmNv/bS9tZWRpYS91c2Vy/cy8zLzI2NjE3Ni9p/c29sYXRlZC9wcmV2/aWV3LzllOWMzZWNj/YmJkNGM1MTdhMDk0/Y2Y5ZDA0OWQ1ZmQ2/LWRpbmVyby1jbGlw/LWZhY3R1cmFzLW5l/Z29jaW8tZmluYW56/YXMtaWNvbm8ucG5n">
        </section>
    </section>
</body>

</html>