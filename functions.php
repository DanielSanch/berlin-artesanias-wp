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

    // --- Berlin Personalizer Integration ---
    // Only load if we are on the page with the shortcode or needed (simplified for now to load always or check if needed)
    wp_enqueue_script('fabric-js', 'https://cdnjs.cloudflare.com/ajax/libs/fabric.js/5.3.1/fabric.min.js', array(), '5.3.1', true);
    wp_enqueue_script('berlin-customizer-js', get_template_directory_uri() . '/assets/customizer/js/customizer.js', array('fabric-js'), '1.0.1', true);
    wp_enqueue_style('berlin-customizer-style', get_template_directory_uri() . '/assets/customizer/css/customizer.css', array(), '1.0.1');
}
add_action('wp_enqueue_scripts', 'berlin_theme_scripts');

/**
 * Berlin Customizer Shortcode
 */
function berlin_mostrar_personalizador()
{
    ob_start();
    ?>
    <div id="berlin-personalizador-container" class="berlin-premium-ui">
        <div class="canvas-wrapper">
            <canvas id="berlin-canvas" width="500" height="500"></canvas>
        </div>
        <div class="controls-wrapper">
            <h3>Personaliza tu Artesanía</h3>
            <div class="control-group">
                <label>Texto para grabado:</label>
                <input type="text" id="gravado-text" placeholder="Escribe aquí...">
                <button id="add-text-btn">Añadir Texto</button>
            </div>
            <div class="control-group">
                <label>Color de base:</label>
                <div class="color-options">
                    <span class="color-dot" data-color="#5D4037" style="background: #5D4037;"></span>
                    <span class="color-dot" data-color="#8D6E63" style="background: #8D6E63;"></span>
                    <span class="color-dot" data-color="#D7CCC8" style="background: #D7CCC8;"></span>
                </div>
            </div>
            <button id="export-svg" class="btn-premium">Descargar SVG para Láser</button>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('berlin_personalizador', 'berlin_mostrar_personalizador');
