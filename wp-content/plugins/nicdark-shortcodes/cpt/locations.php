<?php


///////////////////////////////////////////////////LOCATIONS///////////////////////////////////////////////////////////////
function nicdark_create_post_type_locations() {
    register_post_type('locations',
        array(
            'labels' => array(
                'name' => __('Locations', 'nicdark-shortcodes'),
                'singular_name' => __('Locations', 'nicdark-shortcodes')
            ),
            'public' => false,
            'show_ui' => true,
            'show_in_nav_menus' => false,
            'has_archive' => false,
            'exclude_from_search' => true,
            'rewrite' => array('slug' => 'locations'),
            'supports' => array('title', 'thumbnail')
        )
    );
}
add_action('init', 'nicdark_create_post_type_locations');
