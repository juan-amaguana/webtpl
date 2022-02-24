<?php
/* Template Name: Winners Page
*/

get_header(); 


$winners = [
    [ "name" => "Juan Diego Lopez", "city" => "AZUAY" ],
    [ "name" => "", "city" => "" ],
    [ "name" => "", "city" => "" ],
    [ "name" => "", "city" => "" ],
    [ "name" => "", "city" => "" ],
    [ "name" => "", "city" => "" ],
    [ "name" => "", "city" => "" ],
    [ "name" => "", "city" => "" ],
    [ "name" => "", "city" => "" ],
    [ "name" => "", "city" => "" ],
    [ "name" => "", "city" => "" ],
    [ "name" => "", "city" => "" ],
    [ "name" => "", "city" => "" ],
    [ "name" => "", "city" => "" ],
    [ "name" => "", "city" => "" ]
]


?>

<section id="winners" class="main-section">
    <div class="header">
        <a href="<?php echo get_site_url(); ?>">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/logoTerpel.svg" alt="logoTerpel" />
        </a>
        <div class="headEndCont">
            <a href="#">
                <h6>Ganadores</h6>
            </a>
        </div>
    </div>
    <div class="winnersBanner">
        <div class="wrapper">
            <div class="row">
                <div class="col-sm-6">
                    <p style="color: #fff; font-size: 2rem;">TANQUEA Y VIAJA A </p>
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/qatar2022.png"  />
                </div>
                <div class="col-sm-6">

                </div>
            </div>
        </div>
    </div>

    <div class="winnersCounter">
        <div class="wrapper">
            <h3>¡Son 12 ganadores!</h3>


            <div class="row moneyBack">
                <div class="col-sm-6" style="text-align: center;">
                    <div class="marcador-label">FALTA</div>
                    <div class="row marcador">
                        <div class="col-md-6"> 0 </div>
                        <div class="col-md-6"> 8 </div>
                    </div>
                    <div class="marcador-label">GANADORES</div>
                </div>
                <div class="col-sm-6">
                    <?php echo do_shortcode('[ycd_countdown id=21]'); ?>
                </div>
            </div>
        </div>
    </div>


    <div class="winnersCards">
        <div class="wrapper">
            <div class="row moneyBack">
                <div class="col-sm-12" style="text-align: center;">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-4" style="text-align: right;">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/winner1.png"  />
                        </div>
                        <div class="col-md-4" style="text-align: left;">
                            <div class="text-gold">
                            Ganador #1 <br>
                            Sorteo 15-03-2022
                            </div>
                            <br>
                            <div class="winner-text-white">
                                Juan Diego Lopez
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>

                    <div class="row" style="margin-top: 5%;">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/qatar2022.png"  />
                            <div class="winner-text-white">
                            Ellos ya ganaron su espacio para ir a 3 partidos en Qatar 2022 con una experiencia de lujo todo incluido gracias a Terpel
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    

                    <div class="row" style="margin-top: 5%; margin-bottom: 5%;">

                        <?php foreach($winners as $x => $val) { ?>


                            <?php if( $val["name"] !== "") { ?>
                        <div class="col-md-3 winner-card" style="margin-top: 5%;">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/winner-theme.png"  />
                            <div class="winner-name"> <?= $val["name"] ?> <br>  <strong>  <?= $val["city"] ?> </strong> </div>
                        </div>
                            <?php } else { ?>
                        <div class="col-md-3" style="margin-top: 5%;">
                            <div class="secret-card">
                                <div class="content-text">
                                    TANQUEA Y VIAJA A
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/qatar-mini.png"  />
                                    <div class="week">GANADOR <br> SEMANA #<?= $x +1 ?> </div>
                                </div>
                            </div>
                        </div>
                            <?php } ?>

                        <?php } ?>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <br><br>
    <br><br>
    
<div class="wrapper">
    <div class="winnersTable">
        <div class="firstColumn">
            <div class="card">
                <h4>Ganadores de<br> <span>$10.000</span></h4>
                <ol class="winFlexTb">
                    <li>
                        <p>
                            Angelo CXXX <span>1724634XXX</span>
                        </p>
                    </li>
					<li>
                        <p>
                            Luigi DXXX <span>924002XXX</span>
                        </p>
                    </li>
                </ol>
            </div>
            <div class="card">
                <h4>Ganadores de<br> <span>$1.000</span></h4>
                <ol class="winFlexTb">
                    <li>
                        <p>
                            Nelson Aguirre A <span>1200304XXX</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Washington Torres <span>0904266XXX</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Victor Vera <span>0802099XXX</span>
                        </p>
                    </li>
						 <li>
                        <p>
                           Teve Catota <span>1500511XXX</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Arturo Rodríguez <span>0912579XXX</span>
                        </p>
                    </li>
					<li>
                        <p>
                            Fernando Franco <span>1204027XXX</span>
                        </p>
                    </li>
					<li>
                        <p>
                            Josefina Revera <span>906658XXX</span>
                        </p>
                    </li>
					<li>
                        <p>
                            Hernán Escudero <span>1711987XXX</span>
                        </p>
                    </li>
					<li>
                        <p>
                            Luis Albuja  <span>1714758XXX</span>
                        </p>
                    </li>
					<li>
                        <p>
                            Douglas Mujica  <span>919216XXX</span>
                        </p>
                    </li>
					<li>
                        <p>
                            Joffre Carbo  <span>0911241XXX</span>
                        </p>
                    </li>
                </ol>
            </div>
        </div>
        <div class="secondColumn">
            <div class="card">
                <h4>Ganadores de<br> <span>Gift Card $30</span></h4>
                <ol class="winFlexTb">
                    <li>
                        <p>

                            Marcos Salazar<span>
                                Bahía Norte</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Leandro Cadena<span>
                                Alberese</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Narcisa Carrasco<span>

                                Perimetral</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Piter Chica
                            <span>

                                El Fortín</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Joel Briones
                            <span>

                                Casanova</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Mario Pincay
                            <span>

                                Casanova</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Jessica Hernandez

                            <span>

                                Maioli</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Marco Mestanza


                            <span>

                                Milchichig</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Oscar Posligua
                            <span>

                                Río Bonito
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Andrés Córdova<span>

                                Las Américas
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Rita Rovero
                            <span>

                                Beneficencia</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Jorge Galarza
                            <span>

                                Beneficencia</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Omar Valle
                            <span>

                                Kennedy</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Manuel Brito
                            <span>

                                Machala</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Kevin León
                            <span>

                                Centenario</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Manuel Pincay
                            <span>

                                Centenario</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            César Ponce
                            <span>

                                Comin</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Carlos Veliz
                            <span>

                                Comin</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Marcos Andrade
                            <span>

                                Arual</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Miriam Pineda
                            <span>

                                Metrópolis</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Jaime Morales
                            <span>

                                Ceibos</span>
                        </p>
                    </li>
                    <li>
                        <p>

                            Francisco Fajardo
                            <span>

                                Ceibos</span>
                        </p>
                    </li>
                    <li>
                        <p>

                            Marcos Andrade
                            <span>

                                Arual</span>
                        </p>
                    </li>
                    <li>
                        <p>

                            Lily Rodríguez
                            <span>

                                Andina</span>
                        </p>
                    </li>
                    <li>
                        <p>

                            Evelyn Analuiza
                            <span>

                                Bahía Norte
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Ronmel Acuña
                            <span>

                                Bahía Norte
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Eddie Luces

                            <span>
                                Garita Chimborazo
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Joaquín Moreno


                            <span>
                                Narancay
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Diana Mejía


                            <span>
                                Bellavista
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Danny Bacuy



                            <span>
                                Bellavista
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Israel Peña
                            <span>
                                Portete
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Walter Loor

                            <span>
                                Portete
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Edna Ale Piedrahita
                            <span>
                                Tufiño
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Francisco Reyes
                            <span>
                                Amazonas
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Edgar Castillo

                            <span>
                                Petroport
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Eddy Cucalón
                            <span>
                                Petroport
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Carlos Fernández
                            <span>
                                La T Salitre
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Francisco Toasa
                            <span>
                                Silvan 1
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Xavier Vera
                            <span>
                                Silvan 1
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Magno Bueno
                            <span>
                                Petrillo 2
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Segundo Jiménez
                            <span>
                                Petrillo 2
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Peter Palma
                            <span>
                                Posoil
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Edison Banchon
                            <span>
                                Posoil
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Marco Zamorano
                            <span>
                                Terpel Uno
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Michael Schonawr
                            <span>
                                Miravalle
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Wilson Tapia
                            <span>
                                Terpel Uno
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Mateo Vera
                            <span>
                                Terpel Uno
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            María Belén Pesantes
                            <span>
                                Machala Dos
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Giovanny Potosí
                            <span>
                                El Bosque
                            </span>
                        </p>
                    </li>
                    <li>
                    <li>
                        <p>
                            Reina Macías
                            <span>
                                La Victoria
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Ulvio Fuentes
                            <span>
                                La Victoria
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Andrés Limones
                            <span>
                                Autocentro
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Eli Zambrano
                            <span>
                                Autocentro
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Félix Baque
                            <span>
                                Truck Stop
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Wilson Barreño
                            <span>
                                Sensasión
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Artero Intriago
                            <span>
                                Lo justo</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Rafael Inquillay
                            <span>
                                Lo justo</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            José Basurto
                            <span>
                                Amco</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Willian García
                            <span>
                                Anturios 2</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Wilson López
                            <span>
                                Anturios 2</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Fernanda Muñoz
                            <span>
                                Malecón</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Pablo Briceño
                            <span>
                                Anturios 1
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Jacinto Intriago
                            <span>
                                Anturios 1
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Miguel Montenegro
                            <span>
                                El Descanso
                            </span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Agustín Velez
                            <span>
                                Amco</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Jhonny Loor
                            <span>
                                Amco</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Gerson Estupiñan
                            <span>
                                Narancay</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Orley Delgado
                            <span>
                                El Carmen</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Isaac Rodriguez
                            <span>
                                El Carmen</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Angel Estrella
                            <span>
                                Servicentro Mobil</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Luis Sucunota
                            <span>
                                Servicentro Mobil</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Claudio Mariño
                            <span>
                                Petroplaza</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Rolando Lara
                            <span>
                                Petroplaza</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Alexandra Quizhpe
                            <span>
                                Pisoni</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Julio Cesar Rosales
                            <span>
                                El Éxito</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            María José Baquero
                            <span>
                                Miravalle</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Josseline Otavalo
                            <span>
                                Milchingui</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Enrique Haro
                            <span>
                                El bosque</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Damian Lucas
                            <span>
                                El Descanso</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Andrés Riva
                            <span>
                                Quattro</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            María Victoria H.
                            <span>
                                Ballenita</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Darwin Herrera
                            <span>
                                Autoservicio Sur</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Xavier Rodriguez
                            <span>
                                Autoservicio Sur</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Miguel Gómez
                            <span>
                                Autosur</span>
                        </p>
                    </li>
                    <li>
                        <p>
                            Walber Acostado
                            <span>
                                Autosur</span>
                        </p>
                    </li>
					<li>
                        <p>
                            Manuel Morocho
                            <span>
                                Narancay</span>
                        </p>
                    </li>
					<li>
                        <p>
                            Daniel Rodriguez
                            <span>
                                Garita Chimborazo</span>
                        </p>
                    </li>
					<li>
                        <p>
                            Esmiria Arana
                            <span>
                                Garita Chimborazo</span>
                        </p>
                    </li>
					<li>
                        <p>
                            Joao Nazareno
                            <span>
                                Fortín</span>
                        </p>
                    </li>
					<li>
                        <p>
                            Jonas Coronel
                            <span>
                                Narancay</span>
                        </p>
                    </li>
					<li>
                        <p>
                            Jorge Merchan  
                            <span>
                                Silva 1</span>
                        </p>
                    </li>
					<li>
                        <p>
                           Marlyn Ríos  
                            <span>
                                Alberese</span>
                        </p>
                    </li>
					<li>
                        <p>
                           Christobal Chipre  
                            <span>
                                Metrópolis 2</span>
                        </p>
                    </li>
					<li>
                        <p>
                           Gilberto Pizarro  
                            <span>
                                Guayacanes</span>
                        </p>
                    </li>
					<li>
                        <p>
                           Connie Garces  
                            <span>
                                Guayacanes</span>
                        </p>
                    </li>
					<li>
                        <p>
                           Samuel Rodriguez  
                            <span>
                                Guayacanes</span>
                        </p>
                    </li>
					<li>
                        <p>
                           Mariana Llerena 
                            <span>
                                Perimetral</span>
                        </p>
                    </li>
					<li>
                        <p>
                           Norman Rodriguez
                            <span>
                                Milchichig</span>
                        </p>
                    </li>
					<li>
                        <p>
                           María Augusta Coello
                            <span>
                                Milchichig</span>
                        </p>
                    </li>
					<li>
                        <p>
                           Edgar Vivero 
                            <span>
                                Perimetral</span>
                        </p>
                    </li>
					<li>
                        <p>
                           Geovanny Lema
                            <span>
                                Natabuela</span>
                        </p>
                    </li>
					<li>
                        <p>
                           John Daniel Enriquez
                            <span>
                                Natabuela</span>
                        </p>
                    </li>
					<li>
                        <p>
                           Julio Javier Lopez
                            <span>
                                Natabuela</span>
                        </p>
                    </li>
					<li>
                        <p>
                           Holger Jimenez
                            <span>
                                Malacatos</span>
                        </p>
                    </li>
					<li>
                        <p>
                           Pablo Morocho
                            <span>
                                 Las Américas</span>
                        </p>
                    </li>
					<li>
                        <p>
                           Ingrid Cevallos
                            <span>
                                 Las Américas</span>
                        </p>
                    </li>
					<li>
                        <p>
                           Walter Astudillo
                            <span>
                                 Milchichig</span>
                        </p>
                    </li>
					<li>
                        <p>
                           Jorge Alegro
                            <span>
                                 San Sebastián </span>
                        </p>
                    </li>
					<li>
                        <p>
                           Luis Morales
                            <span>
                                 San Sebastián </span>
                        </p>
                    </li>
					<li>
                        <p>
                           Carlos Simbaña
                            <span>
                                 San Sebastián </span>
                        </p>
                    </li>
					<li>
                        <p>
                           José Julio Guacho
                            <span>
                                 San Sebastián </span>
                        </p>
                    </li>
					<li>
                        <p>
                           Manuel Morales
                            <span>
                                 San Sebastián </span>
                        </p>
                    </li>
					<li>
                        <p>
                          Cesar  Asimbaya
                            <span>
                                 San Sebastián </span>
                        </p>
                    </li>
						<li>
                        <p>
                          Jessica Vega
                            <span>
                                 Andina</span>
                        </p>
                    </li>
					<li>
                        <p>
                          Roberto  Zabala 
                            <span>
                                 Andina</span>
                        </p>
                    </li>
					<li>
                        <p>
                          Rolando Haro 
                            <span>
                                 Petroplaza</span>
                        </p>
                    </li>
					<li>
                        <p>
                         Wilson Mendoza 
                            <span>
                                 Anturios 2</span>
                        </p>
                    </li>
					<li>
                        <p>
                         Karina Pilamunga
                            <span>
                                 Truck stop </span>
                        </p>
                    </li>
					<li>
                        <p>
                         Freddy Villacres
                            <span>
                                 Anturios 1 </span>
                        </p>
                    </li>
					<li>
                        <p>
                         Jorge Heredia
                            <span>
                                 Flamingo Oriental </span>
                        </p>
                    </li>
					<li>
                        <p>
                         Ruben Montero
                            <span>
                                Flamingo Occidental </span>
                        </p>
                    </li>
					<li>
                        <p>
                         Jose Andrade
                            <span>
                               Valgas </span>
                        </p>
                    </li>
					<li>
                        <p>
                         Anacio Cabrera 
                            <span>
                               Petroplaza
 </span>
                        </p>
                    </li>
					<li>
                        <p>
                         Andrés Salazar 
                            <span>
                               Servimobil
 </span>
                        </p>
                    </li>
					<li>
                        <p>
                         Edgan Macas 
                            <span>
                               R&G
 </span>
                        </p>
                    </li>
					<li>
                        <p>
                         Isabel García 
                            <span>
                               La Garzota
 </span>
                        </p>
                    </li>
					<li>
                        <p>
                         Feliz Mendez 
                            <span>
                               La Garzota
 </span>
                        </p>
                    </li>
					<li>
                        <p>
                         Omar Guzmán 
                            <span>
                               Las Américas
 </span>
                        </p>
                    </li>
					<li>
                        <p>
                         Luis Cevallos
                            <span>
                               Las Américas
 </span>
                        </p>
                    </li>
					<li>
                        <p>
                         Irina Veloz
                            <span>
                               Eloy Alfaro
 </span>
                        </p>
                    </li>
					<li>
                        <p>
                         Xavier Batallas
                            <span>
                               Eloy Alfaro
 </span>
                        </p>
                    </li>
					<li>
                        <p>
                         Miguel Bustamante
                            <span>
                               Eloy Alfaro
 </span>
                        </p>
                    </li>
					<li>
                        <p>
                         Bladimir Conde
                            <span>
                               Sensación
 </span>
                        </p>
                    </li>
					<li>
                        <p>
                         Leoncio Pineda
                            <span>
                               Pisoni
 </span>
                        </p>
                    </li>
					<li>
                        <p>
                         Gabriel Hidalgo
                            <span>
                               Pisoni
 </span>
                        </p>
                    </li>
					<li>
                        <p>
                         David Peralta 
                            <span>
                               Pisoni
 </span>
                        </p>
                    </li>
					<li>
                        <p>
                         Juan Dominguez  
                            <span>
                               Guayacanes
 </span>
                        </p>
                    </li>
					<li>
                        <p>
                         Fanny Melgar  
                            <span>
                               Narancay
 </span>
                        </p>
                    </li>
					<li>
                        <p>
                         Patricia Vaca 
                            <span>
                               Narancay
 </span>
                        </p>
                    </li>
					<li>
                        <p>
                         Galo Pilamulga  
                            <span>
                               Narancay
 </span>
                        </p>
                    </li>
					<li>
                        <p>
                         Braulio Robles
                            <span>     
Guayacanes
 </span>
                        </p>
                    </li>
					<li>
                        <p>
                        Raúl Colcha
                            <span>     
Autosur
 </span>
                        </p>
                    </li>
					<li>
                        <p>
                        Carlos Polo 
                            <span>     
Milchichig
 </span>
                        </p>
                    </li>
					<li>
                        <p>
                        Laurita Pérez
                            <span>     
Autosur
 </span>
                        </p>
                    </li>
					<li>
                        <p>                        
César García
                            <span>     
Autosur
 </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Luis Méndez
                            <span>     
Autosur
 </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Julián Guilcarema
                            <span>     
Autosur
 </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Diego Padilla
                            <span>     
Autosur
 </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Víctor Cando
                            <span>     
Autosur
 </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Millón Granda
                            <span>     
Autosur
 </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Darwin Chimbo
                            <span>     
Silvan 1
 </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Luis Ordoñez
                            <span>     
Petroservicio del Valle
 </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Fausto Freiré
                            <span>     
Petroservicio del Valle
 </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Luis Davila
                            <span>     
Petroservicio del Valle
 </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Genoveva Jaime
                            <span>     
Petroservicio del Valle
 </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Wilton Arriaga
                            <span>     
Petroservicio del Valle
 </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Jimmi Tigua
                            <span>     
Petroport
 </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Daniel Aguila
                            <span>     
Petroport
 </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Duberly Briones
                            <span>     
Portete
 </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Miguel Merino
                            <span>     
Petrillo 2
 </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Monica Cortez
                            <span>     
Metrópolis 2 </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Ana Lucía Cazar
                            <span>     
El Pinar </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Elsa Hermida
                            <span>     
Bahia Norte </span>
                        </p>
                    </li>
					<li>
                        <p>                        
José Burgos
                            <span>     
Garita Chimborazo </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Santos Lascano                            <span>     
Perimetral  </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Betty Velazquez                            <span>     
Perimetral  </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Gabriela Vaca                            <span>     
Garita Chimborazo  </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Carlos Villarroe                            <span>     
Garita Guayacanes  </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Álvaro Ormaza                            <span>     
Garita Guayacanes  </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Edwin Guzmán                           <span>     
Eloy Alfaro  </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Benigno Orrala                           <span>     
Eloy Alfaro  </span>
                        </p>
                    </li>
					<li>
                        <p>                        
José Farfán                           <span>     
Metrópolis  </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Clara Sánchez
                          <span>     
Garzota  </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Erick Santillan

                          <span>     
Garzota  </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Enrique Carrera

                          <span>     
Maioli  </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Sebastián Baque
                          <span>     
El Fortín  </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Judith Soriano
                          <span>     
Perimetral  </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Gabriel Campos
                          <span>     
El Fortín  </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Luis Coloma
                          <span>     
El Fortín  </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Gregario Osorio
                          <span>     
Alberese  </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Luis Carrasco
                          <span>     
Garzota  </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Patricio Veliz
                          <span>     
Garzota  </span>
                        </p>
                    </li>
					<li>
                        <p>                        
John Besseling
                          <span>     
El Pinar  </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Mauricio Olmedo
                          <span>     
El Pinar  </span>
                        </p>
                    </li>
					<li>
                        <p>                        
Victor Jimenez
                          <span>     
El Pinar  </span>
                        </p>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
    <div class="wrapper">
        <div class="socialBanner">
            <div class="row">
                <div class="col-sm-6">
                    <h3>
                        Síguenos en nuestras<br>
                        redes sociales para conocer<br>
                        a los ganadores
                    </h3>
                    <div class="social">
                        <a href="https://www.facebook.com/terpelEC">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/face.svg" alt="face">
                        </a>
                        <a href="https://www.instagram.com/terpel_ec/">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/inst.svg" alt="inst">
                        </a>
                            <a href="https://co.linkedin.com/company/terpel">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/link.svg" alt="inst">
    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</section>
<?php get_footer(); ?>
</body>

</html>