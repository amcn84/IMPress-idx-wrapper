<?php
/*
Plugin Name: IMPress IDX Broker Wrapper Shortcode
Description: Use ['wrapper'] on a page to create a dynamic wrapper
Version: 1.0.1
Author: Allen M.
Contributors: allenm
License: GPLv2 or later
*/
function idxHeaders() {
	echo '<meta name="idx-robot">';
	echo "\r\n";
	echo '<meta name="robots" content="noindex,follow"/>';
	echo "\r\n";
}
add_action('wp_head','idxHeaders',1,1);
function dynWrapper_short_code() {
	echo "\r\n";
	echo '<div id="idxStart"></div>';
	echo "\r\n";
	echo '<div id="idxStop"></div>';
}
add_shortcode('wrapper','dynWrapper_short_code');
?>
