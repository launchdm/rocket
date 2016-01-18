<?php

// Add HTML5 markup structure
add_theme_support( 'html5' );

// Remove structural Wraps
remove_theme_support( 'genesis-structural-wraps' );

// remove admin seo metabox from posts / pages
remove_action( 'admin_menu', 'genesis_add_inpost_seo_box' );

// remove seo settings menu from admin menu
remove_theme_support( 'genesis-seo-settings-menu' );

// remove admin scripts metabox from posts / pages
remove_action( 'admin_menu', 'genesis_add_inpost_scripts_box' );

// remove Secondary and Header Sidebars
unregister_sidebar( 'sidebar-alt' );
unregister_sidebar( 'header-right' );
