<?php
/**
Plugin Name: Custom Gutemberg Block
 */

add_action( 'after_setup_theme', 'thfo_load' );
function thfo_load() {
    require_once( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
    include_once plugin_dir_path( __FILE__ ).'/block.php';
    new blockGutenberg();
}

add_action('init', 'register_script');
function register_script() {
    wp_register_style( 'new_style', plugins_url('/css/style.css', __FILE__), false, '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'enqueue_style');
function enqueue_style(){
    wp_enqueue_style( 'new_style' );
}