<?php
    $destinatario = 'davidglezsantis@gmail.com';
    // esto es mi correo
    $nombre = $_POST['nombre'];
    $whatsapp = $_POST['whatsapp'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];

    $header = "enviado desde la pagina de evaluacion gratis";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre; 

    mail($destinatario, $whatsapp, $mensajeCompleto, $header);
    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";

?>
