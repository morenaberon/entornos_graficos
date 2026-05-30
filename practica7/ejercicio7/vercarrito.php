<?php
session_start();

$carro = isset($_SESSION['carro']) ? $_SESSION['carro'] : array();
$total = 0;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="contenedor">
    <header>
        <h1>Carrito de Compras</h1>
        <a class="boton" href="catalogo.php">Volver al catálogo</a>
    </header>

    <?php if (count($carro) > 0) { ?>

        <table>
            <tr>
                <th>Producto</th>
                <th>Precio Unitario</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
                <th>Acciones</th>
            </tr>

            <?php foreach ($carro as $producto) { 
                $subtotal = $producto['precio'] * $producto['cantidad'];
                $total += $subtotal;
            ?>
                <tr>
                    <td><?php echo htmlspecialchars($producto['producto']); ?></td>
                    <td>$<?php echo number_format($producto['precio'], 2, ',', '.'); ?></td>
                    <td>
                        <form action="actualizarcar.php" method="post" class="form-actualizar">
                            <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
                            <input type="number" name="cantidad" value="<?php echo $producto['cantidad']; ?>" min="1">
                            <input type="submit" value="Actualizar" class="boton pequeño">
                        </form>
                    </td>
                    <td>$<?php echo number_format($subtotal, 2, ',', '.'); ?></td>
                    <td>
                        <a class="boton eliminar" href="borrarcar.php?id=<?php echo $producto['id']; ?>">
                            Quitar
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </table>

        <div class="total">
            Total de la compra: $<?php echo number_format($total, 2, ',', '.'); ?>
        </div>

        <div class="acciones">
            <a class="boton eliminar" href="vaciarcarrito.php">Vaciar carrito</a>
            <a class="boton" href="catalogo.php">Seguir comprando</a>
        </div>

    <?php } else { ?>

        <div class="mensaje">
            No hay productos seleccionados en el carrito.
            <br><br>
            <a class="boton" href="catalogo.php">Ir al catálogo</a>
        </div>

    <?php } ?>

</div>

</body>
</html>