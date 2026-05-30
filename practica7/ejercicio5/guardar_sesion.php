<?php
session_start();

if (isset($_POST['usuario']) && isset($_POST['clave'])) {
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['clave'] = $_POST['clave'];
} else {
    header("Location: formulario.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Guardar sesión</title>
</head>
<body>

    <h2>Datos guardados correctamente</h2>

    <p>Se crearon las variables de sesión del cliente.</p>

    <a href="mostrar_sesion.php">Mostrar datos almacenados</a>

</body>
</html>