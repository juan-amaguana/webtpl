<?php

    $path = preg_replace('/wp-content.*$/','', __DIR__);
    require_once($path."wp-load.php");

        $cedula = sanitize_text_field($_POST['id']);
        // SAVE TO DB
        global $wpdb;
        $tabla_registros = $wpdb->prefix . 'participantes';
        $registro = $wpdb->get_row("SELECT * FROM $tabla_registros WHERE cedula= $cedula;");
        if ($registro != null){
            $return['success'] = 1;
            $return['id'] = $cedula;
        } else {
            $return['success'] = 0;
            $return['id'] = $cedula;
        }

        echo json_encode($return);


?>