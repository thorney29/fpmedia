<?php
/*
 * Template Name: Category
 */
get_header();
 ?> 
 <div class="row container content flexbox">	
	<section id="primary" class="site-content categorypage"> 
		<div class="col-sm-8">
			<header class="-header">
			<h2 class=""> <?php single_cat_title( __( 'Viewing: ', 'textdomain' ) ); ?></h2>
			<?php if ( $paged < 2 ) : ?>
	    		<em><?php echo category_description(); ?></em>
				<?php else : ?>
				<p>Cont'd.</p>
			<?php endif; ?> 
			<!--  Modify the default loop, include custom post types -->
			<?php global $wp_query;
			$args = array_merge( $wp_query->query, array( 'post_type' => 'any' ) );
			query_posts( $args );
			// The beginning of the loop looks like this:
			while ( have_posts() ) : the_post(); ?>
			    <?php get_template_part( '/template-parts/content-menu', get_post_format() ); 
			endwhile; ?>
		</div>
		<div  id="sidebar featured" class="col-sm-3 striped-sidebar">
			<?php get_sidebar(); ?>
		</div>
	</section>
 </div>
 
<?php get_footer(); ?>