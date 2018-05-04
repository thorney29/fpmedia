<?php
/* 
Template Name: Single Menu Item 
Template Post Type: dinner menu item, lunch menu item, brunch menu item, breakfast menu item, beer menu item
*/
?>

<?php get_header(); ?>
<div class="row flexbox">
		<div class="col-sm-8 menu-item-main">
			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();?>
				<?php get_template_part( 'content', get_post_format() );
			 endwhile; endif; 
			?>
		</div> <!-- /.blog-main -->
		<div class="col-sm-3 menu-sidebar">
			<?php if ( !is_active_sidebar( 'menu-widget' )  ) : ?>
			<aside id="secondary" class="sidebar widget-area" role="complementary">
				<?php get_sidebar('menu'); ?>
			</aside><!-- .sidebar .widget-area -->
		<?php endif; ?>
		         
 		</div><!-- /.blog-sidebar -->
	</div> <!-- /.row -->
<?php get_footer(); ?>