<?php
add_action('wp_enqueue_scripts', 'enqueue_default_scripts');
add_action('wp_enqueue_scripts', 'enqueue_default_styles');

//add styles
add_action('wp_enqueue_scripts', 'enqueue_parent_styles');
function enqueue_parent_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

function enqueue_default_scripts()
{

    wp_enqueue_script('default-jquery');
    // if we didn't register it, we HAVE to set the $src parameter! 
    wp_register_script(
        'default-jquery',
        "https://code.jquery.com/jquery-3.6.4.min.js",
        '',
        '',
        true
    );
    // if we registered the style before: 
    wp_enqueue_script('default-scripts');
    // if we didn't register it, we HAVE to set the $src parameter! 
    wp_register_script(
        'default-scripts',
        get_stylesheet_directory_uri() . '/assets/js/script.min.js',
        ['default-jquery'],
        '',
        true
    );
}

function enqueue_default_styles()
{
    // if we registered the style before: 
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('default-styles');
    // if we didn't register it, we HAVE to set the $src parameter! 
    wp_register_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css'

    );
    wp_register_style(
        'default-styles',
        get_stylesheet_directory_uri() . '/assets/css/all.min.css',
        ['font-awesome']
    );
}
