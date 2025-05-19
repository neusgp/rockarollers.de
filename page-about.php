<?php

get_header();

?>
<div id='content'>
    <?php while (have_posts()) : the_post(); ?>
        <section id='banner'>
            <img class='background-image' src='<?php the_field('about_banner_image'); ?>' />
            <h2><?php the_title(); ?></h2>
        </section>
        <section id='about-roller-derby'>
            <h2><?php the_field('about_roller_derby_title'); ?></h2>
            <div class='about-roller-derby-content'>
                <div>
                    <p><?php the_field('about_roller_derby_text'); ?></p>
                    <div class='about-interesting-links'>
                        <a href=<?php the_field('interesting_link_1'); ?>> <img src='<?php the_field('interesting_link_1_image'); ?>' /></a>
                        <a href=<?php the_field('interesting_link_2'); ?>> <img src='<?php the_field('interesting_link_2_image'); ?>' /></a>
                    </div>
                </div>
                <img src='<?php the_field('about_roller_derby_image'); ?>' />
            </div>
        </section>
        <section id='about-rdk'>
            <h2><?php the_field('about_rdk_title'); ?></h2>
            <div class='about-rdk-content'>
                <?php echo do_shortcode('[modula id="4140"]'); ?>
                <p><?php the_field('about_rdk_text'); ?></p>
            </div>

        </section>
    <?php endwhile; ?>
</div>
<?php

get_footer();

?>