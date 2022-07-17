<?php

/////// post type : Blog 



function cw_post_type_Blog() {
    $supports = array(
    'title', 
    'editor',
    'post-formats', 
    );
    $labels = array(
    'name' => _x('Blog', 'plural'),
    'singular_name' => _x('Blog', 'singular'),
    'menu_name' => _x('Blog', 'admin menu'),
    'name_admin_bar' => _x('Blog', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Blog'),
    'new_item' => __('New Blog'),
    'edit_item' => __('Edit Blog'),
    'view_item' => __('View Blog'),
    'all_items' => __('All Blog'),
    'search_items' => __('Search Blog'),
    'not_found' => __('No Blog found.'),
    );
    $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'Blog'),
    'has_archive' => true,
    'hierarchical' => false,
    );
    register_post_type('Blog', $args);
    }
    add_action('init', 'cw_post_type_Blog');


   