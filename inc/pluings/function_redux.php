<?php 

if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/redux-framework/redux-core/framework.php' ) ) {
    require_once( dirname( __FILE__ ) . '/redux-framework/redux-core/framework.php' );
}
if ( class_exists( 'ReduxFramework' ) ) {
    require_once( get_parent_theme_file_path('/inc/pluings/panel_setting.php') );
}