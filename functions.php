<?php
define("HASHTAG_THEME_VERSION","1.0.0");
define("HASHTAG_SCRIPT_VERSION","1.0.0");
define("CHILD_URL",get_stylesheet_directory_uri());
define("CHILD_VENDOR_URL",get_stylesheet_directory_uri()."/assets/vendor/");
define("CHILD_JS_URL",get_stylesheet_directory_uri()."/assets/js/");


// add_action( 'admin_init', 'hide_editor' );

// function hide_editor() {
//     $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
//     if( !isset( $post_id ) ) return;


//     if(intval($post_id)===intval(get_option('page_on_front'))){ // edit the template name
//         remove_post_type_support('page', 'editor');
//     }
// }

function wpdocs_theme_name_scripts() {

    wp_enqueue_style( 'bootstrap', CHILD_VENDOR_URL."bootstrap/css/bootstrap.min.css",[]);
    wp_enqueue_style( 'fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" );
    wp_enqueue_style( 'icofont', CHILD_VENDOR_URL."icofont/icofont.min.css" );
    wp_enqueue_style( 'boxicons', CHILD_VENDOR_URL."boxicons/css/boxicons.min.css" );
    wp_enqueue_style( 'remixicon', CHILD_VENDOR_URL."remixicon/remixicon.css" );
    wp_enqueue_style( 'venobox', CHILD_VENDOR_URL."venobox/venobox.min.css" );
    wp_enqueue_style( 'owl-carousel', CHILD_VENDOR_URL."owl.carousel/assets/owl.carousel.min.css" );
    wp_enqueue_style( 'custom-style', get_stylesheet_uri() );
    wp_enqueue_style( 'custom-font',"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i");
    wp_enqueue_script( 'isotype-js', CHILD_VENDOR_URL . 'isotope-layout/isotope.pkgd.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'venobox-js', CHILD_VENDOR_URL . 'venobox/venobox.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'owlcarousel-js', CHILD_VENDOR_URL . 'owl.carousel/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'main-js', CHILD_JS_URL . 'main.js', array('jquery'), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );



add_action('wp_head',function(){
    if(is_admin_bar_showing()): ?>
    <style>
        #header{
            margin-top:32px;
        }
    </style>
<?php endif;
});

add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );

function mytheme_register_nav_menu(){
    register_nav_menus( array(
        'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
    ) );
}

function theme_init() {


    $labels = array(
        'name'                  => _x( 'Portfolios', 'Post type general name', 'rs-theme' ),
        'singular_name'         => _x( 'Portfolio', 'Post type singular name', 'rs-theme' ),
        'menu_name'             => _x( 'Portfolios', 'Admin Menu text', 'rs-theme' ),
        'name_admin_bar'        => _x( 'Portfolio', 'Add New on Toolbar', 'rs-theme' ),
        'add_new'               => __( 'Add New', 'rs-theme' ),
        'add_new_item'          => __( 'Add New portfolio', 'rs-theme' ),
        'new_item'              => __( 'New portfolio', 'rs-theme' ),
        'edit_item'             => __( 'Edit portfolio', 'rs-theme' ),
        'view_item'             => __( 'View portfolio', 'rs-theme' ),
        'all_items'             => __( 'All portfolios', 'rs-theme' ),
        'search_items'          => __( 'Search portfolios', 'rs-theme' ),
        'parent_item_colon'     => __( 'Parent portfolios:', 'rs-theme' ),
        'not_found'             => __( 'No portfolios found.', 'rs-theme' ),
        'not_found_in_trash'    => __( 'No portfolios found in Trash.', 'rs-theme' ),
        'featured_image'        => _x( 'Recipe Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'rs-theme' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'rs-theme' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'rs-theme' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'rs-theme' ),
        'archives'              => _x( 'Recipe archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'rs-theme' ),
        'insert_into_item'      => _x( 'Insert into recipe', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'rs-theme' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this recipe', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'rs-theme' ),
        'filter_items_list'     => _x( 'Filter portfolios list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'rs-theme' ),
        'items_list_navigation' => _x( 'portfolios list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'rs-theme' ),
        'items_list'            => _x( 'portfolios list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'rs-theme' ),
    );
    $args = array(
        'labels'             => $labels,
        'description'        => 'Portfolio custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'rs-theme' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array( 'portfolio_areas', 'post_tag' ),
        'show_in_rest'       => true
    );


    $testimonial_label = array(
        'name'                  => _x( 'Testimonial', 'Post type general name', 'rs-theme' ),
        'singular_name'         => _x( 'Testimonial', 'Post type singular name', 'rs-theme' ),
        'menu_name'             => _x( 'Testimonial', 'Admin Menu text', 'rs-theme' ),
        'name_admin_bar'        => _x( 'Testimonial', 'Add New on Toolbar', 'rs-theme' ),
        'add_new'               => __( 'Add New', 'rs-theme' ),
        'add_new_item'          => __( 'Add New Testimonial', 'rs-theme' ),
        'new_item'              => __( 'New Testimonial', 'rs-theme' ),
        'edit_item'             => __( 'Edit Testimonial', 'rs-theme' ),
        'view_item'             => __( 'View Testimonial', 'rs-theme' ),
        'all_items'             => __( 'All Testimonial', 'rs-theme' ),
        'search_items'          => __( 'Search Testimonial', 'rs-theme' ),
        'parent_item_colon'     => __( 'Parent Testimonial:', 'rs-theme' ),

    );
    $testimonial_args = array(
        'labels'             => $testimonial_label,
        'description'        => 'Testimonial custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'rs-theme-testimonial' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'taxonomies'         => array('post_tag' ),
        'show_in_rest'       => true
    );

    register_taxonomy('portfolio_areas', 'post', array(
        // Hierarchical taxonomy (like categories)
        'hierarchical' => true,
        // This array of options controls the labels displayed in the WordPress Admin UI
        'labels' => array(
        'name' => _x( 'Areas', 'taxonomy general name' ),
        'singular_name' => _x( 'Area', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Areas' ),
        'all_items' => __( 'All Areas' ),
        'parent_item' => __( 'Parent Area' ),
        'parent_item_colon' => __( 'Parent Area:' ),
        'edit_item' => __( 'Edit Area' ),
        'update_item' => __( 'Update Area' ),
        'add_new_item' => __( 'Add New Area' ),
        'new_item_name' => __( 'New Area Name' ),
        'menu_name' => __( 'Areas' ),
        ),
        // Control the slugs used for this taxonomy
        'rewrite' => array(
        'slug' => 'areas', // This controls the base slug that will display before each term
        'with_front' => false, // Don't display the category base before "/locations/"
        'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
        ),
    ));

    register_post_type( 'Portfolio', $args );
    register_post_type( 'Testimonial', $testimonial_args );
}
add_action( 'init', 'theme_init' );

