<?php

get_header();

?>
<div id='content'>
    <?php while (have_posts()) : the_post(); ?>
        <section id='banner'>

            <img class='background-image' src='<?php the_field('mitmachen_banner_image'); ?>' />
            <h2><?php the_title(); ?></h2>
        </section>
        <section id='newbiekurs'>
            <div>
                <div>
                    <h2><?php the_field('mitmachen_newbiekurs_title'); ?></h2>
                    <p><?php the_field('mitmachen_newbiekurs_text'); ?></p>
                    <a href='<?php the_field('mitmachen_newbiekurs_button_link'); ?>' class='link-button'><?php the_field('mitmachen_newbiekurs_button_label'); ?></a>
                </div>
                <img src='<?php the_field('mitmachen_newbiekurs_image'); ?>' />
            </div>
            <div>
                <h2><?php the_field('mitmachen_trainings_title'); ?> </h2>
                <p><?php the_field('mitmachen_trainings_text'); ?></p>
                <a href='<?php the_field('mitmachen_trainings_button_link'); ?>' class='link-button'><?php the_field('mitmachen_trainings_button_label'); ?></a>
            </div>

        </section>
    <?php endwhile; ?>
    <section id='trainings'>
        <?php
        $trainingEventsList = new WP_Query(array('post_type' => 'event'));
        while ($trainingEventsList->have_posts()) {
            if (!$trainingEventsList->have_posts()) { ?>
                <p>No trainings found</p>
            <?php
            }
            $trainingEventsList->the_post();
            if (get_field('type') === 'training') {
            ?>
                <p><?php the_field('title'); ?></p>
                <p><?php the_field('start_time'); ?> - <?php the_field('end_time'); ?></p>
                <p><?php the_field('place'); ?></p>
        <?php

            }
        }
        ?>
    </section>
</div>
<?php
get_footer();
?>