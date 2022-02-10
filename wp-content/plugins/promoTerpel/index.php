<?php

/**
 * Plugin Name: Promo Terpel V2
 * Description: Formulario de registro de concursantes con código promocional.
 * Versión: 1.1
 * Author:Gabriel Espinosa
 * Author URI: gabriel.espinoza@trade.ec
 * PHP Version: 7
 * 
 * @category Form
 * @package  Trade
 * @author   Gabriel Espinosa
 * @license  GPLv2 http://www.gnu.org/licenses/gpl-2.0.txt
 */

defined('ABSPATH') or die();

register_activation_hook(__FILE__, 'Form_init');

function Form_init()
{
    global $wpdb; //Acceder a la database de Wp
    $tabla_registros = $wpdb->prefix . 'participantes';
    $tabla_facturas = $wpdb->prefix . 'facturas';
    $tabla_codigos = $wpdb->prefix . 'codigos';
    $tabla_productos = $wpdb->prefix . 'productos';
    $view_registros = $wpdb->prefix . 'view_participates';

    $wpdb->query("CREATE TABLE IF NOT EXISTS $tabla_registros (
        PersonId int(9) NOT NULL AUTO_INCREMENT,
        nombre varchar(40) NOT NULL,
        apellido varchar(40) NOT NULL,
        cedula varchar(40) NOT NULL UNIQUE,
        telefono varchar(40) NOT NULL,
        correo varchar(100) NOT NULL,
        created_at datetime NOT NULL,
        account decimal(15,2) default 0.00,
        lastAddedCode datetime,
        facebookSharedCount int(100) default 0,
        PRIMARY KEY (PersonId)
        ) ENGINE = INNODB
          DEFAULT CHARACTER SET = utf8
          COLLATE = utf8_general_ci");

    $wpdb->query(
        "CREATE TABLE IF NOT EXISTS $tabla_facturas (
        FacId int NOT NULL AUTO_INCREMENT,
        FacNumber varchar(100) NOT NULL UNIQUE,
        PersonId int,
        created_at datetime NOT NULL,
        PdfLocation varchar(500) NOT NULL,
        valor decimal(15,2) NOT NULL,
        ciudad varchar(100) NOT NULL,
        estacion varchar(100) NOT NULL,
        voucherType varchar(100) default NULL,
        voucherLocation varchar(500) default NULL,
        PRIMARY KEY (FacId),
        FOREIGN KEY (PersonId) REFERENCES $tabla_registros(PersonId) 
    )   ENGINE = INNODB  
        DEFAULT CHARACTER SET = utf8
        COLLATE = utf8_general_ci"
    );
    $wpdb->query(
        "CREATE TABLE IF NOT EXISTS $tabla_codigos (
        codId int NOT NULL AUTO_INCREMENT,
        codNumber varchar(40) NOT NULL UNIQUE,
        created_at datetime NOT NULL,
        PersonId int NOT NULL,
        FacturaId int NOT NULL,
        socialPromo BOOLEAN,
        productPromo BOOLEAN,
        PRIMARY KEY (codId),
        FOREIGN KEY (PersonId) REFERENCES $tabla_registros(PersonId),
        FOREIGN KEY (FacturaId) REFERENCES $tabla_facturas(FacId)
    )   ENGINE = INNODB
        DEFAULT CHARACTER SET = utf8
        COLLATE = utf8_general_ci"
    );

    $wpdb->query(
        "CREATE TABLE IF NOT EXISTS $tabla_productos (
            prodId int NOT NULL AUTO_INCREMENT,
            evolt BOOLEAN,
            lubricante BOOLEAN,
            created_at datetime NOT NULL,
            PersonId int,
            FacturaId int,
            PRIMARY KEY (prodId),
            FOREIGN KEY (PersonId) REFERENCES $tabla_registros(PersonId),
            FOREIGN KEY (FacturaId) REFERENCES $tabla_facturas(FacId)
        )   ENGINE = INNODB
            DEFAULT CHARACTER SET = utf8
            COLLATE = utf8_general_ci"
    );

    $wpdb->query(
        "CREATE VIEW $view_registros AS SELECT p.nombre, p.apellido, p.cedula, p.telefono, p.correo, p.lastAddedCode, p.facebookSharedCount, x.dinero, 
        COUNT(c.codId) as codigos, y.evolt, y.lubri FROM wp_participantes p LEFT JOIN 
        (SELECT DISTINCT f.PersonId, SUM(f.valor) as dinero FROM wp_facturas f GROUP BY f.PersonId) AS x on 
        p.PersonId = x.PersonId LEFT JOIN wp_codigos c ON p.PersonId = c.PersonId LEFT JOIN(SELECT DISTINCT prod.PersonId, 
        SUM(prod.evolt) as evolt, SUM(prod.lubricante) as lubri FROM wp_productos prod GROUP BY prod.PersonId) as y on p.PersonId = y.PersonId GROUP BY p.PersonId;
        "
    );

    include_once ABSPATH . 'wp-admin/includes/upgrade.php';
    
}


add_shortcode('trade-form-login', 'Gb_Login_Form');

function Gb_Login_Form()
{
    wp_enqueue_script('js_form', plugins_url('js/form.js', __FILE__));
?>
    <form id="login-form" onsubmit="event.preventDefault(); submitLogin();">
        <input type="text" class="login-control-gb" id="cedulaLogin" name="cedulaLogin" placeholder="Ingresa tu cédula" required maxlength="10" minlength="10" pattern="\d*" />
        <button type="submit" id="loginButton" class="submitLogin">Participar</button>
    </form>
<?php
}

add_shortcode('trade-form-login2', 'Gb_Login_Form2');

function Gb_Login_Form2()
{
    wp_enqueue_script('js_form', plugins_url('js/form.js', __FILE__));
?>
    <form id="login-form2" onsubmit="event.preventDefault(); submitLogin2();">
        <input type="text" class="login-control-gb" id="cedulaLogin2" name="cedulaLogin" placeholder="Cédula" required maxlength="10" minlength="10" pattern="\d*" />
        <button type="submit" id="loginButton2" class="submitLogin">Participar</button>
    </form>
<?php
}

add_shortcode('trade-form-register', 'Gb_Register_Form');

function Gb_Register_Form()
{
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    wp_enqueue_style('css_form', plugins_url('css/form.css', __FILE__));
    wp_enqueue_script('js_form', plugins_url('js/form.js', __FILE__));
?>
    <form id="form-register" onsubmit="event.preventDefault(); submitRegister();">
        <div>
            <label>Nombre*</label>
            <input type="text" class="form-control-gb" id="nombre" name="nombre" placeholder="Nombre" required>
        </div>
        <div>
            <label>Apellido*</label>
            <input type="text" class="form-control-gb" id="apellido" name="apellido" placeholder="Apellido" required>
        </div>
        <div>
            <label>Email*</label>
            <input type="email" class="form-control-gb" id="correo" name="correo" placeholder="Correo electrónico" required>
        </div>
        <div>
            <label>Cédula*</label>
            <input type="text" class="form-control-gb" id="cedula" name="cedula" value="<?php echo $id; ?>" maxlength="10" minlength="10" pattern="\d*">
        </div>
        <div>
            <label>Teléfono*</label>
            <input class="form-control-gb" id="telefono" name="telefono" placeholder="Tel&eacute;fono" required type="text" maxlength="10" minlength="10" pattern="\d*">
        </div>
        <p>*Datos obligatorios
        </p>
        <div class="submitSection">
            <input type="checkbox" id="aceptacion" name="aceptacion" value="1" required>
            <p>He le&iacute;do y acepto los <a href="https://terpelsicumple.com/terminos-y-condiciones/" target="_blank" class="noLink">T&eacute;rminos y Condiciones.</a></p>
        </div>
        <button type="button" class="btn face" value="Registrame con Facebook" onClick="checkLoginState()"><img src="<?php bloginfo('template_directory'); ?>/assets/images/face.svg" alt="fb" /> Registrame con Facebook</button>
        <input type="submit" class="btn registerButton" value="Continuar">
        <p>
            ** Recuerda guardar tu factura original para reclamar tu premio.<br>
        </p>
    </form>
<?php

}

add_shortcode('trade-code-register', 'Gb_Code_Register');

function Gb_Code_Register()
{
    wp_enqueue_style('css_form', plugins_url('/css/form.css', __FILE__));
    wp_enqueue_script('js_form', plugins_url('/js/form.js', __FILE__));
?>
    <form id="form-code" onsubmit="event.preventDefault(); submitCode();" enctype="multipart/form-data">
        <label>Número de factura*</label>
        <input id="numFactura1" class="smallInput" name="numFactura1" placeholder="000" required type="text" maxlength="3" pattern="\d*" />
        <input id="numFactura2" class="smallInput" name="numFactura2" placeholder="000" required type="text" maxlength="3" pattern="\d*" />
        <input id="numFactura3" class="medInput" name="numFactura3" placeholder="000" required type="text" pattern="\d*" maxlength="30" />
        <label>Monto total de factura*</label>
        <input id="montoFactura" class="fullInput" name="montoFactura" placeholder="$0.00" type="number" required min="0.01" step="0.01" max="20000" />
        <label>Ciudad*</label>
        <select name="Cuidad" id="ciudad" class="fullInput" required>
            <option value="" disabled selected>Elegir</option>
            <option value="guayaquil">Guayaquil</option>
            <option value="quito">Quito</option>
            <option value="sto_domingo">Sto Domingo</option>
            <option value="ambato">Ambato</option>
            <option value="babahoyo">Babahoyo</option>
            <option value="ballenita">Ballenita</option>
            <option value="cuenca">Cuenca</option>
            <option value="duran">Duran</option>
            <option value="esmeraldas">Esmeraldas</option>
            <option value="el_carmen">El Carmen</option>
            <option value="el_coca">El Coca</option>
            <option value="ibarra">Ibarra</option>
            <option value="loja">Loja</option>
            <option value="machala">Machala</option>
            <option value="manta">Manta</option>
            <option value="montecristi">Montecristi</option>
            <option value="nobol">Nobol</option>
            <option value="posorja">Posorja</option>
            <option value="quevedo">Quevedo</option>
            <option value="riobamba">Riobamba</option>
            <option value="salinas">Salinas</option>
        </select>
        <label>Estación de servicio*</label>
        <select name="Estación de servicio*" id="fuel" class="fullInput" required>
            <option value="" disabled selected>Elegir</option>
        </select>
        <label>Carga tu factura*(png, jpg, pdf)</label>
        <input type="file" id="pdf" name="Factura Comercial" accept="pdf" required class="fullInput" placeholder="JPG, PNG, PDF..." max-file-size="1024" total-max-size="1024">
        <label>* Facturas de consumidor final no participan</label>
        <label>Obtén el doble de oportunidades si compraste:</label>
        <div class="productsCheck">
            <input type="checkbox" id="evolt" name="Evolt-t" value="evolt" name="product"><img src="<?php bloginfo('template_directory'); ?>/assets/images/evoltCheck.svg" />
            <input type="checkbox" id="lubricante" name="Lubricante" value="lubricante" name="product" class="marleft"><img src="<?php bloginfo('template_directory'); ?>/assets/images/mobilCheck.svg" /><br>
        </div>
        <label>Obtén el triple de oportunidades si compraste:</label>
        <div class="targets">
            <button type='button' onclick="removeVoucher()" id="reset" disabled><img src="<?php bloginfo('template_directory'); ?>/assets/images/recycle.png" alt="reset" /></button>
            <input type="radio" id="visa" name="target" value="visa">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/visatitanium.png" />
            <p>Visa Titanium</p><br>
            <input type="radio" id="discover" name="target" value="discover">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/discover.png" />
            <p>Discover</p><br>
            <input type="radio" id="diners" name="target" value="diners">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/dinersclub.png" />
            <p>Diners Club</p><br>
            <div class="voucher">
                <label>Carga tu voucher*(png, jpg, pdf)</label>
                <input type="file" id="pdfvoucher" name="Factura Comercial" accept="pdf" class="fullWidth" placeholder="JPG, PNG, PDF..." max-file-size="1024" total-max-size="1024">
            </div>
        </div>
        <input type="submit" class="redButton buttAlignCenter" id="sendCodeInput" value="Ingresar factura">
    </form>
<?php
}

add_shortcode('trade-dashboard', 'Gb_Dashboard');

function Gb_Dashboard()
{
    global $wpdb; //Acceder a la database de Wp

    $tabla_registros = $wpdb->prefix . 'participantes';
    $tabla_facturas = $wpdb->prefix . 'facturas';
    $tabla_codigos = $wpdb->prefix . 'codigos';
    $tabla_productos = $wpdb->prefix . 'productos';
    $view_registros = $wpdb->prefix . 'view_participates';

    $title = 'Datos generales';

    $table = $wpdb->get_results("SELECT * FROM $view_registros WHERE lastAddedCode IS NOT NULL LIMIT 100000;");
    
    $count = $wpdb->num_rows;

    $CountFac = $wpdb->get_var("SELECT SUM(codigos) FROM $view_registros LIMIT 100000;");

    $CountQuantFac = $wpdb->get_var("SELECT COUNT(*) FROM $tabla_facturas;");
    
    $CountMoney = $wpdb->get_var("SELECT SUM(dinero) FROM $view_registros LIMIT 100000;");

    $CountFace = $wpdb->get_var("SELECT SUM(facebookSharedCount) FROM $view_registros LIMIT 100000;");

    $CountEvolt = $wpdb->get_var("SELECT SUM(evolt) FROM $view_registros LIMIT 100000;");

    $CountLubri = $wpdb->get_var("SELECT SUM(lubri) FROM $view_registros LIMIT 100000;");

    $citiesTable = $wpdb->get_results("SELECT f.ciudad, COUNT(f.ciudad) as ctCity FROM $tabla_facturas f GROUP BY f.ciudad ORDER BY `ctCity` DESC LIMIT 100000");

    $cardsTable  =  $wpdb->get_results("SELECT COALESCE(f.voucherType,'otro') as cd, COUNT(f.voucherType) as ctCard, SUM(f.valor) as dinero FROM $tabla_facturas f GROUP BY f.voucherType ORDER BY `ctCard` DESC LIMIT 100000;");
    
    $esTable = $wpdb->get_results("SELECT f.estacion, COUNT(f.estacion) as estac FROM $tabla_facturas f GROUP BY f.estacion ORDER BY `estac` DESC LIMIT 100000");
    
    $particTables = $wpdb->get_results("SELECT * FROM $tabla_registros LIMIT 100000");
    
    $partCount = $wpdb->num_rows;

    if (!empty($_POST)) {
        $Udate = sanitize_text_field($_POST['datePicker']);
        $Date = explode(" - ", $Udate);
        list($m1, $d1, $y1) = explode("/", $Date[0]);
        list($m2, $d2, $y2) = explode("/", $Date[1]);
        $initDate = "$y1/$m1/$d1";
        $endDate = "$y2/$m2/$d2";
        $table = $wpdb->get_results("SELECT * FROM $view_registros WHERE $view_registros.lastAddedCode BETWEEN '$initDate' AND '$endDate'");
        $count = $wpdb->num_rows;

        $CountFac = $wpdb->get_var("SELECT SUM(codigos) FROM $view_registros WHERE $view_registros.lastAddedCode BETWEEN '$initDate' AND '$endDate'");

        $CountQuantFac = $wpdb->get_var("SELECT COUNT(*) FROM $tabla_facturas WHERE $tabla_facturas.created_at BETWEEN '$initDate' AND '$endDate';");

        $CountMoney = $wpdb->get_var("SELECT SUM(dinero) FROM $view_registros WHERE $view_registros.lastAddedCode BETWEEN '$initDate' AND '$endDate';");

        $CountFace = $wpdb->get_var("SELECT SUM(facebookSharedCount) FROM $view_registros WHERE $view_registros.lastAddedCode BETWEEN '$initDate' AND '$endDate';");

        $CountEvolt = $wpdb->get_var("SELECT SUM(evolt) FROM $view_registros WHERE $view_registros.lastAddedCode BETWEEN '$initDate' AND '$endDate';");

        $CountLubri = $wpdb->get_var("SELECT SUM(lubri) FROM $view_registros WHERE $view_registros.lastAddedCode BETWEEN '$initDate' AND '$endDate';");

        $citiesTable = $wpdb->get_results("SELECT f.ciudad, COUNT(f.ciudad) as ctCity FROM $tabla_facturas f WHERE f.created_at BETWEEN '$initDate' AND '$endDate' GROUP BY f.ciudad ORDER BY `ctCity` DESC");

        $cardsTable  =  $wpdb->get_results("SELECT COALESCE(f.voucherType,'Otro') as cd, COUNT(f.voucherType) as ctCard, SUM(f.valor) as dinero FROM $tabla_facturas f WHERE f.created_at BETWEEN '$initDate' AND '$endDate' GROUP BY f.voucherType ORDER BY `ctCard` DESC;");

        $esTable = $wpdb->get_results("SELECT f.estacion, COUNT(f.estacion) as estac FROM $tabla_facturas f WHERE f.created_at BETWEEN '$initDate' AND '$endDate' GROUP BY f.estacion ORDER BY `estac` DESC LIMIT 100000");
        
        $particTables = $wpdb->get_results("SELECT * FROM $tabla_registros p WHERE p.created_at BETWEEN '$initDate' AND '$endDate' LIMIT 100000");
        
        $partCount = $wpdb->num_rows;
        
        $title = "Datos filtrados del $initDate al $endDate";
    }

    wp_enqueue_style('css_form', plugins_url('css/form.css', __FILE__));
    wp_enqueue_script('js_form', plugins_url('js/form.js', __FILE__));
?>
    <?php wp_nonce_field('graba_registro', 'registro_nonce'); ?>
    <div class="container dashboard">
        <h1><?php echo $title; ?></h1>
        <div class="row ">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <form id="form-register" method="post">
                    <label>Fecha:</label>
                    <input type="text" id="datePicker" name="datePicker" min="2021-09-01" max="2022-03-31">
                    <button type="submit">Buscar</button>
                </form><br>
            </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row secondBoxes">
            <div class="col-sm-2">
                
            </div>
            <div class="col-sm-4 red">
                <h4>Participantes inscritos</h4>
                <h2><?php echo $partCount; ?></h2>
            </div>
            <div class="col-sm-4 yellow">
                <h4>Facturas registradas</h4>
                <h2><?php echo $CountQuantFac; ?></h2>
            </div>
            <div class="col-sm-2">
                
            </div>
        </div>
        <div class="row firstBoxes">
            <div class="col-sm-4 blue">
                <h4>Participantes que ingresaron factura</h4>
                <h2><?php echo $count; ?></h2>
            </div>
            <div class="col-sm-4 purple">
                <h4>Códigos emitidos</h4>
                <h2><?php echo $CountFac; ?></h2>
            </div>
            <div class="col-sm-4 pink">
                <h4>Dinero Registrado</h4>
                <h2>$<?php echo $CountMoney; ?></h2>
            </div>
        </div>
        <div class="row secondBoxes">
            <div class="col-sm-4 pink">
                <h4>Compartidas en Facebook</h4>
                <h2><?php echo $CountFace; ?></h2>
            </div>
            <div class="col-sm-4 red">
                <h4>N Veces agregado evolt-t</h4>
                <h2><?php echo $CountEvolt; ?></h2>
            </div>
            <div class="col-sm-4 yellow">
                <h4>N Veces agregado Mobil</h4>
                <h2><?php echo $CountLubri; ?></h2>
            </div>
        </div>
        <div class="row smallTables">
            <div class="col-sm-4 purple">
                <h5>Ciudades</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Ciudad</th>
                            <th>Facturas</th>
                        </tr>
                    <tbody>
                        <?php
                        foreach ($citiesTable as $ct) {
                            $ciudad = ucfirst(esc_textarea($ct->ciudad));
                            $countCt = esc_textarea($ct->ctCity);
                            echo "<tr><td>$ciudad</td>";
                            echo "<td>$countCt</td></tr>";
                        }
                        ?>
                    </tbody>
                    </thead>
                </table>
            </div>
            <div class="col-sm-4 blue">
                <h5>Tarjetas</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Tarjeta</th>
                            <th>Cuenta</th>
                            <th>Dinero</th>
                        </tr>
                    <tbody class="targetTbDash">
                        <?php
                        foreach ($cardsTable as $cat) {
                            $cd = ucfirst(esc_textarea($cat->cd));
                            $ctCard = esc_textarea($cat->ctCard);
                            $money = esc_textarea($cat->dinero);
                            echo "<tr><td>$cd</td>";
                            echo "<td>$ctCard</td>";
                            echo "<td>$$money</td></tr>";
                        }
                        ?>
                    </tbody>
                    </thead>
                </table>
            </div>
            <div class="col-sm-4 pink">
                                <h5>Est. Servicio</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Estación</th>
                            <th>Facturas</th>
                        </tr>
                    <tbody>
                        <?php
                        foreach ($esTable as $cat2) {
                            $est = esc_textarea($cat2->estacion);
                            $ctEst = esc_textarea($cat2->estac);
                            echo "<tr><td>$est</td>";
                            echo "<td>$ctEst</td></tr>";
                        }
                        ?>
                    </tbody>
                    </thead>
                </table>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-12">
            <div class="participantsTable">
                <h3>Lista de participantes</h3>
                <button onclick="exportTable()">Exportar tabla</button>
                <?php
                echo '<table class="table" id="mainTableGb">';
                echo '<thead><tr><th>Nombre</th><th>';
                echo 'Apellido</th><th>';
                echo 'Cedula</th><th>';
                echo 'Telefono</th><th>';
                echo 'Correo</th><th>';
                echo 'Ultima Fecha de Registro Factura</th><th>';
                echo 'Veces que ha compartido en Facebook</th><th>';
                echo 'Dinero Gastado</th><th>';
                echo 'Numero de Códigos</th><th>';
                echo 'Veces que ha adquirido Evolt-t</th><th>';
                echo 'Veces que ha adquirido Mobil</th></tr></thead>';
                echo '<tbody id="list">';

                foreach ($table as $tb) {
                    $nombre = esc_textarea($tb->nombre);
                    $apellido = esc_textarea($tb->apellido);
                    $cedula = (int)$tb->cedula;
                    $telefono = esc_textarea($tb->telefono);
                    $correo = esc_textarea($tb->correo);
                    $lastAdded = esc_textarea($tb->lastAddedCode);
                    $facebook = esc_textarea($tb->facebookSharedCount);
                    $dinero = esc_textarea($tb->dinero);
                    $codes = esc_textarea($tb->codigos);
                    $evolt = esc_textarea($tb->evolt);
                    $lubri = esc_textarea($tb->lubri);

                    echo "<tr><td><a href='https://terpelsicumple.com/facturas/?user=$cedula'>$nombre</a></td>";
                    echo "<td>$apellido</td>";
                    echo "<td>$cedula</td>";
                    echo "<td>$telefono</td>";
                    echo "<td>$correo</td>";
                    echo "<td>$lastAdded</td>";
                    echo "<td>$facebook</td>";
                    echo "<td>$dinero</td>";
                    echo "<td>$codes</td>";
                    echo "<td>$evolt</td>";
                    echo "<td>$lubri</td></tr>";
                }
                echo '</tbody></table></div>';
                ?>
            </div>
        </div>
    </div>
<?php
}

add_shortcode('trade-mails', 'Gb_Mails');

function Gb_Mails()
{
    global $wpdb; //Acceder a la database de Wp

    $tabla_registros = $wpdb->prefix . 'participantes';
    $tabla_facturas = $wpdb->prefix . 'facturas';
    $tabla_codigos = $wpdb->prefix . 'codigos';
    $tabla_productos = $wpdb->prefix . 'productos';
    $view_registros = $wpdb->prefix . 'view_participates';


    $fiveDays = $wpdb->get_results("SELECT p.nombre, p.correo, COUNT(c.codId) as codigos, p.account as account from $tabla_registros p LEFT JOIN $tabla_codigos c ON p.PersonId = c.PersonId WHERE DATEDIFF(now(), p.lastAddedCode) = 5 GROUP BY p.PersonId;");
    $fiveCount = $wpdb->num_rows;

    $tenDays = $wpdb->get_results("SELECT p.nombre, p.correo, COUNT(c.codId) as codigos, p.account as account from $tabla_registros p LEFT JOIN $tabla_codigos c ON p.PersonId = c.PersonId WHERE DATEDIFF(now(), p.lastAddedCode) = 10 GROUP BY p.PersonId;");
    $tenCount = $wpdb->num_rows;

    $users = $wpdb->get_results("SELECT * FROM $view_registros LIMIT 100000;");
    $usersCount = $wpdb->num_rows;

    wp_enqueue_style('css_form', plugins_url('css/form.css', __FILE__));
    wp_enqueue_script('js_form', plugins_url('js/form.js', __FILE__));
?>
    <div class="container mails">
        <div class="row">
            <div class="col-sm-6">
                <h3>Correo 5 dias</h3>
                <p>Usuarios dentro del filtro: <?php echo $fiveCount; ?></p>
                <button onclick="submit5mails()">Enviar Correo</button>
            </div>
            <div class="col-sm-6">
                <h3>Correo 10 dias</h3>
                <p>Usuarios dentro del filtro: <?php echo $tenCount; ?></p>
                <button onclick="submit10mails()">Enviar Correo</button>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
                <h3>Correo de ganadores</h3>
                <p>Usuarios dentro del filtro: <?php echo $usersCount; ?></p>
                <label>Lista de ganadores semanales<br><span>(separar por coma cada ganador)</span></label><br>
                <textarea name="textarea" rows="10" cols="30" id="winArray" wrap="hard">

                </textarea>
                <button onclick="sendWiners()">Enviar</button>
            </div>
            <div class="col-sm-4">
            </div>
        </div>
    </div>
<?php
}

add_shortcode('trade-codigos-all', 'Gb_Codigos');

function Gb_Codigos()
{
    global $wpdb; //Acceder a la database de Wp

    $tabla_registros = $wpdb->prefix . 'participantes';
    $tabla_codigos = $wpdb->prefix . 'codigos';

    $totalCount = $wpdb->get_var("SELECT COUNT(*) FROM $tabla_codigos");


    // build query
    $page = 1;
    $incomePage = $_GET['pagina'];

    $convertedIncomePage = strval($incomePage);

    if (!empty($_GET['pagina'])) {
        $page =  $convertedIncomePage;
        if (false === $page) {
            $page = 1;
        }
    }

    $items_per_page = 10000;

    $offset = ($page - 1) * $items_per_page;

    $page_count = 0;

    if (0 === $totalCount) {
        // maybe show some error since there is nothing in your table
    } else {
        // determine page_count
        $page_count = (int)ceil($totalCount / $items_per_page);
        // double check that request page is in range
        if ($page > $page_count) {
            // error to user, maybe set page to 1
            $page = 1;
        }
    }

    $table = $wpdb->get_results("SELECT * FROM $tabla_codigos LEFT JOIN $tabla_registros ON $tabla_codigos.PersonId = $tabla_registros.PersonId LIMIT $offset,$items_per_page");
    $partialCount = $wpdb->num_rows;

    wp_enqueue_style('css_form', plugins_url('css/form.css', __FILE__));
    wp_enqueue_script('js_form', plugins_url('js/form.js', __FILE__));?>
    <div class="col-12">
        <?php
        echo "<ul class='pagination'>";
        for ($i = 1; $i <= $page_count; $i++) {
            if ($i === $page) { // this is current page
                echo '<h3>Page ' . $i .'</h3>'.'<br>';
            } else { // show link to other page   
                echo '<li><a href="https://terpelsicumple.com/codigos/?pagina=' . $i . '">Page ' . $i . '</a></li>';
            }
        }
        echo '</ul>'
        ?>
        <br>
        <h3>Codigos Registrados Totales <?php echo $totalCount; ?></h3>
        <h3>Codigos en pantalla <?php echo $partialCount; ?></h3>
        <div>
            <button onclick="exportTableBackend()">Descargar csv</button>
        </div>
        <?php
        echo '<table class="table" id="mainTableGb">';
        echo '<thead><tr><th>Codigo</th><th>';
        echo 'Nombre</th><th>';
        echo 'Apellido</th><th>';
        echo 'Cedula</th><th>';
        echo 'Telefono</th><th>';
        echo 'correo</th></tr></thead>';
        echo '<tbody id="list">';

        foreach ($table as $tb) {
            $codNumber = esc_textarea($tb->codNumber);
            $nombre = esc_textarea($tb->nombre);
            $apellido = esc_textarea($tb->apellido);
            $cedula = (int)$tb->cedula;
            $telefono = esc_textarea($tb->telefono);
            $correo = esc_textarea($tb->correo);
            echo "<tr><td>$codNumber</td>";
            echo "<td>$nombre</td>";
            echo "<td>$apellido</td>";
            echo "<td>$cedula</td>";
            echo "<td>$telefono</td>";
            echo "<td>$correo</td></tr>";
        }
        echo '</tbody></table></div>';
        ?>
    </div>
<?php
}
