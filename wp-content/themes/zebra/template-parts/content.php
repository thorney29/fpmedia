<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Zebra
 * @since Zebra 1.0
 */
?>

<div class="menu-item-post">
  <h3 class="entry-title"><?php the_title(); ?></h3>
  <p class="menu-item-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>

 <?php the_content(); ?>

</div><!-- /.blog-post -->
