
<?php
/* Template Name: Video Background */

get_header(); 
?>
 		<?php
			$image = get_template_directory_uri() . '/images/video-placeholder.png';
	  		 // Retrieves the stored value from the database
		    $videoLink = get_post_meta( get_the_ID(), 'meta-video-link', true );
		    $video = $videoLink . '?controls=0&showinfo=0&rel=0&autoplay=1&loop=1';
		 
		    // Checks and displays the retrieved value
		    if( !empty( $video ) ) {
	  			echo '<div class="video-wrapper"><iframe src="'. $video .'" frameborder="0" allowfullscreen></iframe></div>';
			}
		?>

<div class="row container content flexbox">

<!-- content inside flexbox row -->
	<div class="col-sm-12 menu-main <?php echo get_post_meta($post->ID, 'display_column_count_information', true);?>">
			<?php
			while (have_posts()) : the_post(); ?>
			<?php get_template_part( '/template-parts/content-page', get_post_format() ); ?>
			<?php endwhile;?>
		</div> <!-- /.menu-main -->
		 
 	</div>
<?php get_footer(); ?>
 
