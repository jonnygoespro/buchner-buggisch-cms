<?php
function wpdocs_theme_name_scripts() {

    wp_enqueue_style('style', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts', 'wpdocs_theme_name_scripts');

function cc_mime_types($mimes) {
    $mimes['svg'] = "image/svg+xml";
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_theme_support('post-thumbnails');

?>