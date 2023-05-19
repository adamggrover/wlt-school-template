<?php
    get_header();
?>

<div class="container" id="single-post-main-page-area" data-aos="fade-up" data-aos-delay="200" data-aos-duration='800' >
    
<?php include 'content-header.php';?>

    <div class="content-area">
        <div id="job-adverts-content-column">
                    
                <h1 id="content-h1">Merit Badges</h1>




                <div class="content-body">

                                      
                    <div class="page-content-merit-badges content-column" id="merit-badge-column">

                        <?php $the_query = new WP_Query( 'page_id=2778' ); ?>

                        <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

                                            <?php the_content(); ?>


                            <?php endwhile;?>

                    </div>


                        <?php
                        if (have_posts()):
                        while (have_posts()) : the_post();

                            get_template_part('archive', 'merit-badges-layout');
                            

                            
                        endwhile;
                        else:
                        echo "<p>Sorry, we don't currently have any merit badges uploaded. Please check back soon.</p>";
                        endif;
                        ?>



                </div>


                <div class="content-footer">


                    <div class="pagination-container">	
                                
                                <?php the_posts_pagination( array(
                                'prev_text'  => __( '← Previous' ),
                                'next_text'  => __( 'Next →' ),
                                ) );
                                ?>
                    </div>

                 

           

                </div>
                                  

        </div>

    </div>
</div>
       

        
    



  




<?php
    get_footer();
    ?>