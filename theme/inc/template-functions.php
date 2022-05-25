<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package dr-isah
 */

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function dr_isah_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'dr_isah_pingback_header' );


/**
 * Add a Event Custom Post 
 */
function events_post_type() {
	$args = array(
		'labels'      => array(
		  'name'          => 'Events',
		  'singular_name' => 'Event',
		),
		'public'      => true,
		'hierarchical' => true,
		'has_archive' => true,
		'rewrite'     => array( 'slug' => 'event' ),
		'supports' =>  array('title', 'editor', 'tag', 'thumbnail', 'custom-fields'),
		
		);
		register_post_type('events', $args );
		}
		add_action('init', 'events_post_type');
//Testimonials custom post

function testimonials_post_type() {
	$args = array(
		'labels'      => array(
		  'name'          => 'Testimonials',
		  'singular_name' => 'Testimonial',
		),
		'public'      => true,
		'hierarchical' => true,
		'has_archive' => true,
		'rewrite'     => array( 'slug' => 'testimonials' ),
		'supports' =>  array('title', 'editor', 'tag', 'thumbnail', 'custom-fields'),
		
	  );
	  register_post_type('testimonials', $args );
	}
	add_action('init', 'testimonials_post_type');
  
  //Testimonials taxonomies
  function testimonials_taxonomy() {
	$labels = array(
		'name'              => 'Testimonials Category', 
		'singular_name'     => 'category',
		'search_items'      => __( 'Search Testimonials' ),
		'all_items'         => __( 'All Testimonials' ),
		'parent_item'       => __( 'Parent Testimonial' ),
		'parent_item_colon' => __( 'Parent Testimonial' ),
		'edit_item'         => __( 'Edit Testimonial' ),
		'update_item'       => __( 'Update Testimonial' ),
		'add_new_item'      => __( 'Add New category' ),
		'new_item_name'     => __( 'New Testimonial Name' ),
		'menu_name'         => __( 'Categories' ),
	);
	$args   = array(
		'hierarchical'      => true, // make it hierarchical (like categories)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => [ 'slug' => 'testimonials' ],
	);
	register_taxonomy( 'testimonials', [ 'testimonials' ], $args );
  }
  add_action( 'init', 'testimonials_taxonomy' );
