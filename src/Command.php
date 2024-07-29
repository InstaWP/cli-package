<?php

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
	public function install( $args = [], $assoc_args = [] ) {
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
	 * Get Site Inventory data.
	 * 
	 * @param array $args       Indexed array of positional arguments.
	 * @param array $assoc_args Associative array of associative arguments.
	 * 
	 * @subcommand get-inventory
	 */
	public function inventory( $args = [], $assoc_args = [] ) {
		$inventory = new Helpers\Inventory();
		$response  = $inventory->fetch();

		WP_CLI::line( json_encode( $response ) );
	}

	/**
	 * Get Debug Logs.
	 * 
	 * @param array $args       Indexed array of positional arguments.
	 * @param array $assoc_args Associative array of associative arguments.
	 * 
	 * @subcommand get-logs
	 */
	public function logs( $args = [], $assoc_args = [] ) {
		$debug_log = new Helpers\DebugLog();
		$response  = $debug_log->fetch();

		WP_CLI::line( json_encode( $response ) );
	}

	/**
	 * Get WordPress Config.
	 * 
	 * @param array $args       Indexed array of positional arguments.
	 * @param array $assoc_args Associative array of associative arguments.
	 * 
	 * @subcommand get-config
	 */
	public function get_config( $args = [], $assoc_args = [] ) {
        try {
            $wp_config = new Helpers\WPConfig( $args, true );
            $response  = $wp_config->get();
        } catch ( \Exception $e ) {
            $response = [
                'success' => false,
                'message' => $e->getMessage(),
            ];
        }

		WP_CLI::line( json_encode( $response ) );
	}

	/**
	 * Set WordPress Config.
	 * 
	 * @param array $args       Indexed array of positional arguments.
	 * @param array $assoc_args Associative array of associative arguments.
	 * 
	 * @subcommand set-config
	 */
	public function set_config( $args = [], $assoc_args = [] ) {
        try {
            $wp_config = new Helpers\WPConfig( $assoc_args, true );
            $response  = $wp_config->set();
        } catch ( \Exception $e ) {
            $response = [
                'success' => false,
                'message' => $e->getMessage(),
            ];
        }

		WP_CLI::line( json_encode( $response ) );
	}

	/**
	 * Delete WordPress Config.
	 * 
	 * @param array $args       Indexed array of positional arguments.
	 * @param array $assoc_args Associative array of associative arguments.
	 * 
	 * @subcommand delete-config
	 */
	public function delete_config( $args = [], $assoc_args = [] ) {
        try {
            $wp_config = new Helpers\WPConfig( $args, true );
            $response  = $wp_config->delete();
        } catch ( \Exception $e ) {
            $response = [
                'success' => false,
                'message' => $e->getMessage(),
            ];
        }
        
		WP_CLI::line( json_encode( $response ) );
	}

	/**
	 * Clear WordPress Cache.
	 * 
	 * @param array $args       Indexed array of positional arguments.
	 * @param array $assoc_args Associative array of associative arguments.
	 * 
	 * @subcommand clear-cache
	 */
	public function clear_cache( $args = [], $assoc_args = [] ) {
		$cache_api = new Helpers\Cache();
		$response  = $cache_api->clean();

		WP_CLI::line( json_encode( $response ) );
	}

	/**
	 * File Manager.
	 * 
	 * @param array $args       Indexed array of positional arguments.
	 * @param array $assoc_args Associative array of associative arguments.
	 * 
	 * @subcommand file-manager
	 */
	public function file_manager( $args = [], $assoc_args = [] ) {
		$file_manager = new Helpers\FileManager();
		$response     = $file_manager->get();

		WP_CLI::line( json_encode( $response ) );
	}

	/**
	 * Database Manager.
	 * 
	 * @param array $args       Indexed array of positional arguments.
	 * @param array $assoc_args Associative array of associative arguments.
	 * 
	 * @subcommand database-manager
	 */
	public function database_manager( $args = [], $assoc_args = [] ) {
		$database_manager = new Helpers\DatabaseManager();
		$response         = $database_manager->get();

		WP_CLI::line( json_encode( $response ) );
	}

	/**
	 * Set WordPress Config.
	 * 
	 * @param array $args       Indexed array of positional arguments.
	 * @param array $assoc_args Associative array of associative arguments.
	 * 
	 * @subcommand set-option
	 */
	public function set_option( $args = [], $assoc_args = [] ) {
		$wp_option = new Helpers\Option();
		$response  = $wp_option->update( $assoc_args );

		WP_CLI::line( json_encode( $response ) );
	}

	/**
	 * Get Site Usage.
	 * 
	 * @param array $args       Indexed array of positional arguments.
	 * @param array $assoc_args Associative array of associative arguments.
	 * 
	 * @subcommand get-site-usage
	 */
	public function get_site_usage( $args = [], $assoc_args = [] ) {
		$response = Helper::get_directory_info( ABSPATH );

		WP_CLI::line( json_encode( $response ) );
	}
}