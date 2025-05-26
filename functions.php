<?php

function rockarollers2025_files()
{
    //loading js from build folder
    wp_enqueue_script('rockarollers2025-js', get_theme_file_uri('/build/index.js'), array(), null, true);
    //loading css from build folder
    wp_enqueue_style('rockarollers2025_styles', get_theme_file_uri('/build/index.css'));
}
add_action('wp_enqueue_scripts', 'rockarollers2025_files');


function rockarollers2025_features()
{
    register_nav_menu('header', 'Main');
    register_nav_menu('social', 'Social');
    register_nav_menu('links', 'Interesting Links');
    register_nav_menu('presse', 'Presse');
    register_nav_menu('footer', 'Footer');
}

add_action('after_setup_theme', 'rockarollers2025_features');

function member_post_types() {}

function rockarollers2025_post_types()
{
    register_post_type('event', array(
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add new Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar'
    ));
    register_post_type('member', array(
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Members',
            'add_new_item' => 'Add new Member',
            'edit_item' => 'Edit Member',
            'all_items' => 'All Members',
            'singular name' => 'Member'
        ),
        'menu_icon' => 'dashicons-groups'
    ));
    register_post_type('sponsor', array(
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Sponsors',
            'add_new_item' => 'Add new Sponsor',
            'edit_item' => 'Edit Sponsor',
            'all_items' => 'All Sponsors',
            'singular name' => 'sponsor'
        ),
        'menu_icon' => 'dashicons-awards'
    ));
}

add_action('init', 'rockarollers2025_post_types');
