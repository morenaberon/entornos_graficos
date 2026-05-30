<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Modificación</title>
</head>
<body>

<?php
include("conexion.inc");

$vId = $_POST['id'];

$vSql = "SELECT * FROM Ciudades WHERE id = '$vId'";
$vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));

if (mysqli_num_rows($vResultado) == 0) {
    echo "La ciudad no existe.<br>";
    echo "<a href='FormModiIni.html'>Volver a intentar</a>";
} else {
    $fila = mysqli_fetch_array($vResultado);
?>

    <h2>Modificar datos de la ciudad</h2>

    <form action="Modi.php" method="POST">
        <table>
            <tr>
                <td>ID:</td>
                <td>
                    <input type="text" name="id" value="<?php echo $fila['id']; ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>Ciudad:</td>
                <td>
                    <input type="text" name="ciudad" value="<?php echo $fila['ciudad']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>País:</td>
                <td>
                    <input type="text" name="pais" value="<?php echo $fila['pais']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Habitantes:</td>
                <td>
                    <input type="number" name="habitantes" value="<?php echo $fila['habitantes']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Superficie:</td>
                <td>
                    <input type="number" name="superficie" step="0.01" value="<?php echo $fila['superficie']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>Tiene Metro:</td>
                <td>
                    <select name="tieneMetro">
                        <option value="1" <?php if ($fila['tieneMetro'] == 1) echo "selected"; ?>>Sí</option>
                        <option value="0" <?php if ($fila['tieneMetro'] == 0) echo "selected"; ?>>No</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Guardar modificación">
                </td>
            </tr>
        </table>
    </form>

<?php
}

mysqli_free_result($vResultado);
mysqli_close($link);
?>

<p><a href="Menu.html">Volver al menú</a></p>

</body>
</html>