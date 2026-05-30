<?php
$link = mysqli_connect("localhost", "root", "")
    or die("Problemas de conexión a la base de datos");

mysqli_select_db($link, "Capitales")
    or die("Problemas al seleccionar la base de datos");

mysqli_set_charset($link, "utf8mb4");
?>