<?php
/*
The Default Loop (used by single-instant-message.php)
=====================================================

If you require only post excerpts to be shown in index and archive pages, then use the [---more---] tag within blog posts to cut content.

If you require different templates for different post types,
then simply duplicate this template, save the copy as, e.g. "content-aside.php",
and modify it the way you like it.
(The function-call "get_post_format()" within index.php, category.php and single.php will redirect WordPress to use your custom content template.)
 
*/
?>
 
 <?php if(have_posts()): while(have_posts()): the_post();?>
    <article role="article" id="post-<?php the_ID()?>" <?php post_class(); ?>>
        <header>
        <?php
          //this is normally where the WP Loop would be. Instead we add a loop to get pods stuff 
 
          //get the current slug 
          $slug = pods_v( 'last', 'url' );
          //get pods object
          $mypod = pods( 'instant-message', $slug );
     
          // set our variables
          $name = $mypod->display('message_name');
          $picture = $mypod->field('picture');
        ?>
  
        <div class="entry-thumbnail">
           <img class="thumbnail" src="<?php echo wp_get_attachment_url( $picture['ID'] ); ?>">           
        </div>
        <div class="jumbotron text">
            <h1><?php echo $name; ?></h1> <h2>topic: <?php the_title()?>  </h2>
            <p>One of our many messy conversations about race</p>
        </div>
 
       
        </header>
        <section>
            <?php if (!is_single()): ?><a href="<?php the_permalink(); ?>"><?php endif ?>
            <?php if (bbe_option_is_true('archives_featuredimage')) the_post_thumbnail(); ?>
            <?php if (!is_single()): ?></a><?php endif ?>
            <?php if(!bbe_option_is_true('archives_use_excerpt' ) or  bbe_post_is_using_bbe_template(get_the_ID())) the_excerpt(); else the_content( __( '&hellip; ' . __('Continue reading', 'bbe' ) . ' <i class="glyphicon glyphicon-arrow-right"></i>', 'bbe' ) ); ?>
        </section>
        <footer>
<div class="navigation"><p><?php posts_nav_link(); ?></p></div>
<div class="custom-pagination">
    <span class="prev">PREVIOUS: <?php previous_post_link(); ?> </span>    <span class="next">NEXT: <?php next_post_link(); ?></span>
</div>
            <!-- Categories under content
            <p class="text-muted">
                <?php if (bbe_option_is_true('archives_meta_category')): ?><i class="glyphicon glyphicon-folder-open"></i>&nbsp; <?php _e('Category', 'bbe'); ?>: <?php the_category(', ') ?><br/><?php endif ?>
                
            </p> -->
        </footer>
    </article>
<?php endwhile; ?>

<?php if ( function_exists('bbe_pagination') ) { bbe_pagination(); } else { ?>
  <ul class="pagination">
    <li class="older"><?php next_posts_link('<i class="glyphicon glyphicon-arrow-left"></i> ' . __('Previous Page', 'bbe')) ?></li>
    <li class="newer"><?php previous_posts_link(__('Next Page', 'bbe') . ' <i class="glyphicon glyphicon-arrow-right"></i>') ?></li>
  </ul>
<?php } ?>

<?php else: wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; endif; ?>
