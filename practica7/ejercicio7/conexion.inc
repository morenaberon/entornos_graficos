<?php
$conexion = mysqli_connect("localhost", "root", "", "Compras");

if (!$conexion) {
    die("Problemas de conexión a la base de datos: " . mysqli_connect_error());
}

mysqli_set_charset($conexion, "utf8mb4");
?>