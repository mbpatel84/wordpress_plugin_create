<?php
/*
*Plugin Name: Basic Plugin
*Plugin URL : http://google.com
*Author: Mittal Patel
*Author URI: http://mittalpatel.com
*Version:1.0
*License: GPLv2
*Description: Job Listing
*/

function dwwp_remove_dashboard_widgets() {
	remove_meta_box( 'dashboard_primary', 'dashboard', 'post_container_1' );
}
add_action( 'admin_init', 'dwwp_remove_dashboard_widgets' );