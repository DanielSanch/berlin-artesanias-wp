<?php
/**
 * Berlin Artesanias Theme functions and definitions
 */

if ( ! function_exists( 'berlin_artesanias_setup' ) ) :
    function berlin_artesanias_setup() {
        add_theme_support( 'woocommerce' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
    }
endif;
add_action( 'after_setup_theme', 'berlin_artesanias_setup' );

// Enqueue styles and scripts
function berlin_artesanias_scripts() {
    wp_enqueue_style( 'berlin-artesanias-style', get_stylesheet_uri() );
    // We will enqueue the customizer script here later
}
add_action( 'wp_enqueue_scripts', 'berlin_artesanias_scripts' );
