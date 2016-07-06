<?php
function coll_add_child_custom_css()
{
    wp_register_style('custom', get_stylesheet_directory_uri() . '/custom.css');
    wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'coll_add_child_custom_css');

function custom_head_stuff() {
    echo '<link type="text/css" rel="stylesheet" href="http://fast.fonts.com/cssapi/4b98bf3f-c9aa-4d06-a926-9a8d21e96b04.css"/>';	echo '<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Poly:400italic">';
}
add_action('wp_head', 'custom_head_stuff');

function register_my_menus() {
	register_nav_menus(
		array(
		'primary-sidbar' => __( 'Primary Sidebar' )
		)
	);
}
add_action( 'init', 'register_my_menus' );

function custom_excerpt_length( $length ) {
	return 50;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '... <a class="read-more-link" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );