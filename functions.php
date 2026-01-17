<?php
/**
 * Berlin Artesanias Theme functions and definitions
 */

function berlin_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'berlin_theme_setup');

// Aquí podrías añadir scripts personalizados en el futuro
function berlin_theme_scripts()
{
    // Tailwind ya lo cargamos en el header vía CDN para mantener el estilo original
}
add_action('wp_enqueue_scripts', 'berlin_theme_scripts');
