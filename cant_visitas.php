<?php
//Ej 4
session_start();
?>

<HTML>
<HEAD>
    <TITLE>Cantidad de visitas</TITLE>
</HEAD>

<BODY>

<H1>Cantidad de páginas visitadas</H1>

<?php
echo "Has visitado " . $_SESSION["contador"] . " páginas";
?>

<BR>
<BR>

<A HREF="cuenta.php">Otra página</A>

</BODY>
</HTML>