<?php
/*
* Enqueue script styles
*/
    require get_template_directory() . '/inc/enqueue.php';
        
// Function to change email address
function wpb_sender_email( $original_email_address ) {
    return 'terpel@terpelsicumple.com';
}
 
// Function to change sender name
function wpb_sender_name( $original_email_from ) {
    return 'Terpel';
}
 
// Hooking up our functions to WordPress filters 
add_filter( 'wp_mail_from', 'wpb_sender_email' );
add_filter( 'wp_mail_from_name', 'wpb_sender_name' );