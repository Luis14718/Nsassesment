<?php


function cw_post_type_Podcast() {
    $labels = [
		"name" => __( "Podcast", "custom-post-type-ui" ),
		"singular_name" => __( "podcast", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Podcast", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "podcasts",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => [ "slug" => "podcasts", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
		"show_in_graphql" => false,
	];
    register_post_type('podcast', $args);
    }
    add_action('init', 'cw_post_type_Podcast');




