<?php

/**
 * The plugin bootstrap file
 *
 * @link              https://profiles.wordpress.org/cscode
 * @since             1.0.0
 * @package           Dokan_Plus
 *
 * @wordpress-plugin
 * Plugin Name:       Dokan Plus
 * Plugin URI:        https://wordpress.org/plugins/dokan-plus/
 * Description:       Make Dokan more user friendly for free!
 * Version:           1.0.4
 * Author:            Team csCode
 * Author URI:        https://profiles.wordpress.org/cscode
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       dokan-lite
 * Domain Path:       /languages
 */


// don't call the file directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Startup
 */

define( 'DOKAN_PLUS', '1.0.4' );



function dokan_plus_activate() {
	// if dokan is not active ...
	if( !function_exists( 'WeDevs_Dokan' ) && empty( get_option( 'dvih-notice-dismissed' ) ) ) {
  add_action( 'admin_notices', 'dvih_admin_notice' );
}

function dvih_admin_notice() {
    ?>
    <div class="notice error dvih-notice-dismissed" >
        <p><?php _e( 'Dokan plugin is required! Please install it now!', 'dokan-lite' ); ?></p>
    </div>


    <?php
}
}

add_action( 'admin_notices', 'dokan_new_notice' );


function dokan_new_notice() {
	$plugin_url = self_admin_url( 'plugin-install.php?s=woo+manager+theinnovs&tab=search&type=term' );
  ?>
  <div class="update-nag notice is-dismissible" style="color: white; background: #FF8A65; width: 95%">
      <p><?php _e( 'Want to modify Colors, Button Labels of *Add To Cart & Add extra field on Checkout and other pages? <a href=" '. $plugin_url . '">Install Woo Manager</a> Fully compatible with DOKAN!', 'dokan' ); ?></p>
  </div>
  <?php
}

register_activation_hook( __FILE__, 'dokan_plus_activate' );

/**
 * Add settings field
 *
 */

function dokan_plus_add_hide_info_fields( $settings_fields ) {
	$settings_fields['dokan_general']['dokan_plus'] = [
		'name'    => 'dokan_plus',
		'label'   => __( 'Hide vendor info', 'dokan-lite' ),
		'desc'    => __( 'Hide selected information from vendor store list', 'dokan-lite' ),
		'type'    => 'multicheck',
		'default' => (object) [],
		'options' => (object) [
			'street_1' => 'Street 1',
			'street_2' => 'Street 2',
			'city' 	   => 'City',
			'zip' 	   => 'Zip',
			'country'  => 'Country',
			'state'    => 'State',
			'phone'	   => 'Phone',
			'email'	   => 'email'
		]
	];

	return $settings_fields;
}


/**
 * Modify store data display
 */

function dokan_plus_seller_store_data_modify($seller = null, $store_info = null) {
	$options = get_option( 'dokan_general', array() );
	$dokan_plus = ! empty( $options['dokan_plus'] ) ? $options['dokan_plus'] : [];

	echo '<style>';

	foreach ($dokan_plus as $info) {
		switch ($info) {
			case 'phone':
				echo '.store-phone, .dokan-store-phone { display: none; }';
				break;
			case 'email':
				echo '.store-email, .dokan-store-email { display: none; }';
				break;
			case 'street_1':
				echo '.store-address .street_1, .dokan-store-address .street_1 { display: none; }';
				break;
			case 'street_2':
				echo '.store-address .street_2, .dokan-store-address .street_2 { display: none; }';
				break;
			case 'city':
				echo '.store-address .city, .dokan-store-address .city { display: none; }';
				break;
			case 'zip':
				echo '.store-address .zip, .dokan-store-address .zip { display: none; }';
				break;
			case 'country':
				echo '.store-address .country, .dokan-store-address .country { display: none; }';
				break;
			case 'state':
				echo '.store-address .state, .dokan-store-address .state { display: none; }';
				break;
			case 'location':
				//
				break;

			default:
				// code...
				break;
		}
	}

	echo '</style>';
}

function dokan_plus_after_dokan_fully_loaded() {
	add_filter( 'dokan_settings_fields', 'dokan_plus_add_hide_info_fields' );
	add_action( 'dokan_seller_listing_after_featured', 'dokan_plus_seller_store_data_modify', 10, 2 );
	add_action( 'dokan_store_header_info_fields', 'dokan_plus_seller_store_data_modify' );
}

add_action( 'dokan_loaded', 'dokan_plus_after_dokan_fully_loaded' );
