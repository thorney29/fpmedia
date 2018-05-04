<?php
/**
* A Simple Category Template
*/
 
get_header(); ?> 
 
<section id="primary" class="site-content">
<div id="content" role="main">
 
 
<header class="archive-header">
<h1 class="archive-title"> <?php single_cat_title( __( 'Viewing: ', 'textdomain' ) ); ?></h1>
 <?php 
 if (have_posts()):
    while (have_posts()):
       ?>
<a href="<?php the_permalink() ?>">
					<h2 class="post-title"><?php the_title(); ?></h2></a>
					<?php
					the_post_thumbnail();  
  	 				the_excerpt();

        if( 0 == $wp_query->current_post ):
            echo 'this is the first post';
        else:
            echo 'this is post > 1';
        endif;

    endwhile;
endif;


?>


</div>
</section>
 
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>