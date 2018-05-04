	</div><!--/.container content -->
	<!-- <footer class="blog-footer">
      <p>Blog template built by <a href="http://tresahorney.com">Tresa</a>.</p>
      <p>
        <a href="#top">Back to top</a>
      </p>
    </footer> -->
    <footer>
 
     <?php
    /* The footer widget area is triggered if any of the areas
     * have widgets. So let's check that first.
     *
     * If none of the sidebars have widgets, then let's bail early.
     */
    if (   ! is_active_sidebar( 'first-footer-widget-area'  )
        && ! is_active_sidebar( 'second-footer-widget-area' )
        && ! is_active_sidebar( 'third-footer-widget-area'  )
        && ! is_active_sidebar( 'fourth-footer-widget-area' )
    )
        return;
 
	if (   is_active_sidebar( 'first-footer-widget-area'  )
    && is_active_sidebar( 'second-footer-widget-area' )
    && is_active_sidebar( 'third-footer-widget-area'  )
    && is_active_sidebar( 'fourth-footer-widget-area' )
	) : ?>
	 
	<aside class="fatfooter" role="complementary">
	    <div class="col-sm-3 left widget-area">
	        <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
	    </div><!-- .first .widget-area -->
	 
	    <div class="col-sm-3 widget-area">
	        <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
	    </div><!-- .second .widget-area -->
	 
	    <div class="col-sm-3 widget-area">
	        <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
	    </div><!-- .third .widget-area -->
	 
	    <div class="col-sm-3 right widget-area">
	        <?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
	    </div><!-- .fourth .widget-area -->
	</aside><!-- #fatfooter -->
	<?php 
	elseif ( is_active_sidebar( 'first-footer-widget-area'  )
	    && is_active_sidebar( 'second-footer-widget-area' )
	    && is_active_sidebar( 'third-footer-widget-area'  )
	    && ! is_active_sidebar( 'fourth-footer-widget-area' )
	) : ?>
	<aside class="fatfooter" role="complementary">
	    <div class="col-sm-4 left widget-area">
	        <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
	    </div><!-- .first .widget-area -->
	 
	    <div class="col-sm-4 widget-area">
	        <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
	    </div><!-- .second .widget-area -->
	 
	    <div class="col-sm-4 right widget-area">
	        <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
	    </div><!-- .third .widget-area -->
	 
	</aside><!-- #fatfooter -->  
     <!-- end of all sidebar checks. -->
     <?php
	elseif ( is_active_sidebar( 'first-footer-widget-area'  )
	    && is_active_sidebar( 'second-footer-widget-area' )
	    && ! is_active_sidebar( 'third-footer-widget-area'  )
	    && ! is_active_sidebar( 'fourth-footer-widget-area' )
	) : ?>
	<aside class="fatfooter" role="complementary">
	    <div class="col-sm-6 left widget-area">
	        <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
	    </div><!-- .first .widget-area -->
	 
	    <div class="col-sm-6 right widget-area">
	        <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
	    </div><!-- .second .widget-area -->
	 
	</aside><!-- #fatfooter -->
	<?php
	elseif ( is_active_sidebar( 'first-footer-widget-area'  )
	    && ! is_active_sidebar( 'second-footer-widget-area' )
	    && ! is_active_sidebar( 'third-footer-widget-area'  )
	    && ! is_active_sidebar( 'fourth-footer-widget-area' )
	) :
	?>
	<aside class="fatfooter" role="complementary">
	    <div class="col-sm-12 widget-area">
	        <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
	    </div><!-- .first .widget-area -->
	 
	</aside><!-- #fatfooter -->
    <?php endif;?>
         
</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript">
		(function($){
			$(document).ready(function(){
				$('.slider-container').css('opacity', '1');
			});
		})(jQuery);
	</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
     
<?php wp_footer(); ?> 
</body>
</html>
