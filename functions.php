<?php

/**
 * Include the composer generated autoload.php file.
 */

$rocket_autoload = dirname( __FILE__ ) . '/vendor/autoload.php';

if( file_exists( $rocket_autoload ) ){

    require_once( $rocket_autoload );
}

/**
 * Include all php files in the /includes directory
 *
 * https://gist.github.com/theandystratton/5924570
 */

add_action( 'genesis_setup', 'bsg_load_lib_files', 15 );
function bsg_load_lib_files() {

    foreach ( glob( dirname( __FILE__ ) . '/lib/*.php' ) as $file ) { include $file; }
}
