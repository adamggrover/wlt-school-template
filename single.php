<?php
    get_header();
?>

<div class="container wordpress-page-area" id="single-post-main-page-area" data-aos="fade-up" data-aos-delay="200" data-aos-duration='800' >
<?php include 'content-header-full.php';?>

            <div class="content-area row gx-3">
                <div id="post-content-column col-12">
                    
                    

                    <h1 id="content-subheading">
                    <?php
                        the_title();
                    ?>
                    </h1>



                    <div class="content-body">

                     


                        <?php
                        if (have_posts()):
                        while (have_posts()) : the_post();

                            get_template_part('content', 'news');

                            
                        endwhile;
                        else:
                        echo '<p>Sorry, no posts matched your criteria.</p>';
                        endif;
                        ?>



                     

                        


                        </div>


                        <div class="content-footer">

                        	
                        <?php the_post_navigation( array(
                        'prev_text'  => __( '← Previous' ),
                        'next_text'  => __( 'Next →' ),
                        ) );
                        ?>


                 

           

                        </div>


                </div>

            </div>
        </div>
       

        
    



  




<?php
    get_footer();
    ?>