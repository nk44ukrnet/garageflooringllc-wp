<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package garageflooringllc
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site hb-wrapper">

    <div class="hb-header-front">
        <div class="hb-container1">
            <div class="hb-header-front__holder">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="hb-header-front__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gfllc-logo-wh.png"
                         alt="Garageflooringllc" width="302">
                </a>
                <nav>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-6',
                            'menu_id' => 'primary-menu',
                        )
                    );
                    ?>
                </nav>
            </div>
        </div>
    </div>