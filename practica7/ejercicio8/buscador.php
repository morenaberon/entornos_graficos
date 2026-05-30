<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscador de canciones</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 40px;
        }

        .contenedor {
            width: 600px;
            margin: auto;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 8px #cccccc;
        }

        h1 {
            text-align: center;
            color: #333333;
        }

        form {
            text-align: center;
            margin-bottom: 25px;
        }

        input[type="text"] {
            width: 65%;
            padding: 10px;
            font-size: 16px;
        }

        input[type="submit"] {
            padding: 11px 18px;
            font-size: 16px;
            background-color: #333333;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #555555;
        }

        .resultado {
            background-color: #eeeeee;
            padding: 12px;
            margin-bottom: 8px;
            border-radius: 4px;
        }

        .mensaje {
            text-align: center;
            color: #555555;
        }
    </style>
</head>
<body>

<div class="contenedor">

    <h1>Buscador de canciones</h1>

    <form action="buscador.php" method="POST">
        <input 
            type="text" 
            name="cancion" 
            placeholder="Ingrese canción o artista"
            required
        >
        <input type="submit" value="Buscar">
    </form>

    <?php
    if (isset($_POST['cancion'])) {

        include("conexion.inc");

        $cancion = trim($_POST['cancion']);
        $cancionSegura = mysqli_real_escape_string($link, $cancion);

        $vSql = "SELECT canciones 
                 FROM buscador 
                 WHERE canciones LIKE '%$cancionSegura%'
                 ORDER BY canciones";

        $vResultado = mysqli_query($link, $vSql) 
            or die(mysqli_error($link));

        if (mysqli_num_rows($vResultado) == 0) {
            echo "<p class='mensaje'>No se encontraron canciones con ese criterio.</p>";
        } else {
            echo "<h2>Resultados encontrados:</h2>";

            while ($fila = mysqli_fetch_assoc($vResultado)) {
                echo "<div class='resultado'>";
                echo htmlspecialchars($fila['canciones']);
                echo "</div>";
            }
        }

        mysqli_free_result($vResultado);
        mysqli_close($link);
    }
    ?>

</div>

</body>
</html>