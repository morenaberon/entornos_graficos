<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos de sesión</title>
</head>
<body>

    <h2>Datos almacenados en la sesión</h2>

    <?php
    if (isset($_SESSION['usuario']) && isset($_SESSION['clave'])) {
        echo "Nombre de usuario: " . htmlspecialchars($_SESSION['usuario']) . "<br>";
        echo "Clave: " . htmlspecialchars($_SESSION['clave']) . "<br>";
    } else {
        echo "No existen datos almacenados en la sesión.";
    }
    ?>

    <br><br>
    <a href="formulario.html">Volver al formulario</a>

</body>
</html>