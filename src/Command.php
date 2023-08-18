<?php
declare( strict_types=1 );

namespace InstaWP\CLI;

use WP_CLI;
use WP_CLI_Command;
use InstaWP\Connect\Helpers;

class Command extends WP_CLI_Command {

	/**
	 * Install Plugin and Theme.
	 * 
	 * @param array $args       Indexed array of positional arguments.
	 * @param array $assoc_args Associative array of associative arguments.
	 */
	public function install( $args = [], $assoc_args = [] ): void {
		$params = [];
		foreach ( $args as $arg ) {
			$arg      = explode( ',', $arg );
			$params[] = [
				'slug'     => $arg[0],
				'activate' => $arg[1],
				'source'   => $arg[2],
				'type'     => $arg[3],
			];
		}

		$installer = new Helpers\Installer( $params );
		$response  = $installer->start();

		WP_CLI::line( json_encode( $response ) );
	}

	/**
	 * Install Plugin and Theme.
	 * 
	 * @param array $args       Indexed array of positional arguments.
	 * @param array $assoc_args Associative array of associative arguments.
	 * 
	 * @subcommand get-inventory
	 */
	public function inventory( $args = [], $assoc_args = [] ): void {
		$inventory = new Helpers\Inventory();
		$response  = $inventory->fetch();

		WP_CLI::line( json_encode( $response ) );
	}

	/**
	 * Install Plugin and Theme.
	 * 
	 * @param array $args       Indexed array of positional arguments.
	 * @param array $assoc_args Associative array of associative arguments.
	 * 
	 * @subcommand get-logs
	 */
	public function logs( $args = [], $assoc_args = [] ): void {
		$debug_log = new Helpers\DebugLog();
		$response  = $debug_log->fetch();

		WP_CLI::line( json_encode( $response ) );
	}

	/**
	 * Install Plugin and Theme.
	 * 
	 * @param array $args       Indexed array of positional arguments.
	 * @param array $assoc_args Associative array of associative arguments.
	 * 
	 * @subcommand get-config
	 */
	public function get_config( $args = [], $assoc_args = [] ): void {
		$wp_config = new Helpers\WPConfig( $args );
		$response  = $wp_config->fetch();

		WP_CLI::line( json_encode( $response ) );
	}

	/**
	 * Install Plugin and Theme.
	 * 
	 * @param array $args       Indexed array of positional arguments.
	 * @param array $assoc_args Associative array of associative arguments.
	 * 
	 * @subcommand set-config
	 */
	public function set_config( $args = [], $assoc_args = [] ): void {
		$wp_config = new Helpers\WPConfig( $assoc_args );
		$response  = $wp_config->update();

		WP_CLI::line( json_encode( $response ) );
	}

	/**
	 * Install Plugin and Theme.
	 * 
	 * @param array $args       Indexed array of positional arguments.
	 * @param array $assoc_args Associative array of associative arguments.
	 * 
	 * @subcommand delete-config
	 */
	public function delete_config( $args = [], $assoc_args = [] ): void {
		$wp_config = new Helpers\WPConfig( $args );
		$response  = $wp_config->delete();

		WP_CLI::line( json_encode( $response ) );
	}

	/**
	 * Install Plugin and Theme.
	 * 
	 * @param array $args       Indexed array of positional arguments.
	 * @param array $assoc_args Associative array of associative arguments.
	 * 
	 * @subcommand clear-cache
	 */
	public function clear_cache( $args = [], $assoc_args = [] ): void {
		$cache_api = new Helpers\Cache();
		$response  = $cache_api->clean();

		WP_CLI::line( json_encode( $response ) );
	}
}