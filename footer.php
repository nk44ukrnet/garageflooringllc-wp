<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package garageflooringllc
 */

?>

<?php $footer_start_additional_scripts = get_field('footer_start_additional_scripts', 'options'); ?>
<?php if (!empty($footer_start_additional_scripts)) { ?>
    <?php echo $footer_start_additional_scripts; ?>
<?php } ?>
<footer id="colophon" class="site-footer">
    <!--    <div class="footer-badges">-->
    <!--        <div class="hb-container">-->
    <!--            <img src="-->
    <?php //echo get_template_directory_uri(); ?><!--/assets/img/footer-badge1.jpg" alt="Badge"-->
    <!--                 loading="lazy">-->
    <!--            <img src="-->
    <?php //echo get_template_directory_uri(); ?><!--/assets/img/footer-badge2.jpg" alt="Badge"-->
    <!--                 loading="lazy">-->
    <!--            <img src="-->
    <?php //echo get_template_directory_uri(); ?><!--/assets/img/footer-badge3.jpg" alt="Badge"-->
    <!--                 loading="lazy">-->
    <!--        </div>-->
    <!--    </div>-->
    <?php if (have_rows('footer_badges', 'options')) {
        ?>
        <div class="footer-badges">
            <div class="hb-container">
                <?php
                while (have_rows('footer_badges', 'options')) {
                    the_row();
                    $sub_field_img = get_sub_field('image');
                    $sub_field_alt = get_sub_field('alt_text');
                    ?>
                    <?php if (!empty($sub_field_img)) { ?>
                        <img src="<?php echo $sub_field_img; ?>"
                             alt="<?php esc_html_e($sub_field_alt, 'garageflooringllc'); ?>" loading="lazy">
                    <?php } ?>
                <?php } ?>
            </div> <!--/hb-container-->
        </div> <!--/footer-badges-->
    <?php } ?>
    <?php $footer_text_line = get_field('footer_text_line', 'options'); ?>
    <?php if (!empty($footer_text_line)) { ?>
        <div class="footer-line text-center">
            <div class="hb-container">
                <?php echo $footer_text_line; ?>
            </div>
        </div>
    <?php } ?>
    <div class="hb-container">
        <div class="site-footer__holder">
            <?php $footer_address = get_field('footer_address', 'options'); ?>
            <?php if (!empty($footer_address)) { ?>
                <div class="site-footer__item footer-address">
                    <div class="cell">
                        <?php echo $footer_address; ?>
                    </div>
                </div>
            <?php } ?>

            <?php
            //footer menu 1
            $enable_footer_menu_1 = get_field('enable_footer_menu_1', 'options');
            $footer_menu_1_title = get_field('footer_menu_1_title', 'options');

            //footer menu 2
            $enable_footer_menu_2 = get_field('enable_footer_menu_2', 'options');
            $footer_menu_2_title = get_field('footer_menu_2_title', 'options');

            //footer menu 3
            $enable_footer_menu_3 = get_field('enable_footer_menu_3', 'options');
            $footer_menu_3_title = get_field('footer_menu_3_title', 'options');

            //footer menu 4
            $enable_footer_menu_4 = get_field('enable_footer_menu_4', 'options');
            $footer_menu_4_title = get_field('footer_menu_4_title', 'options');
            ?>

            <?php if (!empty($enable_footer_menu_1)) { ?>
                <div class="site-footer__item footer-menu">
                    <?php if (!empty($footer_menu_1_title)) { ?>
                        <h4 class="footer-menu__heading"><?php echo $footer_menu_1_title; ?></h4>
                    <?php } ?>

                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'menu-2',
                            'container' => 'ul',
                        )
                    ); ?>
                </div>
            <?php } ?>

            <?php if (!empty($enable_footer_menu_2)) { ?>
                <div class="site-footer__item footer-menu">
                    <?php if (!empty($footer_menu_2_title)) { ?>
                        <h4 class="footer-menu__heading"><?php echo $footer_menu_2_title; ?></h4>
                    <?php } ?>

                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'menu-3',
                            'container' => 'ul',
                        )
                    ); ?>
                </div>
            <?php } ?>

            <?php if (!empty($enable_footer_menu_3)) { ?>
                <div class="site-footer__item footer-menu">
                    <?php if (!empty($footer_menu_3_title)) { ?>
                        <h4 class="footer-menu__heading"><?php echo $footer_menu_3_title; ?></h4>
                    <?php } ?>

                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'menu-4',
                            'container' => 'ul',
                        )
                    ); ?>
                </div>
            <?php } ?>

            <?php if (!empty($enable_footer_menu_4)) { ?>
                <div class="site-footer__item footer-menu">
                    <?php if (!empty($footer_menu_4_title)) { ?>
                        <h4 class="footer-menu__heading"><?php echo $footer_menu_4_title; ?></h4>
                    <?php } ?>

                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'menu-5',
                            'container' => 'ul',
                        )
                    ); ?>
                </div>
            <?php } ?>

        </div> <!--/.site-footer__holder-->

        <?php $footer_social_html = get_field('footer_social_html', 'options'); ?>
        <?php $footer_accept_payment_icons = get_field('footer_accept_payment_icons', 'options'); ?>
        <?php $footer_rating_html = get_field('footer_rating_html', 'options'); ?>

        <?php if (
            !empty($footer_social_html)
            || !empty($footer_accept_payment_icons)
            || !empty($footer_rating_html)
        ) { ?>
            <div class="site-footer__links">

                <?php if (!empty($footer_social_html)) { ?>
                    <div class="site-footer__social">
                        <?php echo $footer_social_html; ?>
                    </div>
                <?php } ?>

                <?php if (!empty($footer_accept_payment_icons)) { ?>
                    <div class="site-footer__accept">
                        <?php echo $footer_accept_payment_icons; ?>
                    </div>
                <?php } ?>

                <?php if (!empty($footer_rating_html)) { ?>
                    <div class="site-footer__rating">
                        <?php echo $footer_rating_html; ?>
                    </div>
                <?php } ?>

            </div> <!--/.site-footer-links-->
        <?php } ?>

    </div>

    <?php $footer_copyright_text = get_field('footer_copyright_text', 'options'); ?>

    <?php if( !empty($footer_copyright_text) ) { ?>
        <div class="site-footer__copyright">
            <div class="hb-container">
                &copy; 2011 - <?php echo date('Y'); ?>
                <?php echo $footer_copyright_text; ?>
            </div>
        </div>
    <?php } ?>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
