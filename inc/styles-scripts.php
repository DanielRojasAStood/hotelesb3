<?php

// Register webpack compiled js and css with theme
function enqueue_webpack_scripts() {
    $cssFilePaths = glob(get_stylesheet_directory() . '/css/build/main.min.*.css');
    if (!empty($cssFilePaths)) { // Verifica que el array no esté vacío
        $cssFileURI = get_stylesheet_directory_uri() . '/css/build/' . basename($cssFilePaths[0]);
        wp_enqueue_style('main_css', $cssFileURI);
    }

    $jsFilePaths = glob(get_stylesheet_directory() . '/js/build/main.min.*.js');
    if (!empty($jsFilePaths)) { // Verifica que el array no esté vacío
        $jsFileURI = get_stylesheet_directory_uri() . '/js/build/' . basename($jsFilePaths[0]);
        wp_enqueue_script('main_js', $jsFileURI, null, null, true);
    }
}

add_action('wp_enqueue_scripts', 'enqueue_webpack_scripts');


