<?php
/**
 * Plugin Name: Personalizador Berlín Artesanías
 * Plugin URI: https://github.com/DanielSanch/berlin-personalizador
 * Description: Generador de vectores SVG en curvas para corte láser usando Fabric.js.
 * Version: 1.0.0
 * Author: Daniel Sanchez
 * Author URI: https://www.linkedin.com/in/danielsanch/
 * License: GPL2
 */

// Si alguien intenta acceder directamente al archivo, abortamos.
if (!defined('ABSPATH')) {
    exit;
}

// Cargar Fabric.js y scripts del personalizador
function berlin_personalizador_scripts()
{
    // Registrar Fabric.js desde CDN para empezar, luego podemos moverlo a local
    wp_enqueue_script('fabric-js', 'https://cdnjs.cloudflare.com/ajax/libs/fabric.js/5.3.1/fabric.min.js', array(), '5.3.1', true);

    // Nuestro script personalizado
    wp_enqueue_script('berlin-customizer-js', plugin_dir_url(__FILE__) . 'js/customizer.js', array('fabric-js'), '1.0.0', true);

    // Estilos
    wp_enqueue_style('berlin-customizer-style', plugin_dir_url(__FILE__) . 'css/customizer.css', array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'berlin_personalizador_scripts');

// Shortcode para mostrar el personalizador en cualquier página o producto
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
