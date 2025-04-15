<?php
/**
 * TheSource theme functions and definitions
 */

// Theme setup
function thesource_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'thesource_setup');

// Enqueue scripts and styles
function thesource_scripts() {
    wp_enqueue_style('thesource-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'thesource_scripts');
