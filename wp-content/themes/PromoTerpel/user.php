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
                            <h1 id="codeCount" style="color: #ebbc4c!important;"><?php echo $tableCount ?></h1>
                            <h6>Oportunidades<br>
                                para ganar</h6><br>
                            Para el sorteo del <?= $range->raffle_date ?>
                        </div>
                        <div class="saldo">
                            <h6 class="black">Saldo acumulado
                                pendiente por redimir</h6>
                            <h1 style="color: red;">$<span id="saldoUnidad" class="big"><?php echo $saldoArr[0]; ?></span><span>,</span><span id="saldoCentena"><?php echo $saldoArr[1]; ?></span></h1>
                            <!--<p><strong>Por cada $10 de consumo,</strong> recibes un cupón y aumentas tus posibilidades.</p>-->
                            <p style="text-align: center;">Válido hasta el <?= $range->end ?></p>
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
                <h5 class="text-center white"> <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/12ganadores.png" alt="lubri" /> </h5>
                <h2 class="text-center white"><span></span> </h2>
                <div class="row whiteTb">
                    <div class="col-sm-4">
                        <div class="row" style="text-align: center;">
                            <div class="col-12">
                                <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/avion-icon.png" alt="lubri" />
                            </div>
                            <div class="col-12">
                                <p style="color: #fff; font-size: 12px;">Viaje & seguro para 2 personas </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row"  style="text-align: center;">
                            <div class="col-12">
                            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/alojamiento.png" alt="lubri" />
                            </div>
                            <div class="col-12">
                            <p style="color: #fff; font-size: 12px;">Alojamiento & desayunos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 noBorder">
                        <div class="row"  style="text-align: center;">
                            <div class="col-12">
                            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/estadio.png" alt="lubri" />
                            </div>
                            <div class="col-12">
                            <p style="color: #fff; font-size: 12px;">Experiencia completa de partidos </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row whiteTb">
                    <div class="col-sm-12" style="text-align: center;">
                        <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/experience.png" alt="lubri" />
                        <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/qatar2022.png" alt="lubri" />
                    </div>
                </div>

            </div>
   
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2-->
    <div class="modal fade" id="noticeDate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body" style="text-align: center;">
                    <div class="row">
                        <div class="col-md-12">
                            <br>
                            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/calendar.svg"/>
                            <br><br>
                            <p style="font-size: 16px;">
                            Recuerda que los cupones ganados con esta factura ingresada participan solo en el sorteo del <?= $range->end ?>
                            </p>
                        </div>
                        <div class="col-md-12">
                            <button class="redButton buttAlignCenter" onclick="acceptDate()">
                                Entendido
                            </button>
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