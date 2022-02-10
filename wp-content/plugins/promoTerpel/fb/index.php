<?php
$path = preg_replace('/wp-content.*$/', '', __DIR__);
require_once($path . "wp-load.php");

if (isset($_POST['user']) && isset($_POST['facCode'])) {
    global $wpdb;

    $tabla_codigos = $wpdb->prefix . 'codigos';
    $tabla_registros = $wpdb->prefix . 'participantes';

    $ci = sanitize_text_field($_POST['user']);
    $facNumber = sanitize_text_field($_POST['facCode']);



    $created_at = date('Y-m-d H:i:s');
    $user = $wpdb->get_row("SELECT * FROM $tabla_registros WHERE cedula = $ci;");

    $fb = esc_textarea($user->facebookSharedCount);
    $id = esc_textarea($user->PersonId);

    $facId =  $wpdb->get_var("SELECT FacturaId FROM $tabla_codigos WHERE $tabla_codigos.codNumber = '$facNumber'");

    $lastRegistredCode = $wpdb->get_var("SELECT codNumber FROM $tabla_codigos WHERE $tabla_codigos.PersonId = $id ORDER BY $tabla_codigos.created_at DESC LIMIT 1;");
    
    if (strpos($lastRegistredCode, 'F') !== false) {
        $return['success'] = 0;
        $return['error'] = 'No valid';
    } else {
        $codeNumber = "F$lastRegistredCode";

        $insertData  = $wpdb->insert(
            $tabla_codigos,
            array(
                'codNumber' => $codeNumber,
                'PersonId' => $id,
                'FacturaId' => $facId,
                'created_at' => $created_at,
                'socialPromo' => 1,
                'productPromo' => 0,
            )
        );
        $fbTotal = intval($fb, 10) + 1;
        $wpdb->update(
            $tabla_registros,
            array(
                'facebookSharedCount' => $fbTotal,
            ),
            array('PersonId' => $id,)
        );
        $return['success'] = 1;
        $return['code'] = $codeNumber;
    }
    echo json_encode($return);
}
