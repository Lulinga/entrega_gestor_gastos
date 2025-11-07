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
    <title>Gestor de Gastos - Agregar meta</title>
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
        <section class="actu" style="background-color: lightgreen;">
            <form method="post" action="../php/meta.php" class="form">
                <label>Ingrese su meta de dinero a alcanzar! </label>
                <input placeholder="$$$" name="meta" required><br><br>
                <button type="submit">Guardar :D</button>
            </form>
            <img rel="meta"
                src="https://imgs.search.brave.com/3HIvU2ANIveqM2Td1VpikbhDz3q4iGdMAFLHgBJo65I/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMuZW1vaml0ZXJy/YS5jb20vZ29vZ2xl/L25vdG8tZW1vamkv/dW5pY29kZS0xNi4w/L2NvbG9yL3N2Zy8x/ZjNjMS5zdmc" 
                style="width: 328px; height: 328px; margin-top: 100px;">
        </section> 
    </section>
</body>

</html>