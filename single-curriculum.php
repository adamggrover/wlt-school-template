


      <?php

                        if (have_posts()):
                        while (have_posts()) : the_post();

                            get_template_part('content', 'key-information');

                            
                        endwhile;
                        else:
                        echo '<p>Sorry, no posts matched your criteria.</p>';
                        endif;
         ?>

<?php
    get_header();
?>

<div class="container key-information-single-page " data-aos="fade-up" data-aos-delay="200" data-aos-duration='800'>
    
    <?php include 'content-header-full.php'; ?>

            <div class="content-area row gx-5 wordpress-page-area">

            <a href="<?php echo get_post_type_archive_link(get_post_type()); ?>" class="col-2 key-information-back-button-link">
                    <div class="key-information-back-button">
                    <div class="icon-wrapper">
                        <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
                    </div>
                    <p class="p d-none d-md-block">Back to <?php $postType = get_post_type_object(get_post_type());
                                                                if ($postType) {
                                                                    echo esc_html($postType->labels->menu_name);
                                                                } ?> Menu</p>
                    
                    

                    </div>
                </a>
   
                

                <div id="post-content-column" class="col">


                    
                    

                    <h1 id="content-subheading">
                    <?php
                        the_title();
                    ?>
                    </h1>



                    <div class="content-body">

                     

                    <?php

                    the_content();

                    ?>


                        </div>


                       <!-- <div class="content-footer">

                        	
                        <?php the_post_navigation( array(
                        'prev_text'  => __( '← Previous' ),
                        'next_text'  => __( 'Next →' ),
                        ) );
                        ?>


                 

           

                        </div> -->


                </div>

            </div>
        
       

        
    



  




<?php
    get_footer();
    ?>