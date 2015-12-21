<?php

add_filter( 'ldm-classes-to-add', 'ldm_content_sidebar_classes', 10, 3 );
function ldm_content_sidebar_classes( $classes_to_add, $context, $attr ){

	$layout = genesis_site_layout();

    if ( 'content-sidebar' === $layout ) {

        $classes_to_add['content'] = 'col-sm-8';
        $classes_to_add['sidebar-primary'] = 'col-sm-4';
    }

    return $classes_to_add;
}