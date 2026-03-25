<?php
// Setup basic theme support
function agency_starter_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption', 'style', 'script' ) );
}
add_action( 'after_setup_theme', 'agency_starter_setup' );

// Enqueue scripts and styles
function agency_starter_scripts() {
    wp_enqueue_style( 'agency-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'agency_starter_scripts' );
?>
