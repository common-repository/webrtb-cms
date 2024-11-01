<?php

// CSS style sheets & fixes WebRTB CMS

function my_wp_admin_css() 
{
	wp_register_style( 'my_wp_admin_css', get_bloginfo("url").'/wp-content/plugins/webrtb-cms/css/wp-admin.css');
	wp_enqueue_style( 'my_wp_admin_css' );
	my_shortcut_icon();
}

function my_login_css() 
{
	wp_register_style( 'my_login_css', get_bloginfo("url").'/wp-content/plugins/webrtb-cms/css/wp-login.css');
	wp_enqueue_style( 'my_login_css' );
	my_shortcut_icon();
}

function my_shortcut_icon()
{
	echo '<link rel="shortcut icon" href="'.get_bloginfo("url").'/wp-content/plugins/webrtb-cms/images/icon32.png" />';
}

add_action('admin_head','my_wp_admin_css');
add_action('login_head','my_login_css');

?>