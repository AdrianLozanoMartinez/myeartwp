<?php

// FIELD ON POST TYPE
add_action( 'add_meta_boxes', 'mobilook_post_options' );
function mobilook_post_options()
{
    $post_types = array( 'post', 'page' );
    foreach ( $post_types as $post_type ) {
        add_meta_box(
            'mobilook_post_options',
            // id, used as the html id att
            __( 'MOBILOOK - Instant Mobile Viewer https://mobilook.co/' ),
            // meta box title
            'mobilook_post_events',
            // callback function, spits out the content
            $post_type,
            // post type or page. This adds to posts only
            'normal',
            // context, where on the screen
            'high'
        );
    }
}

function mobilook_post_events( $post )
{
    global  $wpdb ;
    //$post_preview = get_preview_post_link();
    $post_link = get_permalink();
    // purchase notification
    $purchase_url = "options-general.php?page=mobilook-pricing";
    $get_pro = sprintf( wp_kses( __( '<a href="%s">Get Pro version</a> to enable', 'mobilook' ), array(
        'a' => array(
        'href'   => array(),
        'target' => array(),
    ),
    ) ), esc_url( $purchase_url ) );
    include MOBILOOK_PLUGIN_PATH . '/admin/inc/metabox_settings.php';
}
