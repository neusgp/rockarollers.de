<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
    <header id='header'>
        <div></div>

        <?php
        wp_nav_menu(array(
            'depth' => 1,
            'theme_location' => 'header'
        ));
        ?>
        <?php
        wp_nav_menu(array(
            'depth' => 1,
            'theme_location' => 'social'
        ));
        ?>

    </header>