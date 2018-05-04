<?php
/**
 * Template Name: Taxonomy Specials
 */

get_header(); ?>
	<div class="row container content flexbox">
		<div class="col-sm-8">
		<h2> <?php 
		$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
		echo $term->name; // will show the name
		?></h2>
		<?php if ( $paged < 2 ) : ?>
			<p></p>
		<?php else : ?>
			<p>Cont'd.</p>
		<?php endif; ?>
		 <?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
			<?php get_template_part( '/template-parts/content-menu', get_post_format() );  
		 	endwhile; endif; ?>
		</div> <!-- /.col -->
		<div class="col-sm-3 sidebar" id="sidebar-home">
			<?php get_sidebar(); ?>
		</div><!-- /.blog-sidebar -->
	</div> <!-- /.row -->
<?php get_footer(); ?>
