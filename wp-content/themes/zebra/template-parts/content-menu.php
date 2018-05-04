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
	<h3 class="entry-title">
		<span class="menu-item-name"><?php the_title(); ?></span>				
		<span class="price">
			<?php  
		$price = get_post_meta( get_the_ID(), 'price', true );
		echo $price;
		?>	
		</span> 
	</h3>
	<?php
	if ( is_singular() ) {
	echo the_content(); 
	} else {
	echo the_excerpt(); 
	}
	?>
	<p>You might also like: <?php the_category(', ') ?><br />			
	</p>
</div><!-- /.blog-post -->
