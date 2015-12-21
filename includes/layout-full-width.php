<?php

add_filter( 'ldm-classes-to-add', 'ldm_full_width_classes', 10, 3 );
function ldm_full_width_classes( $classes_to_add, $context, $attr ){

	$layout = genesis_site_layout();

    if ( 'full-width-content' === $layout ) {

        $classes_to_add['content'] = 'col-sm-12';
    }

    return $classes_to_add;
}