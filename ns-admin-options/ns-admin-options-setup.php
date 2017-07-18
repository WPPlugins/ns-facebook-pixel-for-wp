<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
//require_once( untrailingslashit( dirname( __FILE__ ) ).'/inc.php');

/* *** add menu page and add sub menu page *** */
add_action( 'admin_menu', function() {
    add_menu_page( 'Facebook Pixel', 'Facebook Pixel', 'manage_options', plugin_dir_path( __FILE__ ).'/ns_admin_option_dashboard.php', '', plugin_dir_url( __FILE__ ).'img/backend-sidebar-icon.png', 60);
	add_submenu_page(plugin_dir_path( __FILE__ ).'/ns_admin_option_dashboard.php', 'How to install premium version', 'How to install premium version', 'manage_options', 'how-to-install-premium-version', function(){});
});


function fbp4wp_preprocess_pages($value){
    global $pagenow;
    $page = (isset($_REQUEST['page']) ? $_REQUEST['page'] : false);
    if($pagenow=='admin.php' && $page=='how-to-install-premium-version'){
        wp_redirect('http://www.nsthemes.com/how-to-install-the-premium-version/');
        exit;
    }
}
add_action('admin_init', 'fbp4wp_preprocess_pages');



/* *** add style *** */
add_action( 'admin_enqueue_scripts', function() {
	wp_enqueue_style('ns-option-css-page', plugin_dir_url( __FILE__ ) . 'css/ns-option-css-page.css');
	wp_enqueue_style('ns-option-css-custom-page', plugin_dir_url( __FILE__ ) . 'css/ns-option-css-custom-page.css');
	wp_enqueue_script( 'fbp4wp-option-js-page', plugins_url( '/js/fbp4wp-option-js-page.js' , __FILE__ ), array( 'jquery' ) );
	wp_localize_script( 'fbp4wp-option-js-page', 'fbp4wprefcode', array( 'ajax_url' => admin_url( 'admin-ajax.php' )));
});
?>