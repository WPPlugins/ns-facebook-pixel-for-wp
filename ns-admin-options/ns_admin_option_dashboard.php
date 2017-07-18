<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
require_once( plugin_dir_path( __FILE__ ).'inc.php');

// $link_sidebar = $ns_url_plugin_premium.'?utm_source='.$ns_menu_label.'%20Sidebar&utm_medium=Sidebar%20dentro%20settings&utm_campaign='.$ns_menu_label.'%20Sidebar%20premium';
// $link_bannerino = $ns_url_plugin_premium.'?utm_source='.$ns_menu_label.'%20Bannerino&utm_medium=Bannerino%20dentro%20settings&utm_campaign='.$ns_menu_label.'%20Bannerino%20premium'; 
// $link_bannerone = $ns_url_plugin_premium.'?utm_source='.$ns_menu_label.'%20Bannerone&utm_medium=Bannerone%20dashboard&utm_campaign='.$ns_menu_label.'%20Bannerone%20premium'; 
$link_sidebar = 'http://www.nsthemes.com/product/facebook-conversion-pixel/?ref-ns=2&campaign=sidebar';
$link_bannerino = 'http://www.nsthemes.com/product/facebook-conversion-pixel/?ref-ns=2&campaign=bannerino'; 
$link_bannerone = 'http://www.nsthemes.com/product/facebook-conversion-pixel/?ref-ns=2&campaign=bannerone'; 
$link_promo_theme = $ns_url_theme_promo.'?ref-ns=2&campaign='.$ns_theme_promo_slug.'&utm_source='.$ns_theme_promo_slug.'%20'.$ns_menu_label.'%20Sidebar&utm_medium=Sidebar%20'.$ns_theme_promo_slug.'%20dentro%20settings&utm_campaign='.$ns_theme_promo_slug.'%20'.$ns_menu_label.'%20Sidebar%20premium';
?>

	    <div class="verynsbigbox">
	    	<?php 
	    		/* *** BOX PREMIUM VERSION *** */
				require_once( plugin_dir_path( __FILE__ ).'ns_settings_box_pro_version.php');

	    		/* *** BOX NEWSLETTER *** */
				require_once( plugin_dir_path( __FILE__ ).'ns_settings_box_newsletter.php');

	    		/* *** BOX THEME PROMO *** */
				require_once( plugin_dir_path( __FILE__ ).'ns_settings_box_theme_promo.php');
			?>			
		</div>
	   
<?php
$fbpx4wp_theme = wp_get_theme();
$fbpx4wp_theme_name = $fbpx4wp_theme['Name'];
?>

		<div class="verynsbigboxcontainer">
<input type="hidden" name="fbpx4wphiddthemename" id ="fbpx4wphiddthemename" value="<?php echo $fbpx4wp_theme_name; ?>">
	<div class="postbox nsproversionfbpx4wp">
        <h3 class="titprofbpx4wp">Upgrade to the PREMIUM VERSION</h3>
	        <div class="colprofbpx4wp">
	        	<h2 class="titlefbpx4wp">Premium features:</h2><br>
	        	<ul>
	        		<li>- add event “View content”</li>
	        		<li>- add event “Purchase”</li>
	        		<li>- add event in every single product</li>
	        		<li>- “View content” and “Purchase” parameters are compiled automatically</li>
	        		<li>- add different Facebook Pixel code for any page</li>
	        		<li>- add a single Facebook Pixel inside only one page</li>
	        	</ul>	
	        </div>
	        <div class="colprofbpx4wp2">
	        	<h2 class="titlefbpx4wp2">Upgrade or get support:</h2><br><br>
				If you upgrade your plugin you will get one year of free updates and support
				through our website available 24h/24h. Upgrade and you'll have the advantage
				of additional features of the premium version.<br><br>
				<a id="fbp4wplinkpremiumboxpremium" class="button-primary" href="<?php echo $link_bannerone; ?>">Get Premium Now</a>
	        </div>
    </div>	

			<div class="icon32" id="icon-options-general"><br /></div>
			<h2><?php echo $ns_full_name; ?> Settings</h2>
			<form method="post" action="options.php" enctype="multipart/form-data">
	    		<?php /* *** BOX THEME PROMO *** */ ?>
				<?php require_once( plugin_dir_path( __FILE__ ).'ns_settings_custom.php'); ?>				
				<p><input type="submit" class="button-primary" id="submit" name="submit" value="<?php _e('Save Changes') ?>" /></p>				
			</form>
		</div>
		<div><p><?php echo '<a id="fbp4wplinkpremiumbannerino" href="'.$link_bannerino.'"><img src="'.plugin_dir_url( __FILE__ ).'img/'.$ns_slug.'-bannerino.png"></a>'; ?></p></div>






