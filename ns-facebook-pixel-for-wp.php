<?php
/*
Plugin Name: Facebook Pixel for WP
Plugin URI: https://wordpress.org/plugins/ns-facebook-pixel-for-wp/
Description: This plugin add facebook pixel script into header
Version: 1.2.0
Author: NsThemes
Author URI: http://www.nsthemes.com
License: GNU General Public License v2.0
License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


if ( ! defined( 'FBP_NS_PLUGIN_DIR' ) )
    define( 'FBP_NS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

if ( ! defined( 'FBP_NS_PLUGIN_DIR_URL' ) )
    define( 'FBP_NS_PLUGIN_DIR_URL', plugin_dir_url( __FILE__ ) );


/* *** plugin options *** */
require_once( FBP_NS_PLUGIN_DIR.'/ns_facebook_pixel_for_wp_option.php');

/* *** plugin settings page *** */
require_once( FBP_NS_PLUGIN_DIR.'/ns-admin-options/ns-admin-options-setup.php');

/* *** write facebook code *** */
function fbp4wp_write_fb_pixel(){
	$fbp4wp_script_to_print = get_option('ns_code_js_to_add_fb_pixel', '');
	$ns_fb4wp_custom_logged = get_option('ns_code_js_logged_to_add_fb_pixel', '1' );
	


	if ($ns_fb4wp_custom_logged == 1) {

		echo $fbp4wp_script_to_print;
	
	} else {
		if (!is_user_logged_in()) {
			echo $fbp4wp_script_to_print;
		}
	}


}
add_action('wp_head', 'fbp4wp_write_fb_pixel');


/* *** add link premium *** */
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'fbp4wp_add_action_links' );

function fbp4wp_add_action_links ( $links ) {
 $fbpx4wp_theme = wp_get_theme();
 $fbpx4wp_theme_name = $fbpx4wp_theme['Name']; 	
 $mylinks = array(
 '<input type="hidden" name="fbpx4wphiddthemename" id="fbpx4wphiddthemename" value="'.$fbpx4wp_theme_name.'"><a id="fbp4wplinkpremiumlinkpremium" href="http://www.nsthemes.com/product/facebook-conversion-pixel/?ref-ns=2&campaign=linkpremium" target="_blank">Premium Version</a>',
 );
return array_merge( $links, $mylinks );
}




####################################################################
add_action( 'wp_ajax_nopriv_fbp4wp_get_ref_id', 'fbp4wp_get_ref_id' );
add_action( 'wp_ajax_fbp4wp_get_ref_id', 'fbp4wp_get_ref_id' );

function fbp4wp_get_ref_id() {
	$ref_id_to_find = $_POST['themename'];
	$ref_id_to_find_def = explode(" Child", $ref_id_to_find);
	//echo $ref_id_to_find_def[0];
	$ns_all_page = file_get_contents('http://www.nsthemes.com/ns-get-ref/?themename='.$ref_id_to_find_def[0]);
	$ns_ref_id_firstpart = explode("nsrefidval", $ns_all_page);
	echo trim(preg_replace('/\s\s+/', ' ', $ns_ref_id_firstpart[1]));
    die();    
}