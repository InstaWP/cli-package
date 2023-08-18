<?php

namespace InstaWP\CLI;

use WP_CLI;

if ( ! class_exists( '\WP_CLI' ) ) {
	return;
}

$wpcli_autoloader = __DIR__ . '/vendor/autoload.php';

if ( file_exists( $wpcli_autoloader ) ) {
	require_once $wpcli_autoloader;
}

WP_CLI::add_hook( 'after_wp_load', function() {
	WP_CLI::add_command( 'instawp-cli', Command::class );
} );