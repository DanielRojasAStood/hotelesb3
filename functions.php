<?php
/**
 * Recommended way to include parent theme styles and child theme files.
 */  

defined('ABSPATH') || exit;

// Enqueue parent and child theme styles.
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_style' );
function hello_elementor_child_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
}

/**
 * Your code goes below.
 */

define('URL_BASE', get_stylesheet_directory_uri() . '/');
define('IMG_BASE', URL_BASE . 'img/');

// Correcting the path to include files from the child theme directory
$incPath = get_stylesheet_directory() . '/inc/';
$requiredFiles = ['theme-setup.php', 'styles-scripts.php'];

foreach ($requiredFiles as $file) {
    $filePath = $incPath . $file;
    if (file_exists($filePath)) {
        require_once($filePath);
    } else {
        error_log('Failed to load ' . $file . ' from child theme.');
    }
}
