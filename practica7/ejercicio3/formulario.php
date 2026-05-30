<?php
$ultimoUsuario = "";

// Verifico si se envió el formulario
if (isset($_POST["usuario"]) && $_POST["usuario"] != "") {
    
    $usuario = $_POST["usuario"];
    
    // Creo la cookie con una duración de 1 año
    setcookie("ultimo_usuario", $usuario, time() + (60 * 60 * 24 * 365));
    
    // Lo guardo en la variable para mostrarlo inmediatamente
    $ultimoUsuario = $usuario;

} else {

    // Si ya existe la cookie, recupero el último usuario ingresado
    if (isset($_COOKIE["ultimo_usuario"])) {
        $ultimoUsuario = $_COOKIE["ultimo_usuario"];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3 - Cookies</title>
</head>
<body>

    <h2>Ingreso de usuario</h2>

    <form action="ejercicio3.php" method="post">
        <label>Nombre de usuario:</label>
        <input type="text" name="usuario" required>
        <input type="submit" value="Guardar usuario">
    </form>

    <br>

    <?php
    if ($ultimoUsuario != "") {
        echo "Último nombre de usuario ingresado: <strong>" . htmlspecialchars($ultimoUsuario) . "</strong>";
    } else {
        echo "Todavía no se ingresó ningún usuario.";
    }
    ?>

</body>
</html>