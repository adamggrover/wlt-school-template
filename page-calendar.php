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

                        <div class="mb-5">

                            <?php
                            if (have_posts()):
                            while (have_posts()) : the_post();
                                the_content();
                            endwhile;
                            else:
                            echo '<p>Sorry, no posts matched your criteria.</p>';
                            endif;
                            ?>


                            <?php

                            
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

                           
                            //--------------calendar documents------------------------------------------------------------------

                            if( get_field('local_authority') ) {
                            $local_authority = get_field('local_authority');
                            }
                            //check which local authority
                            if ($local_authority && get_field('display_wlt_site_docs')){





                            // pull in content from wlt site
                            switch_to_blog( 5);



                            // query by current post name
                            $args1 = array(

                            'post_type' => 'key-information',
                            'name' => 'term-dates'
                            );

                            $template_query = new WP_Query( $args1);

                            if ( $template_query->have_posts() ) { 






                            while ( $template_query->have_posts() ) :
                            $template_query->the_post();


                            //----display  documents from WLT site for relevant local authority----------------------------------------------
                            // Loop over sub repeater rows.
                            if( have_rows("file_upload_section_{$local_authority}") ):
                            while( have_rows("file_upload_section_{$local_authority}") ) : the_row();?>




                                

                                <!-- Display acf file upload repeater fields -->
                                <li class="file-upload-repeater">
                                    <a href="<?php the_sub_field("file_upload_{$local_authority}") ?>" target="_blank">
                                    <?php the_sub_field("file_title_{$local_authority}") ?>
                                    </a>
                                </li>
                                    
                                <?php
                            endwhile;
                            endif;


                            endwhile;
                            }



                            wp_reset_postdata();

                            restore_current_blog();


                            }
                            ?>

                        </div>

                       
<?php 

//check if events calendar plugin exists. If it does
//output event calendar from wp events manager plugin

if ( class_exists('EM_Events') ){ ?>

   

    <h3>Event Calendar</h3>

    <div id="calendar-subscribe-link-container" class="mb-0">
        <i class="fa-regular fa-calendar-days"></i>
        <p>Subscribe to full calendar</p>


        
    </div>


    <!-- get ical feed url -->
    <?php 
            
            $site_url = get_home_url(); 
            $url = preg_replace("(^https?)", "webcal", $site_url ); 
            
    ?>

    <div id="cal-feed-instructions-container">
        <div class="cal-feed-link-container">

            <div class="cal-feed-instructions mb-0">
                <i id="instructions-close-btn" class="bi bi-x-lg"></i>
                
                <p><small>To subscribe to the calendar, copy the url below and then follow the relevant instructions for your calendar programme/device of choice.</small></p>
                <input id="iCalUrl" type="text" value="<?php echo $url . "/events.ics"; ?>" >
                <div class="copy-text-btn-container-wrapper">
                    <div class="copy-text-btn-container">
                        <i id="copy-text-btn" class="bi bi-clipboard-fill mb-0"></i>
                    </div>
                </div>
                <div id="copy-text-notification-wrapper">
                    <p>Link copied</p>
                </div>
                <ul>
                    <a href="<?php echo $url . "/events.ics"; ?>" target="_blank"><li>Outlook</li></a>
                    <a href="https://support.google.com/calendar/answer/37100?hl=en&co=GENIE.Platform%3DDesktop" target="_blank"><li>Gmail/Android</li></a>
                    <a href="<?php echo $url . "/events.ics"; ?>" target="_blank"><li>iPhone</li></a>
                </ul>
                
            </div>
        </div>
    </div>

    <div class="categories-section">
        
        <hr class="mb-1">
        <div class="categories-wrapper">
            <p id="categories-title" class="mb-2"><small>Categories</small></p>
            <div class="categories-list"><?php echo do_shortcode( '[categories_list hide_empty=0]<div class="category-wrapper"><div class="category-color-box" style="background-color: #_CATEGORYCOLOR"></div><p>#_CATEGORYLINK</p></div>[/categories_list]'); ?></div>
        </div>
        <hr>


    </div>

    <?php
    $args = apply_filters('em_content_events_args', $args);
    if( empty($args['id']) ) $args['id'] = rand(); // prevent warnings
    $id = esc_attr($args['id']);
    ?>

    <div class="<?php em_template_classes('view-container'); ?>" id="em-view-<?php echo $id; ?>" data-view="list-grouped">
        <div class="<?php em_template_classes('events-list', 'events-list-grouped'); ?>" id="em-events-list-grouped-<?php echo $id; ?>">
        <?php
        echo EM_Events::output_grouped($args); //note we're grabbing the content, not em_get_events_list_grouped function
        ?>
        </div>
    </div>

<?php } ?>

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