<?php

// free only notices
// pro notification
function mobilook_notice_rate()
{
    if ( !PAnD::is_admin_notice_active( 'mobilook-rating-120' ) ) {
        return;
    }
    ?>
    
            <div data-dismissible="mobilook-rating-120" class="notice mobilook-notice notice-success is-dismissible">
                <p class="mobilook-p"><?php 
    $rating_url = "https://wordpress.org/support/plugin/mobilook/reviews/?rate=5#new-post";
    $show_support = sprintf( wp_kses( __( 'Show support for MOBILOOK with a 5-star rating » <a href="%s" target="_blank">Click here</a>', 'mobilook' ), array(
        'a' => array(
        'href'   => array(),
        'target' => array(),
    ),
    ) ), esc_url( $rating_url ) );
    echo  $show_support ;
    ?></p>
            </div>
    <?php 
}

add_action( 'admin_init', array( 'PAnD', 'init' ) );
add_action( 'admin_notices', 'mobilook_notice_rate' );
// end free only