<?php

get_header();

?>
<div id='content'>
    <?php while (have_posts()) : the_post(); ?>
        <section id='banner'>
            <img class='background-image' src='<?php the_field('teams_banner_image'); ?>' />
            <h2><?php the_title(); ?></h2>
        </section>
        <section id='team-links'>
            <div class='team-links'>
                <a class='team-link' href='<?php the_field('rockarollers_link'); ?>'>
                    <img class='background-image' src='<?php the_field('rockarollers_link_image'); ?>' />
                    <p><?php the_field('rockarollers_link_title'); ?></p>
                </a>
                <a class='team-link' href='<?php the_field('rockabillies_link'); ?>'>
                    <img class='background-image' src='<?php the_field('rockabillies_link_image'); ?>' />
                    <p><?php the_field('rockabillies_link_title'); ?></p>
                </a>
                <a class='team-link' href='<?php the_field('trainers_link'); ?>'>
                    <img class='background-image' src='<?php the_field('trainers_link_image'); ?>' />
                    <p><?php the_field('trainers_link_title'); ?></p>
                </a>
                <a class='team-link' href='<?php the_field('officials_link'); ?>'>
                    <img class='background-image' src='<?php the_field('officials_link_image'); ?>' />
                    <p><?php the_field('officials_link_title'); ?></p>
                </a>
            </div>

        </section>
    <?php endwhile; ?>
</div>
<?php

get_footer();

?>