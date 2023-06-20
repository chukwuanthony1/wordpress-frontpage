<?php

include_once "src/css_js.php";
include_once "inc/functions/custom_walkers.php";

#add custom logo
add_theme_support('custom-logo');
function theme_custom_logo_setup()
{
    $defaults = array(
        'height'               => 400,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'theme_custom_logo_setup');


#Add custom Menus
function register_my_menus()
{
    register_nav_menus(
        array(
            'header' => __('Header'),
            'footer_trading' => __('Footer Trading'),
            'footer_resources' => __('Footer Resources'),
            'footer_affiliate' => __('Footer Affiliate'),
            'footer_learn' => __('Footer Learn'),
            'footer_about' => __('Footer About'),
            'footer_help' => __('Footer Help'),
        )
    );
}
add_action('init', 'register_my_menus');
