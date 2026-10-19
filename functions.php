<?php
if (!defined('ABSPATH')) {
    exit;
}

function white_panda_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'white_panda_theme_setup');

// Desactivar estilos de bloques y globales de WordPress que puedan sobrescribir estilos de Tailwind
function white_panda_cleanup_scripts() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('classic-theme-styles');
    wp_dequeue_style('global-styles');
}
add_action('wp_enqueue_scripts', 'white_panda_cleanup_scripts', 100);
