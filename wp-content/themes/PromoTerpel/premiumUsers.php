<?php
/* Template Name: Premium Users
*/
    global $wpdb; //Acceder a la database de Wp
    $tabla_registros = $wpdb->prefix . 'participantes';
    $tabla_facturas = $wpdb->prefix . 'facturas';
    $tabla_codigos = $wpdb->prefix . 'codigos';

    $table = $wpdb->get_results("SELECT FacNumber, valor, ciudad, estacion, voucherType, wp_participantes.nombre, wp_participantes.apellido, wp_participantes.cedula, wp_participantes.correo FROM wp_facturas LEFT JOIN wp_participantes ON wp_facturas.PersonId = wp_participantes.PersonId WHERE wp_facturas.valor >= 400;");

get_header(); ?>
    <div class="headerRed">
        <a href="<?php echo get_site_url(); ?>">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/PromoTerpel/assets/images/terpelLogo.svg" alt="terpelLogo">
        </a>
    </div>
<div class="wrap">
    <div class="row">
    <?php
        echo '<table class="table" id="mainTableGb">';
        echo '<thead><tr><th>Numero de Factura</th><th>';
        echo 'Valor</th><th>';
        echo 'Ciudad</th><th>';
        echo 'Estacion</th><th>';
        echo 'Tarjeta</th><th>';
        echo 'Nombre</th><th>';
        echo 'Apellido</th><th>';
        echo 'Cedula</th><th>';
        echo 'Correo</th><th>';
        echo '<tbody id="list">';

        foreach ($table as $tb) {
            $facNumber = esc_textarea($tb->FacNumber);
            $valor = esc_textarea($tb->valor);
            $ciudad = esc_textarea($tb->ciudad);
            $estacion = esc_textarea($tb->estacion);
            $tarjeta = esc_textarea($tb->voucherType);
            $nombre = esc_textarea($tb->nombre);
            $apellido = esc_textarea($tb->apellido);
            $cedula = esc_textarea($tb->cedula);
            $correo = esc_textarea($tb->correo);

            echo "<tr><td>$facNumber</td>";
            echo "<td>$valor</td>";
            echo "<td>$ciudad</td>";
            echo "<td>$estacion</td>";
            echo "<td>$tarjeta</td>";
            echo "<td>$nombre</td>";
            echo "<td>$apellido</td>";
            echo "<td>$cedula</td>";
            echo "<td>$correo</td></tr>";
        }
        echo '</tbody></table></div>';
        ?>
    </div>
</div>
<?php wp_footer(); ?>
</body>

</html>