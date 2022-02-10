<?php
$path = preg_replace('/wp-content.*$/','', __DIR__);
require_once($path."wp-load.php");

global $wpdb;
$wpdb->show_errors();
$tabla_registros = $wpdb->prefix . 'participantes';
$tabla_codigos = $wpdb->prefix . 'codigos';


function sendMail($correo, $nombre, $saldo, $len){
    $to   = $correo;
    $title   = 'Saludos!';
    $headers = array('Content-Type: text/html; charset=UTF-8');
    $content_type = function() { return 'text/html'; };
    $formatedSaldo = number_format((float)$saldo, 2, '.', '');
    $body = "<!DOCTYPE html>
    <html>
    
    <head>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;1,900&display=swap');
        </style>
    </head>
    
    <body style='margin: 0px;'>
        <div style='width: 600px; margin: 0 auto'>
            <table>
                <img src='http://terpelsicumple.com/wp-content/uploads/2021/10/cincoBannerMail.png' style='width: 100%;'>
                <p
                    style='font-family:work sans, Helvetica, sans-serif; padding: 20px 35px; text-align: justify; color: #666666; font-weight: 300; margin-bottom: 0px;'>
                    <span style='font-weight: 500;'> Hola $nombre, </span> ¿sabías que al tanquear en una de nuestras
                    gasolineras Terpel a nivel nacional no sólo gana tu auto?
                    Ahora puedes canjear tus facturas por cupones para participar por más de 200 premios y uno de los
                    ganadores de los $100.000 en premios
    
                    A continuación te recordamos tu número de oportunidades para ganar, y tu saldo actual pendiente por
                    redimir.
                </p>
            </table>
            <table style='width: 62%; display: block; margin: 0 auto;'>
                <tr>
                    <td style='border-radius: 25px ;text-align: center; width: 48%; background-image: url(https://terpelsicumple.com/wp-content/themes/PromoTerpel/assets/images/starsBack_cutted.png);
                        '>
                        <h1 style='color: #fff; font-family:work sans, Helvetica, sans-serif; font-size: 81px;
                            margin: 0;'>$len</h1>
                        <p style='color: #fff; font-family:work sans, Helvetica, sans-serif; margin: 0;'>
                            Oportunidades<br>para ganar</p>
                    </td>
                    <td style='text-align: center; width: 48%'>
                        <p style='font-family:work sans, Helvetica, sans-serif; color: #FF1E0A; font-weight: 600;'>Saldo
                            acumulado<br> pendiente por redimir</p>
                        <h1
                            style='font-family:work sans, Helvetica, sans-serif;color:#666666; font-size: 32px; font-weight: 600;'>
                            $ $formatedSaldo</h1>
                        <p style='font-family:work sans, Helvetica, sans-serif; color:#666666; font-size: 12px; '>Por
                            cada $10 de consumo,<br> recibes un cupón y aumentas<br> tus posibilidades.</p>
                    </td>
                </tr>
            </table>
            <h3 style='font-family:work sans, Helvetica, sans-serif; margin-top: 25px; text-align: center; color: #FF1E0A; font-weight: 600;
            font-size: 21px;'>¿Deseas ingresar una nueva factura?<br>
                Hazlo aquí:
                Ingresar factura</h3>
            <a href='https://terpelsicumple.com/' style='    background-color: #FF1E0A;
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
                margin-top: 40px;'>
                Ingresar factura
            </a>
            <h3 style='font-family:work sans, Helvetica, sans-serif; text-align: center; color: #FF1E0A; font-weight: 600;
                font-size: 21px;'>¿Cómo participar?</h3>
            <img src='http://terpelsicumple.com/wp-content/uploads/2021/10/headerWelcomeTerpel.png'
                style='width: 92.5%; display: block; margin: 0 auto; margin-top: 15px; margin-bottom: 20px;'>
    
            <a href='https://terpelsicumple.com/' style='    background-color: #FF1E0A;
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
            <table style='display: block; width: 85%; margin: 20px auto;'>
                <tr>
                    <td>
                        <p style='font-family:work sans, Helvetica, sans-serif;  color: #FF1E0A; font-weight: 600; margin-bottom: 0px; font-size: 20px;'>¿Necesitas poner gasolina?</p>
                        <p style='font-family:work sans, Helvetica, sans-serif;  color: #666666; font-weight: 600; margin-bottom: 0px; font-size: 17px;'>
                             Conoce las estaciones de servicio participantes 
                        </p>
                        <a href='https://terpelecuador.com/estaciones-1' style='    background-color: #FF1E0A;
                        color: #fff;
                        border-style: none;
                        padding: 10px 10px;
                        border-radius: 100px;
                        font-family: work sans, Helvetica, sans-serif;
                        font-size: 18px;
                        margin: 0;
                        display: block;
                        text-decoration: none;
                        width: 180px;
                        text-align: center;
                        font-weight: 600;
                        margin-top: 10px;'>
                        Conocer estaciones
                    </a>
                    </td>
                    <td>
                        <img style='width: 100%;' src='http://terpelsicumple.com/wp-content/uploads/2021/10/gasolineraMail.png' alt='estaciones' />
                    </td>
                </tr>
            </table>
            <h3 style='font-family:work sans, Helvetica, sans-serif; text-align: center; color: #666666; font-weight: 600;
    font-size: 19px; margin-top:25px'>¿Tienes alguna duda?<br>
                Conoce los términos y condiciones de la promoción</h3>
            <a href='https://terpelsicumple.com/terminos-y-condiciones/' style='    background-color: #FF1E0A;
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
                            <a href='https://www.instagram.com/terpel_ec/'
                                style='margin-right: 10px; text-decoration: none;'>
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

$users = $wpdb->get_results("SELECT p.nombre, p.correo, COUNT(c.codId) as codigos, p.account as account from $tabla_registros p LEFT JOIN $tabla_codigos c ON p.PersonId = c.PersonId WHERE DATEDIFF(now(), p.lastAddedCode) = 5 GROUP BY p.PersonId;");

foreach ($users as $usr) {
    $correo = esc_textarea($usr->correo);
    $nombre = esc_textarea($usr->nombre);
    $saldo = esc_textarea($usr->account);
    $codigos = esc_textarea($usr->codigos);
    sendMail($correo, $nombre, $saldo, $codigos);
}

$return['success'] = 1;
echo json_encode($return);
