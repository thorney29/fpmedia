<?php
/**
 * The page template file
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
 
 
 
<div id="primary" class="content-area">
        <main id="main" class="col-md-9 col-md-push-2 col-sm-12 col-sm-push-0" role="main">
			<section class="error-404 not-found"> 				 
				<header class="page-header">		 
				    <h2 class="page-title"><?php _e( 'Uh oh! What have we done?', 'zebra' ); ?></h2>
                </header> 	 
				<!-- .page-header -->
				 
				<div class="page-content">
				  <p>
					<?php _e( 'It appears this page can&rsquo;t be found. We\'ll look in to it. It looks like nothing was found at this location. Maybe try a search?', 'zebra' ); ?>
				 
					<div class="search results">
		                <?php get_search_form(); ?>
		            </div>
		         </p>
                </div>
				<!-- .page-content -->
            </section> 
			<!-- .error-404 --> 
        </main><!-- .site-main -->
    </div>
 
 
<!-- .content-area -->
 
<?php get_footer(); ?>
