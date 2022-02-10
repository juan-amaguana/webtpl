<?php
/* Template Name: Main Page
*/

if (!defined('ABSPATH')) exit;
get_header(); 
$site_url = get_site_url();
?>
<section id="home" class="main-section">
    <div class="proxim">
    <img class="logoTer" src="<?php bloginfo('template_directory'); ?>/assets/images/teu.svg" />
    <h1>
        Próximamente,<br> tenemos una gran<br> sopresa para ti.
    </h1>
    <p class="imgContP">
        Mantente atento a nuestras redes sociales: <span><a href="https://www.instagram.com/terpel_ec/"><img src="<?php bloginfo('template_directory'); ?>/assets/images/instWhite.png" /></a><a href="https://www.youtube.com/channel/UCeLmcRwZXtNifTen5oI7z9A"> 
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/ytFinal.png"/></a><a href="https://www.facebook.com/terpelEC"><img src="<?php bloginfo('template_directory'); ?>/assets/images/faceWhite.png"/></a><a href="https://www.linkedin.com/company/terpel-ecuador"><img src="<?php bloginfo('template_directory'); ?>/assets/images/linkedinWhite.png"/></a>  </span>
    </p>
    </div>
    <!--
    <div class="header">
        <a href="<?php // echo $site_url; ?>">
            <img src="<?php // bloginfo('template_directory'); ?>/assets/images/logoTerpel.svg" alt="logoTerpel" />
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
            <h2>
                Con Terpel, tú decides el<br> obsequio que mereces.
            </h2>
            <?php // echo do_shortcode('[trade-form-login]'); ?>
        </div>
        <div class="clouds">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/newKV.png" />
        </div>

    </div>
    <div class="wrapper">
        <div class="body">
            <h3 class="text-center red bold">¿Cómo participar?
                </h3>
            <div class="row redCircles">
                <div class="col-sm-4">
                    <img src="<?php // bloginfo('template_directory'); ?>/assets/images/gasolina.svg" alt="gas" />
                    <h6>Por cada $10
                        de<br> consumo
                        en Terpel</h6>
                </div>
                <div class="col-sm-4 middleLines">
                    <img src="<?php  // bloginfo('template_directory'); ?>/assets/images/compu.svg" alt="pc" />
                    <h6>Regístrate e ingresa tu<br> factura en el siguiente<br> botón</h6>
                </div>
                <div class="col-sm-4">
                    <img src="<?php // bloginfo('template_directory'); ?>/assets/images/trofeo.svg" alt="win" />
                    <h6>Y obtén una<br> oportunidad para<br> ganar</h6>
                </div>
            </div>
            <br>
            <a href="#" class="redButton buttAlignCenter">
                Participar
            </a>
            <br><br>
            <h3 class="text-center red bold">
                Gana doble o tripe cupón cumpliendo los siguientes requisitos. </h3>
            <div class="row winProducts">
                <div class="col-sm-7">
                    <h4>DOBLE OPORTUNIDAD<br>
                        <span>adquiriendo</span>
                    </h4>
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="<?php // bloginfo('template_directory'); ?>/assets/images/super-evolt.png" alt="evolt" />
                        
                        </div>
                        <div class="col-sm-4">
                            <img src="<?php // bloginfo('template_directory'); ?>/assets/images/lubricantes.png" alt="lubri" />

                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <h4>TRIPLE OPORTUNIDAD<br>
                        <span>Pagando con:</span>
                    </h4>
                    <img src="<?php // bloginfo('template_directory'); ?>/assets/images/dinersclub.png" alt="diners" />
                </div>
            </div>
            <br><br>
            <button class="redButton buttAlignCenter" onClick="checkFactura()">
                Ingresar factura
            </button>
            <br><br>
            <div class="redBox">
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
    </div>-->
    <?php // wp_footer(); ?>
</section>
<?php // get_footer(); ?>
</body>

</html>