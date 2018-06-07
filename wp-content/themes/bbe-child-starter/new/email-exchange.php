<?php
/**
 *  Template Name: Email Exchange
 */
get_template_part('includes/header'); ?>
  <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">

        <?php
        //set find parameters
        $params = array( 'limit' => 400 );
        //get pods object
        $pods = pods( 'email_exchange', $params );
        //loop through records
        if ( $pods->total() > 0 ) {
            while ( $pods->fetch() ) {
                //Put field values into variables
                $title = $pods->display('ee_name');
                $topic = $pods->display('topic');
                $permalink = $pods->field('permalink');

                // $permalink = site_url( 'email-exchange/' . $pods->field('ee_permalink' ) );
                $picture = $pods->field('picture');
                $description = $pods ->field('description');
                $id = $pods->field('id');
        ?>
        <article>
            <div class="container">
              <div class="row">
                <div class="col-sm-3">
                    <header class="entry-header">
                        <?php if ( ! is_null($picture) ) : ?>
                            <div class="entry-thumbnail">
                                <?php echo wp_get_attachment_image( $picture['ID'] ); ?>
                            </div>
                        <?php else : ?>
                            <h1 class="entry-title">
                                <a href="<?php echo $permalink; ?>" rel="bookmark"><?php echo $title; ?></a>
                            </h1>
                        <?php endif; ?>
                    </header><!-- .entry-header -->
                </div>
                <div class="col-sm-9">
                    <h1 class="entry-title">
                        <a href="<?php echo esc_url( $permalink); ?>" rel="bookmark"><?php _e( $title , 'PP2014' ); ?></a>
                    </h1>
                    <p><em><?php echo $topic; ?></em></p>

                    <div class="entry-content">
                        <p>
                           <?php echo $description; ?>
                        </p>
                        <a href="<?php echo $permalink; ?>" rel="bookmark" class="button primary">Read More</a>
                    </div><!-- .entry-content -->
                </div>
              </div>
            </div>
        </article><!-- #post -->
        <?php
                } //endwhile
            } //endif
            //do the pagination
            echo $pods->pagination( array( 'type' => 'advanced' ) );
        ?>
    </div><!-- #content -->
  </div><!-- #primary -->


<?php get_template_part('includes/footer'); ?>
