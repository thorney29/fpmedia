 <div id="sidebar-menu">
  <section>
		<h3>View Our Menus</h3>
    <ul>	
  	 <?php wp_nav_menu( array(
        'menu' => 'menus'
    ) ); ?>
    </ul>
  </section>
  <section class="is-search">
    <h3>Search</h3>
    <form role="search" method="get" id="searchform" action="/search" >
    <div>
      <label class="screen-reader-text" for="s">Search for:</label>
      <input type="text" value="" name="s" id="s" />
      <input type="submit" id="searchsubmit" value="Search" />
    </div>
  </form>
  </section>
  <section class="is-text-style1">
    <div class="inner"></div>
  </section>  
  <section class="">
    <h3>Food Categories</h3>
    <div class="tagcloud">
      <?php 
      $args = array(
      'taxonomy' => array( 'category' ), 
      ); 
      wp_tag_cloud( $args );
      ?>
    </div>
  </section>
  <section class="">
    <h3>Food Tags</h3>
    <div class="tagcloud">
      <?php 
        $args = array(
          'taxonomy' => array( 'post_tag' ), 
      ); 
      wp_tag_cloud( $args );
      ?> 
    </div>
  </section> 
  <section class="">
    <h3>Specials</h3>
    <div class="tagcloud">
      <?php 
        $args = array(
          'taxonomy' => array( 'specials' ), 
        ); 
        wp_tag_cloud( $args );
      ?> 
    </div>
  </section> 
  <section class="">
    <h3>Food Types</h3>
    <div class="tagcloud">
      <?php 
        $args = array(
          'taxonomy' => array( 'food_types' ), 
        ); 
        wp_tag_cloud( $args );
      ?> 
    </div>
  </section> 

  
  