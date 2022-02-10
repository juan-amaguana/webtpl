<?php
$path = preg_replace('/wp-content.*$/','', __DIR__);
require_once($path."wp-load.php");

global $wpdb;
$wpdb->show_errors();
$tabla_registros = $wpdb->prefix . 'participantes';
$tabla_codigos = $wpdb->prefix . 'codigos';

function sendMail($correo){
    $to   = $correo;
    $title   = 'INVITACIÓN AL GRAN SORTEO FINAL DE LA PROMOCIÓN TANQUEA Y GANA CON TERPEL';
    $headers = array('Content-Type: text/html; charset=UTF-8');
    $content_type = function() { return 'text/html'; };
    $body = "<!DOCTYPE html>
<html>

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;1,900&display=swap');
    </style>
</head>

<body style='margin: 0px;'>
    <div style='width: 600px; margin: 0 auto; background-image: url(https://terpelsicumple.com/wp-content/uploads/2022/01/fondo-scaled.jpg); background-size: cover;'>
        <img src='https://terpelsicumple.com/wp-content/uploads/2022/01/El_gran_dia_llego_.png' style='width: 75%; display: block; margin: 0px auto; padding: 30px 0;' />
        <img src='https://terpelsicumple.com/wp-content/uploads/2022/01/montos.png' style='width: 90%; display: block; margin: 0 auto;margin-top: 15px; margin-bottom: 35px;' />
        <table>
            <tr>
                <td>
                    <img src='https://terpelsicumple.com/wp-content/uploads/2022/01/100_mil.png' style='width: 80%; display: block; margin: 30px auto;' />
                </td>
                <td>
                    <a href='https://www.facebook.com/terpelEC'>
                    <img src='https://terpelsicumple.com/wp-content/uploads/2022/01/Objeto_inteligente_vectorial.png' style='width: 80%;display: block; margin: 0 auto;' />
                </a>
                </td>
            </tr>
        </table>
        <a href='https://www.facebook.com/terpelEC'>
        <img src='https://terpelsicumple.com/wp-content/uploads/2022/01/tabla2.png'  style='width: 90%; display: block; margin: 0 auto; margin-top: 15px;' />
        </a>
        <a href='https://www.facebook.com/terpelEC'>
            <img src='https://terpelsicumple.com/wp-content/uploads/2022/01/conectate_aqui.png' style='width:50%; display:block; margin: 0 auto; margin-top: 25px; margin-bottom: 275px;' />
        </a>
        </table>
        <div
            style='width: 600px; margin: 0 auto; background-color: #E4E4E5; padding: 20px 0px; margin-top: 40px; padding-left: 0px;'>
            <table style='width: 600px; margin: 0 auto; padding-left: 0px;'>
                <tr style='padding-left: 0px;'>
                    <td colspan='1' style='text-align: left; padding-left: 0px;'>
                        <img src='https://terpelsicumple.com/wp-content/uploads/2022/01/terpelLogo.png'
                            style='width: 120px; margin-left: 0px;'>
                    </td>
                    <td colspan='1' style='text-align: right; padding-right: 20px; vertical-align: middle;'>
                        <a href='https://www.facebook.com/terpelEC' style='margin-right: 10px; text-decoration: none;'>
                            <img src='https://terpelsicumple.com/wp-content/uploads/2022/01/faceTerpel.png'
                                style='width: 100px; height: 35px;'>
                        </a>
                        <a href='https://www.youtube.com/channel/UCeLmcRwZXtNifTen5oI7z9A/featured' style='text-decoration: none;'>
                            <img src='https://terpelsicumple.com/wp-content/uploads/2022/01/youtubeTerpel.png'
                                style='width: 115px; height: 25px; padding-bottom: 5px;'>
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

$users = $wpdb->get_results("SELECT p.correo from $tabla_registros p LIMIT 30000");

foreach ($users as $usr) {
    $correo = esc_textarea($usr->correo);

    sendMail($correo);
}

$return['success'] = 1;
echo json_encode($return);
