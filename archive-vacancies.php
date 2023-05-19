<?php
    get_header();
?>

<div class="container" id="single-post-main-page-area" data-aos="fade-up" data-aos-delay="200" data-aos-duration='800' >
    
<?php include 'content-header.php';?>

    <div class="content-area">
        <div id="job-adverts-content-column">
                    
                <h1 id="content-h1">Vacancies</h1>




                <div class="content-body">

                                      
                     


                        <?php
                        if (have_posts()):
                        while (have_posts()) : the_post();

                            get_template_part('archive', 'vacancies-layout');
                            

                            
                        endwhile;
                        else:
                        
                        endif;
                        ?>


                            <div class="page-content-vacancies content-column">

                            <?php $the_query = new WP_Query( 'page_id=1572' ); ?>

                            <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

                                                <?php the_content(); ?>


                                <?php endwhile;?>

                            </div>
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