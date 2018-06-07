<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Zenith
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
    
    <head>
        
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">

        <?php wp_head(); ?>
        
    </head>

    <body <?php body_class(); ?>>
        
        <?php do_action( 'zenith_body_start' ); ?>
        
        <div id="page" class="site">
            
            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'zenith' ); ?></a>

            <?php get_template_part( 'template-parts/navbar', get_theme_mod( ZENITH_OPTIONS::NAVBAR_STYLE, ZENITH_DEFAULTS::NAVBAR_STYLE ) ); ?>
            
            <?php if ( class_exists('WooCommerce') && get_theme_mod( ZENITH_OPTIONS::WOO_SLIDE_CART_TOGGLE, ZENITH_DEFAULTS::WOO_SLIDE_CART_TOGGLE ) ) { get_template_part( 'template-parts/cart-slide_in' ); } ?>

            <?php if ( get_theme_mod( ZENITH_OPTIONS::NAVBAR_STYLE, ZENITH_DEFAULTS::NAVBAR_STYLE ) == 'vertical' ) : ?>
                <div id="vertical-navbar-push" class="<?php echo get_theme_mod( ZENITH_OPTIONS::VERT_NAVBAR_DISPLAY_SETTING, ZENITH_DEFAULTS::VERT_NAVBAR_DISPLAY_SETTING ) == 'always'? 'expanded' : ''; ?>">
            <?php endif; ?>
            
            <div id="content" class="site-content">

                <?php do_action( 'zenith_custom_header' ); ?>