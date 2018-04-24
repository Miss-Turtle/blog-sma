<?php
/*
Plugin Name: WPS Limit Login
Description: Limit connection attempts by IP address
Version: 1.2
Author: WPServeur, NicolasKulka, benoitgeek
Text Domain: wps-limit-login
Author URI: https://wpserveur.net
License: GPL2
*/

// don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

// Plugin constants
define( 'WPS_LIMIT_LOGIN_VERSION', '1.2' );
define( 'WPS_LIMIT_LOGIN_FOLDER', 'wps-limit-login' );
define( 'WPS_LIMIT_LOGIN_BASENAME', plugin_basename( __FILE__ ) );

define( 'WPS_LIMIT_LOGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'WPS_LIMIT_LOGIN_DIR', plugin_dir_path( __FILE__ ) );

define( 'WPS_LIMIT_LOGIN_REMOTE_ADDR', 'REMOTE_ADDR' );

$wps_limit_login_my_error_shown       = false;
$wps_limit_login_just_lockedout       = false;
$wps_limit_login_notempty_credentials = false;

// Function for easy load files
if ( ! function_exists( 'wpserveur_limit_login_load_files' ) ) {
	function wpserveur_limit_login_load_files( $dir, $files, $prefix = '' ) {
		foreach ( $files as $file ) {
			if ( is_file( $dir . $prefix . $file . '.php' ) ) {
				require_once( $dir . $prefix . $file . '.php' );
			}
		}
	}
}

// Plugin client classes
wpserveur_limit_login_load_files( WPS_LIMIT_LOGIN_DIR . 'classes/', array(
	'plugin',
) );

// register_activation_hook( __FILE__, array( 'WPS_LIMIT_LOGIN', 'activate' ) );

if ( ! function_exists( 'plugins_loaded_wps_limit_login_plugin' ) ) {
	add_action( 'plugins_loaded', 'plugins_loaded_wps_limit_login_plugin' );
	function plugins_loaded_wps_limit_login_plugin() {
		new WPS_LIMIT_LOGIN();

		load_plugin_textdomain( 'wps-limit-login', false, basename( rtrim( dirname( __FILE__ ), '/' ) ) . '/languages' );
	}
}