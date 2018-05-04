 <div id="sidebar featured">
  
  
 <div id="logo">
  <a class="blog-nav-item active" href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/zebra-orange.png"></a>
  </div>
  
 <section>
    <h3>View Our Menus</h3>
  <ul>  
     <?php wp_nav_menu( array(
        'menu' => 'menus'
    ) ); ?>
  </ul>
  </section>
 
  <section>		
  	<h3>Archives</h3>
	<ul class="list-unstyled">
		<?php wp_get_archives( 'type=monthly' ); ?>
	</ul>
</section>

  <section class="is-search">
  <form method="post" action="#">
  <input type="text" class="text" name="search" placeholder="Search" />
  </form>
  </section>
  
  <section class="is-recent-posts">
 <h3>Recent Posts</h3>
	<ul>
	<?php
		$args = array( 'numberposts' => '5' );
		$recent_posts = wp_get_recent_posts( $args );
		foreach( $recent_posts as $recent ){
			echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
		}
		wp_reset_query();
	?>
	</ul>
  </section>
  

  
  