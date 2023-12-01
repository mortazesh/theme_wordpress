<?php

// add menu tickets my account

if(!function_exists('tickets_add_products_endpoint')){

    add_filter ( 'woocommerce_account_menu_items', 'tickets_products_link', 40 );

    // here we hook the My Account menu links and add our custom one
    function tickets_products_link( $menu_links ){
        // we use array_slice() because we want our link to be on the 3rd position
        return array_slice( $menu_links, 0, 4, true )
            + array( 'tickets' => 'تیکت ها' )
            + array_slice( $menu_links, 2, NULL, true );
    }

    // here we register our rewrite rule
    function tickets_add_products_endpoint() {
        add_rewrite_endpoint( 'purchased-products', EP_PAGES );
    }

    add_action( 'init', 'tickets_add_products_endpoint' );
}

// add menu tickets my account

if(!function_exists('wallet_add_products_endpoint')){

    add_filter ( 'woocommerce_account_menu_items', 'wallet_products_link', 40 );

    // here we hook the My Account menu links and add our custom one
    function wallet_products_link( $menu_links ){
        // we use array_slice() because we want our link to be on the 3rd position
        return array_slice( $menu_links, 0, 5, true )
            + array( 'wallet' => 'کیف پول' )
            + array_slice( $menu_links, 2, NULL, true );
    }

    // here we register our rewrite rule
    function wallet_add_products_endpoint() {
        add_rewrite_endpoint( 'purchased-products', EP_PAGES );
    }

    add_action( 'init', 'wallet_add_products_endpoint' );
}

// enqueue admin style

if(function_exists('netelites_admin_theme_scripts')){

    function netelites_admin_theme_scripts(){
    
        if(is_admin()){
            wp_enqueue_style('admin-tabs-cmb-css', get_template_directory_uri().'/assets/css/tabs.css' );
            wp_enqueue_style('admin-tabs-cmb-css-dark', get_template_directory_uri().'/assets/css/dark-mode.css' );
    
            wp_enqueue_script('admin-tabs-cmb-js' , get_template_directory_uri() . '/assets/js/tabs.js',array("jquery"), '1.0.0', true);
        }
    
    }
    
    add_action('wp_enqueue_scripts', 'netelites_admin_theme_scripts');
    
}