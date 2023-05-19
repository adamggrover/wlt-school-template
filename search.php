
<?php
    get_header();
?>

<div class="container" id="single-post-main-page-area" data-aos="fade-up" data-aos-delay="200" data-aos-duration='800' >
<?php include 'content-header.php';?>

            <div class="content-area row gx-3">
                <div id="post-content-column col-12">
                    
                    <h1 id="content-h1">Search Results</h1>





                    <div class="content-body">

                     


                        <?php
                        if (have_posts()):
                        while (have_posts()) : the_post();

                            get_template_part('content', 'search');
                            

                            
                        endwhile;
                        else:
                        echo '<p>No results</p>';
                        endif;
                        ?>



                     

                        


                        </div>


                        <div class="content-footer">

                        	
     


                 

           

                        </div>


                </div>

            </div>
        </div>
       

        
    



  




<?php
    get_footer();
    ?>