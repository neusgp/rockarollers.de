<?php

get_header();

?>
<div id='content'>
    <?php while (have_posts()) : the_post(); ?>
        <section id='banner'>
            <img class='background-image' src='<?php the_field('mitmachen_banner_image'); ?>' />
            <h2><?php the_title(); ?></h2>
        </section>
        <!-- INFOS -->
        <section id='infos'>
            <div class='flex-column gap'>
                <h2><?php the_field('mitmachen_newbiekurs_title'); ?></h2>
                <p class='paragraph'><?php the_field('mitmachen_newbiekurs_text'); ?></p>
                <a href='<?php the_field('mitmachen_newbiekurs_button_link'); ?>' class='link-button'><?php the_field('mitmachen_newbiekurs_button_label'); ?> <i class='fa fa-angle-right'></i></a>
            </div>
            <div class='flex-column gap'>
                <h2><?php the_field('mitmachen_trainings_title'); ?> </h2>
                <p class='paragraph'><?php the_field('mitmachen_trainings_text'); ?></p>
                <a href='mailto:<?php the_field('mitmachen_trainings_button_link'); ?>' class='link-button'><?php the_field('mitmachen_trainings_button_label'); ?> <i class='fa fa-angle-right'></i></a>
            </div>
        </section>
        <!-- TRAININGSZEITEN -->
        <section id='trainingszeiten'>
            <img class='background-image' src='<?php the_field('trainingszeiten_banner_image'); ?>' />
            <h2><?php the_field('trainingszeiten_title'); ?></h2>
        <?php endwhile; ?>
        <?php
        $trainingEventsList = new WP_Query(array('post_type' => 'event')); ?>
        <div class='trainings-preview-list flex-row'>
            <?php
            while ($trainingEventsList->have_posts()) {
                if (!$trainingEventsList->have_posts()) { ?>
                    <p>No trainings found</p>
                <?php
                }
                $trainingEventsList->the_post();
                if (get_field('type') === 'training') {
                ?><div class='trainingzeit-preview flex-column flex-centered'>
                        <div class='training-title flex-column flex-centered'>
                            <span><?php the_field('title'); ?></span>
                        </div>
                        <div class='training-infos flex-column'>
                            <p><?php the_field('description'); ?></p>
                            <div class='training-details flex-column'>
                                <p><i class='fa fa-clock-o'></i> <?php the_field('start_time'); ?> - <?php the_field('end_time'); ?></p>
                                <p><i class='fa fa-map-marker'></i> <?php the_field('place'); ?></p>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
        </section>
</div>
<?php
get_footer();
?>