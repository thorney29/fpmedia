<?php
/**
 * Template Name: Taxonomy Food Types
 */

get_header(); ?>
<div class="row container content flexbox">
		<div class="col-sm-8">
			<h2 class="">Food Types: <?php 
			$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); 
			echo $term->name; // will show the name
			    ?></h2>
			<?php if ( $paged < 2 ) : ?>
			<p></p>
			<?php else : ?>
			<p>Category cont'd.</p>
			<?php endif; ?>
		    <?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();?>
					<a href="<?php the_permalink() ?>">
					<h3 class="post-title"><?php the_title(); ?></h3></a>
					<?php
					the_post_thumbnail();  
  	 				the_excerpt();
 			 	endwhile; endif; 
			?>
		</div>
		<div class="col-sm-3 sidebar" id="sidebar-home">
			<?php get_sidebar(); ?>
		</div><!-- /.blog-sidebar -->
	</div> <!-- /.div ends row in template-->
<?php get_footer(); ?>
