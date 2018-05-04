<?php
/**
 * Template Name: Tag
 */

get_header(); ?>

	<div class="row">
		<div class="col-sm-12">
			<h1 class="archive-title"> <?php single_cat_title( __( 'Viewing: ', 'textdomain' ) ); ?></h1>
			<?php if ( $paged < 2 ) : ?>
				<em><?php echo tag_description(); ?></em>
			<?php else : ?>
			<p>Cont'd.</p>
			<?php endif; ?>
			 
			<!--  Modify the default loop, include custom post types -->
			<?php global $wp_query;
			$args = array_merge( $wp_query->query, array( 'post_type' => 'any' ) );
			query_posts( $args ); 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
					?>
					<h2 class="post-title"><?php the_title(); ?></h2>
					<?php
					the_post_thumbnail();  
  	 				the_excerpt();
				endwhile; endif; 
			?>

		</div> <!-- /.col -->
	</div> <!-- /.row -->

<?php get_footer(); ?>
