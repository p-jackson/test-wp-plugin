<?php
/**
 * @package Test_WP_Plugin
 * @version 1.0.0
 */
/*
Plugin Name: Test WP Plugin
Plugin URI: https://github.com/p-jackson/test-wp-plugin/
Description: A very basic plugin for testing purposes.
Author: Philip Jackson
Version: 1.0.0
Author URI: https://github.com/p-jackson
*/

function hello_test_wp_plugin() {
	$chosen = 'Hello Test WP Plugin 2';

	printf(
		'<p id="test-wp-plugin">%s</p>',
		$chosen
	);
}

add_action( 'admin_notices', 'hello_test_wp_plugin' );
