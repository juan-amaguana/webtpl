<?php
/* Template Name: Terminos y Condiciones
*/

get_header(); 

$stations = [
    [ "name" => "EDS LO JUSTO", "city" => "Ambato", "address" => "Av.  Bolivariana 747 E Isidro Viteri" ],
    //[ "name" => "EDS SILVAN 2", "city" => "Babahoyo", "address" => "Via Babahoyo" ],
    //[ "name" => "EDS SILVAN 1", "city" => "Babahoyo", "address" => "Los Rios Babahoyo Parroquia Clemente Baquerizo" ],
    [ "name" => "EDS GAPAL", "city" => "Cuenca", "address" => "Av. 24 De Mayo y Cajabamba" ],
    [ "name" => "EDS NARANCAY", "city" => "Cuenca", "address" => "Panamericana Sur Via Baños Km 1 1-2" ],
    [ "name" => "EDS BAÑOS", "city" => "Cuenca", "address" => "Camino a Baños Av. Las Américas " ],
    [ "name" => "EDS SAN JOSÉ DE TAMARINDO", "city" => "Cuenca", "address" => "Molleturo km 107 Sector Tamarindo Parroquia Jesús María" ],

    [ "name" => "EDS ELOY ALFARO", "city" => "Durán", "address" => "Km 2.5 Durán Boliche" ],

    [ "name" => "EDS VALGAS", "city" => "El Carmen", "address" => "Km 36 Via Chone" ],

    [ "name" => "EDS RIO BONITO", "city" => "El Guabo", "address" => "Panamericana, Via Guayaquil " ],

    [ "name" => "EDS EL JARDIÍN", "city" => "Esmeraldas", "address" => "Sur de la Ciudad Redonda De Codesa" ],
    [ "name" => "EDS LA ISLA", "city" => "Esmeraldas", "address" => "Cl 16 Sl 1 Mz 23 Carretero Via Isla" ],

    [ "name" => "EDS LA GARZOTA", "city" => "Guayaquil", "address" => "Av. Guillermo Pareja Y Av. Hermano Miguel" ],
    [ "name" => "EDS GARITA CHIMBORAZO", "city" => "Guayaquil", "address" => "Av. Quito Y Primero De Mayo" ],
    [ "name" => "EDS BAHÍA NORTE", "city" => "Guayaquil", "address" => "Av. De Las Américas Solar 5-6 " ],
    [ "name" => "EDS 9 DE OCTUBRE", "city" => "Guayaquil", "address" => "Av. Juan Tanca Marengo Solar 5 y 6" ],
    [ "name" => "EDS PETROPORT", "city" => "Guayaquil", "address" => "Av. Carlos Julio Arosemena Km 4,5" ],
    [ "name" => "EDS GUAYACANES", "city" => "Guayaquil", "address" => "Av. Isidro Ayora Y Av. Jose Luis Tamayo" ],
    [ "name" => "EDS METRÓPOLIS", "city" => "Guayaquil", "address" => "Autopista Terminal Pascuales, urbanización Metropolis II-B, solar 1 Mz 1009" ],
    [ "name" => "EDS LAS AMÉRICAS", "city" => "Guayaquil", "address" => "Av. De Las Américas intersección " ],
    [ "name" => "EDS PORTETE", "city" => "Guayaquil", "address" => "Portete, Estero Salado" ],
    [ "name" => "EDS EL FORTÍN", "city" => "Guayaquil", "address" => "Km 27 Via Perimetral" ],
    [ "name" => "EDS BELLAVISTA", "city" => "Guayaquil", "address" => "Av. Velasco Ibarra No. 3-4-8-9 Y Av. Barcelona" ],
    [ "name" => "EDS PERIMETRAL", "city" => "Guayaquil", "address" => "Av. Perimetral Km 25-Guayaquil" ],
    // cambio
    [ "name" => "EDS AUTOSERVICIO SUR", "city" => "Quito", "address" => "Av Maldonado S10-84 Y Calvas" ],

    [ "name" => "EDS EL ÉXITO", "city" => "Guayaquil", "address" => "Aguirre 1621 y Av. Del Ejercito" ],
    [ "name" => "EDS DOMINGO COMIN", "city" => "Guayaquil", "address" => "Av. Domingo Comin Intersección Ernes" ],
    [ "name" => "EDS ALBERESE", "city" => "Guayaquil", "address" => "Via Daule Mz 73 Si 1" ],
    [ "name" => "EDS MAIOLI", "city" => "Guayaquil", "address" => "Ayacucho 3500 Y Leopoldo Izquieta " ],
    [ "name" => "EDS DISCOLDA", "city" => "Guayaquil", "address" => "Posorja -Natividad Flores" ],
    [ "name" => "EDS CASANOVA", "city" => "Guayaquil", "address" => "Gallegos Lara 2201 y Portete" ],
    [ "name" => "EDS ARUAL", "city" => "Guayaquil", "address" => "Via Perimetral Km 42" ],
    [ "name" => "EDS PERIMETRAL", "city" => "Guayaquil", "address" => "Av. Perimetral Km 26" ],
    [ "name" => "EDS PISONI", "city" => "Guayaquil", "address" => "Puente Alterno Norte" ],

    [ "name" => "EDS MALACATOS", "city" => "Loja", "address" => "Via Loja Malacatos Km 26" ],

    [ "name" => "EDS MACHALA DOS", "city" => "Machala", "address" => "Km. 0.5 25 De Junio" ],

    [ "name" => "EDS MALECÓN", "city" => "Manta", "address" => "N° 110 Carretero A Portoviejo" ],
    [ "name" => "EDS AMCO", "city" => "Manta", "address" => "Av. 4 De Noviembre Manta Manabí" ],

    [ "name" => "EDS MONTECRISTI", "city" => "Montecristi", "address" => "Parroquia Anibal San Andrés Carrete" ],

    [ "name" => "EDS COSTA NORTE", "city" => "Pedernales", "address" => "García Moreno y 27 De Noviembre" ],

    [ "name" => "EDS POSOIL", "city" => "Posorja", "address" => "Vial al Puerto de Aguas Profundas" ],

    [ "name" => "EDS AUTOCENTRO", "city" => "Quevedo", "address" => "Av. Walter Andrade Cl 4" ],
    [ "name" => "EDS LA VICTORIA", "city" => "Quevedo", "address" => "Quevedo, Km 1 Via San Carlos" ],

    [ "name" => "EDS MIRAVALLE", "city" => "Quito", "address" => "Av. Interoceánica L.6 Via a Miravalle" ],
    [ "name" => "EDS ANDINA", "city" => "Quito", "address" => "Autopista General Rumiñahui Lt 424 junto al puente 9" ],
    [ "name" => "EDS TUFIÑO", "city" => "Quito", "address" => "Av. Galo Plaza Lasso Y Av. Luis Tufiño" ],
    [ "name" => "EDS TERPEL UNO", "city" => "Quito", "address" => "Av. 10 De Agosto Y Rio Cofanes" ],
    [ "name" => "EDS VIRGEN DEL QUINCHE", "city" => "Quito", "address" => "Via a Puellaro a 2 cuadras del parque recreacional Jerusalem" ],
    [ "name" => "EDS EL QUINCHE", "city" => "Quito", "address" => "Panamericana Norte Km 2 Y Cornelio" ],

    [ "name" => "EDS SENSACIÓN", "city" => "Riobamba", "address" => "Panamericana Norte Y Rio Quevedo" ],

    [ "name" => "EDS PRESTOSERVICIO DEL VALLE", "city" => "Ruminahui", "address" => "Av. General Rumiñahui y 7Ma Transversal Conocoto Quito" ],
    [ "name" => "EDS SAN SEBASTIÁN", "city" => "Ruminahui - Salgolqui", "address" => "Av. Luis Cordero Y García Morenos" ],

    [ "name" => "EDS LA T SALITRE", "city" => "Salitre", "address" => "Sector la T de Salitre Carretero Via Daule" ],

    [ "name" => "EDS FLAMINGO OCCIDENTAL", "city" => "San Lorenzo", "address" => "Panamericana Sur Tambillo" ],
    [ "name" => "EDS FLAMINGO ORIENTAL", "city" => "San Lorenzo", "address" => "Panamericana Sur Tambillo" ],

    [ "name" => "EDS SANTA ELENA", "city" => "Santa Elena", "address" => "Via Salinas-La Libertad Cl 53" ],

    [ "name" => "EDS R Y G", "city" => "Santo Domingo De Los Tsáchilas", "address" => "Av. De Los Colonos " ],
    [ "name" => "EDS ANTURIOS I", "city" => "Santo Domingo De Los Tsáchilas", "address" => "Via Quevedo Km 4.5 Margen Izquierdo" ],
    [ "name" => "EDS TRUCK STOP", "city" => "Santo Domingo De Los Tsáchilas", "address" => "Via Quevedo Km 5 Cooperativa Nueva" ],
    [ "name" => "EDS EL DESCANSO", "city" => "Santo Domingo De Los Tsáchilas", "address" => "Km 12 Via Santo Domingo Quito" ],
    [ "name" => "EDS ANTURIOS II", "city" => "Santo Domingo De Los Tsáchilas", "address" => "Via Quevedo Km 4.5 " ],
];

?>

<section>
    <div class="wrapper">
        <div class="row tyc">
            <div class="col-12">
                <img style="width: 100%;" src="<?php bloginfo('template_directory'); ?>/assets/images/banner-terms.jpg" alt="terpelTyC" />
                <br>
                <p class="text-center"><span>Bases de la promoción</span></p>
                <p><span>ORGANIZADOR:</span> Terpel-Comercial Ecuador Cia. Ltda. </p>
                 <p><span>NOMBRE DE LA CAMPAÑA:</span> Tanquea y Viaja a Qatar 2022</p>
                <p><span>TERRITORIO:</span> Esta promoción estará vigente en las estaciones de servicio participantes, las cuáles son: </p>
            
                <table>
                    <tbody>
                    <?php foreach($stations  as $x => $val) { ?>
                        <tr>
                            <td> <?= $val["name"] ?> </td>
                            <td> <?= $val["city"] ?> </td>
                            <td> <?= $val["address"] ?> </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                <br>
                <p><span>PARTICIPANTES:</span>
                Los participantes pueden ser personas mayores de edad de tengan su domicilio en la República del Ecuador y que cumplan con los requisitos de las bases del concurso. 
                </p>
                <p>No podrán participar en esta promoción las siguientes personas: </p>
                <p>(a) Los empleados del Organizador y de los Distribuidores y Operadores de las Estaciones de Servicio; (a) El personal de las agencias de publicidad de la empresa; (b) Los familiares de los empleados del Organizador, de los Distribuidores y Operadores de las Estaciones de Servicio Terpel hasta el segundo grado de consanguineidad y primer grado de afinidad, (c) el personal de las de las agencias vinculadas con esta promoción hasta el segundo grado de consanguineidad y primer grado de afinidad</p>
                <p><span>VIGENCIA:</span> La presente promoción estará vigente desde las 00h00 del martes 1 de marzo de 2022 al viernes 2 de septiembre 2022, para participar en la promoción los clientes pueden ingresar facturas de todas las estaciones de servicio de Terpel con un consumo mínimo de 10 USD.
                </p>
                <p><span>MECÁNICA: </span></p>
                <ol>
                    <li>Ingresar a la página oficial de la promoción http://terpelsicumple.com</li>
                    <li>Ingresar datos personales cédula, nombre, apellido, teléfono, ciudad, mail.</li>
                    <li>Número de factura, monto, ciudad y estación de servicio participante. </li>
                    <li>Subir foto de la factura registrada o pdf de la misma enviada vía correo electrónico.</li>
                    <li>Aceptar las condiciones generales.</li>
                    <li>Registrar su forma de pago</li>
                    <li>Recibe un (1) cupón por cada 10 USD de consumo</li>
                    <li>Recibe doble (2) cupón por cada 10 USD de consumo de EVOL-T, compra de Lubricantes Mobil y compras en tiendas Altoque</li>
                    <li>Recibe tripe (3) cupón por cada 10 USD de consumo con Diners Club, Visa Itanium y Discover</li>
                </ol>
                <p><span>SORTEO: </span></p>
                <p>
                El sorteo se realizará mediante una plataforma web de selección aleatoria, la elección de los ganadores se hará en presencia de un notario público y un representante de Terpel .Los días 29 de MARZO 2022, 15 DE ABRIL  2022, 29 DE ABRIL DE 2022, 13 DE MAYO 2022, 27 DE MAYO 2022, 10 DE JUNIO 2022, 24 DE JUNIO 2022, 8 DE JULIO 2022, 20 DE JULIO 2022, 5 DE AGOSTO 2022, 19 DE AGOSTO 2022, 2 DE SEPTIEMBRE 2022, el cuál será retransmitido por las redes sociales de Terpel Ecuador por streaming, para cada sorteo se sacarán 5 ganadores suplentes en caso de que el ganador  principal, de cada sorteo  no cumpla con los requisitos y validez del mismo.
                </p>

                <p><strong>VIGENCIA DE FACTURAS:</strong></p>
                <p>
                Las facturas tienen una vigencia de 15 días a partir de su ingreso en el sistema, para que esto sea válido las facturas deben ser del mismo mes en curso, por lo que las facturas ingresadas serán válidas para un solo sorteo.
                </p>
                
                <p><strong>GANADORES:</strong></p>
                <p>Terpel Ecuador se reserva el derecho de verificar la información proporcionada por los participantes y la autenticidad de la factura participante. Por lo tanto, no participarán de la promoción aquellas facturas que se encuentren dañadas, rotas, incompletas, con cualquier tipo de enmendadura externa y/o falsificados, y en general las facturas cuya autenticidad no haya sido aceptada por Terpel / Diners Club. </p>
                <p>
                A los ganadores se los contactará telefónicamente al número registrado por el participante dentro de los 05 (cinco) días hábiles subsiguientes a la fecha de realizada el sorteo para coordinar la entrega de los premios. El ganador tiene el término de 03 días hábiles contados desde que fue notificado para presentar los documentos necesarios que se requieran para poder acceder a su premio, en el caso de no presentarse el ganador principal se procederá a contactar a los ganadores suplentes y en caso de no presentarse estos o de no poder contactarlo dentro de los plazos antes indicados para la notificación y presentación se procederá a declarar desierto el premio.
                </p>


                <p><strong>PREMIOS:</strong></p>

                <table>
                    <tbody>
                        <tr>
                            <td> 12 </td>
                            <td>
                                GANADORES
                            </td>
                            <td>
                                PAQUETES DOBLES CON: 
                                <ul>
                                    <li>Alojamiento por 13 noches en Doha (20 de noviembre al 2 de diciembre de 2022)</li>
                                    <li>13 desayunos buffet en el hotel seleccionado.</li>
                                    <li>3 entradas Categoría 1 con los servicios de hospitalidad</li>
                                    <li>Seguro de viaje Universal Assistance con cobertura de USD. 80,000.00</li>
                                    <li>Asistencia en Doha por parte de nuestro equipo durante su estadía.</li>
                                    <li>Impuestos</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <p>
                Los Premios NO incluyen: Impuestos, tasa o contribución que deba tributarse, de conformidad con la legislación ecuatoriana, y asimismo, cualquier gasto que deba realizarse por concepto de impuestos, y/o toda suma de dinero que deba pagarse al Estado, sociedades del estado, provincias o municipalidades por el hecho del ofrecimiento, asignación o entrega de los premios o con motivo de la organización o difusión de la promoción o de los Sorteos y los gastos en que incurran sus Ganadores por cualquier concepto relacionado con la presente promoción será a exclusivo cargo de los mismos, así como todo otro servicio o bien que no fuera expresamente detallado en las presentes bases, los que de ocurrir serán a cargo de los Ganadores.
                </p>
                <p>
                Terpel no se hace responsable de los gastos en los que incurra el ganador y sus acompañantes (viajes, hospedaje, viáticos, etc.) para efecto de reclamar el paquete.
                </p>
                <p>
                Terpel no se hace responsable de cualquier gasto de alimentación o de transporte que incurra el ganador y/o sus acompañantes fuera de los descritos como parte del premio. 
                </p>

                <p>
                Los ganadores conocen y entienden que Terpel no es la organizadora del torneo y que, en consecuencia, no se hacen responsables por su ejecución o cualquier otro evento relacionado con la logística del mismo.
                </p>

                <p>
                Terpel no se hace responsable de la integridad física, la salud, o la propiedad de los ganadores durante el evento o los desplazamientos asociados a éste, ni de cualquier otro daño que estos sufran con ocasión de la participación en la actividad o del disfrute del premio otorgado. Los ganadores entienden y aceptan lo anterior, por tanto exoneran a Terpel de cualquier reclamación judicial o extrajudicial que pudiere derivarse de tales eventos.
                </p>

                <p>Los premios son personales e intransferibles. </p>

                <p>
                Bajo ninguna circunstancia los ganadores podrán solicitar a Terpel que el premio al que se hacen acreedores en virtud de la Promoción sea entregado a una tercera persona ni aún para el caso de familiares.  
                </p>

                <p>
                Una vez entregado el premio, éste será de absoluta responsabilidad del ganador, sin que éste pueda reclamar al Terpel por pérdidas, daño, accidentes, mal uso, robo o cualquier otra eventualidad.  
                </p>

                <p>
                Los premios podrán ser redimidos o canjeados hasta  el 23 DE SEPTIEMBRE.
                </p>

                <p>
                Para reclamar los premios, cada ganador deberá:
                <ul>
                    <li>Acudir personalmente al lugar, fecha y hora dispuesta por Terpel. </li>
                    <li>Presentar el original de su cédula de ciudadanía, pasaporte y entregar fotocopias a color  de estos documento. En caso de extranjeros residentes en Ecuador, presentar el original y una fotocopia de su cédula de identidad o pasaporte.</li>
                    <li>Presentar la factura participante. </li>
                    <li>Presentar el voucher físico participante en caso de haber seleccionado pago con tarjetas participantes.</li>
                </ul> 
                </p>

                <br>
                <p>
                    <strong>CONDICIONES</strong>
                </p>
                <p>
                Los participantes y ganadores deberán ser mayores de edad, estar domiciliados en la República del Ecuador; haber registrado correctamente sus datos personales en www.terpelsicumple.com con la información solicitada completa. 
                </p>
                <p>
                Los potenciales ganadores de los PREMIOS de la PROMOCIÓN serán notificados por el Organizador por medio fehaciente al número de teléfono registrado la web, dentro de los cinco (05) días hábiles subsiguientes a la definición de la determinación del ganador. Los presuntos ganadores deberán concurrir tan pronto como sean notificados, en la fecha, horario y domicilio que serán detallados en la notificación.
                </p>
                <p>
                El premio es intransferible y por lo tanto se entregará exclusivamente a los ganadores, previa verificación del cumplimiento de la mecánica del concurso y de su mayoría de edad, para lo cual se solicitará una copia de su cédula de ciudadanía.
                </p>
                <p>
                Para los efectos de esta actividad, se considera como motivo de descalificación que los participantes incumplan estos términos y condiciones. En caso de identificar fraude de un participante en la actividad, Terpel podrá descalificarlo automáticamente informando los motivos de su decisión mediante un correo electrónico. El participante de manera expresa acepta, que su participación en la actividad será de buena fe y se abstendrá de:
                </p>
                <p>
                El Concursante no podrá difamar o expresarse en modo desprestigiante respecto de las marcas de la Patrocinadoras y sus compañías filiales y/o subsidiarias;
                </p>
                <p>
                Expresarse negativamente respecto del mensaje o intención comunicacional de las marcas asociadas al concurso;
                </p>
                <p>
                Cometer delitos o actos ilícitos durante cualquiera de las actividades ligadas a la dinámica del concurso;
                </p>
                <p>
                Violar derechos de privacidad o datos personales de terceros; 
                </p>
                <p>
                Causar daño a otra persona; 
                </p>
                <p>
                Subir archivos o contenido que contenga virus o archivos corruptos;
                </p>
                <p>
                Borrar, o alterar las medidas de seguridad de la página web;
                </p>
                <p>
                Falsificar el código fuente de la página u otra información confidencial;  
                </p>
                <p>
                Cualquier actividad que constituya un delito. En vista de lo anterior, nos reservamos el derecho a:
                </p>
                <p>
                Restringir o impedir tu acceso;
                </p>
                <p>
                Eliminar contenidos que hayas colgado en nuestra página o en cualquier medio web asociado a esta página;
                </p>
                <p>
                Informar a las autoridades sobre hechos o actos ilícitos efectuados por los Concursantes o personas que hayan ingresado a la página.
                </p>
                <p>
                El premio no es transferible, canjeable ni reembolsable por dinero en efectivo, sin excepciones.
                </p>
                <p>
                El premio es una cortesía entregada por Terpel y de ninguna manera podrá ser revendido o distribuido a terceros. De hacerlo, el ganador deberá responder legalmente a Terpel.  
                </p>
                <p>
                En ningún caso, se aceptarán registros con datos que no correspondan al titular de la cuenta, números incompletos o no válidos. Si los datos de registro no coinciden con el documento de identidad del ganador a la hora de hacer efectivo el premio, aquel no podrá recibirlo.
                </p>
                <br>
                <p>
                    <strong>ACOMPAÑANTE:</strong>
                </p>
                <p>
                El ganador tiene derecho de compartir su premio con un acompañante a su elección, el cual debe cumplir con la misma documentación que el ganador, en este caso originales y copia de cedula de identidad y pasaporte.
                </p>
                <p>
                En el caso a que el acompañante sea menor a 18 años, el ganador deberá presentar original y una copia notarizada de La autorización de salida del país, de acuerdo con la Ley. Solo se aceptará acompañantes menores de edad hasta segundo grado de consanguinidad.
                </p>
                <br>
                <p>
                    <strong>FACULTADES DEL ORGANIZADOR</strong>
                </p>
                <p>
                El Organizador se reserva el derecho de cancelar unilateralmente en cualquier momento la Promoción o ampliar o modificar la Promoción total o parcialmente, o extenderla en el tiempo, modificar las presentes Bases incrementando o disminuyendo la cantidad de premios a otorgar. Las modificaciones, ampliaciones, disminuciones o cancelaciones serán difundidas utilizando el mismo mecanismo utilizado para difundir las Bases originarias y no generarán responsabilidad alguna por parte del Organizador. 
                </p>
                
                <p>
                El mismo hecho de participar ingresando los datos y número de factura automáticamente se genera la aceptación total y plena de las presentes bases y de toda aclaración y/o modificación que el organizador pudiera hacer. Las presentes bases podrán ser consultadas y obtenidas en la página web www.terpelecuador.com y en www.terpelsicumple.com .  
                </p>
                <br>
                <p>
                    <strong>USO Y MANEJO DE DATOS</strong>
                </p>
                <p>
                El participante declara que la información suministrada por él, incluyendo la relacionada con sus datos personales, es cierta, fidedigna y actualizada. 
                </p>
                <p>
                Los datos personales y demás información suministrados por el participante serán objeto de tratamiento automatizado e incorporada a la base de datos administrada por la agencia de publicidad encargada de desarrollar la campaña o actividad promocional para la marca Terpel.
                </p>
                <p>
                El participante presta su consentimiento libre, expreso e informado para que la información personal que ha ingresado sea almacenada, recopilada o utilizada por Terpel  directamente o a través de terceros, con fines de comunicación, envío de información y/o para el mercadeo de sus productos y servicios, relacionados con esta promoción.
                </p>
                <p>
                La información suministrada será objeto de protección mediante el uso de tecnologías y procedimientos de seguridad evitando el acceso, revelación y usos no autorizados.
                </p>

                <br>
                <p>
                    <strong>DERECHO DE IMAGEN </strong>
                </p>
                <p>
                Mediante la presente, el Concursante cede y/o autoriza el uso de su imagen respecto del contenido generado durante la dinámica del Concurso, así como para el uso e inclusión de su imagen en contenidos audiovisuales o fotográficos relacionados con la actividad del presente Concurso. Los Concursantes podrán por lo tanto ser filmados por las Entidades del Concurso mediante cualquier medio de grabación o filmación, consienten en que su imagen sea grabada y el producto de esta sea distribuido, explotado, reproducido, licenciado, transferido, usado o destruido por las Entidades del Concurso como bien lo decida, respetando los criterios de derecho a la imagen y evitando la difusión de imágenes que puedan afectar la reputación del Concursante. Los derechos patrimoniales de autor de estas grabaciones y los derechos de explotación de imagen de las personas filmadas son cedidos a las Entidades del Concurso sin limitación alguna.
                </p>
                <br>
                <p>
                    <strong>REDES SOCIALES: </strong>
                </p>
                <p>
                Meta Platforms, Inc. No es patrocinador, administrador, garante o responsable en forma alguna de actividad. Por tanto, el participante exonera a las redes sociales de cualquier reclamación o responsabilidad por causas surgidas con ocasión o en relación con la misma. Terpel no se hace responsable de los comentarios u opiniones ni de los términos que los usuarios utilicen en las respuestas de la actividad en las redes sociales.
                </p>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</section>
<?php get_footer(); ?>
</body>

</html>