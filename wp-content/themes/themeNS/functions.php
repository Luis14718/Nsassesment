<?php
//Post Type 
require get_template_directory() . '/Post_types/index.php';
//ACFs
require get_template_directory() . '/ACF/index.php';


add_action( 'wp_enqueue_scripts', 'my_enqueue_theme_js' );
function my_enqueue_theme_js() {
  wp_enqueue_script(
    'my-theme-frontend',
    get_stylesheet_directory_uri() . 'ns-frontend/build/index.js',
    ['wp-element'],
    time(), // Change this to null for production
    true
  );
}