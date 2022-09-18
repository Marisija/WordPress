<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );


add_filter('gettext', 'change_relatedproducts_text', 10, 3); 
function change_relatedproducts_text($new_text, $related_text, $source) 
        { 
        if ($related_text === 'Related products' && $source === 'woocommerce') 
        { $new_text = esc_html__('From collection:', $source);
 } 
      
        return $new_text; 
}

add_action('woocommerce_after_add_to_cart_form', 'text');
function text()
{
    echo 'Check the size chart';
}


add_filter('astra_single_post_navigation_enabled', '__return_false');