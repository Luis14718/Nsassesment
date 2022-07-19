<?php
//Post Type 
require get_template_directory() . '/Post_types/index.php';
//ACFs
require get_template_directory() . '/ACF/index.php';

function wpb_custom_new_menu() 
{
  register_nav_menus(
    array(
      'my-custom-menu'=> __ ( 'Ns Menu'),
      'extra-menu'=> __('Extra Menu'),
    )
  );
}
add_action('init','wpb_custom_new_menu');

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


add_filter( 'acf/settings/rest_api_format', function () {
  return 'standard';
} );
add_filter( 'acf_photo_gallery_caption_from_attachment', '__return_true' );


function custom_wp_menu() {
  // Replace your menu name, slug or ID carefully
  return wp_get_nav_menu_items('primary');
}

// create new endpoint route
add_action( 'rest_api_init', function () {
  register_rest_route( 'wp/v2', 'menu', array(
      'methods' => 'GET',
      'callback' => 'custom_wp_menu',
  ) );
} );