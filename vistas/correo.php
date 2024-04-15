<?php
    if(isset($_POST['enviar'])){
        $email = $_POST['Email'];
        $asunto = "Correo de prueba";
        $mensaje = $_POST['message'];
        $cabeceras = 'From: ' . $_POST['Email'] . "\r\n" ;
        $cabeceras .= 'Reply-To: noreply@example.com' . "\r\n" ;
        if(mail($destinatario, $asunto, $mensaje, $cabeceras)){
            header('Location: contacto.html?correo=enviado');
        } else {
            header('Location: contacto.html?correo=noenviado');
        }
        exit;
    }
?>
        