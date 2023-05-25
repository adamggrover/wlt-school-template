<?php

$query = new WP_Query( array( 'page_id' => get_option('page_on_front')) ); 

while( $query->have_posts() ) : $query->the_post(); ?>

<?php

if (get_field('display_header_footer_twitter_link') == "yes"): ?>

    <a href="<?php the_field('twitter_link') ?>" target="_blank" class="social-links"><i class="fa-brands fa-twitter header-icon d-none d-sm-block d-md-block d-lg-block"></i></a>

<?php endif; 

if (get_field('display_header_footer_facebook_link') == "yes"): ?>

    <a href="<?php the_field('facebook_link') ?>" target="_blank" class="social-links"><i class="fa-brands fa-facebook-f header-icon d-none d-sm-block d-md-block d-lg-block"></i></a>

<?php endif; ?>

<button onclick="openSearch()" class="social-links"><i class="fa-solid fa-magnifying-glass header-icon pe-2"></i></button>
<div class="header-spacer p-1 d-none d-md-block"></div>

<?php endwhile; 
     wp_reset_query();
     ?>