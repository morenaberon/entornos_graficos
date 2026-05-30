<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alta de Ciudad</title>
</head>
<body>

<?php
include("conexion.inc");

$vCiudad = $_POST['ciudad'];
$vPais = $_POST['pais'];
$vHabitantes = $_POST['habitantes'];
$vSuperficie = $_POST['superficie'];
$vTieneMetro = $_POST['tieneMetro'];

$vSql = "SELECT COUNT(id) AS cantidad
         FROM Ciudades
         WHERE ciudad = '$vCiudad' AND pais = '$vPais'";

$vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));

$vCantCiudades = mysqli_fetch_assoc($vResultado);

if ($vCantCiudades['cantidad'] != 0) {
    echo "La ciudad ya existe.<br>";
    echo "<a href='Menu.html'>Volver al menú</a>";
} else {
    $vSql = "INSERT INTO Ciudades
             (ciudad, pais, habitantes, superficie, tieneMetro)
             VALUES
             ('$vCiudad', '$vPais', '$vHabitantes', '$vSuperficie', '$vTieneMetro')";

    mysqli_query($link, $vSql) or die(mysqli_error($link));

    echo "La ciudad fue registrada correctamente.<br>";
    echo "<a href='Menu.html'>Volver al menú</a>";
}

mysqli_free_result($vResultado);
mysqli_close($link);
?>

</body>
</html>