</main>
    <!-- FOOTER SECTION-->

    <?php

//$front_page_id = get_option('page_on_front');

$query = new WP_Query( array( 'page_id' => get_option('page_on_front')) ); ?>

<?php while( $query->have_posts() ) : $query->the_post(); ?>

    <footer class="container-fluid p-0">
        <div class="footer-content container pb-2">
            <div class="row footer-logo">
            <div class="col-md-4">
                    <img src="<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
echo $image[0]; ?>" alt="school Logo" class="footer-icon">
                </div>

            </div>
            <div class="row footer-text">
                <div class="col-md-4 footer-contact footer-column">
                    <p class="mb-3"><?php echo get_bloginfo('name'); ?><br><?php the_field('address_line_1') ?><br><?php the_field('county') ?> <?php the_field('postcode') ?></p>
                    <p class="mb-4"><?php the_field('headteacher_position') ?>: <?php the_field('headteacher_name') ?></p>
                    <p><i class="fa-solid fa-phone"></i><span class="footer-spacer"></span><?php the_field('phone_number') ?></p>
                    <p><a href="mailto:<?php the_field('email_address') ?>"><i class="fa-solid fa-envelope"></i></i><span class="footer-spacer"></span>Email Us</a></p>
                    <p class="mb-4"><a href="<?php the_field('google_map_direction_link') ?>" target="_blank" ><i class="fa-solid fa-location-dot"></i></i><span class="footer-spacer"></span>Get Directions</a></p>

                    <div class="footer-social mb-4">

                        <?php if (get_field('display_header_footer_twitter_link') == "yes"): ?>
                        
                            <a href="<?php the_field('twitter_link') ?>" target="_blank" ><i class="fa-brands fa-twitter fa-xl"></i></a><span class="footer-spacer"></span><span class="footer-spacer"></span>
                        
                        <?php endif; 

                        if (get_field('display_header_footer_facebook_link') == "yes"): ?>
                            
                            <a href="<?php the_field('facebook_link') ?>" target="_blank"><i class="fa-brands fa-facebook-f fa-xl"></i></a>
                        
                        <?php endif; ?>
                        
                    </div>

                    <p class="mt-4">
                    <?php endwhile; 
                     wp_reset_query();
                     ?>
                </div>
                <div class="col-md-4 footer-links footer-column">
                    <h6 class="footer heading mb-3">Quick Links</h6>
                    <?php wp_nav_menu( array( 'theme_location' => 'quick-links-footer' ) ); ?>
                    
                </div>
                

                <div class="col-md-4 footer-accessability d-flex-column footer-column">
                    <div class="accesability-top">
                        <h6 class="footer heading mb-3">Accessibility</h6>
                        <?php wp_nav_menu( array( 'theme_location' => 'accessibility' ) ); ?>
                    </div>

                    <a href="https://wessexlearningtrust.co.uk" target="_blank"><img class="wlt-white mb-3 mt-3 img-fluid" src="" alt=""></a>               
                </div>

            </div>
            <div class="row-12 mt-5">
            <hr>
        </div>
        </div>
        <a href="https://wessexlearningtrust.co.uk" target="_blank">
            <div class="footer-bottom pb-4 pt-4 m-0" id="sub-footer-row">

                <div class="sub-footer-container container">

                    <div class="sub-footer-row row align-items-center">

                        <div class="col-md-4 pt-0">
                            

                            <img class="wlt-logo text-left pb-2" src="" alt="">
                    
                                    
                        </div>


                        

                        <div class="col-md-4 pt-0 ">
                            <small><p>Station Road, Cheddar</p></small>
                            <small><p>Somerset, BS27 3AQ</p></small>
                            <small><p>Company Number: 7348580</p></small>
                            
                            
                            
                                    
                        </div>

                        <div class="col-md-4 pt-0 align-self-center">

                        <small><p><i class="fa-solid fa-phone"></i><span class="footer-spacer"></span>01934 745363</p></small>
                        
                        <small><p>www.wessexlearningtrust.co.uk</p></small>
                        
                        <small><p class="mb-0">&#169 Wessex Learning Trust 2022</p></small> 
                        
                        

                                    
                    </div>

                     
                

                            


                    </div>
                    
                    

                </div>
            </div>
        </a> 

    </footer>
    

  
    <?php
       

wp_footer();
?>

</body>
</html>
