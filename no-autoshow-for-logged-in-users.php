<?php

add_filter( 'boxzilla_box_client_options', function( $options, $box ) {
    // do not auto-show when visitor is logged in
    if( is_user_logged_in() ) {
        $options['trigger'] = false;
    }
    return $options;
}, 10, 2 );