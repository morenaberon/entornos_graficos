<?php
setcookie("titular", "", time() - 3600);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Borrar preferencia</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            padding-top: 80px;
        }

        .mensaje {
            background-color: white;
            width: 450px;
            margin: auto;
            padding: 30px;
            border: 1px solid #cccccc;
        }

        a {
            color: #005bbb;
        }
    </style>
</head>

<body>

<div class="mensaje">
    <h2>Preferencia eliminada</h2>

    <p>La cookie fue borrada correctamente.</p>

    <p>
        Al volver al periódico se mostrarán nuevamente los tres titulares.
    </p>

    <a href="periodico.php">Volver al periódico</a>
</div>

</body>
</html>