<?php

get_header();

?>
<div id='content'>
    <section id='team-title'>
        <?php while (have_posts()) : the_post(); ?>
            <h2 class='team-title'><?php the_title(); ?></h2>
            <p class='paragraph'><?php the_field('text'); ?></p>
        <?php endwhile; ?>
        <div class='members'>
            <?php
            $homePageMembersList = new WP_Query(array('post_type' => 'member', 'posts_per_page' => -1));
            if (!$homePageMembersList->have_posts()) {
            ?> <p>No members found</p>
            <?php
            } ?>
            <?php
            while ($homePageMembersList->have_posts()) {
                $homePageMembersList->the_post();
                $value = get_field('team');
                if (is_array($value) && in_array('rockarollers', $value)) { ?>
                    <img class='member-foto' src='<?php the_field('foto'); ?>' />
                <?php
                }
                ?>
            <?php
            }
            ?>
        </div>
    </section>
</div>
<?php

get_footer();

?>