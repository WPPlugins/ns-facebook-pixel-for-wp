<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function ns_fbpxwp_activate_set_options()
{
    add_option('ns_code_js_to_add_fb_pixel', '');
    add_option('ns_code_js_logged_to_add_fb_pixel', '');
}

register_activation_hook( __FILE__, 'ns_fbpxwp_activate_set_options');



function ns_fbpxwp_register_options_group()
{
    register_setting('ns_fbpxwp_options_group', 'ns_code_js_to_add_fb_pixel');
    register_setting('ns_fbpxwp_options_logged_group', 'ns_code_js_logged_to_add_fb_pixel');    
}
 
add_action ('admin_init', 'ns_fbpxwp_register_options_group');

?>