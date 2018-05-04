<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

	<?php if ( is_active_sidebar( 'featured' )  ) { ?>
			<aside id="secondary" class="sidebar widget-area" role="complementary">
			<?php dynamic_sidebar('featured'); ?>
			</aside><!-- .sidebar .widget-area -->
	<?php } else {  get_sidebar('featured-static');  }  
	 ?>
