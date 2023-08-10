<?php

// Disable ssl verify **REMOVE BEFORE GOING LIVE

//add_filter('https_ssl_verify', '__return_false');


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
    add_theme_support( 'custom-logo' );
    

}

set_post_thumbnail_size( 350, 350);

add_action('after_setup_theme', 'wlt_theme_support');
	
add_post_type_support( 'page', 'excerpt' );
	
add_filter('jpeg_quality', function($arg){return 95;});

//add custom image sizes

add_image_size( 'small-size', 300, 300 );
add_image_size( 'medium-size', 500, 400 );
add_image_size( 'background-size', 1920, 1080 );
add_image_size( 'page-size-landscape', 1080, 810 );
add_image_size( 'page-size-portrait', 810, 1080 );
add_image_size( 'landscape-size', 1200, 900 );
add_image_size( 'portrait-size', 900, 1200 );

//featured image header


define( 'HEADER_IMAGE_WIDTH', apply_filters( 'wlt_header_image_width', 2000 ) );
define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'wlt_header_image_height', 600 ) );


//Add menu locations

function wlt_menus(){

    $locations = array(
        'primary' => 'Desktop Primary Left',
        'quick-links-footer' => 'Quick Links Footer',
        'quick-links-header' => 'Quick Links Header',
        'accessibility' => 'Accessibility Footer'
        
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
wp_enqueue_script('wlt-main', get_template_directory_uri().'/Assets/js/slick.js', array('wlt-main'), '1.1', true);

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



//--------------Posts-------------------------------------

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
            'name'                => _x( 'Key Information', 'Post Type General Name' ),
            'singular_name'       => _x( 'Key Information Item', 'Post Type Singular Name' ),
            'menu_name'           => __( 'Key Information' ),
            'parent_item_colon'   => __( 'Parent Key Information' ),
            'all_items'           => __( 'All Key Information Items' ),
            'view_item'           => __( 'View Key Information Item' ),
            'add_new_item'        => __( 'Add New Key Information Item' ),
            'add_new'             => __( 'Add New' ),
            'edit_item'           => __( 'Edit Key Information Item' ),
            'update_item'         => __( 'Update Key Information Item' ),
            'search_items'        => __( 'Search Key Information Items' ),
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
            'name'                => _x( 'Curriculum', 'Post Type General Name' ),
            'singular_name'       => _x( 'Curriculum Item', 'Post Type Singular Name' ),
            'menu_name'           => __( 'Curriculum' ),
            'parent_item_colon'   => __( 'Parent Curriculum' ),
            'all_items'           => __( 'Curriculum' ),
            'view_item'           => __( 'View Curriculum' ),
            'add_new_item'        => __( 'Add New Curriculum Item' ),
            'add_new'             => __( 'Add New' ),
            'edit_item'           => __( 'Edit Curriculum Item' ),
            'update_item'         => __( 'Update Curriculum Item' ),
            'search_items'        => __( 'Search Curriculums' ),
            'not_found'           => __( 'Not Found' ),
            'not_found_in_trash'  => __( 'Not found in Trash' ),
        );
          

    // Set other options for Custom Post Type
          
        $args1 = array(
            'label'               => __( 'key-information' ),
            'description'         => __( 'Key Information' ),
            'labels'              => $labels1,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( ''),
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
            'menu_icon'           => 'dashicons-category',
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
            'label'               => __( 'curriculum' ),
            'description'         => __( 'Curriculum' ),
            'labels'              => $labels3,
            // Features this CPT supports in Post Editor
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            // You can associate this CPT with a taxonomy or custom taxonomy. 
            'taxonomies'          => array( 'curriculum-category' ),
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
            'menu_icon'           => 'dashicons-book',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest' => true,
      
        );

        
          
        // Registering your Custom Post Type
        register_post_type( 'key-information', $args1 );
        register_post_type( 'announcements', $args2 );
        register_post_type( 'curriculum', $args3 );
        
      
    }
      
    /* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */
      
    add_action( 'init', 'custom_post_type', 0 );
    

// Function to sort key-information posts alphabetically

add_action( 'pre_get_posts', function ( $query ) {
    if ( $query->is_archive() && $query->is_main_query() ) { 
      if ( get_query_var( 'post_type' ) == 'key-information' ) { 
        $query->set( 'order', 'ASC' );
        $query->set( 'orderby', 'title' );
      };
    };
} );

// Function to sort curriculum posts alphabetically

add_action( 'pre_get_posts', function ( $query ) {
    if ( $query->is_archive() && $query->is_main_query() ) { 
      if ( get_query_var( 'post_type' ) == 'curriculum' ) { 
        $query->set( 'order', 'ASC' );
        $query->set( 'orderby', 'title' );
      };
    };
} );





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


//**********Add custom taxonomy***************************************

function tr_create_my_taxonomy() {

    register_taxonomy(
        'curriculum-category',
        'curriculum',
        array(
            'label' => __( 'Curriculum Categories' ),
            'rewrite' => array( 'slug' => 'curriculum' ),
            'show_in_rest'          => true,
            'hierarchical' => true,

        )
    );
}
add_action( 'init', 'tr_create_my_taxonomy' );

  //**********Add custom taxonomy***************************************

  function wlt_create_my_taxonomy() {

    register_taxonomy(
        'key-information-category',
        'key-information',
        array(
            'label' => __( 'Key Information Categories' ),
            'rewrite' => array( 'slug' => 'key-information' ),
            'show_in_rest'          => true,
            'hierarchical' => true,

        )
    );
}
add_action( 'init', 'wlt_create_my_taxonomy' );  

//*****************Remove Comments********************************

add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;
     
    if ($pagenow === 'edit-comments.php') {
        wp_safe_redirect(admin_url());
        exit;
    }
 
    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
 
    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});
 
// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);
 
// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);
 
// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});
 
// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});



function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
echo $image[0];?>);
		height:7.5rem;
		width:auto;
		background-size: 7.5rem auto;
		background-repeat: no-repeat;
        	padding-bottom: 0;
        }

            body.login.login-action-login.wp-core-ui{
        background-color: #9a9a9a;
    }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

?>