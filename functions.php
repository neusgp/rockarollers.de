<?php

function rockarollers2025_files()
{
    //load css from build folder
    wp_enqueue_style('rockarollers2025_styles', get_theme_file_uri('/build/index.css'));
}
add_action('wp_enqueue_scripts', 'rockarollers2025_files');


function rockarollers2025_features()
{
    //register main menu
    register_nav_menu('header', 'Main');
    register_nav_menu('social', 'Social');
    register_nav_menu('links', 'Interesting Links');
    register_nav_menu('presse', 'Presse');
    register_nav_menu('footer', 'Footer');
}

add_action('after_setup_theme', 'rockarollers2025_features');
