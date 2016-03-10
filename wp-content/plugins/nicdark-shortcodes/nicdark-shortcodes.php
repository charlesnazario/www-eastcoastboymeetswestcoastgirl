<?php
/*
Plugin Name:       NickDark Shortcodes
Description:       Custom shortcodes for wordpress theme.
Version:           1.0
Author:            Nicdark
Author URI:        http://www.nicdarkthemes.com/
License:           GPLv2 or later
*/

//translation
function nicdark_shortcodes_load_textdomain()
{
	load_plugin_textdomain("nicdark-shortcodes", false, dirname(plugin_basename(__FILE__)) . '/languages');
}
add_action('plugins_loaded', 'nicdark_shortcodes_load_textdomain');

//register custom post types
include 'cpt/locations.php';

//shortcodes
include ('shortcodes/divider_nd.php');
include ('shortcodes/service_horizontal_nd.php');
include ('shortcodes/gmaps_markers_nd.php');
include ('shortcodes/focus_image_nd.php');
include ('shortcodes/image_gallery_nd.php');
include ('shortcodes/focus_time_nd.php');
include ('shortcodes/focus_flip_nd.php');
include ('shortcodes/title_nd.php');
include ('shortcodes/posts_grid_nd.php');
include ('shortcodes/countdown_nd.php');
include ('shortcodes/button_icon_nd.php');
include ('shortcodes/service_horizontal_2_nd.php');
include ('shortcodes/testimonial_nd.php');
include ('shortcodes/price_vertical_nd.php');
include ('shortcodes/counter_nd.php');
include ('shortcodes/price_horizontal_nd.php');
include ('shortcodes/team_horizontal_nd.php');
include ('shortcodes/team_vertical_nd.php');
include ('shortcodes/focus_number_nd.php');

