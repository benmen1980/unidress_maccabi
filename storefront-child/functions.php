<?php
/**
 * @package storefront
 * @author KK
 * storefront child theme by Narola
 */

function my_custom_scripts() {
    wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery' ),'',true );
}
add_action( 'wp_enqueue_scripts', 'my_custom_scripts' );

//add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
  show_admin_bar(false);

}