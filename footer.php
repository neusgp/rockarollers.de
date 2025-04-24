<footer>
    <div>
        <div>
            <h3>Kontakt</h3>
            <?php
            $kontakt_page_content = get_page_by_path('kontakt');
            if ($kontakt_page_content) {
                echo apply_filters('the_content', do_blocks($kontakt_page_content->post_content));;
            }
            ?>
        </div>
        <div>
            <h3>Interesting Links</h3>
            <?php
            wp_nav_menu(array(
                'depth' => 1,
                'theme_location' => 'links'
            ));
            ?>
        </div>
        <div>
            <h3>Presse</h3>
            <?php
            wp_nav_menu(array(
                'depth' => 1,
                'theme_location' => 'presse'
            ));
            ?>
        </div>
        <div>
            <h3>Social</h3>
            <?php
            wp_nav_menu(array(
                'depth' => 1,
                'theme_location' => 'social'
            ));
            ?>
        </div>
    </div>
    <div>
        <p>© 2025 Neus Garcia für Rockarollers</p>
        <?php
        wp_nav_menu(array(
            'depth' => 1,
            'theme_location' => 'footer'
        ));
        ?>
    </div>
</footer>

<!-- wp will use this to add wp stuff like the admin bar. -->
<?php wp_footer(); ?>
</body>

</html>