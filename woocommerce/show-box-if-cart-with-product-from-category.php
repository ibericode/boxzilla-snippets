<?php

/**
 * This code will show the box with ID 500 on the WooCommerce cart page IF that cart has a product from the category "membership" in it.
 */
add_filter( 'boxzilla_load_box', function( $load, $box_id ) {

    // replace '500' with the ID of the box you want to set this code for.
    if( $box_id != 500 ) {
        return $load;
    }

    if( ! is_cart() ) {
        return false;
    }

    foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {

        $product = $cart_item['data'];

        // replace 'membership' with your category's slug
        if ( has_term( 'membership', 'product_cat', $product->id ) ) {
            return true;
        }
    }

    // don't show if we made it here.
    return false;
}, 10, 2 );