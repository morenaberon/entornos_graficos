<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Ciudades con Paginación</title>
</head>
<body>

<h2>Listado de ciudades con paginación</h2>

<?php
include("conexion.inc");

$Cant_por_Pag = 2;

$pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 1;

$inicio = ($pagina - 1) * $Cant_por_Pag;

$vSql = "SELECT * FROM Ciudades";
$vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));

$total_registros = mysqli_num_rows($vResultado);
$total_paginas = ceil($total_registros / $Cant_por_Pag);

mysqli_free_result($vResultado);

echo "Número de registros encontrados: " . $total_registros . "<br>";
echo "Se muestran páginas de " . $Cant_por_Pag . " registros cada una.<br>";
echo "Página " . $pagina . " de " . $total_paginas . "<br><br>";

$vSql = "SELECT * FROM Ciudades LIMIT " . $inicio . "," . $Cant_por_Pag;
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

<br>

<?php
if ($total_paginas > 1) {
    for ($i = 1; $i <= $total_paginas; $i++) {
        if ($pagina == $i) {
            echo $pagina . " ";
        } else {
            echo "<a href='Listado_pag.php?pagina=" . $i . "'>" . $i . "</a> ";
        }
    }
}

mysqli_free_result($vResultado);
mysqli_close($link);
?>

<p><a href="Menu.html">Volver al menú</a></p>

</body>
</html>