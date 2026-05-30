<?php
session_start();
include("conexion.php");

$id = isset($_POST['id']) ? (int) $_POST['id'] : 0;
$cantidad = isset($_POST['cantidad']) ? (int) $_POST['cantidad'] : 1;

if ($id <= 0) {
    header("Location: catalogo.php");
    exit;
}

if ($cantidad < 1) {
    $cantidad = 1;
}

$vSql = "SELECT * FROM catalogo WHERE id = $id";
$vResultado = mysqli_query($conexion, $vSql) or die(mysqli_error($conexion));
$fila = mysqli_fetch_assoc($vResultado);

if (!$fila) {
    die("El producto seleccionado no existe.");
}

if (!isset($_SESSION['carro'])) {
    $_SESSION['carro'] = array();
}

if (isset($_SESSION['carro'][$id])) {
    $_SESSION['carro'][$id]['cantidad'] += $cantidad;
} else {
    $_SESSION['carro'][$id] = array(
        'id' => $fila['id'],
        'producto' => $fila['producto'],
        'precio' => $fila['precio'],
        'cantidad' => $cantidad
    );
}

mysqli_free_result($vResultado);
mysqli_close($conexion);

header("Location: catalogo.php");
exit;
?>