<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );    
    wp_register_style('prism-style', get_stylesheet_directory_uri() . '/prism/prism.css');
    wp_enqueue_style('prism-style');
}

add_action('wp_enqueue_scripts', 'theme_enqueue_script');
function theme_enqueue_script(){
    wp_register_script('prism-js', get_stylesheet_directory_uri() . '/prism/prism.js');
    wp_enqueue_script('prism-js');
}

remove_action('wp_head', 'wp_generator');

add_filter('login_errors',create_function('$a', "return null;"));