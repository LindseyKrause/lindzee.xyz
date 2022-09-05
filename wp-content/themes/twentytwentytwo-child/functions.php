<?php
add_action( 'wp_enqueue_scripts', 'twentytwentytwo_child_scripts' );
/**
 * Loads child styles
 */
function twentytwentytwo_child_scripts(){
    wp_enqueue_style( 'child-styles', get_stylesheet_uri(), array( 'twentytwentytwo-style' ) );
}
