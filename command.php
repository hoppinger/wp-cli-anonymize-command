<?php
if ( ! class_exists( 'WP_CLI' ) ) {
	return;
}
if (defined('WP_CLI') && WP_CLI) {
    WP_CLI::add_command('anonymize', WP_CLI_Anonymize\Anonymize_Command::class);
}