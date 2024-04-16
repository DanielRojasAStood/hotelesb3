<?php
// Agregar titulo a logo
function add_title_to_custom_logo_image($html) {
    $site_name = get_bloginfo('name');
    $html = preg_replace('/<img(.*?)(\/>)/', '<img$1 title="' . esc_attr($site_name) . '" $2', $html);
    return $html;
}
add_filter('get_custom_logo', 'add_title_to_custom_logo_image');

// Agregar múltiples ubicaciones de menú
function mytheme_register_menus() {
    register_nav_menus(array(
        'button-translate' => __('Boton Idioma'),
    ));
}
add_action('after_setup_theme', 'mytheme_register_menus');

// Subir SVG
function allow_svg_upload( $mimes ) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'allow_svg_upload' );

add_image_size( 'slider-size', 1600, 1068, true );


