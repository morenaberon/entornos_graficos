<?php
session_start();

$id = isset($_POST['id']) ? (int) $_POST['id'] : 0;
$cantidad = isset($_POST['cantidad']) ? (int) $_POST['cantidad'] : 1;

if (isset($_SESSION['carro'][$id])) {
    if ($cantidad <= 0) {
        unset($_SESSION['carro'][$id]);
    } else {
        $_SESSION['carro'][$id]['cantidad'] = $cantidad;
    }
}

header("Location: vercarrito.php");
exit;
?>