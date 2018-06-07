<?php
 
//ENQUEUE CHILD THEME CSS//////////////////////////////// 
function bbe_child_enqueues() {
	//CSS
    wp_register_style('bbe-child-font-styles', get_bloginfo('stylesheet_directory') . '/css/font-styles/stylesheet.css', false, null);
	wp_register_style('bbe-child', get_bloginfo('stylesheet_directory') . '/style.css', false, null);
	wp_enqueue_style('bbe-child-font-styles');
    wp_enqueue_style('bbe-child');
	//JS
	
  	wp_register_script('bbe-child-main',  get_bloginfo('stylesheet_directory') . '/main.js', false, null, true);
	wp_enqueue_script('bbe-child-main');
	
	/* Enqueue more styles and scripts in here  if you need */

}
add_action('wp_enqueue_scripts', 'bbe_child_enqueues', 101);

// login image
function my_login_logo() { ?>
    <style type="text/css">
    	#login {
	    	width: 440px !important;
		}
        #login h1 a, .login h1 a {
          background-image: url(https://www.tresahorney.com/flowerpotmedia/wp-content/uploads/2018/05/flowerpot-media-logo.png);
          width:441px;
          height:112px;
          background-size: 441px 112px;
          background-repeat: no-repeat;
          padding-bottom: 30px;
        }
    </style>
<?php }
// add site info
add_action( 'login_enqueue_scripts', 'my_login_logo' );
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Flowerpot Media';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

/**
* Allow Pods Templates to use shortcodes
*
* NOTE: Will only work if the constant PODS_SHORTCODE_ALLOW_SUB_SHORTCODES is defiend and set to
  true, which by default it IS NOT.
*/
// add_filter( 'pods_shortcode', function( $tags )  {
//   $tags[ 'shortcodes' ] = true;
  
//   return $tags;
  
// });

// function people_init() {
// 	// create a new taxonomy
// 	register_taxonomy(
// 		'people',
// 		'post',
// 		array(
// 			'label' => __( 'People' ),
// 			'rewrite' => array( 'slug' => 'person' ),
// 			'capabilities' => array(
// 				'assign_terms' => 'edit_guides',
// 				'edit_terms' => 'publish_guides'
// 			)
// 		)
// 	);
// }
// add_action( 'init', 'people_init' );

// add_filter('the_content', 'wpautop');

// // Add the following lines in the functions.php file of your current WordPress Theme:
// if( version_compare ( $wp_version, '4.0' ) === -1 ) {
//     // To Disable Smart Quotes for WordPress less than 4.0
//     foreach( array(
//         'bloginfo',
//         'the_content',
//         'the_excerpt',
//         'the_title',
//         'comment_text',
//         'comment_author',
//         'link_name',
//         'link_description',
//         'link_notes',
//         'list_cats',
//         'nav_menu_attr_title',
//         'nav_menu_description',
//         'single_post_title',
//         'single_cat_title',
//         'single_tag_title',
//         'single_month_title',
//         'term_description',
//         'term_name',
//         'widget_title',
//         'wp_title'
//     ) as $sQuote_disable_for )
//     remove_filter( $sQuote_disable_for, 'wptexturize' );
// }
// else {
//     // To Disable Smart Quotes for WordPress 4.0 or higher
//     add_filter( 'run_wptexturize', '__return_false' );
// }
add_filter( 'wp_image_editors', 'change_graphic_lib' );

function change_graphic_lib($array) {
  return array( 'WP_Image_Editor_GD', 'WP_Image_Editor_Imagick' );
}
