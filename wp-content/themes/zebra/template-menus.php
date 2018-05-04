<?php
/* Template Name: Menus */

get_header(); 
?>
<h2 class="page-title"><?php the_title(); ?></h2> 

<div class="row container flexbox">

<!-- content inside flexbox row -->
	<div class="col-sm-12 menu-main">

	 

    <svg class="hidden">
			<symbol id="icon-arrow" viewBox="0 0 24 24">
				<title>arrow</title>
				<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
			</symbol>
			<symbol id="icon-drop" viewBox="0 0 24 24">
				<title>drop</title>
				<path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
			</symbol>
			<symbol id="icon-cross" viewBox="0 0 24 24">
				<title>cross</title>
				<path d="M 5.5,2.5 C 5.372,2.5 5.244,2.549 5.146,2.646 L 2.646,5.146 C 2.451,5.341 2.451,5.659 2.646,5.854 L 8.793,12 2.646,18.15 C 2.451,18.34 2.451,18.66 2.646,18.85 L 5.146,21.35 C 5.341,21.55 5.659,21.55 5.854,21.35 L 12,15.21 18.15,21.35 C 18.24,21.45 18.37,21.5 18.5,21.5 18.63,21.5 18.76,21.45 18.85,21.35 L 21.35,18.85 C 21.55,18.66 21.55,18.34 21.35,18.15 L 15.21,12 21.35,5.854 C 21.55,5.658 21.55,5.342 21.35,5.146 L 18.85,2.646 C 18.66,2.451 18.34,2.451 18.15,2.646 L 12,8.793 5.854,2.646 C 5.756,2.549 5.628,2.5 5.5,2.5 Z"/>
			</symbol>
			 
		 
		<main>
			
			
			<div class="content">
				<div class="grid">
					<div class="grid__item">
						<div class="product">
							<div class="product__bg"></div>
							<img class="product__img" src="<?php get_template_directory_uri()?>/wp-content/themes/zebra/images/black-background-boiled-egg-boiled-eggs-824635.jpg" alt="img 01"/>
							<h2 class="product__title">Breakfast Menu</h2>
							<h3 class="product__subtitle">Breakfast is served all day</h3>
							<div class="product__description">
								<?php
								$args = array(
								  'post_type'   => 'breakfast menu item',
								  'post_status' => 'publish',
								 );
								 
								$breakfast = new WP_Query( $args );
								if( $breakfast->have_posts() ) :
								?>
								  
								    <?php
								      while( $breakfast->have_posts() ) :
								        $breakfast->the_post();
								        ?>
								         <?php printf( '%1$s', get_template_part( '/template-parts/content-menu', get_post_format() ));  ?> 
								        <?php
								      endwhile;
								     
								    ?>
								    
								<?php
								else :
								  esc_html_e( 'No breakfast items to view.', 'text-domain' );
								endif;
								?>
			 				</div>
						</div>
					</div>
					<div class="grid__item">
						<div class="product">
							<div class="product__bg"></div>
							<img class="product__img" src="<?php get_template_directory_uri()?>/wp-content/themes/zebra/images/bar-bottle-brunch-755329.jpg" alt="img 02"/>
							<h2 class="product__title">Brunch Menu</h2>
							<h3 class="product__subtitle">Brunch is served from 10AM - 2PM. </h3>
							<div class="product__description">
								<?php
								$args = array(
								  'post_type'   => 'brunch menu item',
								  'post_status' => 'publish',
								 );
								 
								$brunch = new WP_Query( $args );
								if( $brunch->have_posts() ) :
								?>
								  
								    <?php
								      while( $brunch->have_posts() ) :
								        $brunch->the_post();
								        ?>
								         <?php printf( '%1$s', get_template_part( '/template-parts/content-menu', get_post_format() ));  ?> 
								        <?php
								      endwhile;
								     
								    ?>
								    
								<?php
								else :
								  esc_html_e( 'No brunch items to view.', 'text-domain' );
								endif;
								?>
			 				</div>						</div>
					</div>
					<div class="grid__item">
						<div class="product">
							<div class="product__bg"></div>
							<img class="product__img" src="<?php get_template_directory_uri()?>/wp-content/themes/zebra/images/bacon-bowl-bread-660282.jpg" alt="img 03"/>
							<h2 class="product__title">Lunch Menu</h2>
							<h3 class="product__subtitle">Lunch is served from 10AM - 2PM.</h3>
 							<div class="product__description">
								<?php
								$args = array(
								  'post_type'   => 'lunch menu item',
								  'post_status' => 'publish',
								 );
								 
								$lunch = new WP_Query( $args );
								if( $lunch->have_posts() ) :
								?>
								  
								    <?php
								      while( $lunch->have_posts() ) :
								        $lunch->the_post();
								        ?>
								         <?php printf( '%1$s', get_template_part( '/template-parts/content-menu', get_post_format() ));  ?> 
								        <?php
								      endwhile;
								     
								    ?>
								    
								<?php
								else :
								  esc_html_e( 'No lunch items to view.', 'text-domain' );
								endif;
								?>
			 				</div>
 						</div>
					</div>
					<div class="grid__item">
						<div class="product">
							<div class="product__bg"></div>
							<img class="product__img" src="<?php get_template_directory_uri()?>/wp-content/themes/zebra/images/basil-dinner-dish-64208.jpg" alt="img 04"/>
							<h2 class="product__title">Dinner Menu</h2>
							<h3 class="product__subtitle">Fred House</h3>
							<p class="product__description">Crucifix shoreditch tumblr heirloom irony tbh gastropub migas sartorial mustache direct trade plaid readymade ramps hammock.</p>
							<div class="product__price"></div>
						</div>
					</div>
					<div class="grid__item">
						<div class="product">
							<div class="product__bg"></div>
							<img class="product__img" src="<?php get_template_directory_uri()?>/wp-content/themes/zebra/img/5.png" alt="img 05"/>
							<h2 class="product__title">Disco Fever</h2>
							<h3 class="product__subtitle">Alice Muller</h3>
							<p class="product__description">Single-origin coffee air plant kitsch paleo iPhone vegan cold-pressed slow-carb cornhole dreamcatcher palo santo salvia lo-fi. </p>
							<div class="product__price"></div>
						</div>
					</div>
					<div class="grid__item">
						<div class="product">
							<div class="product__bg"></div>
							<img class="product__img" src="<?php get_template_directory_uri()?>/wp-content/themes/zebra/images/6.png" alt="img 06"/>
							<h2 class="product__title">Little Boxes</h2>
							<h3 class="product__subtitle">Xavier Brighton</h3>
							<p class="product__description">Drinking vinegar lumbersexual 90's flexitarian. Live-edge man bun air plant XOXO. Master cleanse vaporware keffiyeh.</p>
							<div class="product__price"></div>
						</div>
					</div>
					<div class="grid__item">
						<div class="product">
							<div class="product__bg"></div>
							<img class="product__img" src="img/7.png" alt="img 07"/>
							<h2 class="product__title">Fractal Love</h2>
							<h3 class="product__subtitle">Walter Perry</h3>
							<p class="product__description">Leggings green juice DIY, flannel tattooed selvage plaid yr sartorial chia. Scenester you probably haven't heard of them locavore.</p>
							<div class="product__price"></div>
						</div>
					</div>
					<div class="grid__item">
						<div class="product">
							<div class="product__bg"></div>
							<img class="product__img" src="img/8.png" alt="img 08"/>
							<h2 class="product__title">Liquidia</h2>
							<h3 class="product__subtitle">Lidia Greenwood</h3>
							<p class="product__description">Helvetica la croix readymade, butcher viral pitchfork chillwave pork belly vaporware blue bottle iceland semiotics subway tile irony.</p>
							<div class="product__price"></div>
						</div>
					</div>
					<div class="grid__item">
						<div class="product">
							<div class="product__bg"></div>
							<img class="product__img" src="img/9.png" alt="img 09"/>
							<h2 class="product__title">The Buzz</h2>
							<h3 class="product__subtitle">Sarah Grand</h3>
							<p class="product__description">Celiac distillery man braid venmo, selfies you probably haven't heard of them tote bag forage fanny pack activated charcoal kale chips lo-fi before they sold out.</p>
							<div class="product__price"></div>
						</div>
					</div>
					<div class="grid__item">
						<div class="product">
							<div class="product__bg"></div>
							<img class="product__img" src="img/10.png" alt="img 10"/>
							<h2 class="product__title">Sweet Escape</h2>
							<h3 class="product__subtitle">Peter Gradia</h3>
							<p class="product__description">Mumblecore bespoke blog raw denim, authentic VHS sustainable +1 freegan neutra small batch paleo. Schlitz chicharrones pork belly palo santo.</p>
							<div class="product__price"></div>
						</div>
					</div>
				</div>
			</div>
			
		</main>

		</div> <!-- /.menu-main -->
		 
 	</div>
<?php get_footer(); ?>