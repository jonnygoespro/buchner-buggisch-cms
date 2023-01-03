<?php
function wpdocs_theme_name_scripts() {

    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script( 'main', get_template_directory_uri() . '/main.js', array(), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'wpdocs_theme_name_scripts');

function cc_mime_types($mimes) {
    $mimes['svg'] = "image/svg+xml";
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_theme_support('post-thumbnails');

?>