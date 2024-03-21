<?php
/**
 * Plugin Name:     Recranet Booking Elements plugin
 * Plugin URI:      https://help.recranet.com/
 * Description:     Recranet Booking Elements plugin
 * Author:          Recranet Booking
 * Author URI:      https://help.recranet.com/
 * Text Domain:     recranet-elements-wordpress
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Recranet_Elements_Wordpress
 */

// https://wordpress.stackexchange.com/questions/92103/disable-wordpress-url-auto-complete
remove_action( 'template_redirect', 'redirect_canonical' );

// https://developer.wordpress.org/reference/functions/__return_false/
add_filter( 'redirect_canonical', '__return_false' );
add_filter( 'wpseo_canonical', '__return_false' );

// Add recranet base tag
function recranet_add_base_tag() {
    global $post;

    if ( is_a( $post, 'WP_Post' ) &&
        ( has_shortcode( $post->post_content, 'recranet_accommodations' ) || has_shortcode( $post->post_content, 'recranet_packages' ) ) ) {
        echo '<base href="' . get_permalink() . '" />';
    }
}

add_action( 'wp_head', 'recranet_add_base_tag' );

// Add recranet accommodations shortcode
function recranet_accommodations( $atts ) {
    return '<recranet-accommodations class="recranet-element"></recranet-accommodations>';
}

add_shortcode( 'recranet_accommodations', 'recranet_accommodations' );

// Add recranet packages shortcode
function recranet_packages( $atts ) {
    return '<recranet-packages class="recranet-element"></recranet-packages>';
}

add_shortcode( 'recranet_packages', 'recranet_packages' );
