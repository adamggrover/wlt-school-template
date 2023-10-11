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


                        //-----------------Page Builder-------------------------------------------------------------




                            // Check value exists.
                            if( have_rows('page_builder') ):

                                                       


                           

                                    // ACF - Flexible Content fields.
                                    $sections = get_field( 'page_builder' );

                                   

                                    if ( $sections ) :
                                        foreach ( $sections as $section ) :
                                            $template = str_replace( '_', '-', $section['acf_fc_layout'] );
                                            get_template_part( 'flexible-content/' . $template, '', $section );
                                        endforeach;
                                    endif;

                          
                       


                            endif;

                        // -----------------File Upload Section-----------------------------------------------
                        //check if page has file-upload acf fields and display them if it does

                        if( have_rows('file_section') ):
                            while( have_rows('file_section') ) : the_row();


                            // Display subheading
                            if( get_sub_field('file_subheading') ): ?>
                                <h3><?php the_sub_field('file_subheading'); ?></h3>
                                <?php endif; 



                                // Loop over sub repeater rows.
                                if( have_rows('file_upload_section') ):
                                    while( have_rows('file_upload_section') ) : the_row();



                                        ?>

                                        <!-- Display acf file upload repeater fields -->
                                        <li class="file-upload-repeater">
                                            <a href="<?php the_sub_field('file_upload') ?>" target="_blank">
                                            <?php the_sub_field('file_title') ?>
                                            </a>
                                        </li>
                                            
                                        <?php
                                    endwhile;
                                endif;
                            endwhile;
                        endif;

                        
                        // -----------------Table Upload Section-----------------------------------------------
                        //check if page has table acf fields and display them if it does

                        if( have_rows('table_section') ):
                            while( have_rows('table_section') ) : the_row();?>








                                    
                                    <table class="mb-5">
                                    <?php
                                    // Display subheading

                                    
                                    
                                    
                                    if( get_sub_field('table_subheading') ): ?>
                                        <tr>
                                            <th colspan="2">
                                                <?php the_sub_field('table_subheading'); ?>
                                            
                                            </th>
                                        </tr>
                                    <?php endif; ?>

                                    <!-- Works above -->
                                    <?php
                                    if( have_rows('table_cells') ): ?>
                                    <?php while( have_rows('table_cells') ) : the_row();



                                        ?>

                                        <!-- Display acf repeater fields -->
                                        <tr>
                                            <td><?php the_sub_field("table_col_one") ?></td>
                                            <td><?php the_sub_field("table_col_two") ?></td>
                                            
                                        </tr>
                                            
                                        <?php
                                    endwhile;?>
                                    <?php endif; ?>
                                    
                                    <!-- Works below -->

                                    </table>



                                    <?php
                              
                            endwhile;
                        endif;

                        // -------------------Content Section----------------------------------------------------------
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