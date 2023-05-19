<?php

// Disable ssl verify **REMOVE BEFORE GOING LIVE

add_filter('https_ssl_verify', '__return_false');


/**
 * Register our sidebars and widgetized areas.
 *
 */
function wlt_widgets_init() {

	register_sidebar( array(
		'name'          => 'left sidebar',
		'id'            => 'left-sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

    register_sidebar( array(
		'name'          => 'sidenav-menu',
		'id'            => 'sidenav-menu',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'wlt_widgets_init' );


//Theme support

//custom header

function wlt_custom_header_setup() {
    $args = array(
        'default-image'      => '',
        'default-text-color' => '000',
        'width'              => 2000,
        'height'             => 550,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'wlt_custom_header_setup' ); 

function wlt_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    

}

set_post_thumbnail_size( 350, 350);

add_action('after_setup_theme', 'wlt_theme_support');
	
add_filter('jpeg_quality', function($arg){return 95;});

//add small image size

add_image_size( 'Small size', 500, 400 );

//featured image header


define( 'HEADER_IMAGE_WIDTH', apply_filters( 'wlt_header_image_width', 2000 ) );
define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'wlt_header_image_height', 600 ) );


//Add menu locations

function wlt_menus(){

    $locations = array(
        'primary' => 'Desktop Primary Left',
        'quick-links-footer' => 'Quick Links Footer',
        'quick-links-header' => 'Quick Links Header',
        'accessability' => 'Accessability Footer'
        
    );

    register_nav_menus($locations);
}

add_action('init', 'wlt_menus');


//Register Styles


function wlt_register_styles(){

    $version = wp_get_theme() ->get ('Version');

    wp_enqueue_style('wlt', get_template_directory_uri().'/style.css', array(), $version, 'all');
    wp_enqueue_style('wlt-aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1', 'all');
    wp_enqueue_style('wlt-slick1', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css', array(), '1.5.8', 'all');
    wp_enqueue_style('wlt-slick2', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css', array(), '1.5.8', 'all');
    wp_enqueue_style('wlt-animatecss', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '1.0', 'all');
    wp_enqueue_style('wlt-googlefonts', 'https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300;0,400;1,300;1,400&family=Open+Sans:wght@300;400;500;600;700&display=swap');
    

}

add_action('wp_enqueue_scripts', 'wlt_register_styles');


// Register scripts

function wlt_register_scripts(){

    
    

wp_enqueue_script('wlt-fontawesome', 'https://kit.fontawesome.com/c3ed52941f.js', array());
wp_enqueue_script('wlt-aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array());
wp_enqueue_script('wlt-popper', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js', array(), '5.2.0', true);
wp_enqueue_script('wlt-jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js', array(), '3.6.1', true); 
wp_enqueue_script('wlt-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js', array(), '3.4', true); 
wp_enqueue_script('wlt-slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array(), '1.8.1', true);
wp_enqueue_script('wlt-main', get_template_directory_uri().'/Assets/js/main.js', array('wlt-jquery', 'wlt-slick', 'wlt-popper'), '1.1', true);
wp_enqueue_script('wlt-main', get_template_directory_uri().'/Assets/js/slick.js', array('wlt-main'), '1.0', true);

}

add_action('wp_enqueue_scripts', 'wlt_register_scripts');



// File Block Style Edits

add_action('init', function() {
    wp_register_style('wlt-block-styles', get_template_directory_uri() . '/wp-blocks.css', false);
    
	register_block_style('core/file', [
		'name' => 'wlt-file-block',
		'label' => __('wlt-file-block', 'txtdomain'),
        'style_handle' => 'wlt-block-styles'
	]);

    register_block_style('core/quote', [
		'name' => 'wlt-quote-block',
		'label' => __('wlt-quote-block', 'txtdomain'),
        'style_handle' => 'wlt-block-styles'
	]);

    register_block_style('core/latest-posts', [
		'name' => 'wlt-latest-posts-block',
		'label' => __('wlt-latest-posts-block', 'txtdomain'),
        'style_handle' => 'wlt-block-styles'
	]);

    register_block_style('core/button', [
		'name' => 'wlt-custom-button',
		'label' => __('wlt-custom-button', 'txtdomain'),
        'style_handle' => 'wlt-block-styles'
	]);

    register_block_style('core/paragraph', [
		'name' => 'wlt-custom-external-file-link',
		'label' => __('wlt-custom-external-file-link', 'txtdomain'),
        'style_handle' => 'wlt-block-styles'
	]);

});

//--------------Posts

//Change default 'posts' name to something else

add_action( 'init', 'cp_change_post_object' );
// Change dashboard Posts to News
function cp_change_post_object() {
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
        $labels->name = 'News';
        $labels->singular_name = 'News';
        $labels->add_new = 'Add News';
        $labels->add_new_item = 'Add News';
        $labels->edit_item = 'Edit News';
        $labels->new_item = 'News';
        $labels->view_item = 'View News';
        $labels->search_items = 'Search News';
        $labels->not_found = 'No News found';
        $labels->not_found_in_trash = 'No News found in Trash';
        $labels->all_items = 'All News';
        $labels->menu_name = 'News';
        $labels->name_admin_bar = 'News';
}

//---------------Custom Post Types

/*
* Creating a function to create our CPT
*/
  
function custom_post_type() {
  
    // Set UI labels for Custom Post Type
        $labels1 = array(
            'name'                => _x( 'Merit Badges', 'Post Type General Name' ),
            'singular_name'       => _x( 'Merit Badges', 'Post Type Singular Name' ),
            'menu_name'           => __( 'Merit Badges' ),
            'parent_item_colon'   => __( 'Parent Merit Badges' ),
            'all_items'           => __( 'All Merit Badges' ),
            'view_item'           => __( 'View Merit Badges' ),
            'add_new_item'        => __( 'Add New Merit Badges' ),
            'add_new'             => __( 'Add New' ),
            'edit_item'           => __( 'Edit Merit Badges' ),
            'update_item'         => __( 'Update Merit Badges' ),
            'search_items'        => __( 'Search Merit Badges' ),
            'not_found'           => __( 'Not Found' ),
            'not_found_in_trash'  => __( 'Not found in Trash' ),
        );

        $labels2 = array(
            'name'                => _x( 'Announcements', 'Post Type General Name' ),
            'singular_name'       => _x( 'Announcement', 'Post Type Singular Name' ),
            'menu_name'           => __( 'Announcements' ),
            'parent_item_colon'   => __( 'Parent Announcement' ),
            'all_items'           => __( 'Announcements' ),
            'view_item'           => __( 'View Announcement' ),
            'add_new_item'        => __( 'Add New Announcement' ),
            'add_new'             => __( 'Add New' ),
            'edit_item'           => __( 'Edit Announcement' ),
            'update_item'         => __( 'Update Announcement' ),
            'search_items'        => __( 'Search Announcements' ),
            'not_found'           => __( 'Not Found' ),
            'not_found_in_trash'  => __( 'Not found in Trash' ),
        );
          
        $labels3 = array(
            'name'                => _x( 'Vacancies', 'Post Type General Name' ),
            'singular_name'       => _x( 'Vacancy', 'Post Type Singular Name' ),
            'menu_name'           => __( 'Vacancies' ),
            'parent_item_colon'   => __( 'Vacancy' ),
            'all_items'           => __( 'Vacancies' ),
            'view_item'           => __( 'Vacancy' ),
            'add_new_item'        => __( 'Add New Vacancy' ),
            'add_new'             => __( 'Add New' ),
            'edit_item'           => __( 'Edit Vacancy' ),
            'update_item'         => __( 'Update Vacancy' ),
            'search_items'        => __( 'Search Vacancies' ),
            'not_found'           => __( 'Not Found' ),
            'not_found_in_trash'  => __( 'Not found in Trash' ),
        );
    // Set other options for Custom Post Type
          
        $args1 = array(
            'label'               => __( 'merit-badges' ),
            'description'         => __( 'Merit Badges' ),
            'labels'              => $labels1,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'genres' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-star-empty',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
      
        );

        $args2 = array(
            'label'               => __( 'announcements' ),
            'description'         => __( 'Announcements' ),
            'labels'              => $labels2,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'genres' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-megaphone',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
      
        );

        $args3 = array(
            'label'               => __( 'vacancies' ),
            'description'         => __( 'Vacancies' ),
            'labels'              => $labels3,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'genres' ),
            /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-text-page',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
      
        );
          
        // Registering your Custom Post Type
        register_post_type( 'merit-badges', $args1 );
        register_post_type( 'announcements', $args2 );
        register_post_type( 'vacancies', $args3 );
      
    }
      
    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */
      
    add_action( 'init', 'custom_post_type', 0 );
    

// Search box


function custom_search_form( $form ) {
    $form = '
    <form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
      <div class="custom-form"><label class="screen-reader-text" for="s">' . __( 'Search:' ) . '</label>
      <i class="fa-solid fa-xl fa-magnifying-glass " id="site-search-icon"></i>
      <input type="text" id= "site-search" placeholder="Search the site" autocomplete="off" value="'  . get_search_query() . '" name="s" id="s" />
      <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
    </div>
    </form>';

    return $form;
  }
  add_filter( 'get_search_form', 'custom_search_form', 40 );

/* Bellows Custom Skin

function my_custom_bellows_style() {
    $stylesheet_url = get_stylesheet_directory_uri() . 'wlt-bellows-skin.css'; // Make sure this matches your stylesheet's URL
    wp_enqueue_style( 'custom-bellows-css', $stylesheet_url, array( 'bellows' ), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'my_custom_bellows_style' );

function register_custom_bellows_skins(){
    $base_url_path = get_stylesheet_directory_uri();
    bellows_register_skin( 'wlt-cusom-skin' , 'Wessex Learning Trust' , $base_url_path.'wlt-bellows-skin.css' );
}
add_action( 'init' , 'register_custom_bellows_skins' , 10 );

*/

//Change excerpt Length

/**
 * Filter the excerpt length

 */
function wlt_excerpt_length( $length ) {
    if ( is_admin() ) {
            return $length;
    }
    return 10;
}
add_filter( 'excerpt_length', 'wlt_excerpt_length', 999 );

function new_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');