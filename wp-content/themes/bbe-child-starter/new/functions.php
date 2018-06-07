<?php
 
//ENQUEUE CHILD THEME CSS//////////////////////////////// 
function bbe_child_enqueues() {
	//CSS
	wp_register_style('bbe-child', get_bloginfo('stylesheet_directory') . '/style.css', false, null);
	wp_enqueue_style('bbe-child');
	//JS
	
  	wp_register_script('bbe-child-main',  get_bloginfo('stylesheet_directory') . '/main.js', false, null, true);
	wp_enqueue_script('bbe-child-main');
	
	/* Enqueue more styles and scripts in here  if you need */

}
add_action('wp_enqueue_scripts', 'bbe_child_enqueues', 101);

/**
* Allow Pods Templates to use shortcodes
*
* NOTE: Will only work if the constant PODS_SHORTCODE_ALLOW_SUB_SHORTCODES is defiend and set to
  true, which by default it IS NOT.
*/
add_filter( 'pods_shortcode', function( $tags )  {
  $tags[ 'shortcodes' ] = true;
  
  return $tags;
  
});

function people_init() {
	// create a new taxonomy
	register_taxonomy(
		'people',
		'post',
		array(
			'label' => __( 'People' ),
			'rewrite' => array( 'slug' => 'person' ),
			'capabilities' => array(
				'assign_terms' => 'edit_guides',
				'edit_terms' => 'publish_guides'
			)
		)
	);
}
add_action( 'init', 'people_init' );

add_filter('the_content', 'wpautop');;
