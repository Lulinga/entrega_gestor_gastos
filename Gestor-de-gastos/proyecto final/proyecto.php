<?php
session_start();
require("./php/conexion.php");

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
    <title>Gestor de Gastos</title>
    <link rel="stylesheet" href="./proyecto.css"> <!--CSS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="./logo_gestor.png">
</head>

<body>
    <header>
        <nav>
            <h2>Panel de control</h2> <!--PANEL DE CONTROL (AJUSTES, CALENDARIO)-->
            <ul>
                <li><button onclick="window.location.href='./calendario/enero.php'">Calendario</button></li>
                <li><button onclick="window.location.href='./ajustes/ajustes.php'">Ajustes</button></li>
            </ul>
        </nav>
        <hr>
    </header>
    <section class="menu"> <!--MENÚ DE NAVEGACIÓN-->
        <ul>
            <li><button onclick="window.location.href='./proyecto.php'">General</button></li>
            <li><button onclick="window.location.href='./creacion/gastos.php'">Gastos</button></li>
            <li><button onclick="window.location.href='./creacion/ingresos.php'">Ingresos</button></li>
        </ul>
    </section>
    <section class="tarjetas"> <!--TARJETAS PANEL DE CONTROL-->
        <section class="tarjeta">
            <h3>Saldo Actual</h3>
            <?php
            require("./php/conexion.php");

            $sql_total = "SELECT SUM(importe) AS total FROM movimientos 
            INNER JOIN usuarios ON movimientos.id_user = usuarios.id_user WHERE usuarios.nombre_user = '" . $_SESSION['nombre_user'] . "'";
            $result_total = $conn->query($sql_total);

            if ($conn->affected_rows > 0) {
                $row_total = $result_total->fetch_array();
                $_SESSION['total'] = $row_total['total'];
            }

            if (isset($_SESSION['total'])) {
                echo "<h1>$ {$row_total['total']}</h1>";
            } else {
                echo "<h2>No hay importe registrado</h2>";
            }
            ?>
        </section>
        <section class="tarjeta">
            <h3>Recomendación de ahorro por día</h3>
            <?php
            if (isset($_SESSION["meta"])) {
                $ahorro = ($_SESSION["total"] - $_SESSION["meta"]) * 10 / 100;
                echo "<h1>$ $ahorro</h1>";
            } else {
                echo "<h2>No hay meta registrada</h2>";
            }
            ?>
        </section>
        <section class="tarjeta">
            <section class="flex">
                <h3>Meta de dinero </h3>
                <h4><a href="./creacion/agregar_meta.php"> + Agregar</a></h4>
            </section>
            <?php
            if (isset($_SESSION["meta"])) {
                echo "<h1>$ {$_SESSION['meta']}</h1>";
            } else {
                echo "<h2>No hay meta de dinero registrada</h2>";
            }
            ?>
        </section>
    </section>
    <section class="flex">
        <section class="libro_diario"> <!--LIBRO DIARIO PANEL DE CONTROL-->
            <h3>Libro Diario</h3>
            <section class="movimientos">
                <div class="tabla">
                    <div>
                        Fecha
                    </div>
                    <div>
                        Tip. Mov.
                    </div>
                    <div>
                        Importe
                    </div>
                    <div>
                        Comentario
                    </div>
                    <div>
                        Categoría
                    </div>
                </div>
                <?php

                $today = date("Y-m-d");
                $sql = "SELECT * FROM movimientos 
                        INNER JOIN usuarios ON movimientos.id_user = usuarios.id_user 
                        WHERE usuarios.nombre_user = '" . $_SESSION['nombre_user'] . "'
                        ORDER BY fecha DESC";

                $result = $conn->query($sql);
                ?>

                <?php
                while ($movimientos = $result->fetch_array()) {
                    echo "<div class='tabla'>";
                    echo "<div>" . substr($movimientos[1], 8, 2) . "/" . substr($movimientos[1], 5, 2) . "/" . substr($movimientos[1], 0, 4) . "</div>";
                    echo "<div>" . $movimientos[2] . "</div>";
                    echo "<div>" . number_format($movimientos[3], 2, ',', '.') . "</div>";
                    echo "<div>" . $movimientos[5] . "</div>";
                    echo "<div>" . $movimientos[7] . "</div>";
                    echo "</div>";
                }
                ?>
            </section>
        </section>
        <section class="categorias_gral"> <!--CATEGORIAS PANEL DE CONTROL-->
            <div class="cat_gastos">
                <h3>Categorías Gastos</h3> <!--gastos-->
                <ul class="lista_categ">
                    <li>Alimentos</li>
                    <li>Compras</li>
                    <li>Vivienda</li>
                    <li>Transporte</li>
                    <li>Educación</li>
                    <li>Salud</li>
                    <li>Reparaciones</li>
                    <li>Otros</li>
                </ul>
            </div>
            <div class="cat_ing">
                <h3>Categorías Ingresos</h3> <!--ingresos-->
                <ul class="lista_categ">
                    <li>Salario</li>
                    <li>Inversiones</li>
                    <li>Premios</li>
                    <li>Otros</li>
                </ul>
            </div>
        </section>
    </section>
</body>

</html>