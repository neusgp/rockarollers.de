<?php

get_header();

?>
<div id='content'>
    <?php while (have_posts()) : the_post(); ?>
        <section id='banner'>
            <img class='background-image' src='<?php the_field('support_banner_image'); ?>' />
            <h2><?php the_title(); ?></h2>
        </section>
        <section id='sponsors-text'>
            <p class='paragraph'><?php the_field('support_text'); ?></p>
            <a class='email' href='mailto:<?php the_field('support_email'); ?>'></strong><?php the_field('support_email'); ?></a>
        </section>
    <?php endwhile; ?>
    <section id='sponsors-list'>
        <h2><?php the_field('support_sponsors_list_title'); ?></h2>
        <div class='sponsors-list'>
            <?php
            $homePageSponsorsList = new WP_Query(array('post_type' => 'sponsor', 'posts_per_page' => -1));
            if (!$homePageSponsorsList->have_posts()) {
            ?> <p>No sponsors found</p>
            <?php
            } ?>
            <?php
            while ($homePageSponsorsList->have_posts()) {
                $homePageSponsorsList->the_post(); ?>
                <img class='sponsor-logo' src='<?php the_field('logo'); ?>' />
            <?php
            }
            ?>
        </div>
    </section>
</div>
<?php

get_footer();

?>