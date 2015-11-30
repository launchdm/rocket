<?php

add_filter( 'ldm-classes-to-add', 'ldm_sidebar_content_classes', 10, 3 );
function ldm_sidebar_content_classes( $classes_to_add, $context, $attr ){

	$layout = genesis_site_layout();

    if ( 'sidebar-content' === $layout ) {

        $classes_to_add['content'] = 'col-sm-8';
        $classes_to_add['sidebar-primary'] = 'col-sm-4';
    }

    return $classes_to_add;
}

add_action( 'genesis_before', 'ldm_sidebar_content_markup_mod', 15 );
function ldm_sidebar_content_markup_mod(){

	$layout = genesis_site_layout();

	if( 'sidebar-content' === $layout ) {

       remove_action( 'genesis_after_content', 'genesis_get_sidebar' );
       add_action( 'genesis_before_content', 'genesis_get_sidebar' );
	}
}