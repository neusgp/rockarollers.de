<footer class='flex-column'>
    <div class='menu-footer flex-row gap'>
        <div class='logo-container flex-row gap'>
            <?php
            $footerLogosList = new WP_Query(array('post_type' => 'logo', 'posts_per_page' => -1));
            if (!$footerLogosList->have_posts()) {
            ?> <p>No members found</p>
            <?php
            } ?>
            <?php
            while ($footerLogosList->have_posts()) {
                $footerLogosList->the_post();
                $value = get_field('name');
                if ($value === 'wftda' || $value === 'ssc') { ?>
                    <img class='footer-logo' alt='<?php the_field('name'); ?>' src='<?php the_field('logo'); ?>' />
                <?php
                }
                ?>
            <?php
            }
            ?>
        </div>
        <div class='menu-section-footer flex-column gap'>
            <h3>Kontakt</h3>
            <?php
            $kontakt_page_content = get_page_by_path('kontakt');
            if ($kontakt_page_content) {
                echo apply_filters('the_content', do_blocks($kontakt_page_content->post_content));
            }
            ?>
        </div>
        <div class='menu-section-footer flex-column gap mobile-hide'>
            <h3>Interesting Links</h3>
            <?php
            wp_nav_menu(array(
                'depth' => 1,
                'theme_location' => 'links',
                'menu_class' => 'main-menu-footer menu'
            ));
            ?>
        </div>
        <div class='menu-section-footer flex-column gap mobile-hide'>
            <h3>Presse</h3>
            <?php
            wp_nav_menu(array(
                'depth' => 1,
                'theme_location' => 'presse',
                'menu_class' => 'main-menu-footer menu'
            ));
            ?>
        </div>
        <div class='menu-section-footer flex-column gap mobile-hide'>
            <h3>Social</h3>
            <?php
            wp_nav_menu(array(
                'depth' => 1,
                'theme_location' => 'social',
                'menu_class' => 'social menu flex-row gap-sm'
            ));
            ?>
        </div>

    </div>
    <div class=' credits-footer flex-row'>
        <p>© 2025 Roller Derby Karlsruhe</p>
        <?php
        wp_nav_menu(array(
            'depth' => 1,
            'theme_location' => 'footer',
            'menu_class' => 'credits-menu-footer menu flex-row gap mobile-hide'

        ));
        ?>
    </div>
</footer>

<!-- wp will use this to add wp stuff like the admin bar. -->
<?php wp_footer(); ?>
</body>

</html>