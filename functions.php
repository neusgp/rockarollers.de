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
    register_nav_menu('header', '2025 Header');
    register_nav_menu('social', '2025 Social');
}

add_action('after_setup_theme', 'rockarollers2025_features');
