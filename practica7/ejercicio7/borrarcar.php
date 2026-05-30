<?php
session_start();

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

if (isset($_SESSION['carro'][$id])) {
    unset($_SESSION['carro'][$id]);
}

header("Location: vercarrito.php");
exit;
?>