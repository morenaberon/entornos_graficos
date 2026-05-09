<?php
/*PRÁCTICA N°4
   Ejercicio 1:
   
   <?php
function doble($i) {
 return $i*2;
}
$a = TRUE;
$b = "xyz";
$c = 'xyz';
$d = 12;
echo gettype($a);
echo gettype($b);
echo gettype($c);
echo gettype($d);
if (is_int($d)) {
 $d += 4;
}
if (is_string($a)) {
 echo "Cadena: $a";
}
$d = $a ? ++$d : $d*3;
$f = doble($d++);
$g = $f += 10;
echo $a, $b, $c, $d, $f , $g;
?> 

• las variables y su tipo:
    - $a: boolean (TRUE)
    - $b: string ("xyz")
    - $c: string ('xyz')
    - $d: integer (12)
    - $f: integer (resultado de la función doble aplicada a $d)
    - $g: integer (resultado de la operación $f += 10)

• los operadores:
    - =    Asigna un valor a una variable                                                    
    - *     Multiplica                                                                        
    - +=    Suma y guarda el resultado en la misma variable                                   
    - ++    Aumenta el valor en 1                                                             
    - ?:     Operador ternario: elige un valor si la condición es verdadera y otro si es falsa 
    - ,     Separa valores dentro del echo

• las funciones y sus parámetros:
    -doble($i)
        Función creada por el programador.
        Parámetro: $i.
    -gettype($a)
         Parámetro: $a.
    -gettype($b)
         Parámetro: $b.
    -gettype($c)
         Parámetro: $c.
    -gettype($d)
         Parámetro: $d.
    -is_int($d)
         Parámetro: $d.
    -is_string($a)
         Parámetro: $a.

• las estructuras de control:
    -if (is_int($d)) { $d += 4; }
    Verifica si $d es un número entero. Como $d vale 12, la condición es verdadera y se le suma 4. 
    Entonces $d pasa a valer 16.
    -if (is_string($a)) { echo "Cadena: $a"; }
    Verifica si $a es una cadena de texto. Como $a es boolean, la condición es falsa y no se ejecuta 
    el echo.
    -$d = $a ? ++$d : $d*3;
    Es un operador ternario, que funciona como un if corto. Como $a vale TRUE, se ejecuta ++$d, 
    entonces $d pasa de 16 a 17.

• cuál es la salida por pantalla:
    booleanstringstringinteger1xyzxyz184444
    (Aparece todo junto porque los echo no tienen espacios ni saltos de línea.)

    EJERCICIO 2:
    a)
        Los tres códigos sí son equivalentes, porque muestran la misma salida por pantalla: 12345678910

            -El primer código usa un while común. Empieza con $i = 1, imprime $i y después lo incrementa con $i++.

            -El segundo código también usa while, pero con una sintaxis alternativa usando : y endwhile. Hace lo mismo que el primero: imprime el número y luego aumenta $i.

            -El tercer código usa do while. Empieza con $i = 0, pero antes de imprimir incrementa la variable con ++$i, por eso también muestra los números del 1 al 10.

    b)
        Los cuatro códigos sí son equivalentes, porque todos muestran la misma salida por pantalla: 12345678910

            -El primer código usa un for común. Empieza con $i = 1, se repite mientras $i <= 10, imprime $i y luego aumenta con $i++.

            -El segundo código también usa for, pero no tiene instrucciones dentro del cuerpo del bucle. La impresión y el incremento se hacen en la tercera parte del for:

            print $i, $i++

            Por eso también imprime del 1 al 10.

            -El tercer código usa un for sin condición central, por eso sería infinito, pero se detiene con break cuando $i > 10.

            -El cuarto código también usa un for (;;) infinito, pero adentro controla cuándo cortar con break y aumenta $i manualmente.

            Por lo tanto, son equivalentes porque todos imprimen los números del 1 al 10.

    c) 
        Los códigos son equivalentes. Ambos bloques evalúan el valor de la variable $i y producen exactamente el mismo resultado. 
        La estructura switch logra el mismo comportamiento excluyente que los elseif gracias a que cada case termina con la sentencia 
        break, lo cual detiene la ejecución correctamente."
        
    EJERCICIO 3:
    a) El código se utiliza para generar dinámicamente una tabla HTML de 5 filas y 2 columnas mediante PHP. Emplea dos bucles for anidados: el bucle externo 
    controla la creación de las 5 filas (etiquetas <tr>), mientras que el bucle interno genera las 2 celdas (etiquetas <td>) correspondientes a cada fila. Además, inserta un 
    espacio en blanco irrompible (&nbsp;) en cada celda para garantizar que los bordes de la tabla se rendericen correctamente en el navegador.

    b) Este código implementa un formulario web autoprocesable en PHP que solicita la edad del usuario y evalúa si es mayor o menor de edad. Utiliza una estructura
    condicional if-else para manejar dos estados de la página: si el formulario aún no ha sido enviado (!isset($_POST['submit'])), muestra un formulario HTML pidiendo la edad.
    Una vez que el usuario presiona el botón de envío, el código ingresa al bloque else, captura el dato ingresado mediante el método POST ($_POST['age']), y lo evalúa. Si la edad es mayor o igual a 21, 
    imprime en pantalla 'Mayor de edad'; de lo contrario, imprime 'Menor de edad'.

    EJERCICIO 4:
    La salida por pantalla sería:

        El   

        El clavel blanco

    Justificación:

        Primero se ejecuta:

            echo "El $flor $color \n";

            En ese momento las variables $flor y $color todavía no existen, 
            porque el archivo datos.php aún no fue incluido. Por eso no muestra ningún valor para esas variables.

        Después se ejecuta:

            include 'datos.php';

            Esto incorpora el archivo datos.php, donde se definen las variables:
            $color = 'blanco';
            $flor = 'clavel';

        Luego se ejecuta:

            echo " El $flor $color";

            Ahora las variables ya tienen valor, entonces muestra:
            
            El clavel blanco

    EJERCICIO 5:
    5)  El archivo visitas.php incluye al archivo contador.php mediante:

            include("contador.php")

        Entonces, cuando se abre la página visitas.php, se ejecuta el código de contador.php.

        El archivo contador.php usa el archivo de texto contador.dat para guardar la cantidad de visitas. 
        Primero abre el archivo en modo lectura:

            $abrir = fopen($archivo, "r");

        Después lee el valor que tiene guardado:

            $cont = fread($abrir, filesize($archivo));

        Luego cierra el archivo, lo vuelve a abrir en modo escritura, le suma 1 al contador y guarda el nuevo valor:

            $cont = $cont + 1;
            $guardar = fwrite($abrir, $cont);

        Finalmente muestra por pantalla la cantidad de visitas:

            echo "<font face='arial' size='3'>Cantidad de visitas:".$cont."</font>";

        Si el archivo contador.dat empieza con el valor 0, la primera vez que se abre la página se mostrará:

            Cantidad de visitas:1

        Y el archivo contador.dat quedará guardado con el valor 1.
        Cada vez que se vuelva a cargar la página, el número aumentará en 1.
*/
?>