<?php

/////// post type : PODCAST 

function create_posttype() {
register_post_type( 'Podcast',
// CPT Options

array(
  'labels' => array(
   'name' => __( 'Podcast' ),
   'singular_name' => __( 'Podcast' )
  ),
  'public' => true,
  'has_archive' => false,
  'rewrite' => array('slug' => 'Podcast'),
 )
);
}
// add_action to add  function to the init at wp initialization 
add_action( 'init', 'create_posttype' );

function cw_post_type_Podcast() {
    $supports = array(
    'title', 
    'editor',
    'post-formats', 
    );
    $labels = array(
    'name' => _x('Podcast', 'plural'),
    'singular_name' => _x('Podcast', 'singular'),
    'menu_name' => _x('Podcast', 'admin menu'),
    'name_admin_bar' => _x('Podcast', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Podcast'),
    'new_item' => __('New Podcast'),
    'edit_item' => __('Edit Podcast'),
    'view_item' => __('View Podcast'),
    'all_items' => __('All Podcast'),
    'search_items' => __('Search Podcast'),
    'not_found' => __('No Podcast found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'Podcast'),
    'has_archive' => true,
    'hierarchical' => false,
    );
    register_post_type('Podcast', $args);
    }
    add_action('init', 'cw_post_type_Podcast');