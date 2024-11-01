<?php

// WebRTB cms pages

function webrtb_support_Page()
{
	if (!current_user_can('read'))  {
		wp_die( __('U heeft geen rechten om bij deze pagina te kunnen.') );
	}
	$logoPath = get_bloginfo("url")."/wp-content/plugins/webrtb-cms/images/logo1.png";
	echo '<div class="wrap">';
	echo '<div id="webrtb-32-icon"></div>';
	echo '<h2>WebRTB CMS Support &amp; Contact</h2>';
	echo '<p>Voor support of informatie kunt u contact openmen met WebRTB via de volgende adressen</p>';
	echo '<table border="0" valign="top" align="left">
		<tr><td valign="top"><b>Adres:</b></td><td>De Pinckart 54<br />5674CC Nuenen</td></tr>
		<tr><td valign="top"><b>Postadres:</b></td><td>Postbus 237<br />5670AE Nuenen</td></tr>
		<tr><td><b>Telefoon:</b></td><td>040 - 711 30 46</td></tr>
		<tr><td><b>Fax:</b></td><td>040 - 744 05 51</td></tr>
		<tr><td><b>E-mail:</b></td><td><a href="mailto:info@webrtb.com">info@webrtb.com</a></td></tr>
		<tr><td><b>Website:</b></td><td><a href="http://www.webrtb.com" target="_blank">www.webrtb.com</a></td></tr>
		<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><td><b>KvK nummer:</b></td><td>51134586</td></tr>
		<tr><td><b>Btw nummer:</b></td><td>NL217027660B01</td></tr>
		<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
		<tr><td colspan="2"><img border="0" src="'.$logoPath.'" /></td></tr>
		</table>';
	echo '</div>';
}

function webrtb_support_Menu() 
{
	add_submenu_page( 'webrtb-section', 'Support &amp; Contact', 'Support &amp; Contact', 'read', 'webrtb-section-support', 'webrtb_support_Page');
}

add_action('admin_menu', 'webrtb_support_Menu');

?>