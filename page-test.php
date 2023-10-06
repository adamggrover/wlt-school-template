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

            <div class="content-area row gx-5 wordpress-page-area">
                <div class="col-lg-9 content-column">
                    
                    <h1 id="content-h1"><?php the_title(); ?></h1>

                    <div class="content-body">

                    <?php

                        //assign current page/post name to variable

                        $current_title = sanitize_title_with_dashes(get_the_title());

                        

                        // Check if acf repeater field exists for current page/post
                        if( have_rows("{$current_title}-file-uploads") ):

                            // Loop through rows.
                            while( have_rows("{$current_title}-file-uploads") ) : the_row(); 

                                //assign field values to variables

                                $file_url = get_sub_field("{$current_title}-file-upload");
                                $file_title = get_sub_field("{$current_title}-file-title");

                                ?>
                                
                                <!-- Display acf file upload repeater fields -->
                                <li class="file-upload-repeater">
                                    <a href="<?php echo $file_url; ?>" target="_blank">
                                       <?php echo $file_title; ?>
                                    </a>
                        </li>
                            <?php

                            // End loop.
                            endwhile;

                        // No value.
                        else :
                            // Do something...
                        endif;

                    ?>

                        <?php
                        if (have_posts()):
                        while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                        else:
                        echo '<p>Sorry, no posts matched your criteria.</p>';
                        endif;
                        ?>



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
            </div>
        </div>
       




<?php
    get_footer();
    ?>