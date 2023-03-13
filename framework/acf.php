<?php
if(function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Options',
        'menu_slug'     => 'theme-general-settings',
        'redirect'      => false
    ]);

    add_filter('acf/settings/save_json', function() {
        return get_stylesheet_directory() . '/acf-json';
    });

    add_filter('acf/settings/load_json', function($paths) {
        return get_stylesheet_directory() . '/acf-json';
    });

}