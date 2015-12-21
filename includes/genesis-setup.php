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

// Remove item(s) from genesis admin screens
add_action( 'genesis_admin_before_metaboxes', 'bsg_remove_genesis_theme_metaboxes' );

// Remove item(s) from genesis customizer
add_action( 'customize_register', 'bsg_remove_genesis_customizer_controls', 20 );

// remove header sidebar
unregister_sidebar( 'header-right' );

/**
 * Remove selected Genesis metaboxes from the Theme Settings and SEO Settings pages.
 *
 * @param string $hook The unique pagehook for the Genesis settings page
 */

function bsg_remove_genesis_theme_metaboxes( $hook ) {
    /** Theme Settings metaboxes */
    //remove_meta_box( 'genesis-theme-settings-version',  $hook, 'main' );
    //remove_meta_box( 'genesis-theme-settings-feeds',    $hook, 'main' );
    //remove_meta_box( 'genesis-theme-settings-layout',   $hook, 'main' );
    remove_meta_box( 'genesis-theme-settings-header',   $hook, 'main' );
    //remove_meta_box( 'genesis-theme-settings-nav',      $hook, 'main' );
    //remove_meta_box( 'genesis-theme-settings-breadcrumb', $hook, 'main' );
    //remove_meta_box( 'genesis-theme-settings-comments', $hook, 'main' );
    //remove_meta_box( 'genesis-theme-settings-posts',    $hook, 'main' );
    //remove_meta_box( 'genesis-theme-settings-blogpage', $hook, 'main' );
    //remove_meta_box( 'genesis-theme-settings-scripts',  $hook, 'main' );

    /** SEO Settings metaboxes */
    //remove_meta_box( 'genesis-seo-settings-doctitle',   $hook, 'main' );
    //remove_meta_box( 'genesis-seo-settings-homepage',   $hook, 'main' );
    //remove_meta_box( 'genesis-seo-settings-dochead',    $hook, 'main' );
    //remove_meta_box( 'genesis-seo-settings-robots',     $hook, 'main' );
    //remove_meta_box( 'genesis-seo-settings-archives',   $hook, 'main' );
}

/**
 * Filter to remove selected Genesis Customizer Menu controls
 *
 * @param instance of WP_Customize_Manager $wp_customize
 */
function bsg_remove_genesis_customizer_controls( $wp_customize ) {
    // remove Site Title/Logo: Dynamic Text or Image Logo option from Customizer
    $wp_customize->remove_control( 'blog_title' );
    return $wp_customize;
}
