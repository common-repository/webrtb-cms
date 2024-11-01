<?php

// WebRTB remove Dashboard widgets

function remove_dashboard_widgets() 
{
	global $wp_meta_boxes;

	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
} 

add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );

?>