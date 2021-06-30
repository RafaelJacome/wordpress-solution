<?php
function add_child_theme_scripts() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri(). "/dist/css/storefront-child-theme.css", false, 1.0, 'all');
    wp_enqueue_script( 'child-script', get_stylesheet_directory_uri() . '/dist/js/main.js', array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'add_child_theme_scripts' );