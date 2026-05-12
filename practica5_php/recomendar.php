
<HTML>
<HEAD>
    <TITLE>Enviar recomendación</TITLE>
</HEAD>

<BODY>

<?php
/*ej 3*/
$fecha = date("d-m-Y");
$hora = date("H:i:s");

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$email_amigo = $_POST["email_amigo"];
$mensaje = $_POST["mensaje"];

$destino = $email_amigo;
$asunto = "Recomendación de sitio web";

$desde = "From: " . $email;

$cuerpo = "
Hola,

$nombre te recomienda visitar este sitio web.

Mensaje:
$mensaje

Sitio recomendado:
http://localhost/Entornos%20Graficos/Practica_php/

Recomendación enviada el $fecha a las $hora.

Email de quien recomienda: $email
";

if (@mail($destino, $asunto, $cuerpo, $desde)) {
    echo "La recomendación fue enviada correctamente.";
} else {
    echo "Los datos fueron recibidos correctamente, pero el correo no pudo enviarse porque XAMPP no tiene configurado el servidor de correo.";
}
?>

<BR><BR>
<A HREF="recomendar.html">Volver al formulario</A>

</BODY>
</HTML>