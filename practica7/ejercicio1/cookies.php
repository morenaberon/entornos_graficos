<?php
// Verifico si el usuario seleccionó un nuevo estilo desde el formulario
if (isset($_POST["estilo"])) {

    // Guardo el estilo elegido en una variable
    $estilo = $_POST["estilo"];

    // Creo una cookie llamada "estilo" que durará 90 días
    setcookie("estilo", $estilo, time() + (60 * 60 * 24 * 90));

} else {

    // Si no se envió el formulario, verifico si ya existe una cookie guardada
    if (isset($_COOKIE["estilo"])) {

        // Recupero el estilo elegido anteriormente
        $estilo = $_COOKIE["estilo"];
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cookies en PHP</title>

    <?php
    // Si existe un estilo seleccionado, cargo el archivo CSS correspondiente
    if (isset($estilo)) {
        echo '<link rel="stylesheet" type="text/css" href="' . $estilo . '.css">';
    }
    ?>
</head>

<body>

    <h1>Ejemplo de uso de cookies en PHP</h1>

    <p>
        Esta página permite seleccionar un estilo visual y recordarlo
        para los próximos accesos.
    </p>

    <form action="ejemplo_cookies.php" method="post">
        <label for="estilo">
            Seleccione el estilo que desea para la página:
        </label>

        <br><br>

        <select name="estilo" id="estilo">
            <option value="verde">Verde</option>
            <option value="rosa">Rosa</option>
            <option value="negro">Negro</option>
        </select>

        <input type="submit" value="Actualizar el estilo">
    </form>

</body>
</html>