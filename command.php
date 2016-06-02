<?php
if ( ! class_exists( 'WP_CLI' ) ) {
	return;
}
if (defined('WP_CLI') && WP_CLI) {

		define( 'WP_DELTA_ROOT', dirname( __FILE__ ) );
		require_once WP_DELTA_ROOT . '/src/Anonymize_Command.php';
    WP_CLI::add_command('anonymize', Anonymize_Command::class);
}