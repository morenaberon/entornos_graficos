<!--ej 2-->
<HTML>
<HEAD>
    <TITLE>Enviar consulta</TITLE>
</HEAD>

<BODY>

<?php
$fecha = date("d-m-Y");
$hora = date("H:i:s");

$destino = "tucorreo@dominio.com";
$asunto = "Comentario";

$desde = "From: " . $_POST["email"];

$comentario = "
Nombre: " . $_POST["nombre"] . "
Email: " . $_POST["email"] . "
Consulta: " . $_POST["texto"] . "
Enviado: $fecha a las $hora
";

mail($destino, $asunto, $comentario, $desde);

echo "Su consulta ha sido enviada, en breve recibirá nuestra respuesta.";
?>

</BODY>
</HTML>