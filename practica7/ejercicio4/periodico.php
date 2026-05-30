<?php
$tipoTitular = "";

if (isset($_COOKIE["titular"])) {
    $tipoTitular = $_COOKIE["titular"];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Diario Actualidad</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
        }

        header {
            background-color: #222;
            color: white;
            text-align: center;
            padding: 25px;
        }

        main {
            width: 850px;
            margin: 25px auto;
            background-color: white;
            padding: 25px;
        }

        .noticia {
            border-bottom: 1px solid #cccccc;
            padding: 18px 0;
        }

        .noticia h2 {
            margin: 0 0 8px 0;
        }

        .politica h2 {
            color: #a00000;
        }

        .economia h2 {
            color: #006400;
        }

        .deportiva h2 {
            color: #005bbb;
        }

        .configuracion {
            margin-top: 30px;
            padding: 20px;
            background-color: #eeeeee;
        }

        input[type="submit"] {
            margin-top: 15px;
            padding: 8px 15px;
        }

        a {
            color: #005bbb;
        }
    </style>
</head>

<body>

<header>
    <h1>Diario Actualidad</h1>
    <p>Las noticias del día</p>
</header>

<main>

    <?php
    if ($tipoTitular == "" || $tipoTitular == "politica") {
    ?>
        <div class="noticia politica">
            <h2>Noticia política</h2>
            <p>El Congreso debate nuevas medidas para el desarrollo nacional.</p>
        </div>
    <?php
    }

    if ($tipoTitular == "" || $tipoTitular == "economica") {
    ?>
        <div class="noticia economia">
            <h2>Noticia económica</h2>
            <p>La actividad comercial registra nuevas oportunidades de crecimiento.</p>
        </div>
    <?php
    }

    if ($tipoTitular == "" || $tipoTitular == "deportiva") {
    ?>
        <div class="noticia deportiva">
            <h2>Noticia deportiva</h2>
            <p>El equipo local consiguió una importante victoria en el campeonato.</p>
        </div>
    <?php
    }
    ?>

    <div class="configuracion">
        <h3>Seleccioná el tipo de titular que deseás ver</h3>

        <form action="guardar_preferencia.php" method="post">

            <label>
                <input type="radio" name="titular" value="politica" required
                <?php if ($tipoTitular == "politica") echo "checked"; ?>>
                Noticia política
            </label>

            <br><br>

            <label>
                <input type="radio" name="titular" value="economica"
                <?php if ($tipoTitular == "economica") echo "checked"; ?>>
                Noticia económica
            </label>

            <br><br>

            <label>
                <input type="radio" name="titular" value="deportiva"
                <?php if ($tipoTitular == "deportiva") echo "checked"; ?>>
                Noticia deportiva
            </label>

            <br>

            <input type="submit" value="Guardar preferencia">

        </form>

        <p>
            <a href="borrar_cookie.php">Borrar preferencia guardada</a>
        </p>
    </div>

</main>

</body>
</html>