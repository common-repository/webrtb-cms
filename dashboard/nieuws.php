<?php

// WebRTB Dashboard nieuws widget

function webrtb_nieuws_dashboard_widget_function() 
{
	$rss = fetch_feed( "http://www.webrtb.com/category/nieuws/feed/" );
	 
	if ( is_wp_error($rss) ) {
		if ( is_admin() || current_user_can('manage_options') ) {
		    echo '<p>';
			printf(__('<strong>RSS Error</strong>: %s'), $rss->get_error_message());
			echo '</p>';
		}
		return;
	}
	 
	if ( !$rss->get_item_quantity() ) {
		 echo '<p>Momenteel geen nieuws beschikbaar.</p>';
		 $rss->__destruct();
		 unset($rss);
		 return;
	}
	 
	echo "<ul>\n";
	 
	if ( !isset($items) )
		 $items = 6;
	 
	foreach ( $rss->get_items(0, $items) as $item ) 
	{
        $publisher = '';
        $site_link = '';
        $link = '';
        $content = '';
        $date = '';
        $link = esc_url( strip_tags( $item->get_link() ) );
		$title = $item->get_title();
 
        $content = $item->get_description();
 
        echo "<li><a href='$link' target='_blank'>$title</a> - $content</li>\n";
	}
	 
	echo "</ul>\n";
	$rss->__destruct();
	unset($rss);
}

function webrtb_nieuws_add_dashboard_widget() 
{
     wp_add_dashboard_widget('webrtb_nieuws_dashboard_widget', 'WebRTB Nieuws', 'webrtb_nieuws_dashboard_widget_function');
}

add_action('wp_dashboard_setup', 'webrtb_nieuws_add_dashboard_widget'); 

?>