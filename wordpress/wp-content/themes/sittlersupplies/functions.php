<?php

/**
* Functions
*
* @package Barnwell
* @author Bill Erickson <bill@billerickson.net>
* @copyright Copyright (c) 2011, Bill Erickson
* @license http://opensource.org/licenses/gpl-2.0.php GNU Public License
*
*/

/**
* Theme Setup
*
* This setup function attaches all of the site-wide functions
* to the correct actions and filters. All the functions themselves
* are defined below this setup function.
*
*/

add_action('genesis_setup','child_theme_setup', 15); function child_theme_setup() {

add_theme_support( 'genesis-connect-woocommerce' );

}



add_action( 'init', 'custom_fix_thumbnail' );
 
function custom_fix_thumbnail() {
  add_filter('woocommerce_placeholder_img_src', 'custom_woocommerce_placeholder_img_src');
   
	function custom_woocommerce_placeholder_img_src( $src ) {
	$upload_dir = wp_upload_dir();
	$uploads = untrailingslashit( $upload_dir['baseurl'] );
	$src = $uploads . '/2015/07/place-holder.jpg';
	 
	return $src;
	}
}
