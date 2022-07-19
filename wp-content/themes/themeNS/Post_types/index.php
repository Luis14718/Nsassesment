<?php 

require('Blog.php'); 
require('Podcast.php');

function create_posttype() {
   /*  register_post_type( 'Blog',
    // CPT Options
    array(
      'labels' => array(
       'name' => __( 'Blog' ),
       'singular_name' => __( 'Blog' )
      ),
      'public' => true,
      'has_archive' => false,
      'rewrite' => array('slug' => 'Blog'),
     )
    ); */
   /*  register_post_type( 'Podcast',
    array(
  'labels' => array(
   'name' => __( 'Podcast' ),
   'singular_name' => __( 'Podcast' )
  ),
  'public' => true,
  'has_archive' => false,
  'rewrite' => array('slug' => 'Podcast'),
 )
); */
    }
    // add_action to add  function to the init at wp initialization 
    add_action( 'init', 'create_posttype' );