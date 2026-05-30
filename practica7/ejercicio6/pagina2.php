<?php
session_start();
include("conexion.inc");

unset($_SESSION['nombre']);

$mail = $_POST['mail'];

$vSql = "SELECT * FROM alumnos WHERE mail = '$mail'";
$vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado de la consulta</title>
</head>
<body>

<?php
if (mysqli_num_rows($vResultado) == 0) {
    echo "<h3>Alumno inexistente</h3>";
    echo "<p>No se encontró ningún alumno con ese mail.</p>";
} else {
    $fila = mysqli_fetch_array($vResultado);

    $_SESSION['nombre'] = $fila['nombre'];

    echo "<h3>Alumno encontrado</h3>";
    echo "<p>El nombre fue almacenado en una variable de sesión.</p>";
}
?>

<br>
<a href="pagina3.php">Ingresar a la página principal</a>
<br><br>
<a href="sesiones.php">Volver al formulario</a>

<?php
mysqli_free_result($vResultado);
mysqli_close($link);
?>

</body>
</html>