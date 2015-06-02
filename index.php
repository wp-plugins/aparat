<?php

	/*
		Plugin Name: Aparat
		Plugin URI: https://wordpress.org/plugins/aparat/
		Description: نمایش ویدئوی آپارات در مطالب توسط شورت‌کد ...
		Version: 1.1
		Author: Nima Saberi
		Author URI: http://ideyeno.ir
		
	*/

	// [aparat id="c4VeZ"]
	// [aparat id="c4VeZ" width="600" height="450" style="margin: 15px; padding: 7px"]

	function aparat($atts) {
		extract( shortcode_atts( array(
			'id' => '',
			'width' => '100%',
			'height' => 450,
			'style' => 'margin: 15px 1px 10px 1px;'
		), $atts ) );
		return "<center style='{$style}'><iframe src='http://www.aparat.com/video/video/embed/videohash/{$id}/vt/frame' width='{$width}' height='{$height}' allowfullscreen='true' style='border:none!important'></iframe></center>";
	}
	add_shortcode( 'aparat', 'aparat' );
	
?>