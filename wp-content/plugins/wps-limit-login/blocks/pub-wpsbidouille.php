<?php
$plugin = 'wps-bidouille/wps-bidouille.php';

if ( ! WPS_LIMIT_LOGIN::is_plugin_installed( $plugin ) ) {
	$classes_wpsbidouille    = 'install-now';
	$action_url_wpsbidouille = wp_nonce_url( add_query_arg(
		array(
			'action' => 'install-plugin',
			'plugin' => 'wps-bidouille',
		),
		network_admin_url( 'update.php' )
	), 'install-plugin_wps-bidouille' );
	$button_wpsbidouille     = __( 'Install WPS Bidouille', 'wps-limit-login' );
} elseif ( is_plugin_inactive( $plugin ) ) {
	$action_url_wpsbidouille = wp_nonce_url( add_query_arg(
		array(
			'action'        => 'activate',
			'plugin'        => $plugin,
			'plugin_status' => 'all',
			'paged'         => 1
		),
		network_admin_url( 'plugins.php' )
	), 'activate-plugin_' . $plugin );

	$button_wpsbidouille = __( 'Enable WPS Bidouille', 'wps-limit-login' );
}

if ( empty( $button_wpsbidouille ) ) {
	return false;
}

$details_url_wpsbidouille = add_query_arg(
	array(
		'tab'       => 'plugin-information',
		'plugin'    => 'wps-bidouille',
		'TB_iframe' => true,
		'width'     => 722,
		'height'    => 949,
	),
	network_admin_url( 'plugin-install.php' )
); ?>
<div class="pub-wp-serveur plugin-card plugin-card-wps-bidouille">
    <p class="wps-pub-logo"><img src="https://ps.w.org/wps-bidouille/assets/icon.svg?rev=1817919" height="64" /></p>
    <div class="message"><strong><?php _e( 'WPS Bidouille provides information about your WordPress and contains optimization tools.', 'wps-limit-login' ); ?></strong></div>
    <div class="cta">
        <a data-slug="wps-bidouille" href="<?php echo $action_url_wpsbidouille; ?>"
               class="btn-pubwps btn-install-plugin <?php echo $classes_wpsbidouille; ?>"><?php echo $button_wpsbidouille; ?></a>
        <a href="<?php echo $details_url_wpsbidouille; ?>" class="thickbox open-plugin-details-modal btn-wps-details"><?php _e( 'More about WPS Bidouille', 'wps-limit-login' ); ?></a>
    </div>
</div>