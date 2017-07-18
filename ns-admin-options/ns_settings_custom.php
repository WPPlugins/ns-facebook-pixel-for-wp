<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php settings_fields('ns_fbpxwp_options_group'); ?>
<?php $fbp4wp_script_text = get_option('ns_code_js_to_add_fb_pixel', ''); ?>
<div class="genRowNssdc">
 <p class="description">
 	Generate your Facebook Pixel base code - <a target="_blank" href="https://www.facebook.com/business/help/952192354843755?helpref=faq_content">Facebook Pixel Implementation Guide</a><br>
 	Copy and paste your Facebook Pixel base code here:
 </p>
 <textarea rows="10" cols="100" id="ns_code_js_to_add_fb_pixel" name="ns_code_js_to_add_fb_pixel"><?php echo esc_textarea($fbp4wp_script_text); ?></textarea>	
 <p class="description">You can check that your pixel work properly using <a target="_blank" href="https://developers.facebook.com/docs/facebook-pixel/pixel-helper">Facebook Pixel Helper</a></p>


<hr>

<h3>Show or Hide Pixel for logged user</h3>
<p class="description">
	You can choose if activate or not Facebook Pixel when a user is logged in
</p>

<?php settings_fields( 'ns_fbpxwp_options_logged_group' ); ?>
<?php
	$ns_fbpxwp_saved_logged = get_option('ns_code_js_logged_to_add_fb_pixel', '1');
	if ($ns_fbpxwp_saved_logged == 1) {
		$ns_fbpxwp_show = ' checked="checked"';
		$ns_fbpxwp_hide = '';
	}else{
		$ns_fbpxwp_show = '';
		$ns_fbpxwp_hide = ' checked="checked"';		
	}
?>

<input type="radio" name="ns_code_js_logged_to_add_fb_pixel" value="1"<?php echo $ns_fbpxwp_show; ?>> Show (default)
<br>
<input type="radio" name="ns_code_js_logged_to_add_fb_pixel" value="0"<?php echo $ns_fbpxwp_hide; ?>> Hide
</div>