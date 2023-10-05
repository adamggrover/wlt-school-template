



<?php
    get_header();
?>

<div class="container key-information-single-page " data-aos="fade-up" data-aos-delay="200" data-aos-duration='800'>
    
    <?php include 'content-header-full.php'; ?>

            <div class="content-area row gx-5 ">

            <a href="<?php echo get_post_type_archive_link(get_post_type()); ?>" class="col-2 key-information-back-button-link">
                    <div class="key-information-back-button">
                    <div class="icon-wrapper">
                        <i class="bi bi-arrow-left-circle-fill" aria-hidden="true"></i>
                    </div>
                    <p class="p d-none d-md-block">Back to <?php $postType = get_post_type_object(get_post_type());
                                                                                if ($postType) {
                                                                                    echo esc_html($postType->labels->menu_name);
                                                                                } ?> Menu</p>
                    
                    

                    </div>
                </a>
   
                

                <div id="post-content-column" class="col wordpress-page-area">


                    
                    

                    <h1 id="content-subheading">
                    <?php
                        the_title();
                    ?>
                    </h1>



                    <div class="content-body">

                    <div class="key-information-post-content">
                    <?php

                    // default content - this weill be removed once all has been transfered over to new system

                    the_content(); ?>

                    <!----------ACF fields content form key information on individual school sites------- -->

                    <div class="key-information-acf-content">

                    <!-- check if text area field exists and display it if it does -->

                        <?php if( get_field('text_area') ): ?>
                        <p><?php the_field('text_area'); ?></p>
                        <?php endif; ?>





                        <!-- check if file upload block fields exist and display them if the do -->
                        <?php               



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
                        endif;?>
                        



                    </div>

                    <div class="key-information-standardised-wlt-content">

                        <?php

                        // save local authority field to variable for admissions page info

                        if( get_field('local_authority') ) {
                            $local_authority = get_field('local_authority');
                        }

                        //---------------- Display Standardised page content from WLT School Template Site Section--------------------------------------
                        if( get_field('display_standardised_page_content') ) {


                            // get current post slug
                            $current_post = get_post_field( 'post_name', get_post() );

                            // pull in content from wlt master school template
                            switch_to_blog( 11 );
                            
                            //ok below

                                // query by current post name
                                $args1 = array(
                                    'post_type' => 'key-information',
                                    'name' => $current_post
                                );
    
                                    $template_query = new WP_Query( $args1);

                                    if ( $template_query->have_posts() ) { 
    
                                    
                                      

                                        while ( $template_query->have_posts() ) :
                                            $template_query->the_post();
                                        
                                            the_content();
                                        
        
                                        endwhile;
                                    }
                               

                                
                                    wp_reset_postdata();
    
                                restore_current_blog();

                        }// end if 

             
                    //------------WLT main site docs section----------------------------------------------------------

                    if( get_field('display_wlt_site_docs') ) {

                        
                        
                        
                        
                        // get current post slug
                        $current_post = get_post_field( 'post_name', get_post() );

                        //---Content from wlt---------------------------------------------------------

                        // pull in content from wlt main site
                        switch_to_blog( 5 ); //wlt main site

                        // query by current post name
                        $args2 = array(
                            'post_type' => 'key-information',
                            'name' => $current_post
                        );

                            $query = new WP_Query( $args2);

                        if ( $query->have_posts() ) { ?>

                            
                            <?php
                            while ( $query->have_posts() ) :
                            $query->the_post();

                           
                            
                            //--------------admissions policy documents------------------------------------------------------------------
                            // check if it is an admissions page by checking if local authority field exists
                            // if it is display the correct admissions policy document
                            if ($local_authority){

                       

                                        //----display admission documents from WLT site for relevant local authority----------------------------------------------
                                        // Loop over sub repeater rows.
                                            if( have_rows("file_upload_section_{$local_authority}") ):
                                                while( have_rows("file_upload_section_{$local_authority}") ) : the_row();
            
            
            
                                                    ?>
            
                                                    <!-- Display acf file upload repeater fields -->
                                                    <li class="file-upload-repeater">
                                                        <a href="<?php the_sub_field("file_upload_{$local_authority}") ?>" target="_blank">
                                                        <?php the_sub_field("file_title_{$local_authority}") ?>
                                                        </a>
                                                    </li>
                                                        
                                                    <?php
                                                endwhile;
                                            endif;

                                        //----display univeral admission documents from WLT site suitable for all schools----------------------------------------------
                                        // Loop over sub repeater rows.
                                        if( have_rows("file_upload_section_universal") ):
                                            while( have_rows("file_upload_section_universal") ) : the_row();
        
        
        
                                                ?>
        
                                                <!-- Display acf file upload repeater fields -->
                                                <li class="file-upload-repeater">
                                                    <a href="<?php the_sub_field("file_upload_universal") ?>" target="_blank">
                                                    <?php the_sub_field("file_title_universal") ?>
                                                    </a>
                                                </li>
                                                    
                                                <?php
                                            endwhile;
                                        endif;

                            }
                            //---------------------file upload section--------------------------------------------

                            
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
                            

                            endwhile;
                        
                        }
                        wp_reset_postdata();
                        restore_current_blog();

                        }// end if 

                        //----------------Display link to WLT webiste-----------------------------------------------------------

                        if( get_field('display_wlt_link') ) {?>
                            <p class="mt-4">Further information can be found on the <a href="https://wessexlearningtrust.co.uk/key-information/" target="_blank">Wessex Learning Trust website</a>.</p>
                            <?php
                        }
                        ?>

                                             



                    </div>










                                                                            

                        </div>


                        <div class="wlt-site-content">

                            <?php

                                $wlt_site_cat = get_field('wlt_site_cat');

                                switch_to_blog( 5 );
                                // pull in posts from main blog

                                $args = array(
                                    'post_type' => 'key-information',
                                    'key-information-category' => $wlt_site_cat
                                );

                                    $query = new WP_Query( $args);

                                if ( $query->have_posts() ) { ?>

                                    
                                    <?php
                                    while ( $query->have_posts() ) :
                                    $query->the_post();

                                    
                                    ?>
                                    <h2>Wessex Learning Trust <?php the_title(); ?></h2>
                                    <?php the_content();?>
                                    <div class="wlt-site-content-spacer"></div>

                                    <?php
                                    endwhile;
                                wp_reset_postdata();
                                } else {
                                // none were found
                                }

                                restore_current_blog();

                                $wlt_site_cat = "";

                            ?>                                                          

                        </div>




                    </div>


                       <!-- <div class="content-footer">

                        	
                        <?php the_post_navigation( array(
                        'prev_text'  => __( '← Previous' ),
                        'next_text'  => __( 'Next →' ),
                        ) );
                        ?>


                 

           

                        </div> -->


                </div>

            </div>
        
       

        
    



  




<?php
    get_footer();
    ?>