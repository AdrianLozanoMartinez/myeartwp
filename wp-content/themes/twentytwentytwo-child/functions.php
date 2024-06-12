<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_separate', trailingslashit( get_stylesheet_directory_uri() ) . 'ctc-style.css', array( 'twentytwentytwo-style','twentytwentytwo-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 100 );
 
// END ENQUEUE PARENT ACTION
// Función para mostrar botones de Login y Registro o Logout
function custom_login_buttons() {
    if ( is_user_logged_in() ) {
        $profile_url = site_url('mi-cuenta/'); // URL del perfil de Dokan del usuario
        return '<div class="wp-block-buttons">
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="' . site_url('wp-login.php?action=logout&redirect_to=https://infallible-nash.217-160-155-66.plesk.page/login/') . '">Logout</a></div>
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="' . $profile_url . '">Mi Perfil</a></div>
                </div>';
    } else {
        // URL del login de Dokan
        $dokan_login_url = 'https://infallible-nash.217-160-155-66.plesk.page/login/'; // Reemplaza 'URL_DE_LOGIN_DE_DOKAN' con la URL real de login de Dokan
        $dokan_register_url = 'https://infallible-nash.217-160-155-66.plesk.page/registro/'; // Reemplaza 'URL_DE_LOGIN_DE_DOKAN' con la URL real de login de Dokan
        return '<div class="wp-block-buttons">
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="' . $dokan_login_url . '">Login</a></div>
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="' . $dokan_register_url . '">Registro</a></div>
                </div>';
    }
}

// Registrar shortcode
add_shortcode( 'custom_login_buttons', 'custom_login_buttons' );