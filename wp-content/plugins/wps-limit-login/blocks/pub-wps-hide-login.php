<?php
$plugin = 'wps-hide-login/wps-hide-login.php';

if ( ! WPS_LIMIT_LOGIN::is_plugin_installed( $plugin ) ) {
	$classes_wpshidelogin    = 'install-now';
	$action_url_wpshidelogin = wp_nonce_url( add_query_arg(
		array(
			'action' => 'install-plugin',
			'plugin' => 'wps-hide-login',
		),
		network_admin_url( 'update.php' )
	), 'install-plugin_wps-hide-login' );
	$button_wpshidelogin     = __( 'Install WPS Hide Login', 'wps-limit-login' );
} elseif ( is_plugin_inactive( $plugin ) ) {
	$action_url_wpshidelogin = wp_nonce_url( add_query_arg(
		array(
			'action'        => 'activate',
			'plugin'        => $plugin,
			'plugin_status' => 'all',
			'paged'         => 1
		),
		network_admin_url( 'plugins.php' )
	), 'activate-plugin_' . $plugin );

	$button_wpshidelogin = __( 'Enable WPS Hide login', 'wps-limit-login' );
}

if ( empty( $button_wpshidelogin ) ) {
	return false;
}

$details_url_wpshidelogin = add_query_arg(
	array(
		'tab'       => 'plugin-information',
		'plugin'    => 'wps-hide-login',
		'TB_iframe' => true,
		'width'     => 722,
		'height'    => 949,
	),
	network_admin_url( 'plugin-install.php' )
); ?>

<div class="pub-wp-serveur plugin-card plugin-card-wps-hide-login">
    <p class="wps-pub-logo"><img src="https://ps.w.org/wps-hide-login/assets/icon-128x128.png?rev=1820667" height="64" /></p>
    <div class="message"><strong><?php _e( 'Secure access to your WordPress administration', 'wps-limit-login' ); ?></strong></div>
    <div class="cta">
        <a data-slug="wps-hide-login" href="<?php echo $action_url_wpshidelogin; ?>"
               class="btn-pubwps btn-install-plugin <?php echo $classes_wpshidelogin; ?>"><?php echo $button_wpshidelogin; ?></a>
        <a href="<?php echo $details_url_wpshidelogin; ?>" class="thickbox open-plugin-details-modal btn-wps-details"><?php _e( 'More about WPS Hide Login', 'wps-limit-login' ); ?></a>
    </div>
</div>