<?php
/*
Plugin Name: IMPress IDX Broker Wrapper Shortcode
Description: Use [wrapper] on a page to create a dynamic wrapper
Version: 1.0.0
Author: Allen McNichols
Contributors: IDX, LLC
License: GPLv2 or later
*/
function dynWrapper_short_code() {
	return '<div id="idxStart"></div><div id="idxStop"></div>';
}
add_shortcode('wrapper','dynWrapper_short_code');
?>
