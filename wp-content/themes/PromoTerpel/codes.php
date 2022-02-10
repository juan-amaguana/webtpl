<?php
/* Template Name: All Codes Table
*/

get_header(); ?>
    <div class="headerRed">
        <a href="<?php echo get_site_url(); ?>">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/PromoTerpel/assets/images/terpelLogo.svg" alt="terpelLogo">
        </a>
    </div>
<div class="wrap">
    <div class="row">
        <?php echo do_shortcode('[trade-codigos-all]') ?>
    </div>
</div>
<?php wp_footer(); ?>
</body>

</html>