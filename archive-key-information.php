
<?php
    get_header();
?>

<div class="container" class="key-information-single-page" data-aos="fade-up" data-aos-delay="200" data-aos-duration='800' >
    
<?php include 'content-header-full.php'; ?>

    <div class="content-area">
        <div id="job-adverts-content-column">
                    
                <h1 id="content-h1">Key Information</h1>




                <div class="row row-cols-1 row-cols-md-3 g-3">

                     


<?php
if (have_posts()):
while (have_posts()) : the_post();

    get_template_part('archive', 'key-information-layout');

    
endwhile;
else:
echo '<p>Sorry, no posts matched your criteria.</p>';
endif;
?>











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