
<?php
    get_header();
?>

<div class="container key-information-single-page" data-aos="fade-up" data-aos-delay="200" data-aos-duration='800' >
    
<?php include 'content-header-full.php'; ?>

    <div class="content-area">
        <div id="job-adverts-content-column">
                    
                <h1 id="content-h1">Curriculum</h1>

                <?php $query = new WP_Query( array( 'pagename' => 'curriculum-intent' ) ); 

                if ( $query->have_posts() ) {

                    while ( $query->have_posts() ) {
                        
                        $query->the_post(); ?>

                <div class="content-area row gx-5 wordpress-page-area mb-5 content-column content-body">
                    <?php the_content(); ?>
                </div>

                <?php }

                    } 
                    wp_reset_query();
                    ?>


                
                <?php
                $options = array( 
                    'post_type' => 'curriculum',     
                    'curriculum-category' => 'subject',
                    'order' =>  'ASC',
                    'orderby' => 'title'
                    
                );
                    
                    


                $query = new WP_Query( $options );

                if ( $query->have_posts() ) {

                    ?>

                    <h3 class="curriculum-cat-heading h3 mt-5 pt-5 mb-5">Curriculum By Subject Area</h3>
                    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4  g-2 mb-5"> 

                    <?php

                    while ( $query->have_posts() ) {

                        
                        
                        $query->the_post(); 

                        ?>

                        



                        

                     




                          <?php  get_template_part('archive', 'curriculum-layout'); ?>

    


                        
                        

                    <?php }

                    ?></div><?php

                    } wp_reset_query();?>


<?php
                $options = array( 
                    'post_type' => 'curriculum',     
                    'curriculum-category' => 'year-group',
                    'order' =>  'ASC',
                    'orderby' => 'title'
                    
                );
                    
                    


                $query = new WP_Query( $options );

                if ( $query->have_posts() ) {

                    ?>

                    <h3 class="curriculum-cat-heading h3 mt-5 pt-5 mb-5">Curriculum By Year Group</h3>
                    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4  g-2 mb-5"> 

                    <?php

                    while ( $query->have_posts() ) {

                        
                        
                        $query->the_post(); 

                        ?>

                        



                        

                     




                          <?php  get_template_part('archive', 'curriculum-layout'); ?>

    


                        
                        

                    <?php }

                    ?></div><?php

                    } wp_reset_query();?>





















                </div>


                <div class="content-footer">


                   <!-- <div class="pagination-container">	
                                
                                <?php the_posts_pagination( array(
                                'prev_text'  => __( '← Previous' ),
                                'next_text'  => __( 'Next →' ),
                                ) );
                                ?>
                    </div> -->

                 

           

                </div>
                                  

        </div>

    </div>
</div>
       

        
    



  




<?php
    get_footer();
    ?>