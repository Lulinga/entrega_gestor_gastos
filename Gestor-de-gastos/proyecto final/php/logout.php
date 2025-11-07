<?php
session_start();

if(isset($_SESSION['nombre_user'])){ 
	session_destroy(); 
    header("Location: ../inicio_sesion/iniciar_sesion.html"); 
}

?>