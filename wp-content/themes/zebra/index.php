<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Zebra
 * @since Zebra 1.0
 */

 get_header(); ?>
  		<h2 class="page-title"><?php _e('News','zebra'); ?></h2>

<div class="row container content flexbox">
		<div class="col-sm-8 blog-main">

			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();?>
			<div class="post-excerpts">
				<a href="<?php the_permalink() ?>">
					<h3><?php the_title(); ?></h3>
					<?php the_post_thumbnail(); ?>
				</a>
			</div>
			<p><?php the_excerpt(); ?></p>

			<?php endwhile; endif; 
			?>

		</div> <!-- /.blog-main -->
		
		<div class="col-sm-3 blog-sidebar" id="sidebar-home">
			<?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
				<?php get_sidebar(); ?>
		<?php endif; ?>
		</div><!-- /.blog-sidebar -->

	</div> <!-- /.row -->

<?php get_footer(); ?>
