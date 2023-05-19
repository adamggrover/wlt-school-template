<div id="post-image-container">
    <?php
    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
        the_post_thumbnail( 'medium' );
        }
        
    ?>
</div>
<div id="post-content">

    <h4 class="h5">Closing Date: <?php echo get_post_meta($post->ID, 'Closing Date', true); ?></h5>
    <h4 class="h5">Interview Date: <?php echo get_post_meta($post->ID, 'Interview Date', true); ?><h5>
    <?php



    the_content();
    ?>
</div>