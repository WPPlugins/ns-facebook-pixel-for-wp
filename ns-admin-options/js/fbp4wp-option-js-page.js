jQuery(document).ready(function($) {
	var themename = jQuery('#fbpx4wphiddthemename').val();
	//alert(themename);
	if (themename != null){
		jQuery.ajax({
			url : fbp4wprefcode.ajax_url,
			type : 'post',
			data : {
				action : 'fbp4wp_get_ref_id',
				themename : themename
			},
			success : function( response ) {
				//alert(response);
				$("#fbp4wplinkpremiumsidebar").attr("href", "http://www.nsthemes.com/product/facebook-conversion-pixel/?ref-ns="+response+"&campaign=sidebar&utm_source=Facebook Pixel%20Sidebar&utm_medium=Sidebar%20dentro%20settings&utm_campaign=Facebook Pixel%20Sidebar%20premium");
				$("#fbp4wplinkpremiumbannerino").attr("href", "http://www.nsthemes.com/product/facebook-conversion-pixel/?ref-ns="+response+"&campaign=bannerino&utm_source=Facebook Pixel%20Bannerino&utm_medium=Bannerino%20dentro%20settings&utm_campaign=Facebook Pixel%20Bannerino%20premium");
				$("#fbp4wplinkpremiumboxpremium").attr("href", "http://www.nsthemes.com/product/facebook-conversion-pixel/?ref-ns="+response+"&campaign=bannerone&utm_source=Facebook Pixel%20Bannerone&utm_medium=Bannerone%20dashboard&utm_campaign=Facebook Pixel%20Bannerone%20premium");
				$("#fbp4wplinkpremiumlinkpremium").attr("href", "http://www.nsthemes.com/product/facebook-conversion-pixel/?ref-ns="+response+"&campaign=linkpremium&utm_source=Facebook Pixel%20LinkPremium&utm_medium=LinkPremium%20dashboard&utm_campaign=Facebook Pixel%20LinkPremium%20premium");
			}
		}); //ajax
	}
})