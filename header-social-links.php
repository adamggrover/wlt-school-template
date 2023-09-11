<?php

$query = new WP_Query( array( 'page_id' => get_option('page_on_front')) ); 

while( $query->have_posts() ) : $query->the_post(); ?>

<?php

if (get_field('display_header_footer_twitter_link') == "yes"): ?>

    <a href="<?php the_field('twitter_link') ?>" target="_blank" class="social-links"><i class="bi bi-twitter header-icon d-none d-sm-block d-md-block d-lg-block"></i></a>

<?php endif; 

if (get_field('display_header_footer_facebook_link') == "yes"): ?>

    <a href="<?php the_field('facebook_link') ?>" target="_blank" class="social-links"><i class="bi bi-facebook header-icon d-none d-sm-block d-md-block d-lg-block"></i></a>

<?php endif; ?>

<button onclick="openSearch()" class="social-links"><i class="bi bi-search header-icon pe-2"></i></button>
<div class="header-spacer p-1 d-none d-md-block"></div>

<?php endwhile; 
     wp_reset_query();
     ?>