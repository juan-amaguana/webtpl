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
        <table style='background-color: black;'>
            <tr>
                <td>
                    <img src='http://terpelsicumple.com/wp-content/themes/PromoTerpel/assets/mails/Mainhead1.png'
                        style='width: 100%;'>
                </td>
            </tr>
            <tr>
                <td>
                    <h1 style='font-family: work sans, Helvetica, sans-serif; font-weight: 600;color: #fff; width: 85%; display: block; margin: 0 auto;'>Registro
                        exitoso de datos!</h1>
                </td>
            </tr>
            <tr>
                <td><p style='font-family: work sans, Helvetica, sans-serif; color: #fff; width: 85%; display: block; margin: 0 auto; padding: 10px 0; font-size: 19px; text-align: justify;'>Hola <span style='color: #e3af51;'>$name</span>, gracias por registrarte. Ahora es momento de ingresar tu primera factura, te deseamos
                    mucha suerte. Con Terpel este 2022 podras vivir una experiencia de lujo apoyando a Ecuador en Qatar
                    2022. </p></td>
            </tr>
            <tr>
                <td>
                    <img src='http://terpelsicumple.com/wp-content/themes/PromoTerpel/assets/mails/Mainhead2.png'
                        style='width: 100%;'>
                </td>
            </tr>
        </table>
        <table style='width: 600px; margin: 0 auto; text-align: center;'>
            <h1 style='color: #e3af51; text-align: center;font-family:work sans, Helvetica, sans-serif; '>Como
                participar:</h1>
            <img src='http://terpelsicumple.com/wp-content/themes/PromoTerpel/assets/mails/iconos.png'
                style='width: 92.5%; display: block; margin: 0 auto; margin-top: 15px; margin-bottom: 20px;'>

            <a href='https://terpelsicumple.com/' style='
            margin: 0 auto;
            display: block;
            width: 185px;
            text-align: center;
            margin-top: 40px;'>
                <img src='http://terpelsicumple.com/wp-content/themes/PromoTerpel/assets/mails/participar.png'
                    style='width: 92.5%; display: block; margin: 0 auto; margin-top: 15px; margin-bottom: 20px;'>
            </a>
            <p
                style='font-family: work sans, Helvetica, sans-serif; font-weight: 600; width: 95%; display: block; margin: 0 auto; text-align: center; color: #868686; font-size: 14px; margin-top: 30px;'>
                *Participan todos los combustibles y las facturas son acumulables hasta el<br> sorteo mas cercano a la
                fecha de ingreso.
            </p>
            <img src='http://terpelsicumple.com/wp-content/themes/PromoTerpel/assets/mails/cupones.png'
                style='width: 100%; display: block; margin: 0 auto; margin-top: 15px; margin-bottom: 0px;'>
        </table>
        <div
            style='width: 600px; margin: 0 auto; background-color: #e5e5e5; padding: 20px 0px; margin-top: 0px; padding-left: 0px;'>
            <table style='width: 600px; margin: 0 auto; padding-left: 0px;'>
                <tr style='padding-left: 0px;'>
                    <td colspan='1' style='text-align: left; padding-left: 0px;'>
                        <img src='http://terpelsicumple.com/wp-content/themes/PromoTerpel/assets/mails/terpelLogo.png'
                            style='width: 120px; margin-left: 0px;'>
                    </td>
                    <td colspan='1' style='text-align: right; padding-right: 20px;'>
                        <a href='https://www.facebook.com/terpelEC' style='margin-right: 10px; text-decoration: none;'>
                            <img src='http://terpelsicumple.com/wp-content/themes/PromoTerpel/assets/mails/face.png'
                                style='width: 15px;'>
                            <span
                                style='color: #868686;font-family: work sans, Helvetica, sans-serif; font-size: 12px; font-weight: 600;'>
                                /terpelEC
                            </span>
                        </a>
                        <a href='https://www.instagram.com/terpel_ec/'
                            style='margin-right: 10px; text-decoration: none;'>
                            <img src='http://terpelsicumple.com/wp-content/themes/PromoTerpel/assets/mails/inst.png'
                                style='width: 15px;'>
                            <span
                                style='color: #868686;font-family: work sans, Helvetica, sans-serif; font-size: 12px; font-weight: 600;'>
                                /terpelEC
                            </span>
                        </a>
                        <a href='https://ec.linkedin.com/company/terpel-ecuador' style='text-decoration: none;'>
                            <img src='http://terpelsicumple.com/wp-content/themes/PromoTerpel/assets/mails/linkedin.png'
                                style='width: 15px;'>
                            <span
                                style='color: #868686;font-family: work sans, Helvetica, sans-serif; font-size: 12px; font-weight: 600;'>
                                /terpelEC
                            </span>
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