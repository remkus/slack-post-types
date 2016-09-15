<?php

/*
 * Uninstaller script
 * Only runs when the plugin is being uninstalled via the WordPress admin panel
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( 'What you doin?' );
}

// Remove options
remove_option( 'slack-post-types' );
