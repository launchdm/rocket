<?php

add_filter( 'ldm-classes-to-add', 'ldm_sidebar_content_sidebar_classes', 10, 3 );
function ldm_sidebar_content_sidebar_classes( $classes_to_add, $context, $attr ){

	$layout = genesis_site_layout();

    if ( 'sidebar-content-sidebar' === $layout ) {

        $classes_to_add['content'] = 'col-sm-6';
        $classes_to_add['sidebar-primary'] = 'col-sm-3';
        $classes_to_add['sidebar-secondary'] = 'col-sm-3';
    }

    return $classes_to_add;
}

add_action( 'genesis_before', 'ldm_sidebar_content_sidebar_markup_mod', 15 );
function ldm_sidebar_content_sidebar_markup_mod(){

	$layout = genesis_site_layout();

	if( 'sidebar-content-sidebar' === $layout ) {

       remove_action( 'genesis_after_content_sidebar_wrap', 'genesis_get_sidebar_alt' );
       add_action( 'genesis_before_content', 'genesis_get_sidebar_alt', 5 );
	}
}