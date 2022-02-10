<?php
/* Template Name: Mails Page
*/
$isAuth = is_user_logged_in();
if (!$isAuth) {
    $url = "https://terpelsicumple.com/";
    wp_redirect($url);
    exit;
}
get_header(); ?>
<section id="mails" class="main-section">
    <div class="header">
        <a href="<?php echo get_site_url(); ?>">
            <img src="<?php bloginfo('template_directory'); ?>/assets/images/logoTerpel.svg" alt="logoTerpel" />
        </a>
        <div class="headEndCont">
            <p>Only Admin</p>
        </div>
    </div>
    <?php echo do_shortcode('[trade-mails]'); ?>
</section>
<?php get_footer(); ?>
</body>

</html>