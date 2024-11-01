<?php

/**
 * VG Accordion
 * 
 * 
 * @package WordPress
 * @subpackage vg-accordion
 * @author Vishal Gupta <vishal.surajpal.gupta@gmail.com>
 */


/**
 * Create Shortcode for Accordion
 *
 * @param Array 
 * @param Content inside shorcode
 * @return DOM element
 */
function vgap_display_shortcode($atts, $content=null){

	//set default color for Accordion
	$atts = shortcode_atts( 
		array( 
		'hbg' => 'transparent',
		'cbg' => 'transparent',
		'hcol' => '#000',
		'ccol' => '#000'
	 	), $atts
	);

	$domEle = "<div class='vg-accordion'><ul>";
	$args = array(
			'post_type' => 'accordion',
			'post_status' => 'publish',
			'posts_per_page' => -1
			);
	$accordion = get_posts($args);
	foreach ($accordion as $post): setup_postdata($post);
		$domEle .="<li>
						<article>
							<h4 class='vg-head' style='background-color:".$atts[ 'hbg' ]."; color:".$atts['hcol'].";'>".get_the_title($post->ID)."</h4>
							<div class='vg-content' style='background-color:".$atts[ 'cbg' ]."; color:".$atts['ccol'].";'>".wpautop(do_shortcode(get_the_content($post->ID)))."</div>
						</article>
					</li>";
			endforeach;	
			wp_reset_query();	
	$domEle .="</ul></div>";
	return $domEle;
}

add_shortcode( 'vg_accordion', 'vgap_display_shortcode' );