
<?php
    get_header();
?>

<div class="container key-information-single-page" data-aos="fade-up" data-aos-delay="200" data-aos-duration='800' >
    
<?php include 'content-header-full.php'; ?>

    <div class="content-area">
        <div id="job-adverts-content-column">
                    
                <h1 id="content-h1">Curriculum</h1>

                <?php $query = new WP_Query( array( 'pagename' => 'curriculum' ) ); 

                if ( $query->have_posts() ) {

                    while ( $query->have_posts() ) {
                        
                        $query->the_post(); ?>

                <div class="content-area row gx-5 wordpress-page-area mb-5 content-column content-body">
                    <?php the_content(); 

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

                        
                        //-------------Team Table-------------------------------------------------
                    

                        if( have_rows("team_table") ): ?>
                            <table class="mb-5">
                            <?php if(get_field("team_name") ): ?>
                                <tr>
                                    <th colspan="2"><?php the_field('team_name') ?> Team</th>
                                </tr>
                            <?php endif; ?>
                            
                            <?php while( have_rows("team_table") ) : the_row();
    
    
    
                                ?>
    
                                <!-- Display acf file upload repeater fields -->
                                
                                <tr>
                                    <td><?php the_sub_field("team_member_name") ?></td>
                                    <td><?php the_sub_field("team_member_position") ?></td>
                                    
                                </tr>
                                    
                                    <?php
                                endwhile; ?>
                                </table>
                            <?php endif;?>
                </div>

                <?php }

                    } 
                    wp_reset_query();
                    ?>


                
                <?php
                $options = array( 
                    'post_type' => 'curriculum',     
                    'curriculum-category' => 'subject',
                    'order' =>  'ASC',
                    'orderby' => 'title'
                    
                );
                    
                    


                $query = new WP_Query( $options );

                if ( $query->have_posts() ) {

                    ?>

                    <h3 class="curriculum-cat-heading h3 mt-1 pt-0 mb-5">Curriculum By Subject Area</h3>
                    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4  g-2 mb-5"> 

                    <?php

                    while ( $query->have_posts() ) {

                        
                        
                        $query->the_post(); 

                        ?>

                        



                        

                     




                          <?php  get_template_part('archive', 'curriculum-layout'); ?>

    


                        
                        

                    <?php }

                    ?></div><?php

                    } wp_reset_query();?>


<?php
                $options = array( 
                    'post_type' => 'curriculum',     
                    'curriculum-category' => 'year-group',
                    'order' =>  'ASC',
                    'orderby' => 'title'
                    
                );
                    
                    


                $query = new WP_Query( $options );

                if ( $query->have_posts() ) {

                    ?>

                    <h3 class="curriculum-cat-heading h3 mt-1 pt-0 mb-5">Curriculum By Year Group</h3>
                    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4  g-2 mb-5"> 

                    <?php

                    while ( $query->have_posts() ) {

                        
                        
                        $query->the_post(); 

                        ?>

                        



                        

                     




                          <?php  get_template_part('archive', 'curriculum-layout'); ?>

    


                        
                        

                    <?php }

                    ?></div><?php

                    } wp_reset_query();?>





















                </div>


                <div class="content-footer">


                   <!-- <div class="pagination-container">	
                                
                                <?php the_posts_pagination( array(
                                'prev_text'  => __( '← Previous' ),
                                'next_text'  => __( 'Next →' ),
                                ) );
                                ?>
                    </div> -->

                 

           

                </div>
                                  

        </div>

    </div>
</div>
       

        
    



  




<?php
    get_footer();
    ?>