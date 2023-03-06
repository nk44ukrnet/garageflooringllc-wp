<?php

function theme_files()
{

    wp_register_script('swiper-js', get_theme_file_uri('/assets/script/vendor/swiper-bundle.min.js'), NULL, '1', false);
    wp_register_script('slinky-js', get_theme_file_uri('/assets/script/vendor/slinky.min.js'), NULL, '1', false);
    wp_register_script('main-js', get_theme_file_uri('/assets/script/main.js'), NULL, filemtime(get_template_directory() . '/assets/script/main.js'), true);

    wp_register_style('normalize', get_template_directory_uri() . '/assets/styles/vendor/normalize.min.css', NULL, '1', 'all');
    wp_register_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css', NULL, '1', 'all');
    wp_register_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;900&display=swap', NULL, '1', 'all');
    wp_register_style('swiper-style', get_template_directory_uri() . '/assets/styles/vendor/swiper-bundle.css', NULL, '1', 'all');
    wp_register_style('slinky-styles', get_template_directory_uri() . '/assets/styles/vendor/slinky.min.css', NULL, '1', 'all');
    wp_register_style('main-styles', get_template_directory_uri() . '/assets/styles/all.css', NULL, filemtime(get_template_directory() . '/assets/styles/all.css'), 'all');

    //scripts
    wp_enqueue_script('swiper-js');
    wp_enqueue_script('slinky-js');
    wp_enqueue_script('main-js');

    //styles
    wp_enqueue_style('normalize');
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('swiper-style');
    wp_enqueue_style('google-fonts');
    wp_enqueue_style('slinky-styles');
    wp_enqueue_style('main-styles');


    wp_localize_script('main-university-js', 'universityData', array(
        'root_url' => get_site_url(),
        'nonce' => wp_create_nonce('wp_rest')
    ));
}

add_action('wp_enqueue_scripts', 'theme_files');