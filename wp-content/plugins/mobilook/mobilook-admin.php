<?php

require __DIR__ . '/vendor/persist-admin-notices-dismissal/persist-admin-notices-dismissal.php';
add_action( 'admin_init', array( 'PAnD', 'init' ) );
class mobilook_settings
{
    function __construct()
    {
        // stuff to do when the plugin is loaded
        add_action( 'admin_menu', array( &$this, 'mobilook_admin_menu' ) );
        function mobilook_styles()
        {
            wp_register_style(
                'mobilook_admin-styles',
                MOBILOOK_PLUGIN_DIR . '/assets/mobilook-styles-admin.css',
                array(),
                filemtime( MOBILOOK_PLUGIN_PATH . 'assets/mobilook-styles-admin.css' )
            );
            wp_enqueue_style( 'mobilook_admin-styles' );
            wp_register_script(
                'mobilook_vue',
                MOBILOOK_PLUGIN_DIR . '/vendor/vue.min.js',
                array(),
                filemtime( MOBILOOK_PLUGIN_PATH . '/vendor/vue.min.js' ),
                true
            );
            wp_enqueue_script( 'mobilook_vue' );
            wp_register_script(
                'mobilook_admin-script',
                MOBILOOK_PLUGIN_DIR . '/assets/mobilook-script-admin.min.js',
                array(),
                filemtime( MOBILOOK_PLUGIN_PATH . 'assets/mobilook-script-admin.min.js' ),
                true
            );
            wp_enqueue_script( 'mobilook_admin-script' );
        }
        
        if ( isset( $_GET['action'] ) && $_GET['action'] == 'edit' || isset( $_GET['page'] ) && $_GET['page'] == 'mobilook' ) {
            add_action( 'admin_enqueue_scripts', 'mobilook_styles' );
        }
    }
    
    function mobilook_admin_menu()
    {
        add_options_page(
            'Mobilook Settings',
            'Mobilook',
            'manage_options',
            'mobilook',
            array( &$this, 'mobilook_settings_page' )
        );
    }
    
    // end function
    function mobilook_settings_page()
    {
        global  $mobilook ;
        $mobilook_options = $mobilook->mobilook_options();
        // Safe Values
        $mobilook_safe = array(
            "enable",
            "disable",
            "remove_settings",
            "mobilook-settings",
            "mobilook-faq"
        );
        //set active class for navigation tabs
        $active_tab = '';
        if ( isset( $_GET['tab'] ) ) {
            $active_tab = sanitize_key( $_GET['tab'] );
        }
        $active_tab = ( isset( $_GET['tab'] ) && in_array( $active_tab, $mobilook_safe ) ? $active_tab : 'mobilook-settings' );
        // end active class
        // viewport option
        $mobilook_options['viewport'] = ( isset( $_POST['viewport'] ) && in_array( $_POST['viewport'], $mobilook_safe ) ? $_POST['viewport'] : false );
        
        if ( isset( $_POST['update'] ) ) {
            // check if user is authorised
            if ( function_exists( 'current_user_can' ) && !current_user_can( 'manage_options' ) ) {
                die( 'Sorry, not allowed...' );
            }
            check_admin_referer( 'mobilook_settings' );
            update_option( 'mobilook', $mobilook_options );
            // update options
            echo  '<div class="notice notice-success is-dismissible"><p><strong>' . esc_html__( 'Settings saved.', 'mobilook' ) . '</strong></p></div>' ;
        }
        
        // purchase notification
        $purchase_url = "options-general.php?page=mobilook-pricing";
        $get_pro = sprintf( wp_kses( __( '<a href="%s">Get Pro version</a> to enable', 'mobilook' ), array(
            'a' => array(
            'href'   => array(),
            'target' => array(),
        ),
        ) ), esc_url( $purchase_url ) );
        ?>

    <div class="wrap mobilook-containter">

        <h2><span class="dashicons dashicons-media-text" style="margin-top: 6px; font-size: 24px;"></span> Mobilook
            <?php 
        echo  esc_html__( 'Settings', 'mobilook' ) ;
        ?>
        </h2>

        <h2 class="nav-tab-wrapper">
            <a href="<?php 
        echo  esc_url( '?page=mobilook&tab=mobilook-settings' ) ;
        ?>" class="nav-tab <?php 
        echo  ( $active_tab == 'mobilook-settings' ? 'nav-tab-active' : '' ) ;
        ?>">Settings</a>
            <a href="<?php 
        echo  esc_url( '?page=mobilook&tab=mobilook-faq' ) ;
        ?>" class="nav-tab <?php 
        echo  ( $active_tab == 'mobilook-faq' ? 'nav-tab-active' : '' ) ;
        ?>">FAQ</a>
        </h2>

        <?php 
        
        if ( $active_tab == 'mobilook-settings' ) {
            ?>

        <!-- start main settings column -->
        <div class="mobilook-row">
            <div class="mobilook-column col-9 mobi-dark">
                <div class="mobilook-main">
                    <form method="post">

                        <?php 
            if ( function_exists( 'wp_nonce_field' ) ) {
                wp_nonce_field( 'mobilook_settings' );
            }
            ?>
                        
                        <br />

                        <p>Visit our website for more info: <a href="https://mobilook.co" target="_blank">https://mobilook.co</a></p>

                        <div class="mobilook-note btn" style="margin: 18px 0;"><p>Mobilook plugin, instant mobile viewer, is now active on your pages and posts &nbsp; <a href="<?php 
            echo  esc_url( plugin_dir_url( __FILE__ ) . 'assets/imgs/meta-box.png' ) ;
            ?>" target="_blank">Check here</a></p></div>

                        <h2><?php 
            echo  esc_html__( 'Features activated by default:', 'mobilook' ) ;
            ?></h2>

                        <div class="mobilook-row">

                            <div class="mobilook-column col-4">
                                <span class="mobilook-label"><?php 
            echo  esc_html__( 'Samsung Galaxy S9 format', 'mobilook' ) ;
            ?></span>
                            </div>

                            <div class="mobilook-column col-8">

                                <div class="mobilook-switch-radio">
                                    <input type="radio" id="mobilook_samsung_btn1" name="mobilook_samsung" checked />
                                    <label for="mobilook_samsung_btn1" class="enabled"><?php 
            echo  esc_html__( 'Enabled', 'mobilook' ) ;
            ?></label>
                    
                                </div>                            

                            </div>

                            </div>

                            <div class="mobilook-row">

                            <div class="mobilook-column col-4">
                                <span class="mobilook-label"><?php 
            echo  esc_html__( 'iPhone 6/7/8 format', 'mobilook' ) ;
            ?></span>
                            </div>

                            <div class="mobilook-column col-8">

                                <div class="mobilook-switch-radio">
                                    <input type="radio" id="mobilook_iphone_btn1" name="mobilook_iphone" checked />
                                    <label for="mobilook_iphone_btn1" class="enabled"><?php 
            echo  esc_html__( 'Enabled', 'mobilook' ) ;
            ?></label>
                    
                                </div>                            

                            </div>

                            </div>

                            <div class="mobilook-row">

                            <div class="mobilook-column col-4">
                                <span class="mobilook-label"><?php 
            echo  esc_html__( 'Google Pixel 2 format', 'mobilook' ) ;
            ?></span>
                            </div>

                            <div class="mobilook-column col-8">

                                <div class="mobilook-switch-radio">
                                    <input type="radio" id="mobilook_pixel_btn1" name="mobilook_pixel"  checked />
                                    <label for="mobilook_pixel_btn1" class="enabled"><?php 
            echo  esc_html__( 'Enabled', 'mobilook' ) ;
            ?></label>
                    
                                </div>                            

                            </div>

                            </div>

                            <div class="mobilook-row">

                            <div class="mobilook-column col-4">
                                <span class="mobilook-label"><?php 
            echo  esc_html__( 'Facebook Debugger', 'mobilook' ) ;
            ?></span>
                            </div>

                            <div class="mobilook-column col-8">

                                <div class="mobilook-switch-radio">
                                    <input type="radio" id="mobilook_fb_btn1" name="mobilook_fb"  checked />
                                    <label for="mobilook_fb_btn1" class="enabled"><?php 
            echo  esc_html__( 'Enabled', 'mobilook' ) ;
            ?></label>
                    
                                </div>                            

                            </div>

                            </div>

                        <?php 
            ?>

                        <h2><?php 
            echo  esc_html__( 'PRO Features available with MOBILOOK PRO:', 'mobilook' ) ;
            ?></h2>

                        <div class="mobilook-row">

                            <div class="mobilook-column col-4">
                                <span class="mobilook-label"><?php 
            echo  esc_html__( 'Unlock all device formats (15)', 'mobilook' ) ;
            ?></span>
                            </div>

                            <div class="mobilook-column col-8">

                                <div class="mobilook-switch-radio">
                                    <input type="radio" name="mobilook_unlock" />
                                    <label for="mobilook_unlock_btn1"><?php 
            echo  esc_html__( 'Enabled', 'mobilook' ) ;
            ?></label>

                                    <input type="radio" id="mobilook_unlock_btn2" name="mobilook_unlock" checked />
                                    <label for="mobilook_unlock_btn2"><?php 
            echo  esc_html__( 'Disabled', 'mobilook' ) ;
            ?></label>
                    
                                </div>                            

                            </div>

                        </div>

                        <div class="mobilook-row">

                            <div class="mobilook-column col-4">
                                <span class="mobilook-label"><?php 
            echo  esc_html__( 'Mobilook on Woocommerce Products', 'mobilook' ) ;
            ?></span>
                            </div>

                            <div class="mobilook-column col-8">

                                <div class="mobilook-switch-radio">
                                    <input type="radio" name="mobilook_woo" />
                                    <label for="mobilook_woo_btn1"><?php 
            echo  esc_html__( 'Enabled', 'mobilook' ) ;
            ?></label>

                                    <input type="radio" id="mobilook_woo_btn2" name="mobilook_woo" checked />
                                    <label for="mobilook_woo_btn2"><?php 
            echo  esc_html__( 'Disabled', 'mobilook' ) ;
            ?></label>
                    
                                </div>                            

                            </div>

                        </div> 

                        <div class="mobilook-row">

                            <div class="mobilook-column col-4">
                                <span class="mobilook-label"><?php 
            echo  esc_html__( 'Linkedin Debugger', 'mobilook' ) ;
            ?></span>
                            </div>

                            <div class="mobilook-column col-8">

                                <div class="mobilook-switch-radio">
                                    <input type="radio" name="mobilook_linked" />
                                    <label for="mobilook_linked_btn1"><?php 
            echo  esc_html__( 'Enabled', 'mobilook' ) ;
            ?></label>

                                    <input type="radio" id="mobilook_linked_btn2" name="mobilook_linked" checked />
                                    <label for="mobilook_linked_btn2"><?php 
            echo  esc_html__( 'Disabled', 'mobilook' ) ;
            ?></label>
                    
                                </div>                            

                            </div>

                        </div>

                        <div class="mobilook-row">

                            <div class="mobilook-column col-4">
                                <span class="mobilook-label"><?php 
            echo  esc_html__( 'Google Mobile-Friendly Test Tool', 'mobilook' ) ;
            ?></span>
                            </div>

                            <div class="mobilook-column col-8">

                                <div class="mobilook-switch-radio">
                                    <input type="radio" name="mobilook_goo" />
                                    <label for="mobilook_goo_btn1"><?php 
            echo  esc_html__( 'Enabled', 'mobilook' ) ;
            ?></label>

                                    <input type="radio" id="mobilook_goo_btn2" name="mobilook_goo" checked />
                                    <label for="mobilook_goo_btn2"><?php 
            echo  esc_html__( 'Disabled', 'mobilook' ) ;
            ?></label>
                    
                                </div>                            

                            </div>

                        </div>

                        <div class="mobilook-row">

                            <div class="mobilook-column col-4">
                                <span class="mobilook-label"><?php 
            echo  esc_html__( 'ViewPort optimization for Mobile SEO', 'mobilook' ) ;
            ?></span>
                            </div>

                            <div class="mobilook-column col-8">

                            <div class="mobilook-switch-radio dual-btns">

                                <input type="radio" id="viewport-btn1" name="viewport" disabled />
                                <label for="viewport-btn1"><?php 
            echo  __( 'Enabled', 'better-robots-txt' ) ;
            ?></label>

                                <input type="radio" id="viewport-btn2" name="viewport" checked />
                                <label for="viewport-btn2"><?php 
            echo  __( 'Disabled', 'better-robots-txt' ) ;
            ?></label>

                                <div class="mobilook-tooltip">
                                    <span class="dashicons dashicons-editor-help"></span>
                                    <span class="mobilook-tooltiptext"><?php 
            echo  __( 'This feature adds an optimized viewport meta tag on all your pages allowing users zooming permission with mobile browsers', 'better-robots-txt' ) ;
            ?></span>
                                </div>

                                </div>

                            </div>

                            </div>

                        <div class="mobilook-alert mobilook-info">
                            <span class="closebtn">&times;</span> 
                            <?php 
            echo  $get_pro . " " . __( 'debugger tools, 12 additional device formats and activate Mobilook on Woocommerce pages (products).', 'mobilook' ) ;
            ?>
                        </div>

                        <?php 
            ?>

                        <div class="mobilook-note border" style="margin: 18px 0;"><p>😎 <i><?php 
            echo  sprintf(
                wp_kses( __( 'NEW - Get INSANE TRAFFIC with your website listed on <a href="%s" target="_blank">Baidu Webmaster Tools</a> for <a href="%s" target="_blank">Baidu.com</a>, the second largest search engine in the WORLD and the most used in China (more than 700 millions users).  <a href="%2s" target="_blank" class="note-link">SEE MORE ➤</a>', 'add-tiktok-advertising-pixel' ), array(
                'a' => array(
                'href'   => array(),
                'target' => array(),
                'class'  => array(),
            ),
            ) ),
                esc_url( "https://ziyuan.baidu.com/" ),
                esc_url( "https://baidu.com/" ),
                esc_url( "https://better-robots.com/baidu-webmaster-tools/" )
            ) ;
            ?></i></p></div>

                </div>
                <!-- end mobilook-main -->
            </div>
            <!-- end main settings mobilook-column col-8 -->

            <?php 
            include dirname( __FILE__ ) . '/inc/sidebar.php';
        }
        
        if ( $active_tab == 'mobilook-faq' ) {
            include dirname( __FILE__ ) . '/inc/faq.php';
        }
        ?>

        </div>
    
    </div>

        <?php 
    }

}
// end class
$mobilook_settings = new mobilook_settings();
require MOBILOOK_PLUGIN_PATH . '/admin/metabox.php';