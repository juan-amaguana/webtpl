<?php
/* Template Name: Dashboard Page
*/
//SELECT p.nombre, x.dinero, COUNT(c.codId), y.evolt, y.lubri FROM wp_participantes p LEFT JOIN (SELECT DISTINCT f.PersonId, SUM(f.valor) as dinero FROM wp_facturas f GROUP BY f.PersonId) AS x on p.PersonId = x.PersonId LEFT JOIN wp_codigos c ON p.PersonId = c.PersonId LEFT JOIN(SELECT DISTINCT prod.PersonId, SUM(prod.evolt) as evolt, SUM(prod.lubricante) as lubri FROM wp_productos prod GROUP BY prod.PersonId) as y on p.PersonId = y.PersonId GROUP BY p.PersonId;



get_header(); ?>

<section id="userPortal" >
    <div class="headerRed">
        <a href="<?php echo get_site_url(); ?>">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/PromoTerpel/assets/images/terpelLogo.svg" alt="terpelLogo">
        </a>
    </div>
<?php echo do_shortcode('[trade-dashboard]'); ?>

<?php wp_footer(); ?>
</section>
<?php get_footer(); ?>
</body>

</html>