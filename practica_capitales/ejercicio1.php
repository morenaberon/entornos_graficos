<?php
/*practica 6: ejercicio 1*/
    /* -Consulta a una base de datos: Para comenzar la comunicación con un servidor de base de datos MySQL, es necesario abrir una conexión a ese servidor. Para inicializar esta conexión, PHP ofrece la función:

    mysqli_connect()

    -Todos sus parámetros son opcionales, pero hay tres de ellos que generalmente son necesarios:

    $hostname, $nombreUsuario y $contraseña

    -Una vez abierta la conexión, se debe seleccionar una base de datos para su uso, mediante la función:

    mysqli_select_db()

    -Esta función debe pasar como parámetro:

    el nombre de la conexión y el nombre de la base de datos

    La función mysqli_query() se utiliza para:

    ejecutar una consulta SQL en la base de datos

    -y requiere como parámetros:

    el nombre de la conexión y la consulta SQL

    -La cláusula or die() se utiliza para:

    capturar un error y detener la ejecución del programa

    -y la función mysqli_error() se puede usar para:

    mostrar el último mensaje de error producido en la operación MySQLi

    -Explicación del código
    <?php
    while ($fila = mysqli_fetch_array($vResultado))
    {
    ?>
    <tr>
        <td><?php echo ($fila[0]); ?></td>
        <td><?php echo ($fila[1]); ?></td>
        <td><?php echo ($fila[2]); ?></td>
    </tr>
    <tr>
        <td colspan="5">
    <?php
    }
    mysqli_free_result($vResultado);

    mysqli_close($link);
    ?>

    El código recorre los resultados obtenidos de una consulta a la base de datos. La función mysqli_fetch_array($vResultado) extrae una fila por vez y la almacena en la variable $fila.

    El ciclo while se repite mientras existan registros para mostrar. Dentro de cada repetición se crea una fila de una tabla HTML mediante la etiqueta <tr>.

    Luego se muestran los datos de cada registro:

    $fila[0]

    muestra el dato de la primera columna.

    $fila[1]

    muestra el dato de la segunda columna.

    $fila[2]

    muestra el dato de la tercera columna.

    Cada uno de esos valores se muestra en pantalla mediante echo, dentro de una celda <td> de la tabla.

    Cuando ya no quedan más filas en el resultado, finaliza el ciclo while. Después:

    mysqli_free_result($vResultado);

    libera de la memoria el resultado de la consulta.

    Finalmente:

    mysqli_close($link);

    cierra la conexión con la base de datos.*/ 
?>