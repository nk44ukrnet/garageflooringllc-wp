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
    <a class="skip-link screen-reader-text"
       href="#primary"><?php esc_html_e('Skip to content', 'garageflooringllc'); ?></a>

    <header id="masthead" class="site-header">
        <div class="hb-container">
            <div class="site-line">

                <div class="site-line__side advantages">
                    <span><i class="fa-solid fa-check"></i> 110% Price Match Guarantee</span>
                    <span><i class="fa-solid fa-check"></i> Free Shipping</span>
                    <span><i class="fa-solid fa-check"></i> 30 Day Money Back Guarantee</span>
                </div>

                <div class="site-line__side">
                    <a href="tel:8009564301">
                        <i class="fa-solid fa-phone"></i> 800.956.4301
                    </a>
                    <a href="mailto:service@garageflooringllc.com">
                        <i class="fa-solid fa-envelope"></i> Email
                    </a>
                </div>
            </div>
            <div class="site-branding">
                <div class="site-branding__logo">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="site-branding__side">
                    <div class="site-branding__search">
                        <div class="simple-form">
                            <?php get_search_form(); ?>
                        </div>
                    </div>
                    <div class="site-branding__cart">
                        <a href="<?php echo wc_get_cart_url(); ?>"><i class="fa-solid fa-cart-shopping"></i>
                            <sup><?php echo WC()->cart->get_cart_contents_count(); ?></sup></a>
                    </div>
                </div>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu"
                        aria-expanded="false"><?php esc_html_e('☰ Website Menu', 'garageflooringllc'); ?></button>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id' => 'primary-menu',
                    )
                );
                ?>
            </nav><!-- #site-navigation -->
        </div> <!--.hb-container-->
    </header><!-- #masthead -->
