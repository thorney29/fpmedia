<div class="post">
<h3 class="post-title menu-item">
			 
			<span class="menu-item-name"><?php the_title(); ?></span>
			<span class="price"><?php  
			$price = get_post_meta( get_the_ID(), 'price', true );
			echo $price;
			?></span> 
			</h2>
			<p class="post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
  <?php the_post_thumbnail(); ?>
  <?php the_content(); ?>

</div><!-- /.blog-post -->
