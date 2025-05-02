<footer>
    <div class='menu-footer'>
        <img class='wftda-logo' src='https://rockarollers.de/wp-content/uploads/2015/11/WFTDA_logo.png' width='132' alt='WFTDA Logo' aria-label='Rockarollers Logo' />
        <div class='menu-section-footer'>
            <h3>Kontakt</h3>
            <?php
            $kontakt_page_content = get_page_by_path('kontakt');
            if ($kontakt_page_content) {
                echo apply_filters('the_content', do_blocks($kontakt_page_content->post_content));;
            }
            ?>
        </div>
        <div class='menu-section-footer'>
            <h3>Interesting Links</h3>
            <?php
            wp_nav_menu(array(
                'depth' => 1,
                'theme_location' => 'links',
                'menu_class' => 'main-menu-footer menu'
            ));
            ?>
        </div>
        <div class='menu-section-footer'>
            <h3>Presse</h3>
            <?php
            wp_nav_menu(array(
                'depth' => 1,
                'theme_location' => 'presse',
                'menu_class' => 'main-menu-footer menu'
            ));
            ?>
        </div>
        <div class='menu-section-footer'>
            <h3>Social</h3>
            <?php
            wp_nav_menu(array(
                'depth' => 1,
                'theme_location' => 'social',
                'menu_class' => 'social menu'
            ));
            ?>
        </div>
    </div>
    <div class='credits-footer'>
        <p>© 2025 Neus Garcia für Rockarollers</p>
        <?php
        wp_nav_menu(array(
            'depth' => 1,
            'theme_location' => 'footer',
            'menu_class' => 'credits-menu-footer menu'

        ));
        ?>
    </div>
</footer>

<!-- wp will use this to add wp stuff like the admin bar. -->
<?php wp_footer(); ?>
</body>

</html>