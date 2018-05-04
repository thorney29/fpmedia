<?php
/**
 * Twenty Fifteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Zebra
 * @since Zebra 1.0
 */


function add_theme_scripts() {
  // wp_enqueue_style( 'style', get_stylesheet_uri() );
 
  wp_enqueue_style( 'material-icons', get_template_directory_uri() . '/css/materialdesignicons.css', array(), '1.1', 'all');
 
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
  
  if ( is_page( 'Menus' ) ) {
    wp_enqueue_style( 'base', get_template_directory_uri() . '/css/src/base.css', array(), '1.1', 'all');
    wp_enqueue_style( 'pater', get_template_directory_uri() . '/css/pater/pater.css', array(), '1.1', 'all');
  }
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function wpb_adding_scripts() {
wp_register_script('imagesloaded', get_template_directory_uri() . '/js/src/imagesloaded.pkgd.min.js', array('jquery'),'1.1', true);
wp_register_script('anime', get_template_directory_uri() . '/js/src/anime.min.js', array('jquery'),'1.1', true);
wp_register_script('main', get_template_directory_uri() . '/js/src/main.js', array('jquery'),'1.1', true);
wp_enqueue_script('imagesloaded');
wp_enqueue_script('anime');
wp_enqueue_script('main');
}
  
add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );
// Thumbnail image support for Featured Image display
if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 270, 170, true ); // Normal post thumbnails
    add_image_size( 'screen-shot', 720, 540 ); // Full size screen
}

// Register Sidebar 
function menu_sidebar() { 
    $args = array( 
      'id' => 'sidebar-menu-right', 
      'name' => __( 'Menu Sidebar', 'menu' ), 
      'description' => __( 'Menu Right Sidebar', 'menu' ), 
      'class' => 'menu-right-widget',       
      'before_title' => '', 
      'after_title' => '', 
      'before_widget' => 'Our Menus', 
      'after_widget' => '', 
    ); 
    register_sidebar( $args ); } 
 add_action( 'widgets_init', 'menu_sidebar' );


// Register Sidebar 
function featured_sidebar() { 
    $args = array( 
      'id' => 'featured', 
      'name' => __( 'Featured Sidebar' ), 
      'description' => __( 'This area highlights specials and featured items and news.'), 
      'class' => 'featured-sidebar-widget',       
      'before_title' => '<h4 class="widgettitle"><span class="sidebar-title">', 
      'after_title' => '</span></h4>', 
      'before_widget' => '', 
      'after_widget' => '', 
    ); 
    register_sidebar( $args ); } 

// Hook into the 'widgets_init' action 
add_action( 'widgets_init', 'featured_sidebar' );

// Register Sidebar 
// See the __() WordPress function for valid values for $text_domain.
function left_sidebar(){

 $args = array( 
    'id'        => 'left-sidebar',
    'name'        => __( 'Blog: Left Sidebar'),
    'description' => __( 'This sidebar is located to the left on the blog.' ),
    'class'     => 'left-sidebar-widget',       
    'before_title' => '', 
    'after_title' => '', 
    'before_widget' => '', 
    'after_widget' => '', 
    ); 
  register_sidebar( $args); 
}

// Hook into the 'widgets_init' action 
add_action( 'widgets_init', 'left_sidebar' );

add_filter('widget_posts_args', 'widget_posts_args_add_custom_type'); 
function widget_posts_args_add_custom_type($params) {
   $params['post_type'] = array('post', 'dinner menu item','lunch menu item');
   return $params;
}

// Add custom logo in Customize window
add_theme_support( 'custom-logo' );

function themename_custom_logo_setup() {
    $defaults = array(
        'flex-height' => false,
        'flex-width'  => false,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

// Add thumbnail support to enable featured images
add_theme_support( 'post-thumbnails' );

/* This is for tag and category count*/
function set_wp_generate_tag_cloud($content, $tags, $args){ 
  $count=0;
  $output=preg_replace_callback('(</a\s*>)', 
  function($match) use ($tags, &$count) {
      return "<span class=\"tagcount\">".$tags[$count++]->count."</span></a>";  
  }
  , $content);
  
  return $output;
}
add_filter('wp_generate_tag_cloud','set_wp_generate_tag_cloud', 10, 3);

// create search for search form

function wpdocs_my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <div><label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
    <input type="text" class="material-icons" placeholder="search" value="' . get_search_query() . '" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
    </div>
    </form>';
 
    return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );
// list menu children
function menu_function($atts, $content = null) {
  extract(
    shortcode_atts(
      array( 'name' => null, ),
      $atts
  ));
  return wp_nav_menu(
    array(
      'menu' => $name,
      'echo' => false
  ));
}
add_shortcode('menu', 'menu_function');

function custom_menu_order($menu_ord) {
    if (!$menu_ord) return true;
     
    return array(
        'index.php', // Dashboard
        'separator1', // First separator
        'edit.php?post_type=breakfastmenuitem',
        'edit.php?post_type=brunchmenuitem',
        'edit.php?post_type=lunchmenuitem',
        'edit.php?post_type=dinnermenuitem',
        'edit.php?post_type=beermenuitem',
        'edit.php?post_type=cocktailmenuitem',
        'edit.php?post_type=winemenuitem',
        'edit.php?post_type=dev_content_block',
        'edit.php', // Posts
        'upload.php', // Media
        'link-manager.php', // Links
        'edit.php?post_type=page', // Pages
        'edit-comments.php', // Comments
        'separator2', // Second separator
        'themes.php', // Appearance
        'plugins.php', // Plugins
        'users.php', // Users
        'tools.php', // Tools
        'options-general.php', // Settings
        'separator-last', // Last separator

    );
}
add_filter('custom_menu_order', 'custom_menu_order'); // Activate custom_menu_order
add_filter('menu_order', 'custom_menu_order');

// create responsive four column footer
function fourcol_footer_widgets_init() {
 
    // First footer widget area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'First Footer Widget Area', 'Zebra' ),
        'id' => 'first-footer-widget-area',
        'description' => __( 'The first footer widget area', 'Zebra' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    // Second Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Second Footer Widget Area', 'Zebra' ),
        'id' => 'second-footer-widget-area',
        'description' => __( 'The second footer widget area', 'Zebra' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    // Third Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Third Footer Widget Area', 'Zebra' ),
        'id' => 'third-footer-widget-area',
        'description' => __( 'The third footer widget area', 'Zebra' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    // Fourth Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Fourth Footer Widget Area', 'Zebra' ),
        'id' => 'fourth-footer-widget-area',
        'description' => __( 'The fourth footer widget area', 'Zebra' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
         
}
// Register sidebars by running tutsplus_widgets_init() on the widgets_init hook.
add_action( 'widgets_init', 'fourcol_footer_widgets_init' );

// Hides pages from public menu if they are set to private
function jj_filter_private_pages_from_menu ($items, $args) {
    foreach ($items as $ix => $obj) {
        if (!is_user_logged_in () && 'private' == get_post_status ($obj->object_id)) {
            unset ($items[$ix]);
        }
    }
    return $items;
}
add_filter ('wp_nav_menu_objects', 'jj_filter_private_pages_from_menu', 10, 2); 

 // Custom footer 
add_filter( 'admin_footer_text', 'my_admin_footer_text' );
function my_admin_footer_text( $default_text ) {
     return '<span id="footer-thankyou">Website managed by <a href="http://www.tresahorney.com">Tresa Horney</a><span> | Powered by <a href="http://www.wordpress.org">WordPress</a>';
}

// metabox
add_action('add_meta_boxes', 'add_column_count_meta');
function add_column_count_meta() {
    global $post;
    if(!empty($post)) {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
        if($pageTemplate == 'template-menu.php' ) {
            add_meta_box(
                'layout_column_count', // $id
                'Page Layout', // $title
                'display_column_count_information', // $callback
                'page', // $page
                'normal', // $context
                'high'); // $priority
        }
    }
}

add_action('save_post', 'save_column_count_information');
function save_column_count_information() {
  global $post;

  if(isset($_POST["meta_box_column_count"])){
         //UPDATE: 
        $meta_element_class = $_POST['meta_box_column_count'];
        //END OF UPDATE

        update_post_meta($post->ID, 'display_column_count_information', $meta_element_class);
        // print_r($_POST);
  }
}
function display_column_count_information($post) {
  $meta_element_class = get_post_meta($post->ID, 'display_column_count_information', true); //true ensures you get just one value instead of an array
  // Add the HTML for the post meta ?>
  <p>
      <label for="meta_box_column_count">Column Count<em>(Menu items can be presented in one or two columns)</em>: </label>
      <select name='meta_box_column_count' id='meta_box_column_count'>
           <option value="one" <?php selected( $meta_element_class, 'One' ); ?>>One</option>
           <option value="two" <?php selected( $meta_element_class, 'Two' ); ?>>Two</option>
       </select>
  </p>
<?php 
}
// add video field
/**
 * Adds a meta box to the post editing screen
 */
function custom_meta_video_link() {
  global $post;
    if(!empty($post)) {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
        if($pageTemplate == 'template-video-background.php' ) {
            add_meta_box( 'prfx_meta', __( 'Video Background URL', 'prfx-textdomain' ), 'prfx_meta_video_callback', 'page', 'side' );
        }
    }
}
add_action( 'add_meta_boxes', 'custom_meta_video_link' );

/**
 * Outputs the content of the meta box
 */
function prfx_meta_video_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'prfx_nonce' );
    $prfx_stored_meta = get_post_meta( $post->ID );
    ?>
 
    <p>
        <label for="meta-video-link" class="prfx-row-title"><?php _e( 'Enter Video URL', 'prfx-textdomain' )?></label>
        <input type="text" name="meta-video-link" id="meta-video-link" value="<?php if ( isset ( $prfx_stored_meta['meta-video-link'] ) ) echo $prfx_stored_meta['meta-video-link'][0]; ?>" />
    </p>
 
    <?php
}
/**
 * Saves the custom meta input
 */
function prfx_meta_save( $post_id ) {
 
    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'prfx_nonce' ] ) && wp_verify_nonce( $_POST[ 'prfx_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
 
    // Checks for input and sanitizes/saves if needed
    if( isset( $_POST[ 'meta-video-link' ] ) ) {
        update_post_meta( $post_id, 'meta-video-link', sanitize_text_field( $_POST[ 'meta-video-link' ] ) );
    }
 
}
add_action( 'save_post', 'prfx_meta_save' );
  
 

  /**
* Plugin Name: Metabox test
*
*/

add_action( 'add_meta_boxes', 'so_custom_meta_box' );

function so_custom_meta_box(){
   global $post;

    if(!empty($post)) {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);
        if($pageTemplate == 'template-menu.php' ) {
          add_meta_box(
            'so_meta_box', 
            'Custom Box', 
            'custom_element_grid_class_meta_box', 
            'page', 
            'normal' , 
            'high');
        }
    }
}
add_action('save_post', 'so_save_metabox');

function so_save_metabox(){ 
    global $post;
    if(isset($_POST["custom_element_grid_class"])){
         //UPDATE: 
        $meta_element_class = $_POST['custom_element_grid_class'];
        //END OF UPDATE

        update_post_meta($post->ID, 'custom_element_grid_class_meta_box', $meta_element_class);
        //print_r($_POST);
    }
}

function custom_element_grid_class_meta_box($post){
    $meta_element_class = get_post_meta($post->ID, 'custom_element_grid_class_meta_box', true); //true ensures you get just one value instead of an array
    ?>   
    <label>Choose the size of the element :  </label>

    <select name="custom_element_grid_class" id="custom_element_grid_class">
      <option value="normal" <?php selected( $meta_element_class, 'normal' ); ?>>normal</option>
      <option value="square" <?php selected( $meta_element_class, 'square' ); ?>>square</option>
      <option value="wide" <?php selected( $meta_element_class, 'wide' ); ?>>wide</option>
      <option value="tall" <?php selected( $meta_element_class, 'tall' ); ?>>tall</option>
    </select>
    <?php
}
