<?php

require_once TEMPLATEPATH . '/inc/pluings/function_metabox.php';
require_once TEMPLATEPATH . '/inc/pluings/function_tgm.php';
require_once TEMPLATEPATH . '/inc/pluings/function_redux.php';
require_once TEMPLATEPATH . '/inc/pluings/function_admin.php';

// add options support theme

add_theme_support( 'post-thumbnails' );
add_theme_support( 'responsive-embeds' );
add_theme_support( 'editor-styles' );
add_theme_support( 'title-tag' );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-logo' );
add_theme_support( 'custom-header' );
add_theme_support( 'widgets');
add_theme_support( 'automatic-feed-links' );	
add_theme_support( 'html5',array('comment-form'));
add_theme_support( 'post-formats', array('video', 'audio', 'quote', 'image', 'gallery', 'link'));

// add support theme with woocomerce

function netelites_woocommerce_support(){
    add_theme_support('woocommerce');
}
add_action('after_setup_theme','netelites_woocommerce_support');

// proper way to enqueue scripts and styles

if(!function_exists('netelites_theme_scripts')){
    function netelites_theme_scripts(){
        wp_enqueue_style('main-style' , get_stylesheet_uri());
        wp_enqueue_style( 'all-css', get_template_directory_uri().'/assets/css/all.css' );
        wp_enqueue_style('swiper-bundle-css', get_template_directory_uri().'/assets/css/swiper-bundle.min.css' );
    
        wp_enqueue_script('script-swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), '1.0.0', true );
        wp_enqueue_script('jquery' , get_template_directory_uri() . '/assets/js/jquery.js', '1.0.0', true);
        wp_enqueue_script('jquery-plugin' , get_template_directory_uri() . '/assets/js/jquery.plugin.min.js', '1.0.0', true);
        wp_enqueue_script('jquery-countdown-min', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', array(), '1.0.0', true );
        wp_enqueue_script('netelites-script' , get_template_directory_uri() . '/assets/js/netelites.js',array("jquery"), '1.0.0', true);
    }
    add_action('wp_enqueue_scripts','netelites_theme_scripts');
}

// add menu in theme

if(!function_exists('netelites_header_menu')){
    function netelites_header_menu(){
        register_nav_menus(
            array(
                'header-menu-index' => esc_html__('Header Menu Index','netelites'),
                'mega-menu' => esc_html__('Mega Menu','netelites'),
            )
        );
    }
    add_action('init','netelites_header_menu'); 
}

// add post type silder

if(!function_exists('netelites_silder_posttype')){
    function netelites_silder_posttype(){
        register_post_type('silder',
            array(
                'labels' => array(
                    'name' => __('اسلایدرها'),
                    'singular_name' => __('اسلایدر'),
                    'add_new' => __( 'افزودن اسلایدر'),
                    'add_new_item' => __( 'افزودن اسلایدر'),
                ),
                'public' => true,
                'has_archive' => false,
                'icon' => '',
                'menu_position' => '',
                'supports' => array('title','editor','thumbnail','link')
            )
        );
    }
    add_filter('init','netelites_silder_posttype');
    add_image_size( 'slider-thumbnail', 1215, 450, false );
}

// add post type barnd

if(!function_exists('netelites_barnd_posttype')){
    function netelites_barnd_posttype(){
        register_post_type('barnd',
            array(
                'labels' => array(
                    'name' => __('برندها'),
                    'singular_name' => __('برند'),
                    'add_new' => __('افزودن برند'),
                    'add_new_item' => __('افزودن برند')
                ),
                'public' => true,
                'archive' => false,
                'icon' => '',
                'menu_position' => '',
                'supports' => array('title','editor','thumbnail','link')
            )
        );
    }
    add_filter('init','netelites_barnd_posttype');
    add_image_size( 'barnd-thumbnail', 150, 100, false );
}

// add post type block html

if(!function_exists('netelites_post_type_html')){
    function netelites_post_type_html(){
        register_post_type('block_html', 
            array(
                'labels' => array(
                    'name' => __('بلوک های html'),
                    'singular_name' => __('بلوک html'),
                    'add_new' => __('افزودن بلوک html'),
                    'add_new_item' => __('افزودن بلوک html')
                ),
                'public' => true,
                'archive' => false,
                'icon' => '',
                'menu_position' => '',
                'supports' => array('title','editor'),
                'taxonomaies' => array('Categories')
            )
        );
    }  
    add_filter('init', 'netelites_post_type_html');
}

// add taxonomy shortcode html for post type block html

function netelites_taxonomies_shorcode() {	

	register_taxonomy( 'wl_product_type', 'block_html', 
        array(
            'labels' => array(
                'name' => 'کدکوتاه',
                'singular_name' => 'کدکوتاه',
                'menu_name' => 'کدکوتاه',
                'all_items' => 'همه کدکوتاه',
            ),
            'public' => false,
            'publicly_queryable' => true,
            'hierarchical' => false,
            'show_admin_column' => true,
        )
    );
	
}  
add_action( 'init', 'netelites_taxonomies_shorcode', 0 );


// add options gallery product

if(!function_exists('netelits_options_gallery_product()')){
    function netelits_options_gallery_product() { 
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
    }
    add_action( 'after_setup_theme', 'netelits_options_gallery_product', 100 );
}

// add widgets 

if(!function_exists('netelite_register_widgets')){
    function netelite_register_widgets(){
        register_sidebar(array(
            "name" => "",
            "id" => "",
            "descirption" => "",
            "before_widget" => "",
            "after_widget" => ""
        ));
    }
    add_action('widgets_init','netelite_register_widgets');
}





