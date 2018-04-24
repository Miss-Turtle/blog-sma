<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

remove_action('wp_head', 'wp_generator');

add_filter('login_errors',create_function('$a', "return null;"));