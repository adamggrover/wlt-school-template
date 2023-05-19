<div id="post-image-container">
    <?php
    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
        the_post_thumbnail( 'medium' );
        }
        
    ?>
</div>
<div id="post-content">
    <?php

    the_content();
    ?>
</div>