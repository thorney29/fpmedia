<?php if(have_posts()): while(have_posts()): the_post();?>
    <article class="row" role="article" id="post_<?php the_ID()?>" <?php post_class(); ?>>
        <div class="col-md-4"><?php if (bbe_option_is_true('archives_featuredimage'))  the_post_thumbnail(); ?></div><!-- /col -->
        
        <div class="col-md-8">
            <header>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
                <h4>
                  <em>
                    <?php if (bbe_option_is_true('archives_author')): ?><span class="text-muted author"><?php _e('By', 'bbe'); echo " "; the_author() ?><?php if (bbe_option_is_true('archives_author') && bbe_option_is_true('archives_meta_date')) echo ","?></span><?php endif ?>
                    <?php if (bbe_option_is_true('archives_meta_date')): ?><time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('jS F Y') ?></time><?php endif ?>
                  </em>
                </h4>
            </header>
            <section>
                <?php if (!is_single()): ?><a href="<?php the_permalink(); ?>"><?php endif ?>
                
                <?php if (!is_single()): ?></a><?php endif ?>
                <?php if(bbe_option_is_true('archives_use_excerpt' ) or  bbe_post_is_using_bbe_template(get_the_ID())) the_excerpt(); 
                else the_content( __( '&hellip; ' . __('Continue reading', 'bbe' ) . ' <i class="glyphicon glyphicon-arrow-right"></i>', 'bbe' ) ); ?>
            </section>
            <footer>
                <p class="text-muted">
                    <?php if (bbe_option_is_true('archives_meta_category')): ?><i class="glyphicon glyphicon-folder-open"></i>&nbsp; <?php _e('Category', 'bbe'); ?>: <?php the_category(', ') ?><br/><?php endif ?>
                    <?php if (bbe_option_is_true('archives_meta_comments')): ?><i class="glyphicon glyphicon-comment"></i>&nbsp; <?php _e('Comments', 'bbe'); ?>: <?php comments_popup_link(__('None', 'bbe'), '1', '%', 'comments-link', 'Comments off'); ?><?php endif ?>
                </p>
            </footer>
        </div> <!-- /col -->
    </article> <!-- /row -->
<?php endwhile; ?>

<?php if ( function_exists('bbe_pagination') ) { bbe_pagination(); } else { ?>
  <ul class="pagination">
    <li class="older"><?php next_posts_link('<i class="glyphicon glyphicon-arrow-left"></i> ' . __('Previous Page', 'bbe')) ?></li>
    <li class="newer"><?php previous_posts_link(__('Next Page', 'bbe') . ' <i class="glyphicon glyphicon-arrow-right"></i>') ?></li>
  </ul>
<?php } ?>

<?php else: wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; endif; ?>
