<?php
//ej 4
session_start();

if (!isset($_SESSION["contador"])) {
    $_SESSION["contador"] = 1;
} else {
    $_SESSION["contador"]++;
}
?>

<HTML>
<HEAD>
    <TITLE>Cuenta de visitas</TITLE>
</HEAD>

<BODY>

<H1>Cuenta de visitas</H1>

<P>Se ha registrado una nueva página visitada durante la sesión.</P>

<A HREF="cant_visitas.php">Ver cantidad de páginas visitadas</A>

</BODY>
</HTML>