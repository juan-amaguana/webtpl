<?php

function landing_add_theme_scripts(){
        
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css',false,'2.0','all' );

    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'landing_add_theme_scripts' )  ;

?>
