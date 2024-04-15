<?php
    if(isset($_POST['enviar'])){
        $email = $_POST['Email'];
        $asunto = "Esto es un correo de prueba, en caso de funcionar lo modificaremos para que quede mejor";
        $mensaje = $_POST['message'];
        $destinatario = "geninfernando@hotmail.com";
        $cabeceras = 'From: ' . $_POST['Email'] . "\r\n" ;
        $cabeceras .= 'Reply-To: geninfernando@hotmail.com' . "\r\n" ;
        if(mail($destinatario, $asunto, $mensaje, $cabeceras)){
            header('Location: Contacto.html?correo=enviado');
        } else {
            header('Location: Contacto.html?correo=noenviado');
        }
        exit;
    }
?>
        