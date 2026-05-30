<?php
if (isset($_POST["titular"])) {

    $titular = $_POST["titular"];

    if ($titular == "politica" || $titular == "economica" || $titular == "deportiva") {

        setcookie("titular", $titular, time() + (60 * 60 * 24 * 90));

        header("Location: periodico.php");
        exit;
    }
}

header("Location: periodico.php");
exit;
?>