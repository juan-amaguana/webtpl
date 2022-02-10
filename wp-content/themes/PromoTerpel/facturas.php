<?php
/* Template Name: Facturas Table
*/
if (isset($_GET['user'])) {
    $ppc = $_GET['user'];
    global $wpdb; //Acceder a la database de Wp
    $tabla_registros = $wpdb->prefix . 'participantes';
    $tabla_facturas = $wpdb->prefix . 'facturas';
    $tabla_codigos = $wpdb->prefix . 'codigos';

    $user = $wpdb->get_row("SELECT * FROM $tabla_registros WHERE cedula= $ppc;");
    $pid = esc_textarea($user->PersonId);
    $nombre = esc_textarea($user->nombre);
    $apellido = esc_textarea($user->apellido);
    $tel = esc_textarea($user->telefono);
    $mail = esc_textarea($user->correo);
    $user_fac = $wpdb->get_results("SELECT * FROM $tabla_facturas WHERE (PersonId = $pid) ORDER BY FacId DESC;");   

	$tableCount = $wpdb->get_var("SELECT COUNT(*) FROM $tabla_codigos WHERE PersonId = $pid;");
}
else {
    //redirect if not user param
    $url = "https://terpelsicumple.com"; 
    wp_redirect( $url );
    exit;
  }

get_header(); ?>
    <div class="headerRed">
        <a href="<?php echo get_site_url(); ?>">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/PromoTerpel/assets/images/terpelLogo.svg" alt="terpelLogo">
        </a>
    </div>
<div class="wrap">
<div class="row">
<div class="col-12">
    <br>
<h3>Facturas Registradas por: <?php echo $nombre; ?> <?php echo $apellido; ?></h3>
<h3>Cedula: <?php echo $ppc; ?> </h3>
<h3>Telefono: <?php echo $tel; ?> </h3>
<h3>Email: <?php echo $mail; ?> </h3>
<h3>Cantidad de Codigos: <?php echo $tableCount; ?> </h3>
<?php
    echo '<table class="table">';
    echo '<thead><tr><th>Numero de Factura</th><th>';
    echo 'valor</th><th>';
    echo 'ciudad</th><th>';
    echo 'estacion</th><th>';
    echo 'codigos</th><th>';
    echo 'Respaldo Factura</th><th>';
    echo 'Voucher</th><th>';
    echo 'VoucherUrl</th></tr></thead>';
    echo '<tbody id="Personlist">';
    foreach ($user_fac as $tb) {
        $codes = esc_textarea($tb->FacNumber);
        $valor = esc_textarea($tb->valor);
        $ciudad = esc_textarea($tb->ciudad);
        $estacion = esc_textarea($tb->estacion);
        $pdfLocation = urldecode($tb->PdfLocation);
        $facId = esc_textarea($tb->FacId);
        $voucherType = esc_textarea($tb->voucherType);
        $voucherUrl = urldecode($tb->voucherLocation);

        echo "<tr><td>$codes</td>";
        echo "<td>$valor</td>";
        echo "<td>$ciudad</td>";
        echo "<td>$estacion</td>";
        echo "<td><a href='https://terpelsicumple.com/individual-codes/?facId=$facId'>codigos</a></td>";
        echo "<td><a href='$pdfLocation'>factura</a></td>";
        echo "<td>$voucherType</td>";
        echo "<td><a href='$voucherUrl'>$voucherUrl</a></td></tr>";
    }  echo '</tbody></table></div>';
    ?>

</div>
</div>
<?php wp_footer(); ?>
</body>
</html>