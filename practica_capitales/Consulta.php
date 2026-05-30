<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado Completo de Ciudades</title>
</head>
<body>

<h2>Listado completo de ciudades</h2>

<?php
include("conexion.inc");

$vSql = "SELECT * FROM Ciudades";
$vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));
?>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Ciudad</th>
        <th>País</th>
        <th>Habitantes</th>
        <th>Superficie</th>
        <th>Tiene Metro</th>
    </tr>

<?php
while ($fila = mysqli_fetch_array($vResultado)) {
?>
    <tr>
        <td><?php echo $fila['id']; ?></td>
        <td><?php echo $fila['ciudad']; ?></td>
        <td><?php echo $fila['pais']; ?></td>
        <td><?php echo $fila['habitantes']; ?></td>
        <td><?php echo $fila['superficie']; ?></td>
        <td>
            <?php
            if ($fila['tieneMetro'] == 1) {
                echo "Sí";
            } else {
                echo "No";
            }
            ?>
        </td>
    </tr>
<?php
}
?>

</table>

<?php
mysqli_free_result($vResultado);
mysqli_close($link);
?>

<p><a href="Menu.html">Volver al menú</a></p>

</body>
</html>