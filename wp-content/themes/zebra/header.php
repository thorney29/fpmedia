<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
  	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php
		/*
		 * Print the <title> tag based on what is being viewed.
		 */
		global $page, $paged;
	 
		wp_title( '|', true, 'right' );
	 
		// Add the blog name.
		bloginfo( 'name' );
	 
		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
	 
		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'striped' ), max( $paged, $page ) );
	 
		?>
	</title>

	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700|Nunito+Sans:300,700|Vibur|Bowlby+One+SC|Material+Icons" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 
	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
	<!--[if lte IE 8]><script src="js/html5shiv.js"></script><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
	<!--[if lte IE 7]><link rel="stylesheet" href="css/ie7.css" /><![endif]-->
	
  	<?php wp_head();?>
  </head>

  <body <?php body_class(); ?>>
  
	<div class="background-img">
	<?php
	if(!is_front_page()) {
		$page_id = get_queried_object_id();
		if ( has_post_thumbnail( $page_id ) ) :
		    $image_array = wp_get_attachment_image_src( get_post_thumbnail_id( $page_id ), 'optional-size' );
		    $image = $image_array[0];
		else :
		if(strpos($_SERVER['REQUEST_URI'], 'menu') !== false){ 
			$image = get_template_directory_uri() . '/images/menu-background.jpg';
		} else {
			$image = get_template_directory_uri() . '/images/default-background.jpg';
		}

	endif;
	if ( has_post_thumbnail() ) {
		echo '<img src='. $image . '></div>';
		} else {
  		echo '<img style="visibility:hidden" /></div>';
  		
	}
	}
	?>
	
	</div>
  <div id="top">
	<div class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"style="text-decoration: none;">MENU <i class="material-icons">dehaze</i></a>
		<ul class="dropdown-menu">
		 <?php wp_nav_menu( array(
		    'menu' => 'primary'
		) ); ?>
		</ul>
	</div>
	<header>
		<a href="<?php echo get_bloginfo( 'wpurl' );?>">
		<div class="site-title"><!-- site title -->
			<h1>
			<?php echo get_bloginfo( 'name' ); ?></h1>
		</div>
		<div class="tagline">
			<?php echo get_bloginfo( 'description' ); ?>
		</div>
		<div class="background-logo">
			<?php
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			if ( has_custom_logo() ) {
		        echo '<img src="'. esc_url( $logo[0] ) .'">';
			} else {
			       echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
			} ?>
		</div>
		</a>
	</header>  
  </div> 
 
