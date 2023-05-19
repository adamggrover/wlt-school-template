<?php
    get_header();
    ?>
<!--
<div class="header-image">
<?php if ( get_header_image() ) : ?>
    <div id="site-header">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </a>
    </div>
<?php endif; ?>

    </div>
-->
<div class="featured-img-header">
    <?php
    // Check if this is a post or page, if it has a thumbnail, and if it's a big one
    if ( is_singular() && current_theme_supports( 'post-thumbnails' ) &&
    has_post_thumbnail( $post->ID ) &&
    ( /* $src, $width, $height */ $image = wp_get_attachment_image_src(
    get_post_thumbnail_id( $post->ID ), 'post-thumbnail' ) ) &&
    $image[1] >= HEADER_IMAGE_WIDTH ) :
    // Houston, we have a new header image!
    echo get_the_post_thumbnail( $post->ID );
    elseif ( get_header_image() ) : ?>
    <img src="<?php header_image(); ?>" width="<?php echo
    HEADER_IMAGE_WIDTH; ?>" height="<?php echo
    HEADER_IMAGE_HEIGHT; ?>" alt="" />
    <?php endif; ?>
</div>

<div class="container" id="main-page-area" data-aos="fade-up" data-aos-delay="200" data-aos-duration='800' >
            <div class="content-header row gx-3">
                <div class="content-header-breadcrumb-wrapper col-lg-6 col-md-12">
                    <i class="fa-solid fa-house fa-xl"></i><span class="breadcrumb-spacer"></span>
                    <h6 class="mb-0 content-header-breadcrumb-links"><small><?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?></small></h6>
                    

                </div>
                <div class="content-header-social col-lg-6 col-md-12">
                    <h6 class="mb-0"><small>Share This Page</small></h6><span class="breadcrumb-spacer"></span>
                    <div class="content-area-social-links">
                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" target="_blank" data-show-count="false"><i class="fa-brands fa-twitter ps-2 fa-xl"></i></a>
                        <a href="https://www.facebook.com/sharer/sharer.php?u=example.org" target="_blank"><i class="fa-brands fa-facebook-f ps-2 fa-xl"></i></a>
                        <a href="mailto:office@weareacademy.co.uk"><i class="fa-solid fa-envelope ps-2 fa-xl"></i></a>   

                    </div>
                    
                    
                </div>
            </div>
            <div class="content-area row" >
                <div class="col-lg-12 content-column">
                    
                    <h1 id="content-h1"><?php the_title(); ?></h1>

                    <div class="content-body row">

                        <div class="col-md-5">
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

                        <div class="col-md-7">
                        <div style="width: 100%"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=Weare%20Academy%20First%20School%20and%20Rainbow%20Woods%20Pre-School,%20Notting%20Hill%20Way,%20Weare,%20Axbridge%20BS26%202JS&t=&z=13&ie=UTF8&iwloc=&output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure area map</a></iframe></div>


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