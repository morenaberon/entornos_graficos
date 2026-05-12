<?php
//ej 1
$destinatario = "xx@xx.com";
$asunto = "Prueba de correo HTML";
$cuerpo = '
<html>
<head>
    <title>Envio de mail</title>
</head>
<body>
    <h1>Hola!</h1>

    <p>
        <b>Esto es una prueba</b> de envío de correo electrónico
        con formato HTML a través del servidor.
    </p>

    <p>  
        Este mensaje fue generado desde un script PHP utilizando la función mail().
    </p>
</body>
</html>
';
$headers = "MIME-Version: 1.0\r\n";

// Se usa charset UTF-8 para que el correo HTML muestre correctamente
// tildes, ñ y otros caracteres especiales.
$headers .= "Content-type: text/html; charset=UTF-8\r\n";

$headers .= "From: NN <nn@nn.com>\r\n";

$headers .= "Reply-To: ss@ss.com\r\n";

$headers .= "Cc: yy@yy.com\r\n";

$headers .= "Bcc: zz@zz.com, pp@pp.com\r\n";

if (mail($destinatario, $asunto, $cuerpo, $headers)) {
    echo "El correo fue enviado correctamente.";
} else {
    echo "No se pudo enviar el correo.";
}
?>