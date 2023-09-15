<div class="content-header row gx-5">
              <!--  <div class="content-header-breadcrumb-wrapper col-lg-5 col-md-12">
                    <i class="bi bi-house-fill content-header-home-icon"></i><span class="breadcrumb-spacer"></span>
                    <h6 class="mb-0 content-header-breadcrumb-links p-0"><small><?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?></small></h6>
                    

                </div>

                <?php

                //$front_page_id = get_option('page_on_front');

                $query = new WP_Query( array( 'page_id' => get_option('page_on_front')) ); ?>

                <?php while( $query->have_posts() ) : $query->the_post(); ?>


                <div class="content-header-social col-lg-4 col-md-12">
                    <h6 class="mb-0"><small>Share This Page</small></h6><span class="breadcrumb-spacer"></span>
                    <div class="content-area-social-links">
                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" target="_blank" data-show-count="false"><i class="bi bi-twitter ps-2"></i></a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=example.org" target="_blank"><i class="bi bi-facebook ps-2"></i></a>
                        <a href="mailto:<?php the_field('email_address') ?>"><i class="bi bi-envelope-fill ps-2 "></i></a>   

                    </div>

                    
                <?php endwhile; 
                     wp_reset_query();
                     ?>
                    
                    
                </div> -->

            </div>