<?php
    $menu = wp_nav_menu(
        array(
            'theme_loaction' => 'header-menu-index',
            'container' => false
        )
    );
    if(has_nav_menu('header-menu-index')){
        echo wp_kses_post($menu);
    }
?>