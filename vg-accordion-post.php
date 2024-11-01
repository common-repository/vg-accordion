<?php

/**
 * VG Accordion
 * 
 * 
 * @package WordPress
 * @subpackage vg-accordion
 * @author Vishal Gupta <vishal.surajpal.gupta@gmail.com>
 */

// Register Custome post

function vgap_register_post_type() {

	$singular = 'VG Accordion';
	$plural = 'VG Accordions';

	$labels = array(
		'name' 					=> $plural,
		'singular_name' 		=> $singular,
		'aad_name'				=> 'Add New',
		'add_new_item' 			=> 'Add New '.$singular,
		'edit' 					=> 'Edit',
		'edit_item' 			=> 'Edit '. $singular,
		'new_item' 				=> 'New '. $singular,
		'view' 					=> 'View',
		'view_item' 			=> 'View '.$singular,
		'serach_term' 			=> 'Search '.$plural,
		'parent' 				=> 'Parent '. $singular,
		'not_found' 			=> 'No '. $plural .' found',
		'not_found_in_trash' 	=> 'No '. $plural . ' in Trash'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_icon'			 => 'dashicons-list-view',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'accordion' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor' )
	);

	register_post_type( 'accordion', $args );

}


add_action( 'init', 'vgap_register_post_type' );