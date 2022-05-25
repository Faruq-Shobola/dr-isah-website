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
