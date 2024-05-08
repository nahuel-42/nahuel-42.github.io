<?php
    if(isset($_POST['enviar'])){
        $email = $_POST['Email'];
        $name = $_POST['name'];
        $message= $_POST['message'];
        $telefono = $_POST['telefono'];
        $asunto = "Nueva Consulta de Netgen.com.ar";
        $mensaje = '<html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Notificación de Consulta de NetGen</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    font-size: 1.3rem;
                    background-color: #e5f2fe;
                }
                h2 {
                    color: #353535;
                }
                ul {
                    list-style: none;
                    padding: 0;
                }
                li {
                    padding-bottom: 20px;
                }
                em {
                    font-style: italic;
                    color: white;
                    background-color: #353535;
                    padding: 40px  5px 40px 5px;
                    border-radius: 5px; 
                    font-weight: regular;
                    display: inline-block; 
                    text-align: center; 
                    line-height: 1.4; 
                    margin-bottom: 25px;
                     font-size: 1rem;
                    width: 100%;
                }
                .centrartexto{
                    text-align: center;
                    font-size: 1.2rem;
                    padding: 10px;
                }
                .titulo{
                    font-size: 1.2rem;
                    color: #353535;
                }
                .subtitulo{
                    font-size: 1rem;
                    padding-left: 20px;
                    margin: 0;
                    font-weight: 400;
                }
                .fondo{
                    background-color: #ffffff;
                    padding-top: 15px;
                    border: 5px solid #0098c2;
                    color: black;
                }
            </style>
        </head>
        <body>
            <h2 style="text-align: center;">¡Nueva consulta de Netgen.com.ar!</h2><br>
            <em>"'.$message.'"</em><br>
            <strong class="titulo">Datos de contacto:</strong>
            <ul class="fondo">
                <li>
                    <p class="subtitulo">Nombre:</p>
                    <br>
                    <div class="centrartexto">
                        <span >'.$name.'</span> 
                    </div>
                </li>
                <li>
                    <p class="subtitulo">Email:</p>
                    <br> 
                    <div class="centrartexto">
                    <span >'.$email.'</span> 
                    </div>
                </li>
                <li>
                    <p class="subtitulo">Número de Teléfono:</p>
                    <br>
                    <div class="centrartexto">
                        <span >'.$telefono.'</span> 
                    </div>
                </li>
            </ul>
        </body>
        </html>';
        $destinatario = "nievas.nahuel.1998@gmail.com, geninfernando@gmail.com";
        $cabeceras = 'From: netgen@example.com' . "\r\n" ;
        $cabeceras .= 'Reply-To: nievas.nahuel.1998@gmail.com' . "\r\n" ;
        $cabeceras .= 'MIME-Version: 1.0' . "\r\n";
	    $cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";

        if(mail($destinatario, $asunto, $mensaje, $cabeceras)){
            header('Location: Contacto.html?correo=enviado');
        } else {
            header('Location: Contacto.html?correo=error');
        }
        exit;
    }
?>
        