<?php
    get_header();
?>

<div class="container" id="single-post-main-page-area">
<?php include 'content-header.php';?>

            <div class="content-area">
                <div id="post-content-column">
                    
                    <h1 id="content-h1">Announcements</h1>




                    <div class="content-body">

                    

                     


                        <?php
                        if (have_posts()):
                        while (have_posts()) : the_post();

                            get_template_part('archive', 'announcements-layout');

                            
                        endwhile;
                        else:
                        echo '<p>Sorry, no posts matched your criteria.</p>';
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