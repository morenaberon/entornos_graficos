<?php
session_start();
include("conexion.php");

$vSql = "SELECT * FROM catalogo ORDER BY producto ASC";
$vResultado = mysqli_query($conexion, $vSql) or die(mysqli_error($conexion));

$cantidadCarrito = 0;

if (isset($_SESSION['carro'])) {
    foreach ($_SESSION['carro'] as $producto) {
        $cantidadCarrito += $producto['cantidad'];
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Productos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="contenedor">
    <header>
        <h1>Catálogo de Productos</h1>
        <a class="boton carrito" href="vercarrito.php">
            Ver carrito (<?php echo $cantidadCarrito; ?>)
        </a>
    </header>

    <table>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Acción</th>
        </tr>

        <?php while ($fila = mysqli_fetch_assoc($vResultado)) { ?>
            <tr>
                <td><?php echo htmlspecialchars($fila['producto']); ?></td>
                <td>$<?php echo number_format($fila['precio'], 2, ',', '.'); ?></td>
                <td>
                    <form action="agregarcar.php" method="post" class="form-agregar">
                        <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
                        <input type="number" name="cantidad" value="1" min="1">
                </td>
                <td>
                        <input type="submit" value="Agregar" class="boton">
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>

<?php
mysqli_free_result($vResultado);
mysqli_close($conexion);
?>