<?php

/*
* Plugin Name: MOBILOOK
* Description: Instant mobile view of website (pages, posts, products) for responsive web design on phone (+ dualscreen). This plugin also offers helpful tools on each page, such as LinkedIn Post Inspector, and Google Mobile-Friendly Test Tool.
* Author: Pagup
* Version: 1.2.8
* Author URI: https://pagup.com/
* Text Domain: mobilook
* Domain Path: /languages/
*/
if ( !defined( 'ABSPATH' ) ) {
    exit;
}
if ( !defined( 'MOBILOOK_PLUGIN_DIR' ) ) {
    define( 'MOBILOOK_PLUGIN_DIR', plugins_url( '', __FILE__ ) );
}
if ( !defined( 'MOBILOOK_PLUGIN_PATH' ) ) {
    define( 'MOBILOOK_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
}

if ( !function_exists( 'mobilook_fs' ) ) {
    // Create a helper function for easy SDK access.
    function mobilook_fs()
    {
        global  $mobilook_fs ;
        
        if ( !isset( $mobilook_fs ) ) {
            // Include Freemius SDK.
            require_once dirname( __FILE__ ) . '/vendor/freemius/start.php';
            $mobilook_fs = fs_dynamic_init( array(
                'id'              => '3641',
                'slug'            => 'mobilook',
                'type'            => 'plugin',
                'public_key'      => 'pk_5061a0f11623f388ce4c9687f669e',
                'is_premium'      => false,
                'premium_suffix'  => 'for Woocommerce & Debugger',
                'has_addons'      => false,
                'has_paid_plans'  => true,
                'trial'           => array(
                'days'               => 7,
                'is_require_payment' => true,
            ),
                'has_affiliation' => 'all',
                'menu'            => array(
                'slug'       => 'mobilook',
                'first-path' => '',
                'support'    => false,
                'parent'     => array(
                'slug' => 'options-general.php',
            ),
            ),
                'is_live'         => true,
            ) );
        }
        
        return $mobilook_fs;
    }
    
    // Init Freemius.
    mobilook_fs();
    // Signal that SDK was initiated.
    do_action( 'mobilook_fs_loaded' );
}

// freemius opt-in
function mobilook_fs_custom_connect_message(
    $message,
    $user_first_name,
    $product_title,
    $user_login,
    $site_link,
    $freemius_link
)
{
    $break = "<br><br>";
    $more_plugins = '<p><a target="_blank" href="https://wordpress.org/plugins/meta-tags-for-seo/">Meta Tags for SEO</a>, <a target="_blank" href="https://wordpress.org/plugins/automatic-internal-links-for-seo/">Auto internal links for SEO</a>, <a target="_blank" href="https://wordpress.org/plugins/bulk-image-alt-text-with-yoast/">Bulk auto image Alt Text</a>, <a target="_blank" href="https://wordpress.org/plugins/bulk-image-title-attribute/">Bulk auto image Title Tag</a>, <a target="_blank" href="https://wordpress.org/plugins/mobilook/">Mobile view</a>, <a target="_blank" href="https://wordpress.org/plugins/better-robots-txt/">Wordpress Better-Robots.txt</a>, <a target="_blank" href="https://wordpress.org/plugins/wp-google-street-view/">Wp Google Street View</a>, <a target="_blank" href="https://wordpress.org/plugins/vidseo/">VidSeo</a>, ...</p>';
    return sprintf( esc_html__( 'Hey %1$s, %2$s Click on Allow & Continue to start optimizing your responsive design on all devices (including foldable screen phones) with MOBILOOK! Don’t spend your time checking your phone to see if your website looks properly. MOBILLOK is a time-saver and features many very helpful tools, like LinkedIn Post Inspector, and Google Mobile-Friendly Test Tool.', 'mobilook' ), $user_first_name, $break ) . $more_plugins;
}

mobilook_fs()->add_filter(
    'connect_message',
    'mobilook_fs_custom_connect_message',
    10,
    6
);
class mobilook
{
    function __construct()
    {
        // making sure we have the right paths...
        // making sure we have the right paths...
        
        if ( !defined( 'WP_PLUGIN_URL' ) ) {
            if ( !defined( 'WP_CONTENT_DIR' ) ) {
                define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
            }
            if ( !defined( 'WP_CONTENT_URL' ) ) {
                define( 'WP_CONTENT_URL', get_option( 'siteurl' ) . '/wp-content' );
            }
            if ( !defined( 'WP_PLUGIN_DIR' ) ) {
                define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' );
            }
            define( 'WP_PLUGIN_URL', WP_CONTENT_URL . '/plugins' );
        }
        
        // end if
        // stuff to do on plugin activation/deactivation
        //register_activation_hook(__FILE__, array(&$this, 'mobilook_activate'));
        //register_deactivation_hook( __FILE__, array( &$this, 'mobilook_deactivate' ) );
        //add quick links to plugin settings
        $plugin = plugin_basename( __FILE__ );
        if ( is_admin() ) {
            add_filter( "plugin_action_links_{$plugin}", array( &$this, 'mobilook_setting_link' ) );
        }
    }
    
    // end function __construct()
    // quick setting link in plugin section
    function mobilook_setting_link( $links )
    {
        $settings_link = '<a href="options-general.php?page=mobilook">Settings</a>';
        array_unshift( $links, $settings_link );
        return $links;
    }
    
    // end function setting_link()
    // register options
    function mobilook_options()
    {
        $mobilook_options = get_option( 'mobilook' );
        return $mobilook_options;
    }

}
// end class
$mobilook = new mobilook();
function mobilook_wp_head()
{
    global  $mobilook ;
    $mobilook_options = $mobilook->mobilook_options();
    if ( isset( $mobilook_options['viewport'] ) && !empty($mobilook_options['viewport']) && $mobilook_options['viewport'] == "enable" ) {
        echo  "<!-- ViewPort Optimization added by Mobilook -->\n" . '<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, minimum-scale=0.1, maximum-scale=10.0">' . "\n" ;
    }
}

add_action( 'wp_head', 'mobilook_wp_head' );
// admin notifications
include_once dirname( __FILE__ ) . '/inc/notices.php';
add_action( 'init', 'mobilook_textdomain' );
function mobilook_textdomain()
{
    load_plugin_textdomain( 'mobilook', false, basename( dirname( __FILE__ ) ) . '/languages' );
}

if ( is_admin() ) {
    include_once dirname( __FILE__ ) . '/mobilook-admin.php';
}