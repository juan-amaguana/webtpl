<?php
/* Template Name: Individual Codes
*/
if (isset($_GET['facId'])) {
    $ppc = $_GET['facId'];
    global $wpdb; //Acceder a la database de Wp

    $tabla_codigos = $wpdb->prefix . 'codigos';

    $user_codes = $wpdb->get_results("SELECT * FROM $tabla_codigos WHERE (FacturaId = $ppc) ORDER BY CodId DESC;");
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
  <h3>Codigos generados</h3>
  <?php
    echo '<table class="table">';
    echo '<thead><tr><th>Codigo</th>';
    echo '<th>Fecha</th>';
    echo '<th>Facebook</th>';
	echo '<th>Promocion</th></tr></thead>';
	 echo '<tbody id="Personlist">';
	 
						foreach ($user_codes as $tb) {
							$codNumber = esc_textarea($tb->codNumber);
							$fecha = esc_textarea($tb->created_at);
							$fb = esc_textarea($tb->socialPromo);
							$promo = esc_textarea($tb->productPromo);
							
							 echo "<tr><td>$codNumber</td>";
							 echo "<td>$fecha</td>";
							 echo "<td>$fb</td>";
							 echo "<td>$promo</td></tr>";
						}
						echo '</tbody></table></div>';
						?>

</div>
</div>
<?php wp_footer(); ?>
</body>
</html>