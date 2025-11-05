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
    <title>Gestor de Gastos - Calendario</title>
    <link rel="stylesheet" href="../calendario/enero.css"> <!--CSS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../logo_gestor.png">
</head>
<body>
    <header>
        <nav>
            <h2>Calendario</h2> <!--PANEL DE CONTROL (AJUSTES, CALENDARIO)-->
            <ul>
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
    <section class="calendario"> <!--CALENDARIO-->
        <section class="mes">
            <h1><a href="../calendario/diciembre.php">◄ </a></h1><h1> Enero </h1><h1><a href="../calendario/febrero.php"> ►</a></h1>
        </section>
        
        <ol>
            <li class="nombre_dia">Lun</li>
            <li class="nombre_dia">Mar</li>
            <li class="nombre_dia">Mie</li>
            <li class="nombre_dia">Jue</li>
            <li class="nombre_dia">Vie</li>
            <li class="nombre_dia">Sáb</li>
            <li class="nombre_dia">Dom</li>

            <li style="grid-column-start: 3;">1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li>7</li>
            <li>8</li>
            <li>9</li>
            <li>10</li>
            <li>11</li>
            <li>12</li>
            <li>13</li>
            <li>14</li>
            <li>15</li>
            <li>16</li>
            <li>17</li>
            <li>18</li>
            <li>19</li>
            <li>20</li>
            <li>21</li>
            <li>22</li>
            <li>23</li>
            <li>24</li>
            <li>25</li>
            <li>26</li>
            <li>27</li>
            <li>28</li>
            <li>29</li>
            <li>30</li>
            <li>31</li>
        </ol>
    </section>

</body>
</html>