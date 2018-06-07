<?php
/**
 *  Template Name: Instant Messages
 */
get_template_part('includes/header'); ?>
<div class="jumbotron text">
                <h1>Messy Conversations</h1>
                <p>Sharing the hard truth</p>

            </div>
  <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
        <ul id="og-grid" class="og-grid">

        <?php
        //set find parameters
        $params = array( 'orderby' => 'message_name', 'limit' => 400 );
        //get pods object
        $pods = pods( 'instant-message', $params );

        $pods->find( $params ); 
     
            //loop through records
            if ( $pods->total() > 0 ) {
                while ( $pods->fetch() ) {
                    //Put field values into variables
                    $name = $pods->display('message_name');
                    $topic = $pods->display('topic');
                    $permalink = $pods->field('permalink');
                    $picture = $pods->field('picture');
                    $description = $pods ->field('description');
                    $id = $pods->field('id');
                    // $content = $pods->field('message_teaser');          
                    $body = $pods->display('post_content');
                    $title = $pods->display('post_title');

            ?>
            <li> 
                <a href="<?php echo $permalink; ?>" data-largesrc="<?php echo wp_get_attachment_url( $picture['ID'] ); ?>" data-name="<?php echo $name; ?>" data-title="<?php echo 'Dated on: ' . $title; ?>" data-description="<?php echo $description; ?>" data-content="<?php echo $body ?>">
                <!-- <?php echo wp_get_attachment_image( $picture['ID'] ); ?> -->                    
                <img class="thumbnail" src="<?php echo wp_get_attachment_url( $picture['ID'] ); ?>">
                </a>
            </li>
        
        <?php
                } //endwhile
            } //endif
            //do the pagination
            echo $pods->pagination( array( 'type' => 'advanced' ) );
        ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="/amillionwordsaboutrace/wp-content/themes/bbe-child-starter/expanding-js/grid.js"></script>

        <script>
            $(function() {
                Grid.init();
            });
        </script>
        </ul><!-- #post -->
    </div><!-- #content -->
  </div><!-- #primary -->

        
               
        

<?php get_template_part('includes/footer'); ?>

 <script src="/amillionwordsaboutrace/wp-content/themes/bbe-child-starter/expanding-js/modernizr.custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="/amillionwordsaboutrace/wp-content/themes/bbe-child-starter/expanding-js/grid.js"></script>
    <script>
        $(function() {
            Grid.init();
        });
    </script>