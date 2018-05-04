<?php
/* 
 *  Template Name: Search Page
 */
 ?>
<?php
get_header(); ?>
   <h2 class="page-title"><?php printf( __( 'Search Results for:<br /> %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h2>



<div class="row container content flexbox">

	<div class="col-sm-8 search results">

		<?php get_search_form(); ?>	 
            <?php if ( have_posts() ) : ?>
            <h3>Results: <?php /* Search Count */ $allsearch = new WP_Query("s=$s&showposts=-1"); $count = $allsearch->post_count; echo $count . ' '; wp_reset_query(); ?> 
             </h3>
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content', 'search' ); ?>

                <?php endwhile; ?>


            <?php else : ?>

                <h3>No results.</h3>
        <p>Sorry, it appears we don't have the results you're looking for. Please try another search term.</p>

            <?php endif; ?>
		</div> <!-- /.col -->

         <div id="sidebar featured" class="col-sm-3 sidebar">
         	<?php get_sidebar(); ?>		
         </div>
	</div> <!-- /.row -->

<?php get_footer(); ?>