<?php

// let's create the function for the custom type
function custom_post() { 
	// creating (registering) the custom type 
	register_post_type( 'slips', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Moorage Slips', 'bonestheme'), /* This is the Title of the Group */
			'singular_name' => __('Slip', 'bonestheme'), /* This is the individual type */
			'all_items' => __('All Slips', 'bonestheme'), /* the all items menu item */
			'add_new' => __('Add New', 'bonestheme'), /* The add new menu item */
			'add_new_item' => __('Add New Custom Type', 'bonestheme'), /* Add New Display Title */
			'edit' => __( 'Edit', 'bonestheme' ), /* Edit Dialog */
			'edit_item' => __('Edit Post Types', 'bonestheme'), /* Edit Display Title */
			'new_item' => __('New Post Type', 'bonestheme'), /* New Display Title */
			'view_item' => __('View Post Type', 'bonestheme'), /* View Display Title */
			'search_items' => __('Search Post Type', 'bonestheme'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'bonestheme'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'bonestheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the example custom post type', 'bonestheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'rewrite'	=> array( 'slug' => 'moorage-slips', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'slips', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'revisions')
	 	) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your custom post type */
	register_taxonomy_for_object_type('category', 'slips');
	/* this adds your post tags to your custom post type */
	register_taxonomy_for_object_type('post_tag', 'slips');
	
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post');

?>