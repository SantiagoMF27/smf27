<?php
    $destinatario = 'smanosalva2002@gmail.com';
//coreo que recibirael mensage
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['msg'];
    $header = "Enviado desde Mi Blog";
    $mensajeCompleto = "Nombre: " . $nombre ."\nCorreo: " . $email . "\nAsunto: " . $asunto . "\nMensaje" . $mensaje;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script> alert('¡¡Mensaje Enviado Exitosamente!!') </script>";
    echo "<script> setTimeout(\"location.href='/index.html'\",1000) </script>";
?>
