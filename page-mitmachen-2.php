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
        <section id='mitmachen-infos'>
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
        <!-- TRAININGSZEITEN -->
        <section id='trainingszeiten'>
            <img class='background-image' src='<?php the_field('trainingszeiten_banner_image'); ?>' />
        <?php endwhile; ?>
        <?php
        $trainingEventsList = new WP_Query(array('post_type' => 'event')); ?>
        <div class='trainings-preview-list'>
            <?php
            while ($trainingEventsList->have_posts()) {
                if (!$trainingEventsList->have_posts()) { ?>
                    <p>No trainings found</p>
                <?php
                }
                $trainingEventsList->the_post();
                if (get_field('type') === 'training') {
                ?><div class='trainingzeit-preview'>
                        <div class='training-title'>
                            <span><?php the_field('title'); ?></span>
                        </div>
                        <div class='training-infos'>
                            <p><?php the_field('description'); ?></p>
                            <div>
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