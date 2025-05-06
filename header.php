<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
    <header id='header'>
        <img class='logo' src='http://rockarollers.local/wp-content/uploads/2014/12/rockarollers_logo.png' high='160' width='160' alt='Rockarollers Logo' aria-label='Rockarollers Logo' />
        <?php
        wp_nav_menu(array(
            'depth' => 1,
            'theme_location' => 'social',
            'menu_class' => 'social social-header menu'
        ));
        ?>
        <?php
        wp_nav_menu(array(
            'depth' => 1,
            'theme_location' => 'header',
            'menu_class' => 'main-menu-header menu'
        ));
        ?>
    </header>