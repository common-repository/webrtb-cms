<?php

// WebRTB cms pages

function webrtb_Page()
{
	if (!current_user_can('read'))  {
		wp_die( __('U heeft geen rechten om bij deze pagina te kunnen.') );
	}
	$current_theme = get_theme(get_option("current_theme"));
	$screenshot = $current_theme["Theme Root URI"]."/".$current_theme["Template"]."/".$current_theme["Screenshot"];
	echo '<div class="wrap">';
	echo '<div id="webrtb-32-icon"></div>';
	echo '<h2>WebRTB CMS Informatie</h2>';
	echo '<p>Webrtb cms systeem informatie:</p>';
	echo '<table border="0" valign="top" align="left">
		<tr><td><b>Website naam:</b></td><td>'.get_bloginfo("name").'</td></tr>
		<tr><td><b>Website slagzin:</b></td><td>'.get_bloginfo("description").'</td></tr>
		<tr><td><b>Website URL:</b></td><td>'.get_bloginfo("url").'</td></tr>
		<tr><td><b>Webmaster e-mail:</b></td><td>'.get_bloginfo("admin_email").'</td></tr>
		<tr><td><b>CMS versie:</b></td><td>'.get_bloginfo("version").'</td></tr>
		<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><td><b>Thema naam:</b></td><td>'.$current_theme["Name"].'</td></tr>
		<tr><td><b>Thema beschrijving:</b></td><td>'.$current_theme["Description"].'</td></tr>
		<tr><td><b>Thema versie:</b></td><td>'.$current_theme["Version"].'</td></tr>
		<tr><td><b>Screenshot:</b></td><td><img border="0" width="300" src="'.$screenshot.'" /></td></tr>
		</table>';
	echo '</div>';
}

function webrtb_Menu() 
{
    add_menu_page( 'Algemeen', 'WebRTB', 'read', 'webrtb-section', 'webrtb_Page', 'dashicons-admin-generic' );
	add_submenu_page( 'webrtb-section', 'Informatie', 'Informatie', 'read', 'webrtb-section', 'webrtb_Page');
}

add_action('admin_menu', 'webrtb_Menu');

?>