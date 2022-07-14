<?php
function bookstheme_menu(){
    $location = array(
    'primary' => 'my primary menu'
    );
    register_nav_menus($location);
}
add_action( 'init', 'bookstheme_menu');
function bookstheme_theme_support()
{
    add_theme_support('post-thumbnails');
}
add_action( 'after_setup_theme', 'bookstheme_theme_support' );

function bookstheme_register_styles()
{
    wp_enqueue_style('bookstheme_style', get_template_directory_uri() . '/style.css', array('bookstheme_bootstrap'), '1.0', 'all');
    wp_enqueue_style('bookstheme_bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'bookstheme_register_styles');


function bookstheme_register_scripts()
{
    wp_enqueue_script('bookstheme_jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '1.0',true);
    wp_enqueue_script('bookstheme_popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.0',true);
    wp_enqueue_script('bookstheme_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js', array(), '1.0',true);
    wp_enqueue_script('bookstheme_js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0',true);
}
add_action('wp_enqueue_scripts', 'bookstheme_register_scripts');
