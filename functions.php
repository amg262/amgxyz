<?php
/**
* Enqueueing master stylesheet
*/
add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme' );

function enqueue_parent_theme() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}


/**
* Additional image sizes
*/
add_action( 'after_setup_theme', 'child_image_sizes' );

function child_image_sizes() {
    add_image_size( 'single-thumb', 600, 450, false ); // 300 pixels wide (and unlimited height)
    add_image_size( 'single-thumb-cropped', 500, 350, false ); // (cropped)
}

/**
* ACF options page
*/
if(function_exists('acf_add_options_page')) { 
  acf_add_options_page();
}

