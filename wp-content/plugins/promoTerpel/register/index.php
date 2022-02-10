<?php

    $path = preg_replace('/wp-content.*$/','', __DIR__);
    require_once($path."wp-load.php");
    
    function send_email($mail, $name){
        $to   = $mail;
        $title   = 'Bienvenid@!';
        $headers = array('Content-Type: text/html; charset=UTF-8');
        $content_type = function() { return 'text/html'; };
        $body = "<!DOCTYPE html>
<html>

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;1,900&display=swap');
    </style>
</head>

<body style='margin-top: 0px;'>
    <div style='width: 600px; margin: 0 auto'>
        <table>
            <img src='http://terpelsicumple.com/wp-content/uploads/2021/10/bienvenidoMailHeader.png'
                style='width: 100%;'>
        </table>
        <table style='width: 600px; margin: 0 auto; text-align: center;'>
            <p
                style='font-family:work sans, Helvetica, sans-serif; padding: 20px 35px; text-align: justify; color: #666666; font-weight: 300; margin-bottom: 20px;'>
                <span style='font-weight: 900;'> Hola $name, </span>el registro de tus datos se realizó de
                forma exitosa. Ahora estás listo para ingresar tu primera factura y participar por uno de los increíbles
                premios que tenemos para tí.
            </p>
            <h3 style='font-family:work sans, Helvetica, sans-serif; text-align: center; color: #FF1E0A; font-weight: 600;
            font-size: 21px;'>¿Cómo participar?</h3>
            <img src='http://terpelsicumple.com/wp-content/uploads/2021/10/headerWelcomeTerpel.png'
                style='width: 92.5%; display: block; margin: 0 auto; margin-top: 15px; margin-bottom: 20px;'>

            <a href='https://terpelsicumple.com/'  style='    background-color: #FF1E0A;
            color: #fff;
            border-style: none;
            padding: 10px 10px;
            border-radius: 100px;
            font-family: work sans, Helvetica, sans-serif;
            font-size: 18px;
            margin: 0 auto;
            display: block;
            text-decoration: none;
            width: 125px;
            text-align: center;
            font-weight: 600;
            margin-top: 40px;'>
                    Participar 
            </a>
            <p style='font-family: work sans, Helvetica, sans-serif; font-weight: 600; width: 60%; display: block; margin: 0 auto; text-align: center; color: #666666; font-size: 12px; margin-top: 30px;'>
                *Participan todos los combustibles: Súper, Extra, Super Evol-t y Diesel y las facturas son acumulables.
            </p>
            <h3 style='font-family:work sans, Helvetica, sans-serif; text-align: center; color: #FF1E0A; font-weight: 600;
            font-size: 21px; margin-top:25px'>
Gana doble o tripe cupón cumpliendo los siguientes requisitos. </h3>
<img src='http://terpelsicumple.com/wp-content/uploads/2021/10/oportunityMail-1.png'
style='width: 92.5%; display: block; margin: 0 auto; margin-top: 15px; margin-bottom: 20px;'>
<a href='https://terpelsicumple.com/'  style='    background-color: #FF1E0A;
color: #fff;
border-style: none;
padding: 10px 10px;
border-radius: 100px;
font-family: work sans, Helvetica, sans-serif;
font-size: 18px;
margin: 0 auto;
display: block;
text-decoration: none;
width: 150px;
text-align: center;
font-weight: 600;
margin-top: 15px;'>
        Ingresar factura 
</a>
<h3 style='font-family:work sans, Helvetica, sans-serif; text-align: center; color: #666666; font-weight: 600;
font-size: 19px; margin-top:25px'>¿Tienes alguna duda?<br>
Conoce los términos y condiciones de la promoción</h3>
<a href='https://terpelsicumple.com/terminos-y-condiciones/'  style='    background-color: #FF1E0A;
color: #fff;
border-style: none;
padding: 10px 10px;
border-radius: 100px;
font-family: work sans, Helvetica, sans-serif;
font-size: 18px;
margin: 0 auto;
display: block;
text-decoration: none;
width: 235px;
text-align: center;
font-weight: 600;
margin-top: 40px;'>
Términos y condiciones</a>
        </table>
        <div
            style='width: 600px; margin: 0 auto; background-color: #666666; padding: 20px 0px; margin-top: 40px; padding-left: 0px;'>
            <table style='width: 600px; margin: 0 auto; padding-left: 0px;'>
                <tr style='padding-left: 0px;'>
                    <td colspan='1' style='text-align: left; padding-left: 0px;'>
                        <img src='https://terpelecuadorgasolinagratis.com/wp-content/uploads/2021/09/LOGO-TERPEL.png'
                            style='width: 120px; margin-left: 0px;'>
                    </td>
                    <td colspan='1' style='text-align: right; padding-right: 20px;'>
                        <p style='    margin: 0;
                        color: #fff;
                        display: inline-block;
                        font-family: work sans, Helvetica, sans-serif;
                        vertical-align: text-top;
                        font-size: 12px;
                        margin-right: 10px;
                    '> Síguenos en nuestras redes sociales</p>
                        <a href='https://www.facebook.com/terpelEC' style='margin-right: 10px; text-decoration: none;'>
                            <img src='http://terpelsicumple.com/wp-content/uploads/2021/10/faceMail.png'
                                style='width: 15px;'>
                        </a>
                        <a href='https://www.instagram.com/terpel_ec/' style='margin-right: 10px; text-decoration: none;'>
                            <img src='http://terpelsicumple.com/wp-content/uploads/2021/10/instMail.png'
                                style='width: 15px;'>
                        </a>
                        <a href='https://ec.linkedin.com/company/terpel-ecuador' style='text-decoration: none;'>
                            <img src='http://terpelsicumple.com/wp-content/uploads/2021/10/inst.png'
                                style='width: 15px;'>
                        </a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>";
        add_filter( 'wp_mail_content_type', $content_type );
        wp_mail($to, $title, $body, $headers);
        remove_filter( 'wp_mail_content_type', $content_type );
    }
    
    if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['correo']) 
    && isset($_POST['cedula'])  && isset($_POST['telefono'])
    ){
        $nombre = sanitize_text_field($_POST['nombre']);
        $apellido = sanitize_text_field($_POST['apellido']);
        $correo = sanitize_text_field($_POST['correo']);
        $cedula = sanitize_text_field($_POST['cedula']);
        $telefono = sanitize_text_field($_POST['telefono']);
        $created_at = date('Y-m-d H:i:s');

        // SAVE TO DB
        global $wpdb;
        $wpdb->show_errors();
       
        $tabla_registros = $wpdb->prefix . 'participantes';

        $insertData = $wpdb->insert(
            $tabla_registros,
            array(
                'nombre' => $nombre,
                'apellido' => $apellido,
                'correo' => $correo,
                'cedula' => $cedula,
                'telefono' => $telefono,
                'created_at' => $created_at,
            ));
            if ($insertData == true){
                send_email($correo, $nombre);
                $return['success'] = 1;
                $return['id'] = $cedula;
            }
            else {
                $return['success'] = 0;
            }
            echo json_encode($return);
    }


?>