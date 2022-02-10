<?php
$path = preg_replace('/wp-content.*$/', '', __DIR__);
require_once($path . "wp-load.php");

global $wpdb; //Acceder a la database de Wp

$tabla_registros = $wpdb->prefix . 'participantes';
$tabla_codigos = $wpdb->prefix . 'codigos';
$statement = $wpdb->get_results("SELECT * FROM $tabla_codigos LEFT JOIN $tabla_registros ON $tabla_codigos.PersonId = $tabla_registros.PersonId ORDER BY $tabla_codigos.created_at LIMIT 500000");

$wp_filename = "$path"."exports/codigos_" . date("d-m-y") . ".csv";

ob_end_clean();

$wp_file = fopen($wp_filename, "w");

foreach ($statement as $statementFet) {
    $wp_array = array(
        "codNumber" => $statementFet->codNumber,
        "nombre" => $statementFet->nombre,
        "apellido" => $statementFet->apellido,
        "cedula" => $statementFet->cedula,
        "telefono" => $statementFet->telefono,
        "correo" => $statementFet->correo,
    );
    fputcsv($wp_file, $wp_array);
}


fclose($wp_file);
$return['success'] = 1;
$return['codes'] = $codes;
$return['url'] = $wp_filename;
echo json_encode($return);
exit;