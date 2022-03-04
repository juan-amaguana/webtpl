<?php
$path = preg_replace('/wp-content.*$/', '', __DIR__);
require_once($path . "wp-load.php");

if (isset($_POST['getCities'])) {

    $ambato = [
        [ "code" => "EDS_LO_JUSTO", "name" => "EDS LO JUSTO", "city" => "Ambato", "address" => "Av.  Bolivariana 747 E Isidro Viteri" ]
    ];
    $cuenca = [
        [ "code" => "EDS_GAPAL", "name" => "EDS GAPAL", "city" => "Cuenca", "address" => "Av. 24 De Mayo y Cajabamba" ],
        [ "code" => "EDS_NARANCAY", "name" => "EDS NARANCAY", "city" => "Cuenca", "address" => "Panamericana Sur Via Baños Km 1 1-2" ],
        [ "code" => "EDS_BAÑOS", "name" => "EDS BAÑOS", "city" => "Cuenca", "address" => "Camino a Baños Av. Las Américas " ],
        [ "code" => "EDS_TAMARINDO", "name" => "EDS TAMARINDO", "city" => "Cuenca", "address" => "Molleturo km 107 Sector Tamarindo Parroquia Jesús María" ]
    ];
    $duran = [
        [ "code" => "EDS_ELOY_ALFARO", "name" => "EDS ELOY ALFARO", "city" => "Durán", "address" => "Km 2.5 Durán Boliche" ]
    ];
    $elCarmen = [
        [ "code" => "EDS_VALGAS", "name" => "EDS VALGAS", "city" => "El Carmen", "address" => "Km 36 Via Chone" ]
    ];
    $elGuabo = [
        [ "code" => "EDS_RIO_BONITO", "name" => "EDS RIO BONITO", "city" => "El Guabo", "address" => "Panamericana, Via Guayaquil " ]
    ];
    $esmeraldas = [
        [ "code" => "EDS_EL_JARDIN", "name" => "EDS EL JARDÍN", "city" => "Esmeraldas", "address" => "Sur de la Ciudad Redonda De Codesa" ],
        [ "code" => "EDS_LA_ISLA", "name" => "EDS LA ISLA", "city" => "Esmeraldas", "address" => "Cl 16 Sl 1 Mz 23 Carretero Via Isla" ],
    ];



    $cities = [
        [ "code" => "ambato", "name" => "Ambato", "stations" => $ambato ],
        [ "code" => "cuenca", "name" => "Cuenca", "stations" => $cuenca ],
        [ "code" => "duran", "name" => "Duran", "stations" => $duran ],
        [ "code" => "el_carmen", "name" => "El Carmen", "stations" => $elCarmen ],
        [ "code" => "el_carmen", "name" => "El Carmen", "stations" => $elCarmen ]
    ];


}