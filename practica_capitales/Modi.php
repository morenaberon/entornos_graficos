<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Ciudad</title>
</head>
<body>

<?php
include("conexion.inc");

$vId = $_POST['id'];
$vCiudad = $_POST['ciudad'];
$vPais = $_POST['pais'];
$vHabitantes = $_POST['habitantes'];
$vSuperficie = $_POST['superficie'];
$vTieneMetro = $_POST['tieneMetro'];

$vSql = "UPDATE Ciudades SET
            ciudad = '$vCiudad',
            pais = '$vPais',
            habitantes = '$vHabitantes',
            superficie = '$vSuperficie',
            tieneMetro = '$vTieneMetro'
         WHERE id = '$vId'";

mysqli_query($link, $vSql) or die(mysqli_error($link));

echo "La ciudad fue modificada correctamente.<br>";
echo "<a href='Menu.html'>Volver al menú</a>";

mysqli_close($link);
?>

</body>
</html>