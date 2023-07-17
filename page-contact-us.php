<?php
    get_header();
    ?>
<!--
<div class="header-image">
<?php if ( get_header_image() ) : ?>
    <div id="site-header">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </a>
    </div>
<?php endif; ?>

    </div>
-->


<div class="container wordpress-page-area" id="main-page-area" data-aos="fade-up" data-aos-delay="200" data-aos-duration='800' >
<?php include 'content-header-full.php';?>
            <div class="content-area row" >
                <div class="col-lg-12 content-column">
                    
                    <h1 id="content-h1"><?php the_title(); ?></h1>

                    <div class="content-body row">

                        <div class="col-md-5">
    

                        <?php $query = new WP_Query( array( 'page_id' => get_option('page_on_front')) ); ?>

                        <?php while( $query->have_posts() ) : $query->the_post(); ?>

                        <p class="mb-3 contact-us-address"><?php echo get_bloginfo('name'); ?><br><?php the_field('address_line_1') ?><br><?php the_field('county') ?> <?php the_field('postcode') ?></p>

                        <p class="mb-4"><?php the_field('headteacher_position') ?>: <?php the_field('headteacher_name') ?></p>

                        <p class="mb-4">Tel: <?php the_field('phone_number') ?></p>

                        <p class="mb-4">E-mail: <a href="mailto:<?php the_field('email_address') ?>"><?php the_field('email_address') ?></p></a>

                        <?php endwhile; 
                     wp_reset_query();
                     ?>

                        <?php
                        if (have_posts()):
                        while (have_posts()) : the_post();
                        
                            
                   
                        ?>

                        <h4 class="h5 mt-5">The School Day</h4>

                        <p><?php the_field('school_day'); ?></p>


                        <h3 class="h5 mt-5">Paper Copies</h4>

                        <p>If you, as a parent, request a paper copy of the information on this website, you will be provided it free of charge. Please contact the office using the information above</p>
                        
                        


                        </div>

      

                        <div class="col-md-7">
                        <div style="width: 100%"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php the_field('map_url'); ?>" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>


                        </div>

                        <?php
                             endwhile;
                            else:
                            
                            endif;

                        ?>

                        



                    </div>
                </div>


                    </div>

                </div>
            </div>
        </div>
       




<?php
    get_footer();
    ?>