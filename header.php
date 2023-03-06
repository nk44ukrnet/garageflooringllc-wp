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

        <div class="site-line">
            <div class="hb-container">
                <div class="site-line__side advantages">
                    <span><i class="fa-solid fa-check"></i> Free Shipping</span>
                    <span><i class="fa-solid fa-check"></i> 110% Price Match Guarantee</span>
                    <span><i class="fa-solid fa-check"></i> 30 Day Money Back Guarantee</span>
                </div>
                <div class="site-line__side">
                    <?php
                    $my_account_url = get_permalink(get_option('woocommerce_myaccount_page_id'));
                    ?>
                    <a href="<?php echo $my_account_url; ?>">Account</a>
                    <?php
                    if (is_user_logged_in()) {
                        echo '<a href="' . wp_logout_url(home_url()) . '">' . esc_html('Log Out', 'garageflooringllc') . '</a>';
                    } else {
                        ?>
                        <a href="<?php echo $my_account_url; ?>"> <?php echo esc_html('Login', 'garageflooringllc') ?></a>
                        <?php
                    }
                    ?>
                    <a href="<?php echo wc_get_cart_url(); ?>">Cart
                        (<?php echo WC()->cart->get_cart_contents_count(); ?>)</a>
                </div>
            </div>
        </div>

        <div class="hb-container">
            <div class="site-branding">
                <div class="site-branding__logo">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="site-branding__side">
                    <div class="site-branding__search">
                        <?php get_search_form(); ?>

                        <button class="mob-menu-trigger"><i class="fa-solid fa-bars"></i></button>
                    </div>
                    <div class="site-branding__contacts">
                        <em>Questions?</em>
                        <a href="tel:8009564301"><i class="fa-solid fa-mobile-screen"></i> 800.956.4301</a>
                        <a href="mailto:service@garageflooringllc.com"><i class="fa-regular fa-envelope"></i> Email</a>
                        <a href="#!"><i class="fa-regular fa-comments"></i> Live Chat</a>
                    </div>
                    <nav class="site-branding__nav main-navigation" id="site-navigation">
<!--                        <button class="menu-toggle" aria-controls="primary-menu"-->
<!--                                aria-expanded="false">--><?php //esc_html_e('☰ Website Menu', 'garageflooringllc'); ?><!--</button>-->
                        <?php
                        //desktop Menu
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'menu_id' => 'primary-menu',
                            )
                        );
                        ?>
                    </nav>
                    <nav class="slinky-mobile-menu">
                        <button class="close-slinky-menu">&times;</button>
                        <?php
                        // Mobile menu
                        wp_nav_menu( [
                            'menu'              => 'header-menu',
                            'theme_location'    => 'menu-1',
                            'container'         => 'div',
                            'container_class'   => 'mobile-menu slinky-menu',
                            'container_id'      => 'primary-menu-slinky',
                            'menu_class'        => 'active'
                        ] );
                        ?>
                    </nav>
                </div>
            </div><!-- .site-branding -->
        </div> <!--.hb-container-->
        <div class="site-header__aftertext text-light text-center">
            <div class="hb-container">
                Garage Flooring, Expert Advice, Free Shipping, Samples & the Lowest Price Guaranteed!
            </div>
        </div>
    </header><!-- #masthead -->
