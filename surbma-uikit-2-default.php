<?php

/*
Plugin Name: Surbma - UIkit 2 - Default
Plugin URI: http://surbma.com/wordpress-plugins/
Description: Some useful UIkit 2 styles for your site.

Version: 1.0.1

Author: Surbma
Author URI: http://surbma.com/

License: GPLv2

Text Domain: surbma-uikit-2-default
Domain Path: /languages/
*/

// Localization
function surbma_uikit_2_default_init() {
	load_plugin_textdomain( 'surbma-uikit-2-almost-flat', false, dirname( plugin_basename( __FILE__ ) . '/languages/' ) );
}
add_action( 'init', 'surbma_uikit_2_default_init' );

function surbma_uikit_2_default_enqueue_scripts() {
	wp_enqueue_script( 'uikit-scripts', plugins_url( '', __FILE__ ) . '/js/uikit-min.js', array( 'jquery' ), '2.12.0', true );
	wp_enqueue_style( 'uikit-styles', plugins_url( '', __FILE__ ) . '/css/uikit.css', false, '2.12.0' );
}
add_action( 'wp_enqueue_scripts', 'surbma_uikit_2_default_enqueue_scripts' );

global $allowedposttags;
$allowedposttags['a'] = array(
	'href' => array(),
	'rel' => array(),
	'rev' => array(),
	'name' => array(),
	'target' => array(),
	'data-uk-toggle' => array()
);
$allowedposttags['button'] = array(
	'disabled' => array(),
	'name' => array(),
	'type' => array(),
	'value' => array(),
	'data-uk-toggle' => array()
);
$allowedposttags['ul'] = array(
	'type' => array(),
	'data-uk-nav' => array(),
	'data-uk-tab' => array(),
	'data-uk-switcher' => array(),
	'data-uk-switcher-item' => array()
);
$allowedposttags['div'] = array(
	'align' => array(),
	'dir' => array(),
	'lang' => array(),
	'xml:lang' => array(),
	'data-uk-switcher' => array()
);

