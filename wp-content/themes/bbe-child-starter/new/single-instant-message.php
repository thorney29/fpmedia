<?php
/**
 *
 * Template Name: Single Instant Message 
 */
?>
<?php get_template_part('includes/header'); ?>

<div class="container im-single ">
  <div class="row">
 
    <div class="col-xs-12 col-sm-12 ">
      <div id="content" role="main">
        
        <?php get_template_part('includes/loops/message', 'single'); ?>
        
       <!--  <?php if (bbe_option_is_true('singlepost_relatedposts'))  get_template_part('includes/related-posts'); ?> -->
      </div><!-- /#content -->
    </div>
    
    <!-- <div class="col-xs-12 col-sm-4" id="sidebar" role="navigation">
        <?php get_template_part('includes/sidebar'); ?>
    </div> -->
    
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
