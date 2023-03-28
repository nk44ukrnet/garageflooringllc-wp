<?php
if(function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Options',
        'menu_slug'     => 'theme-general-settings',
        'redirect'      => false
    ]);

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));

    add_filter('acf/settings/save_json', function() {
        return get_stylesheet_directory() . '/acf-json';
    });

    add_filter('acf/settings/load_json', function($paths) {
        return get_stylesheet_directory() . '/acf-json';
    });

}