<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página principal</title>
</head>
<body>

<?php
if (isset($_SESSION['nombre'])) {
    echo "<h2>Bienvenido " . $_SESSION['nombre'] . "</h2>";
    echo "<p>Puede visitar esta página.</p>";
} else {
    echo "<h2>No tiene permitido visitar esta página.</h2>";
}
?>

<br>
<a href="sesiones.php">Volver al inicio</a>

</body>
</html>