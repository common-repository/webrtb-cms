<?php

/*
Plugin Name: WebRTB Cms
Plugin URI: http://www.webrtb.com
Description: Maakt van Wordpress een WebRTB Cms.
Author: WebRTB
Author URI: http://www.webrtb.com
Version: 3.3
*/

include "config.php"; //get all defines

include "init.php"; // Initialisatie WebRTB CMS

include "css.php"; // CSS style sheets & fixes WebRTB CMS

include "pages/page.php"; // WebRTB cms pages

include "dashboard/dashboard.php" // WebRTB Dashboard widgets
?>