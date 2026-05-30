<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Baja de Ciudad</title>
</head>
<body>

<?php
include("conexion.inc");

$vId = $_POST['id'];

$vSql = "SELECT * FROM Ciudades WHERE id = '$vId'";
$vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));

if (mysqli_num_rows($vResultado) == 0) {
    echo "La ciudad no existe.<br>";
    echo "<a href='FormBajaIni.html'>Volver a intentar</a>";
} else {
    $vSql = "DELETE FROM Ciudades WHERE id = '$vId'";
    mysqli_query($link, $vSql) or die(mysqli_error($link));

    echo "La ciudad fue eliminada correctamente.<br>";
    echo "<a href='Menu.html'>Volver al menú</a>";
}

mysqli_free_result($vResultado);
mysqli_close($link);
?>

</body>
</html>