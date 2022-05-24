<?php

    $nombre = $_POST[´nombre´];
    $apellido = $_POST[´apellido´];
    $email = $_POST[´email´];
    $telefono = $_POST[´telefono´];
    $mensaje = $_POST[´texarea´];

    $para = "hola@monicamaurichau.com.ar";
    $asunto = "Desde Hola en la página";

    mail($para, $asunto, utf8_decode ($mensaje));


    header(´location:gracias.html´);
    




?>