<?php
// Si la cookie "contador" ya existe, significa que el usuario ya entró antes
if (isset($_COOKIE["contador"])) {
    $contador = $_COOKIE["contador"] + 1;
    $primeraVisita = false;
} else {
    // Si no existe, es la primera vez que entra
    $contador = 1;
    $primeraVisita = true;
}

// Se crea o actualiza la cookie.
setcookie("contador", $contador, time() + (60 * 60 * 24 * 365));
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contador de visitas</title>
</head>
<body>

<?php
if ($primeraVisita) {
    echo "<h2>Bienvenido, esta es la primera vez que visitás esta página.</h2>";
} else {
    echo "<h2>Esta es tu visita número " . $contador . ".</h2>";
}
?>

</body>
</html>