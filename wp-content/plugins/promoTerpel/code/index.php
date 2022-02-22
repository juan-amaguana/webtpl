<?php
    $path = preg_replace('/wp-content.*$/','', __DIR__);
    require_once($path."wp-load.php");

    function send_email($codes, $id, $saldo){
        global $wpdb;
        $wpdb->show_errors();

        $tabla_registros = $wpdb->prefix . 'participantes';
        $tabla_codigos = $wpdb->prefix . 'codigos';
        $user = $wpdb->get_row("SELECT * FROM $tabla_registros WHERE PersonId= $id;");
        // $nombre = $wpdb->get_var( "SELECT nombre FROM $tabla_registros WHERE PersonId = $id" );
        // $correo = $wpdb->get_var( "SELECT correo FROM $tabla_registros WHERE PersonId = $id" );
        $nombre = $user->nombre;
        $correo = $user->correo;
        
        $tableCount = $wpdb->get_var("SELECT COUNT(*) FROM $tabla_codigos WHERE PersonId = $id;");
        
        $to   = $correo;
        $title   = 'Factura agregada!';
        $headers = array('Content-Type: text/html; charset=UTF-8');
        $content_type = function() { return 'text/html'; };
        $test = "";
        $formatedSaldo = number_format((float)$saldo, 2, '.', '');
                foreach ($codes as $tb) {
             $test .= "<tr style='vertical-align: middle; font-family:work sans, Helvetica, sans-serif; color: #666666;'>
                <td style='vertical-align: middle;'>
                    <img src='http://terpelsicumple.com/wp-content/uploads/2021/10/ticket.png' alt='code' />
                </td>

                <td style='padding: 0px; style='vertical-align: middle;'>
                    <p style='display: inline-block; vertical-align: super;'>
                        $tb</p>
                </td>
            </tr>";
        }
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
            <img src='http://terpelsicumple.com/wp-content/uploads/2021/10/facturaBannerMail.png' style='width: 100%;'>
            <p
                style='font-family:work sans, Helvetica, sans-serif; padding: 20px 35px; text-align: justify; color: #666666; font-weight: 300; margin-bottom: 20px;'>
                <span style='font-weight: 900;'> Hola $nombre, </span>el registro de tus facturas se realizó de forma
                exitosa.
                A continuación encuentra el detalle de tus cupones generados:
            </p>
        </table>
        <table style='list-style: none; width: 60%; display: block; margin: 0 auto; padding: 0;'>
            $test
        </table>
        <table style='width: 62%; display: block; margin: 0 auto;'>
            <tr>
                <td style='border-radius: 25px ;text-align: center; width: 48%; background-image: url(https://terpelsicumple.com/wp-content/themes/PromoTerpel/assets/images/starsBack_cutted.png);
                    '>
                    <h1 style='color: #fff; font-family:work sans, Helvetica, sans-serif; font-size: 81px;
                        margin: 0;'>$tableCount</h1>
                    <p style='color: #fff; font-family:work sans, Helvetica, sans-serif; margin: 0;'>
                        Oportunidades<br>para ganar</p>
                </td>
                <td style='text-align: center; width: 48%'>
                    <p style='font-family:work sans, Helvetica, sans-serif; color: #FF1E0A; font-weight: 600;'>Saldo
                        acumulado<br> pendiente por redimir</p>
                    <h1
                        style='font-family:work sans, Helvetica, sans-serif;color:#666666; font-size: 52px; font-weight: 600; margin: 10px;'>
                        $ $formatedSaldo</h1>
                    <p style='font-family:work sans, Helvetica, sans-serif; color:#666666; font-size: 12px; '>Por
                        cada $ 10 de consumo,<br> recibes un cupón y aumentas<br> tus posibilidades.</p>
                </td>
            </tr>
        </table>
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
            <h3 style='font-family:work sans, Helvetica, sans-serif; text-align: center; color: #FF1E0A; font-weight: 600;
        font-size: 19px; margin-top:25px'>Contacto oficial a ganadores: </h3>
        <p style='font-family:work sans, Helvetica, sans-serif; color: #666666; font-weight: 600; text-align: center;'>
            Terpel Ecuador se contacta únicamente por medios oficiales y la entrega de premios se realiza en las
            estaciones de servicio participantes. Recordamos a nuestra comunidad no dar datos personales y verificar los
            siguientes pasos para asegurarse que el contacto proviene de la marca.
            <br>
            <br>
            1. Confirmar en tu correo electrónico la recepción<br> de los códigos participantes.<br>
            2. Recibir una llamada por<br> nuestros número oficiales +593988830610 +593959690374<br>
            3. Verificar que tu nombre se encuentre dentro<br> de la lista de ganadores en<br>
            <a href='https://terpelsicumple.com/ganadores/'>https://terpelsicumple.com/ganadores/</a>
        </p>
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
    
    function createAndSendCodes($len, $fac_id, $id, $numFactura, $saldo, $triple){
        global $wpdb;
        $wpdb->show_errors();
        $tabla_registros = $wpdb->prefix . 'participantes';
        $tabla_codigos = $wpdb->prefix . 'codigos';
        $created_at = date('Y-m-d H:i:s');
        

        $codes = array();
        
            for ($x = 0; $x < $len; $x++) {
            $codNumber = strval($numFactura) . strval($fac_id) . strval($id) . strval($x);
            $wpdb->insert(
                $tabla_codigos,
                array(
                    'codNumber' => $codNumber,
                    'PersonId' => $id,
                    'FacturaId' => $fac_id,
                    'created_at' => $created_at, 
                    'productPromo' => $triple,
                    'socialPromo' => false,
            ));
            array_push($codes, $codNumber);   
            }
            
        if (count($codes) > 0){
        send_email($codes, $id, $saldo);
        }
        $wpdb->update(
            $tabla_registros,
            array( 
                'lastAddedCode' => $created_at,
                'account' => $saldo,
            ),
            array('PersonId' => $id,)
        );
        $return['success'] = 1;
        $return['codes'] = $codes;
        $return['saldo'] = $saldo;
        echo json_encode($return);

    }

    function saveProduct($evolt, $lubricante, $altoque, $fac_id, $person_id)
    {
        global $wpdb;
        $wpdb->show_errors();

        $tabla_productos = $wpdb->prefix . 'productos';
        $created_at = date('Y-m-d H:i:s');

        $wpdb->insert(
            $tabla_productos,
            array(
                'lubricante' => $lubricante,
                'evolt' => $evolt,
                'altoque' => $altoque,
                'created_at' => $created_at,
                'PersonId' => $person_id,
                'FacturaId' => $fac_id,
            ));
    }

    function saveFactura($url, $voucherURL, $voucherType, $triple, $evolt, $lubricante, $altoque, $double)
    {
        $finalURL = urlencode($url);
        $numFactura = sanitize_text_field($_POST['numFactura']);
        $montoFactura = sanitize_text_field($_POST['montoFactura']);
        $ciudad = sanitize_text_field($_POST['ciudad']);
        $fuel = sanitize_text_field($_POST['fuel']);
        $ci = sanitize_text_field($_POST['id']);
        $created_at = date('Y-m-d H:i:s');

        global $wpdb;
        $wpdb->show_errors();

        $tabla_registros = $wpdb->prefix . 'participantes';
        $tabla_facturas = $wpdb->prefix . 'facturas';

        //$id = $wpdb->get_var( "SELECT PersonId FROM $tabla_registros WHERE cedula = $ci" );
        //$account = $wpdb->get_var( "SELECT account FROM $tabla_registros WHERE cedula = $ci" );
        //$client = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM $tabla_registros WHERE cedula = $ci" ) );
        $client = $wpdb->get_row("SELECT * FROM $tabla_registros WHERE cedula= $ci;");

        $id = $client->PersonId;
        $account = $client->account;

        $insertData = $wpdb->insert(
            $tabla_facturas,
            array(
                'FacNumber' => $numFactura,
                'PersonId' => $id,
                'created_at' => $created_at,
                'PdfLocation' => $finalURL,
                'valor' => $montoFactura,
                'ciudad' => $ciudad,
                'estacion' => $fuel,
                'voucherType' => $voucherType,
                'voucherLocation' => $voucherURL
            ));

        $fac_id = $wpdb->insert_id;
        $totalAccount = floatval($montoFactura) + $account;

        if ($evolt == true || $lubricante == true || $altoque == true){
            saveProduct($evolt, $lubricante, $altoque, $fac_id, $id);
        }

        if ($insertData == true){
            $num_Codes = floor($totalAccount / 10);
            if ($triple == true){
                $num_Codes = $num_Codes * 3;
            }
            if ($double == true && $triple == false){
                $num_Codes = $num_Codes * 2;
            }
            $saldo = fmod(floatval($totalAccount), 10);
            
            createAndSendCodes($num_Codes, $fac_id, $id, $numFactura, $saldo, $triple);
        }
    };


    /**
     * LOWER QUALITY IMAGES 
     */
    add_filter( 'wp_handle_upload', function( $data )
    {
        if( ! isset( $data['file'] ) || ! isset( $data['type'] ) )
            return $data;

        // Target jpeg images       
        if( in_array( $data['type'], [ 'image/jpg', 'image/jpeg' ] ) )
        {
            // Check for a valid image editor
            $editor = wp_get_image_editor( $data['file'] );    
            if( ! is_wp_error( $editor ) )
            {
                // Set the new image quality
                $result = $editor->set_quality( 70 );

                // Re-save the original image file
                if( ! is_wp_error( $result ) )
                    $editor->save( $data['file'] );
            }
        }
        return $data;
    } );

    if (isset($_POST['numFactura']) && isset($_POST['montoFactura']) && isset($_POST['ciudad']) 
    && isset($_POST['fuel'])  && isset($_POST['id'])
    ){        
        if (!function_exists('wp_handle_upload')) {
            require_once(ABSPATH . 'wp-admin/includes/file.php');
        }
        if (is_null(sanitize_text_field($_POST['id']))){
            $return['success'] = 0;
            echo json_encode($return);
        }
        $voucher = isset($_POST['voucherType']) ? true : false;
        $product = isset($_POST['evolt']) || isset($_POST['lubricante']) || isset($_POST['altoque']) ? true : false;

        $uploadedfile = $_FILES['pdf'];
        $fileURL = wp_handle_upload($uploadedfile, array('test_form' => false));
        $URL = $fileURL['url'];
        
        $voucherURL = NULL;
        $voucherType = NULL;
        $evolt = false;
        $lubricante = false;
        $altoque = false;
        $triple = $voucher;
        

        if ($voucher == true){
            $uploadVoucher = $_FILES['voucher'];
            $voucherFileURL = wp_handle_upload($uploadVoucher, array('test_form' => false));
            $voucherURL = urlencode($voucherFileURL['url']);
            $voucherType = sanitize_text_field($_POST['voucherType']);
        } 
        if ($product == true){
            if (isset($_POST['evolt'])){
                $evolt = true;
            }
            if (isset($_POST['lubricante'])){
                $lubricante = true;
            }
            if (isset($_POST['altoque'])){
                $altoque = true;
            }
        }

        $double = $evolt || $lubricante || $altoque ? true : false;

        saveFactura($URL, $voucherURL, $voucherType, $triple, $evolt, $lubricante, $altoque, $double);
    }


?>