<?php
/* Template Name: User Page
*/
if (isset($_GET['id']) &&  $_GET['id'] !== '') {
    $ppc = $_GET['id'];
    global $wpdb; //Acceder a la database de Wp
    $tabla_registros = $wpdb->prefix . 'participantes';
    $tabla_codigos = $wpdb->prefix . 'codigos';
    $tabla_rangos = $wpdb->prefix . 'ranges';


    /** RANGES */
    $toDay = date('Y-m-d');
    $range = $wpdb->get_row("SELECT * FROM $tabla_rangos WHERE '$toDay' BETWEEN start AND end;");
    $startDate = $range->start. " 00:00:00";
    $endDate = $range->end. " 23:59:59";
    // print($startDate);
    // print($endDate);

    $user = $wpdb->get_row("SELECT * FROM $tabla_registros WHERE cedula= $ppc;");
    $nombre = esc_textarea($user->nombre);
    $id = esc_textarea($user->PersonId);
    
    if (is_null($id) or empty($id)){
        $url = get_site_url();
        wp_redirect($url);
        exit;
    }
    $saldo = esc_textarea($user->account);
    $saldoArr = explode(".", $saldo);
    // $user_codes = $wpdb->get_results("SELECT * FROM $tabla_codigos WHERE (PersonId = $id) ORDER BY CodId DESC;");
    $user_codes = $wpdb->get_results("SELECT * FROM $tabla_codigos WHERE (PersonId = $id) AND created_at BETWEEN '$startDate' AND '$endDate'  ORDER BY CodId DESC;");

    $tableCount =  count($user_codes); // $wpdb->get_var("SELECT COUNT(*) FROM $tabla_codigos WHERE PersonId = $id;");
} else {
    //redirect if not user param
    $url = get_site_url();
    wp_redirect($url);
    exit;
}
get_header(); ?>
<section id="userPortal">
    <div class="popupCont" id="errorCode">
        <div class="popup grey">
            <h4>¡Factura inválida!</h4>
            <p>Esa factura ya ha sido ingresada</p>
            <button onclick="closebadCode()" class="btn understand">Entendido</button>
        </div>
    </div>
    <div class="popupCont" id="codeAdded">
        <div class="popup grey">
            <h4>¡Factura Agregada!</h4>
            <p>Tu factura fue agregada exitosamente.<br> Comparte en Facebook y gana un<br> cupón adicional.</p>
            <div class="btn face" id="fbshare" data-href="https://terpelecuadorgasolinagratis.com/" data-layout="button" data-size="large"><img src="<?php echo get_site_url(); ?>/wp-content/themes/PromoTerpel/assets/images/face.svg" alt="fb" /><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fterpelsicumple.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir en Facebook</a></div>
            <button onclick="closeCodeAdded()" class="btn understand">Entendido</button>
        </div>
    </div>
    <div class="headerRed">
        <a href="<?php echo get_site_url(); ?>">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/PromoTerpel/assets/images/terpelLogo.svg" alt="terpelLogo">
        </a>
    </div>
    <div class="wrapper">
        <h3 class="userTitle">Hola <?php echo $nombre; ?>,</h3>
        <h3 class="userSubtitle">¿Estás listo para ser uno de nuestros ganadores?</h3>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6 facCont">
                <div class="facFlex">
                    <h6>Ingresa tus facturas para<br> participar</h6>
                    <?php echo do_shortcode('[trade-code-register]'); ?>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="backstar">
                            <h1 id="codeCount"><?php echo $tableCount ?></h1>
                            <h6>Oportunidades<br>
                                para ganar</h6><br>
                            Para el sorteo del <?= $range->end ?>
                        </div>
                        <div class="saldo">
                            <h6>Saldo acumulado
                                pendiente por redimir</h6>
                            <h1>$<span id="saldoUnidad" class="big"><?php echo $saldoArr[0]; ?></span><span>,</span><span id="saldoCentena"><?php echo $saldoArr[1]; ?></span></h1>
                            <p><strong>Por cada $10 de consumo,</strong> recibes un cupón y aumentas tus posibilidades.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 winnerTickets">
                        <div class="ticketsFlex">
                            <h3>Tus cupones ganados</h3>
                            <ul id="yourCodes">
                                <?php
                                foreach ($user_codes as $tb) {
                                    $codNumber = esc_textarea($tb->codNumber);
                                    echo "<li class='singleCode'>$codNumber</li>";
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
               <div class="winTableButt">
                <div class="redBox">
                <h5 class="text-center white">¡Tú puedes ser uno de nuestros<br>
                    más de 200 afortunados!</h5>
                <h2 class="text-center white"><span>1</span> GANADOR DE $50.000</h2>
                <div class="row whiteTb">
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-12">
                                <h1>3</h1>
                            </div>
                            <div class="col-12">
                                <h4>GANADORES DE</h4>
                                <h3>$10.000</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-12">
                                <h1>14</h1>
                            </div>
                            <div class="col-12">
                                <h4>GANADORES DE</h4>
                                <h3>$1.000</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 noBorder">
                        <div class="row">
                            <div class="col-12">
                                <h1>200</h1>
                            </div>
                            <div class="col-12">
                                <h4>GANADORES DE</h4>
                                <h6>$30 DE CONSUMO<br>DE SUPER EVOL-T</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
   
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
</body>

</html>