<?php
/*
Plugin Name: Piraten-Tools / Next Piratentreff
Plugin URI: https://github.com/PiratenGP/PT-nextpiratentreff
Description: Piraten-Tools / Next Piratentreff
Version: 1.0.1
Author: @stoppegp
Author URI: http://stoppe-gp.de
License: CC-BY-SA 3.0
*/

global $PT_infos;
$PT_infos[] = array(
	'name'		=>		'Next Piratentreff',
	'desc'		=>		'Aus einem iCal-Kalender wird der nächste Termin gesucht, der einen bestimmten Suchbegriff im Titel enthält. Das Ergebnis kann dann per Shortcode eingebaut werden.
Dadurch kann man z.B. automatisiert den nächsten Stammtisch-Termin ausgeben.
(Anleitung tbd)',
);

require('mainmenu.php');

if (!function_exists("piratentools_main_menu")) {
	add_action( 'admin_menu', 'piratentools_main_menu');
	function piratentools_main_menu() {
		add_menu_page( "Piraten-Tools", "Piraten-Tools", 0, "piratentools" , "PT_main_menu");
	}
}

add_action( 'admin_menu', 'PT_nextpiratentreff_main_menu' );
function PT_nextpiratentreff_main_menu() {
	add_submenu_page( "piratentools", "Next Piratentreff", "Next Piratentreff", "manage_options", "pt_nextpiratentreff", array("PT_nextpiratentreff", "adminmenu") );
}

require('nextpiratentreff/nextpiratentreff.php');
?>