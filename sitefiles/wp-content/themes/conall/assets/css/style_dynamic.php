<?php

if ( file_exists( '../../../../../wp-load.php' ) ) {
    require_once( '../../../../../wp-load.php' );
} else {
    if ( file_exists( '../../../../../../wp-load.php' ) ) {
        require_once( '../../../../../../wp-load.php' );
    }
}

header("Content-type: text/css; charset=utf-8");

do_action('conall_edge_style_dynamic');