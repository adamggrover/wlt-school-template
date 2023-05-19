<?php
    get_header();
    ?>
    
<?php
 
 if ( ( is_single() || ( is_page() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
     echo '<div class="single-featured-image-header">';
     echo get_the_post_thumbnail( get_queried_object_id(), 'featured-image' );
     echo '</div><!-- .single-featured-image-header -->';
 endif;
 ?>

<div class="container" data-aos="fade-up" data-aos-delay="200" data-aos-duration='800' id="main-page-area">
<?php include 'content-header.php';?>
            <div class="content-area row gx-3">
                <div class="col-lg-9 content-column">
                    
                    <h1 id="content-h1"><?php the_title(); ?></h1>



                            <div class="content-body row">

                                <div class="page-content">

                                <?php $the_query = new WP_Query( 'page_id=2080' ); 

                                    while ($the_query -> have_posts()) : $the_query -> the_post();  

                                    the_content(); 



                                endwhile;?>

                                    

                                </div>
                                <div class="event-calendar-container">


                                    <?php $the_query = new WP_Query( 'page_id=3073' ); ?>

                                    <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

                                                        <?php the_content(); ?>



                                    <?php endwhile;?>
                                </div>

                                <div>





                                </div>

                            </div>



                 
                        


                </div>

                
                <div class="col-lg-3" id="sidebar-section-nav-col" data-aos="fade-up" data-aos-delay="600" data-aos-duration='800' >
                    <div id="sidebar-container-nav">
                        <div id="SideNav">

                                <h5 class="sidenav-heading">In This Section</h5>

                                <?php if ( is_active_sidebar( 'sidenav-menu' ) ) : ?>
                                    
                                    <div id="sidenav-menu-bellows" class="sidenav-menu">
                                    <?php dynamic_sidebar( 'sidenav-menu' ); ?>
                                    </div>
                                <?php endif; ?>
                        	
                    
    
                        </div>
                    </div>
                </div>

            </div>







   
</div>
       




<?php
    get_footer();
    ?>
            