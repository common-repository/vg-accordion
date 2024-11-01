<?php
/**
 * Plugin Name: VG Accordion
 * Plugin URI: http://guptavishal.in/works/vg-accordion/
 * Description: Add Accordion on your site by using [vg_accordion] shortcode for more detail please see detail page.
 * Author: Vishal Gupta
 * Author URI: http://guptavishal.in
 * Version: 1.1.0
 * License: GPLv2
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

//Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'VGAP_PLUGIN_PATH', plugin_dir_url( __FILE__ ) );

require_once('vg-accordion-post.php');
require_once('short-code/vg-accordion-short-code.php');

// Enqueue the Style and script

function vgap_accordion_scripts() {
	//enqueue the style
    wp_enqueue_style( 'vgap-style', constant('VGAP_PLUGIN_PATH') . 'assets/css/style.min.css');

    //enqueue the script
    wp_enqueue_script( 'vgap-script', constant('VGAP_PLUGIN_PATH') . 'assets/js/script.min.js', array('jquery'), '0.0.1', true );
}

add_action( 'wp_enqueue_scripts', 'vgap_accordion_scripts' );