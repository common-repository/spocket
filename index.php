<?php
/*
Plugin Name:  Spocket ‑ US & EU Dropshipping
Description:  Spocket - Dropshipping US/European Products
Version: 1.7.9
Author:       Spocket
Author URI:   https://www.spocket.co
Text Domain:  spocket

Woo: 4755824:28bedd807fee898904f7ede3cbef6b24
*/

if (!defined('WPINC')) {
	die;
}

if (file_exists(\dirname(__FILE__) . '/vendor/autoload.php')) {
	include_once dirname(__FILE__) . '/vendor/autoload.php';
}

if (file_exists(dirname(__FILE__) . '/.env') === true) {
	$dotenv = new Dotenv\Dotenv(__DIR__);
	$dotenv->load();
}

if (! defined('SPOCKET_MAKE_PATHS_RELATIVE_FILE')) {
	define('SPOCKET_MAKE_PATHS_RELATIVE_FILE', __FILE__);
}

\add_action(
	'plugins_loaded',
	function () {
		$plugin = new \Spocket\Plugin();
		$plugin->run();
	}
);

