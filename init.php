<?php

// Initialisatie WebRTB CMS

function copyright() 
{
	echo '<!-- (c) 2010 - '.Date("Y").' '.CMS_NAME.' -->';
}

function footer_admin() 
{
    echo '&copy; '.CMS_AUTHOR.' '.Date("Y").' | '.CMS_NAME.' '.CMS_VERSION.' | Webontwikkeling door <a href="'.CMS_AUTHOR_URL.'">'.CMS_AUTHOR.'</a>';
}

function login_title()
{
	return "powerd by ".CMS_NAME;
}

function login_url()
{
	return CMS_AUTHOR_URL;
}

add_filter('admin_footer_text', 'footer_admin'); 
add_action('wp_head','copyright');
add_action('wp_footer','copyright');
add_action('admin_head','copyright');
add_action('login_head','copyright');
add_action('login_headertitle','login_title');
add_action('login_headerurl ','login_url');

?>