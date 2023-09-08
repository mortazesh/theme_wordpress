<?php

// add options support theme

add_theme_support( 'post-thumbnails' );
add_theme_support( 'responsive-embeds' );
add_theme_support( 'editor-styles' );
add_theme_support( 'title-tag' );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-logo' );
add_theme_support( 'custom-header' );

// add support theme with woocomerce

function netelites_woocommerce_support(){
    add_theme_support('woocommerce');
}
add_action('after_setup_theme','netelites_woocommerce_support');

// proper way to enqueue scripts and styles

function netelites_theme_scripts(){
    wp_enqueue_style('main-style' , get_stylesheet_uri());
    wp_enqueue_style( 'all-css', get_template_directory_uri().'/assets/css/all.css' );
    wp_enqueue_style('swiper-bundle-css', get_template_directory_uri().'/assets/css/swiper-bundle.min.css' );

    wp_enqueue_script('script-swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), '1.0.0', true );
    wp_enqueue_script('netelites-script' , get_template_directory_uri() . '/assets/js/netelites.js',array("jquery"), '1.0.0', true);
}
add_action('wp_enqueue_scripts','netelites_theme_scripts');

// add menu in theme

function netelites_header_menu(){
    register_nav_menu(
        'header-menu-index',
        __('هدر اصلی')
    );
}
add_action('init','netelites_header_menu');

// add post type silder

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
            'supports' => array('title','editor','thumbnail','link')
        )
    );
}
add_filter('init','netelites_silder_posttype');
add_image_size( 'slider-thumbnail', 1215, 450, false );

// add post type barnd

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
            'supports' => array('title','editor','thumbnail','link')
        )
    );
}
add_filter('init','netelites_barnd_posttype');
add_image_size( 'barnd-thumbnail', 150, 100, false );

// add options gallery product

function netelits_options_gallery_product() { 
  	add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'netelits_options_gallery_product', 100 );


