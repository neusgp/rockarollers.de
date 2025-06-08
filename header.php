<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/latest/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
    <header id='header' class='flex-row-aligned'>
        <?php
        $logosList = new WP_Query(array('post_type' => 'logo', 'posts_per_page' => -1));
        if (!$logosList->have_posts()) {
        ?> <p>No members found</p>
        <?php
        } ?>
        <?php
        while ($logosList->have_posts()) {
            $logosList->the_post();
            $value = get_field('name');
            if ($value === 'rockarollers') { ?>
                <a class='logo' href='<?php the_field('link'); ?>'>
                    <img src='<?php the_field('logo'); ?>' high='160' width='160' alt='Rockarollers Logo' aria-label='Rockarollers Logo' />
                </a>
            <?php
            }
            ?>
        <?php
        }
        ?>

        <?php
        wp_nav_menu(array(
            'depth' => 1,
            'theme_location' => 'social',
            'menu_class' => 'social social-header menu flex-row gap-sm'
        ));
        ?>
        <nav>
            <?php
            wp_nav_menu(array(
                'depth' => 2,
                'theme_location' => 'header',
                'menu_class' => 'main-menu-header menu flex-row'
            ));
            ?>
            <p><i class='fa fa-bars hamburger-menu-icon'></i></p>
            <div class='mobile-menu'>
                <i class='fa fa-close close-button'></i>
                <?php
                wp_nav_menu(array(
                    'depth' => 1,
                    'theme_location' => 'mobile',
                    'menu_class' => 'main-menu-mobile menu flex-column'
                ));
                ?>
                <div class='flex-column gap-sm'>
                    <?php
                    wp_nav_menu(array(
                        'depth' => 1,
                        'theme_location' => 'footer',
                        'menu_class' => 'credits-menu-footer mobile-menu-credits menu flex-column gap-sm'
                    ));
                    ?>
                    <?php
                    wp_nav_menu(array(
                        'depth' => 1,
                        'theme_location' => 'presse',
                        'menu_class' => 'main-menu-footer menu mobile-menu-credits flex-column gap-sm'
                    ));
                    ?>
                </div>
            </div>
        </nav>
    </header>