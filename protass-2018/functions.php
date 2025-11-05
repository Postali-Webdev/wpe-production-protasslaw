<?php

// Queue parent style followed by child/customized style
add_action( 'wp_enqueue_scripts', 'protass_enqueue_styles', PHP_INT_MAX);

function protass_enqueue_styles() {
    // wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/css/generated/styles.css', null, null, 'all', array( 'protass-style' ) );
    wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/css/generated/styles.css', null, null, 'all' );
// Enqueue Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Cabin:600|Open+Sans:400,600|Playfair+Display:400,700|Roboto+Condensed:300,400,700|Roboto+Mono:700', null, null, 'all');
   
// Enqueue javascript
    wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'modernizr', get_stylesheet_directory_uri() . '/js/modernizr.min.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'smoothScroll', get_stylesheet_directory_uri() . '/js/smooth-scroll.min.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'smoothScroll2', get_stylesheet_directory_uri() . '/js/smooth-scroll-settings.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'wow_scripts', get_stylesheet_directory_uri() . '/js/wow.min.js', array( 'jquery' ), null, true );

// Enqueue these files only on the front-page
    if( is_front_page() ) {
    //Slick functions, enqueue only on pages where needed
    wp_enqueue_script( 'homepage-scripts', get_stylesheet_directory_uri() . '/js/homepage-scripts.js', array( 'jquery' ), null, true );
    wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/css/stylesheets/slick.css', null, null, 'all' );
    wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/js/slick.min.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'slick-custom', get_stylesheet_directory_uri() . '/js/slick-custom.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'rellax', get_stylesheet_directory_uri() . '/js/rellax.min.js', array( 'jquery' ), null, true );
    }
}

// "Magic Code" - Marah
// Enqueue Qode parent theme files that cause console errors
function qode_styles_child() {
    wp_deregister_style('style_dynamic');
    wp_register_style('style_dynamic', get_stylesheet_directory_uri() . '/css/generated/style_dynamic.css');
    wp_enqueue_style('style_dynamic');
    wp_deregister_style('style_dynamic_responsive');
    wp_register_style('style_dynamic_responsive', get_stylesheet_directory_uri() . '/css/generated/style_dynamic_responsive.css');
    wp_enqueue_style('style_dynamic_responsive');
    wp_deregister_style('custom_css');
    wp_register_style('custom_css', get_stylesheet_directory_uri() . '/css/generated/custom_css.css');
    wp_enqueue_style('custom_css');
}
function qode_scripts_child() {
    wp_deregister_script('default_dynamic');
    wp_register_script('default_dynamic', get_stylesheet_directory_uri() . '/js/default_dynamic.js');
    wp_enqueue_style('default_dynamic', array(),false,true);
    wp_deregister_script('custom_js');
    wp_register_script('custom_js', get_stylesheet_directory_uri() . '/js/custom_js.js');
    wp_enqueue_style('custom_js', array(),false,true);
}
add_action( 'wp_enqueue_scripts', 'qode_styles_child', 11);
add_action( 'wp_enqueue_scripts', 'qode_scripts_child', 11);


// Custom Navigation using wp_menus
function protass_register_nav_menus() {
  register_nav_menus(
    array(
        'primary-nav' => __( 'Primary Navigation', 'protass' ),
        'mobile-nav' => __( 'Mobile Navigation', 'protass' ),
        'footer-nav' => __( 'Footer Navigation', 'protass' )
    )
  );
}
add_action( 'init', 'protass_register_nav_menus' );

// Widget Logic Conditionals (ancestor) 
function is_child($parent) {
    global $post;
    return $post->post_parent == $parent;
}

// Widget Logic Conditionals (ancestor) 
function is_tree( $pid ) {
    global $post;
        
        if ( is_page($pid) )
        
        return true;

    $anc = get_post_ancestors( $post->ID );
        
        foreach ( $anc as $ancestor ) {
        
        if( is_page() && $ancestor == $pid ) {
            return true;
        }
    }
    return false;
}

// User role edits
add_filter( 'user_has_cap',
function( $caps ) {
    if ( ! empty( $caps['edit_pages'] ) )
        $caps['manage_options'] = true;
    return $caps;
} );

function be_body_classes( $classes ) {
  $classes[] = 'no-touch';
  return $classes;
}
add_filter( 'body_class', 'be_body_classes' );

// Add ability to add SVG to Wordpress Media Library
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// Shortcode for adding default sidebar to page content
function sidebar_sc( $atts ) {
    ob_start();
    dynamic_sidebar('SidebarPage');
    $html = ob_get_contents();
    ob_end_clean();
    return '
    <aside class="custom_sidebar">'.$html.'</aside>';
}

add_shortcode('sidebar', 'sidebar_sc');

// Shortcode for Yoast breadcrumbs 
function surbma_yoast_breadcrumb_shortcode_init() {
    load_plugin_textdomain( 'surbma-yoast-breadcrumb-shortcode', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'surbma_yoast_breadcrumb_shortcode_init' );

function surbma_yoast_breadcrumb_shortcode_shortcode( $atts ) {
    extract( shortcode_atts( array(
        "before" => '<p id="breadcrumbs">',
        "after" => '</p>'
    ), $atts ) );

    $wpseo_internallinks = get_option( 'wpseo_internallinks' );

    if ( class_exists( 'WPSEO_Breadcrumbs' ) && $wpseo_internallinks['breadcrumbs-enable'] == 1 ) {
        return yoast_breadcrumb( $before, $after, false );
    }
    elseif ( class_exists( 'WPSEO_Breadcrumbs' ) && $wpseo_internallinks['breadcrumbs-enable'] != 1 ) {
        return __( '<p>Please enable the breadcrumb option to use this shortcode!</p>', 'surbma-yoast-breadcrumb-shortcode' );
    }
    else {
        return __( '<p>Please install <a href="https://wordpress.org/plugins/wordpress-seo/" target="_blank">WordPress SEO by Yoast</a> plugin and enable the breadcrumb option to use this shortcode!</p>', 'surbma-yoast-breadcrumb-shortcode' );
    }
}
add_shortcode( 'yoast-breadcrumb', 'surbma_yoast_breadcrumb_shortcode_shortcode' );


// ACF Options Page
if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'Theme Customizations',
        'menu_title'    => 'Theme Customizations',
        'menu_slug'     => 'theme-customizations',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_page(array(
        'page_title'    => 'Awards',
        'menu_title'    => 'Awards',
        'menu_slug'     => 'awards',
        'capability'    => 'edit_posts',
        'icon_url'      => 'dashicons-awards',
        'redirect'      => false
    ));

    acf_add_options_page(array(
        'page_title'    => 'Global Schema',
        'menu_title'    => 'Global Schema',
        'menu_slug'     => 'global_schema',
        'capability'    => 'edit_posts',
        'icon_url'      => 'dashicons-media-code',
        'redirect'      => false
    ));
}



// Remove Wordpress Emoji Javascript call
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

function retrieve_latest_gform_submissions() {
    $site_url = get_site_url();
    $search_criteria = [
        'status' => 'active'
    ];
    $form_ids = 1; //search all forms
    $sorting = [
        'key' => 'date_created',
        'direction' => 'DESC'
    ];
    $paging = [
        'offset' => 0,
        'page_size' => 5
    ];
    
    $submissions = GFAPI::get_entries($form_ids, null, $sorting, $paging);
    $start_date = date('Y-m-d H:i:s', strtotime('-5 day'));
    $end_date = date('Y-m-d H:i:s');
    $entry_in_last_5_days = false;
    
    foreach ($submissions as $submission) {
        if( $submission['date_created'] > $start_date  && $submission['date_created'] <= $end_date ) {
            $entry_in_last_5_days = true;
        } 
    }
    if( !$entry_in_last_5_days ) {
        wp_mail('webdev@postali.com', 'Submission Status', "No submissions in last 5 days on $site_url");
    }
}
add_action('check_form_entries', 'retrieve_latest_gform_submissions');