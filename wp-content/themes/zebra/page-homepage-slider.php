<?php 
/*
Template Name: Homepage Slider
Template Post Type: page
*/

get_header(); ?>
<!-- Slider here -->
<div class="slider-container">
<?php echo do_shortcode('[metaslider id="59"]'); ?>
</div>
	<div class="row container content flexbox">
		<div class="col-sm-12">

			<?php 
				if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
					get_template_part( '/template-parts/content-page', get_post_format() );
  
				endwhile; endif; 
			?>

		</div> <!-- /.col -->
	</div> <!-- /.row -->

<?php get_footer(); ?>
