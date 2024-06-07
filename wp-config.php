<?php


/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myeartwp' );

/** Database username */
define( 'DB_USER', 'myeartwp' );

/** Database password */
define( 'DB_PASSWORD', '2Oz0_t&*tB' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '+kS!&)*+edx&AR2-d[SB+]*#_1CV%_NoxX~J5hTM4Z]hpM9IH9@#6nH~1SWp26#@');
define('SECURE_AUTH_KEY', '(3@mz:dxLU46XXWaPC6;&h965-&DM8!I;@moL3x;:0yC]%6x0NM+4FaF&j!)9)eI');
define('LOGGED_IN_KEY', '#C*cN65P1#+[fSgI0|uXr(1%*uL~gs8_-]-QJc9r9!Lb:5Z2!)4]MUI896Sk~Mn4');
define('NONCE_KEY', '-rOy%A3_-;3e9W8;29MP8[Zf1&_)k590Sv78Hmk3!9bWn0;RkE;~9VPM4m5;4O6N');
define('AUTH_SALT', '_r5Cua343I7U9c0533]~V(x//q*~CMJe2k_M5AJ0J+_38UH6u##Qpi_wyCHYdt[%');
define('SECURE_AUTH_SALT', '80I***0e~*2s24V5(lC;-LAgH]-c_5W%475djt_3Z8x53s4[D&g&wPqnd+e0I-2x');
define('LOGGED_IN_SALT', 'iA4+A]!)36z)#&4F0zwC&&~!&A&Oogmn6sL6qa66848&AD)Qn)6XwQLPJwax*!Nl');
define('NONCE_SALT', '622Y6bI8O9r8-vgljdb8o0~41432L#MZf_GH%nj:ZPF-f%d4DJi0Y44Yw4v4jaiF');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'unique';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
