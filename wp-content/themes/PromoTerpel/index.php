<?php
/* Template Name: Main Page
*/

if (!defined('ABSPATH')) exit;
get_header(); 
$site_url = get_site_url();
?>
<section id="home" class="main-section">
    <!-- <div class="proxim">
    <img class="logoTer" src="<?php bloginfo('template_directory'); ?>/assets/images/teu.svg" />
    <h1>
        Próximamente,<br> tenemos una gran<br> sopresa para ti.
    </h1>
    <p class="imgContP">
        Mantente atento a nuestras redes sociales: <span><a href="https://www.instagram.com/terpel_ec/"><img src="<?php bloginfo('template_directory'); ?>/assets/images/instWhite.png" /></a><a href="https://www.youtube.com/channel/UCeLmcRwZXtNifTen5oI7z9A"> 
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/ytFinal.png"/></a><a href="https://www.facebook.com/terpelEC"><img src="<?php bloginfo('template_directory'); ?>/assets/images/faceWhite.png"/></a><a href="https://www.linkedin.com/company/terpel-ecuador"><img src="<?php bloginfo('template_directory'); ?>/assets/images/linkedinWhite.png"/></a>  </span>
    </p>
    </div> -->
    
    <div class="header">
        <a href="<?php echo $site_url; ?>">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/logoTerpel.svg" alt="logoTerpel" />
        </a>
        <div class="headEndCont">
            <a href="<?php echo $site_url; ?>/ganadores">
                <h6>Ganadores</h6>
            </a>
           <button class="redButton" onClick="checkFactura()">
                Ingresar factura 
            </button>
        </div>
    </div>
    
    <div class="banner">
        <div class="title">
            <div style="padding-left: 5%;">
            <h2>
                Vive una experencia de<br>lujo, con todo incluido.
            </h2>
            <p>Ingresa tu cédula y participa</p>
            <?php echo do_shortcode('[trade-form-login]'); ?>
            </div>
        </div>
        <div class="clouds">
            <!-- <img src="<?php bloginfo('template_directory'); ?>/assets/images/qatar-back.jpg" /> -->
        </div>

    </div>
    <div class="wrapper">
        <div class="body">
            <h3 class="text-center black bold">¿Cómo participar?</br> Mecánica del concurso.
                </h3>
            <div class="row redCircles">
                <div class="col-sm-4">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/gasolina.svg" alt="gas" />
                    <h6>Por cada $10
                        de<br> consumo
                        en Terpel</h6>
                </div>
                <div class="col-sm-4 middleLines">
                    <img src="<?php  bloginfo('template_directory'); ?>/assets/images/compu.svg" alt="pc" />
                    <h6>Regístrate e ingresa tu<br> factura en el siguiente<br> botón</h6>
                </div>
                <div class="col-sm-4">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/trofeo.svg" alt="win" />
                    <h6>Y obtén una<br> oportunidad para<br> ganar</h6>
                </div>
            </div>
            <br>
            <p  style="text-align: center; margin-top: 2%;" >*Tus facturas son válidas hasta el sorteo más cercano a la fecha de ingreso.</p>
            <a href="#" class="redButton buttAlignCenter">
                Participar
            </a>
            <br><br>
            <h3 class="text-center black bold">
                ¿Quieres ganar cupones adicionales? <br>
                Gana doble o tripe cupón cumpliendo los siguientes requisitos. </h3>
            <div class="row winProducts">
                <div class="col-sm-7">
                    <h4>DOBLE OPORTUNIDAD<br>
                        <span>adquiriendo</span>
                    </h4>
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/circle-evolt.png" alt="evolt" />
                            <p class="black">Tanquea con gasolina Súper Evol-T</p>
                        </div>
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/circle-mobil.png" alt="lubri" />
                            <p class="black">Compra lubricantes Mobil</p>
                        </div>
                        <div class="col-sm-4">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/circle-altoque.png" alt="lubri" />
                            <p class="black">Consumos en tiendas Altoque</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <h4>TRIPLE OPORTUNIDAD<br>
                        <span>Pagando con:</span>
                    </h4>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/circle-diners.png" alt="diners" />
                    <p class="black">Realiza tu compra con las tarjetas de crédito participantes</p>
                </div>
            </div>
            <br><br>
            <button class="redButton buttAlignCenter" onClick="checkFactura()">
                Ingresar factura
            </button>

            <div class="row moreInformation">
                <div class="col-sm-12" style="text-align: center; margin-top: 5%;">
                    <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/more-titlte-1.png" alt="lubri" />
                    <br>
                    <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/qatar2022.png" alt="lubri" />
                    <p style="color: #fff;">Gana 1 de los 12 viajes para 2 persona</p>
                </div>

                <div class="col-sm-12" style="text-align: center; margin-top: 2%;">
                    <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/features.png"/>
                </div>
                <div class="col-sm-12" style="text-align: center; margin-top: 5%;margin-bottom: 5%;">
                    <button class="redButton buttAlignCenter" data-toggle="modal" data-target="#exampleModal" style="display: none;">
                    Más información
                    </button>
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content moreinformation-modal">
                        <div class="modal-body" style="text-align: center;">
                            <br>
                            <p>TANQUEA Y VIAJA A</p>
                            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/qatar2022.png" alt="lubri" />
                            <p>Conoce los increibles premios de esta experiencia en Qatar que solo Terpel puede brindarte</p>

                            <div class="row">

                                <div class="col-sm-1">
                                </div>
                                <div class="col-sm-10">
                                <div class="row awards">
                                    <div class="col-md-6 col-sm-6"><img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/avion.png"/> Premio #1</div>
                                    <div class="col-md-6 col-sm-6"><img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/avion.png"/> Premio #1</div>

                                    <div class="col-md-6 col-sm-6"><img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/avion.png"/> Premio #1</div>
                                    <div class="col-md-6 col-sm-6"><img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/avion.png"/> Premio #1</div>

                                    <div class="col-md-6 col-sm-6"><img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/avion.png"/> Premio #1</div>
                                    <div class="col-md-6 col-sm-6"><img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/avion.png"/> Premio #1</div>

                                    <div class="col-md-6 col-sm-6"><img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/avion.png"/> Premio #1</div>
                                    <div class="col-md-6 col-sm-6"><img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/assets/images/avion.png"/> Premio #1</div>
                                </div>
                                </div>
                                <div class="col-sm-1">
                                </div>

                            </div>
                            <br><br>
                            <button class="redButton buttAlignCenter"data-dismiss="modal">
                            Entiendo
                            </button>
                            <br>

                        </div>
                    </div>
                </div>
            </div>


            <br><br>
            <div class="redBox" style="display: none;">
                <h5 class="text-center white">¡Tú puedes ser uno de nuestros<br>
                    más de 200 afortunados!</h5>
                <h2 class="text-center white"><span>1</span> GANADOR DE $50.000</h2>
                <div class="row whiteTb">
                    <div class="col-sm-3">
                        <div class="row">
                            <div class="col-4">
                                <h1>3</h1>
                            </div>
                            <div class="col-8">
                                <h4>GANADORES DE</h4>
                                <h3>$10.000</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-5">
                                <h1>14</h1>
                            </div>
                            <div class="col-6">
                                <h4>GANADORES DE</h4>
                                <h3>$1.000</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="row">
                            <div class="col-6">
                                <h1>200</h1>
                            </div>
                            <div class="col-6">
                                <h4>GANADORES DE</h4>
                                <h6>$30 DE CONSUMO<br>DE SUPER EVOL-T</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row fuelStation">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <h3>Conoce las estaciones de<br> servicio participantes</h3>
                    <a href="https://terpelsicumple.com/estaciones-de-servicio/" target="_blank" class="redButton">
                        Conocer estaciones
                    </a>
                </div>
                <div class="col-xs-0 col-sm-6">

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background: #F4F4F4;">
        <div class="row form-footer">
            <div class="col-sm-6 col-md-6">
                <p>Vive una experiencia de lujo única con Terpel en este 2022, participa ahora</p>
            </div>
            
            <div class="col-sm-6 col-md-6">
                <div style="margin-left: 2%;">
                <p>Ingresa tu cédula de identidad</p>
                <?php echo do_shortcode('[trade-form-login]'); ?>
                </div>
            </div>
        </div>
    </div>


    <?php wp_footer(); ?>
</section>
<?php get_footer(); ?>
</body>

</html>