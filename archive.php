<?php
    get_header();
?>

<div class="container" id="blog-archive-main-page-area" data-aos="fade-up" data-aos-delay="200" data-aos-duration='800' >
<?php include 'content-header.php';?>

            <div class="content-area row gx-3">
                <div id="post-content-column col-12">
                    
                    <h1 id="content-h1">News</h1>




                    <div class="content-body">

                    <div class="row row-cols-1 row-cols-md-3 g-4">

                     


                        <?php
                        if (have_posts()):
                        while (have_posts()) : the_post();

                            get_template_part('archive', 'news');

                            
                        endwhile;
                        else:
                        echo '<p>Sorry, no posts matched your criteria.</p>';
                        endif;
                        ?>



                     

                        


                        </div>


                        <div class="content-footer">

                        	

                        <?php the_posts_pagination( array(
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