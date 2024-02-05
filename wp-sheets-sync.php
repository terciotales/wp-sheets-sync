<?php

/**
 * @wordpress-plugin
 * Plugin Name:       WP Sheets Sync
 * Plugin URI:        https://github.com/terciotales/wp-sheets-sync
 * Description:       Synchronize your Google Sheets with your WordPress site.
 * Version:           1.0.0
 * Author:            Tércio Tales
 * Author URI:        https://github.com/terciotales/
 * Text Domain:       wp-sheets-sync
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

require_once __DIR__ . '/vendor/autoload.php';

