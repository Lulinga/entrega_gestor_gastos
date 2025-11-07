<?php

session_start();
require("../php/conexion.php");

$id_user = $_SESSION['id_user']; // Recupero el id del usuario

// Recibo los datos del formulario
if ($_POST["movimiento"] == "gasto") {
    $importe = $_POST['importe'] * -1;
}
else {
    $importe = $_POST['importe'];
}
$comentario = $_POST['comentario'];
$categoria = $_POST['categoria'];

// Guardar datos en tabla
$sql = "INSERT INTO movimientos (comentario, importe, tipo_movimiento, id_user, categoria) VALUES ('$comentario','$importe','{$_POST['movimiento']}', '$id_user', '$categoria')";
$result = $conn->query($sql);

$sql_total = "SELECT SUM(importe) AS total FROM movimientos WHERE id_user = '$id_user'";
$result_total = $conn->query($sql_total);

if($conn->affected_rows > 0) {
	$row_total = $result_total->fetch_array();
	$_SESSION['total'] = $row_total['total'];
	header("Location: ../proyecto.php");
}
elseif($conn->errno == 0 && strlen($conn->error) == 0){
	echo "No se ha realizado ninguna inserción.";
}
else{
	echo "Se ha producido un error <br />";
	echo $conn->errno . " - " .$conn->error;
}

// 7. Cerrar la conexión
$conn->close();
?>