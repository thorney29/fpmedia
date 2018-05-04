
<?php
/* Template Name: Menu */

get_header(); 
?>
<h2 class="page-title"><?php the_title(); ?></h2> 
<div class="row container content flexbox">

<!-- content inside flexbox row -->
	<div class="col-sm-8 menu-main <?php echo get_post_meta($post->ID, 'display_column_count_information', true);?>">
		<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();			
			endwhile; endif; 
			?>
			<?php
			if ( is_page( 'breakfast-menu' ) ) {  
				query_posts(array(
			   	'post_type' => 'breakfast menu item', ''
				));  
			    // query for the breakfast menu page
			    $your_query = new WP_Query( 'pagename=breakfast-menu' );
			    // "loop" through query (even though it's just one page) 
			    while ( $your_query->have_posts() ) : $your_query->the_post();
			       ?> 
			       <?php the_content('');
			    endwhile;
			    // reset post data (important!)
			    wp_reset_postdata();
			} elseif ( is_page( 'brunch-menu' ) ) {  
				query_posts(array(
			   	'post_type' => 'brunch menu item', ''
				));  
			    // query for the brunch menu page
			    $your_query = new WP_Query( 'pagename=brunch-menu' );
			    // "loop" through query (even though it's just one page) 
			    while ( $your_query->have_posts() ) : $your_query->the_post();
			       ?> 
			       <?php the_content('menu');
			    endwhile;
			    // reset post data (important!)
			    wp_reset_postdata();
			} elseif ( is_page( 'lunch-menu' ) ) {  
				query_posts(array(
			   	'post_type' => 'lunch menu item', ''
				));  
			    // query for the lunch menu page
			    $your_query = new WP_Query( 'pagename=lunch-menu' );
			    // "loop" through query (even though it's just one page) 
			    while ( $your_query->have_posts() ) : $your_query->the_post();
			       ?> 
			       <?php the_content('menu');
			    endwhile;
			    // reset post data (important!)
			    wp_reset_postdata();
			} elseif ( is_page( 'dinner-menu' ) ) {   
			    query_posts(array(
			   	'post_type' => 'dinner menu item', ''
				));
			    // query for the dinner menu page
		    	$your_query = new WP_Query( 'pagename=dinner-menu' );
		    	// "loop" through query (even though it's just one page) 
		    	while ( $your_query->have_posts() ) : $your_query->the_post();
		       ?>  
		       <?php the_content('menu');
		       endwhile;
			    // reset post data (important!)
			    wp_reset_postdata();
			} elseif ( is_page( 'beer-menu' ) ) { 
			    query_posts(array(
			   	'post_type' => 'beer menu item', ''
				));
			    // query for the beer menu page
		    	$your_query = new WP_Query( 'pagename=beer-menu' );
		    	// "loop" through query (even though it's just one page) 
		    	while ( $your_query->have_posts() ) : $your_query->the_post();
		        ?> 
		        <?php the_content('menu');
		        endwhile;
			    // reset post data (important!)
			    wp_reset_postdata();
			} else { 
			 while ( $your_query->have_posts() ) : $your_query->the_post();?>
		        <?php the_content('menu');
		        endwhile;
			}   
			?>
			 
			<?php
			while (have_posts()) : the_post(); ?>
			<?php get_template_part( '/template-parts/content-menu', get_post_format() ); ?>
			<?php endwhile;?>
		</div> <!-- /.menu-main -->
		<div  id="sidebar featured" class="col-sm-3 sidebar">
 					<?php get_sidebar(''); ?>
 		</div><!-- /.menu-sidebar -->
 	</div>
<?php get_footer(); ?>
 
