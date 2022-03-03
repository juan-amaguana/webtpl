<?php
    $path = preg_replace('/wp-content.*$/','', __DIR__);
    require_once($path."wp-load.php");

    function send_email($codes, $id, $saldo){
        global $wpdb;
        $wpdb->show_errors();

        $tabla_registros = $wpdb->prefix . 'participantes';
        $tabla_codigos = $wpdb->prefix . 'codigos';
        $user = $wpdb->get_row("SELECT * FROM $tabla_registros WHERE PersonId= $id;");

        $nombre = $user->nombre;
        $correo = $user->correo;
        
        $tableCount = $wpdb->get_var("SELECT COUNT(*) FROM $tabla_codigos WHERE PersonId = $id;");
        
        $to   = $correo;
        $title   = 'Factura agregada!';
        $headers = array('Content-Type: text/html; charset=UTF-8');
        $content_type = function() { return 'text/html'; };
        $formatedSaldo = number_format((float)$saldo, 2, '.', '');
        // $dateGb =  $range->raffle_date;
        $body = "<!DOCTYPE html>
<html>

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;1,900&display=swap');
    </style>
</head>

<body style='margin-top: 0px;'>
    <div style='width: 600px; margin: 0 auto'>
        <table style='background-color: black; padding-bottom: 75px;'>
            <tr>
                <td>
                    <img src='http://terpelsicumple.com/wp-content/themes/PromoTerpel/assets/mails/Mainhead1.png'
                        style='width: 100%;'>
                </td>
            </tr>
            <tr>
                <td>
                    <p
                        style='font-family: work sans, Helvetica, sans-serif; color: #fff; width: 85%; display: block; margin: 0 auto; padding: 10px 0; font-size: 19px; text-align: justify;'>
                        Hola <span style='color: #e3af51;'>$nombre</span>, gracias por registrar tu factura. Estás cada
                        vez más cerca de vivir una experiencia de lujo junto a la Tri en Qatar 2022.
                        <br><br>
                        Estar participando con:
                    </p>
                </td>
            </tr>
        </table>
        <table style=' width: 85%; display: block; margin: 0 auto; margin-top: -65px;' >
            <tbody>
                <tr>
                    <td
                        style='background-image: url(http://terpelsicumple.com/wp-content/themes/PromoTerpel/assets/mails/rectanguloGold.png); width: 45%; background-size: contain; text-align: center;    padding: 25px
                         80px; '>
                        <h2 style='font-family: work sans, Helvetica, sans-serif;font-weight: 900; font-size: 42px; margin: 0;'>$tableCount</h2>
                        <h5 style='font-family: work sans, Helvetica, sans-serif;margin:0;font-weight: 300;'>Oportunidades<br> para ganar</h5>
                    </td>
                    <td style='width: 10;'>

                    </td>
                    <td
                        style='background-image: url(http://terpelsicumple.com/wp-content/themes/PromoTerpel/assets/mails/rectanguloGold.png); width: 45%; background-size: contain;text-align: center;'>
                        <h2 style='font-family: work sans, Helvetica, sans-serif;font-weight: 900; font-size: 42px; margin: 0;'>$formatedSaldo</h2>
                        <h5 style='font-family: work sans, Helvetica, sans-serif;margin: 0;font-weight: 300;'>Saldo acumulado válido<br> hasta 2022-03-29.</h5>
                    </td>
                </tr>
            </tbody>
        </table>
        <table style='width: 600px; margin: 0 auto; text-align: center;'>
            <tr>
                <td>
                    <p style='width: 85%; display: block; margin: 0 auto; text-align: center; font-family: work sans, Helvetica, sans-serif; margin-top: 40px;'>*Participan todos los combustibles y las facturas son acumulables hasta el sorteo más cercano a la fecha de ingreso.</p>
                    <a href='https://terpelsicumple.com/' style='
                    margin: 0 auto;
                    display: block;
                    width: 225px;
                    text-align: center;
                    margin-top: 40px;'>
                        <img src='http://terpelsicumple.com/wp-content/themes/PromoTerpel/assets/mails/ingresarFacturas.png'
                            style='width: 92.5%; display: block; margin: 0 auto; margin-top: 5px; margin-bottom: 20px;'>
                    </a>
                </td>
            </tr>
            <td>
                <p style='width: 85%; display: block; margin: 0 auto; text-align: center; margin-top: 20px; font-family: work sans, Helvetica, sans-serif;'>Conoce las estaciones de servicio participantes</p>
                <a href='https://terpelsicumple.com/estaciones-de-servicio/' style='
                margin: 0 auto;
                display: block;
                width: 225px;
                text-align: center;
                margin-top: 40px;'>
                    <img src='http://terpelsicumple.com/wp-content/themes/PromoTerpel/assets/mails/estaciones.png'
                        style='width: 92.5%; display: block; margin: 0 auto; margin-top: 5px; margin-bottom: 20px;'>
                </a>
            </td>
        </table>
        <table style='background-color: black; width: 100%; border-bottom: #e3af51 4px; padding: 20px 0; margin-top: 25px;'>
            <tr style='width: 85%; display: block; margin: 0 auto;'>
                <td>
                    <img src='http://terpelsicumple.com/wp-content/themes/PromoTerpel/assets/mails/calendar.png' alt='calendar' style='width: 100px;' />
                    <td style='color: #fff; padding-left: 15px;'>
                        <p style='font-family: work sans, Helvetica, sans-serif;
                        font-family: work sans, Helvetica, sans-serif; font-size: 15px;'><span style='color: #e3af51;'>Próximo sorteo</span> 2022-03-29.</p>
                        <p style='font-family: work sans, Helvetica, sans-serif;
                        font-family: work sans, Helvetica, sans-serif;  font-size: 15px;'><span style='color: #fff;'>Promoción vigente</span> hasta el 31 de agosto de 2022.</p>
                    </td>
                </td>
            </tr>
            <tr style='width: 85%;'>
                <td>
                    <a href='https://terpelsicumple.com/terminos-y-condiciones/'>
                    <img src='http://terpelsicumple.com/wp-content/themes/PromoTerpel/assets/mails/tyc.png' alt='' style='width: 185px; display: block; margin: 0 auto; margin-top: 25px;'>
                    </a>
                </td>
            </tr>
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