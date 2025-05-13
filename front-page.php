<?php get_header(); ?>


<div id='content'>
    <!-- store page data into variables so that i don't need to call loops all time -->

    <!-- HERO -->
    <section id='hero-section'>
        <?php while (have_posts()) : the_post(); ?>
            <img class='background-image' src='<?php the_field('hero_background_image'); ?>' />
            <h1><?php the_field('hero_section_title'); ?></h1>
            <p><?php the_field('hero_section_text'); ?></p>
            <div class='action-buttons-container'>
                <a href='<?php the_field('link_hero_button_1'); ?>' class='primary-button-white'><?php the_field('label_hero_button_1'); ?></a>
                <a href='<?php the_field('link_hero_button_2'); ?>' class='primary-button-yellow'><?php the_field('label_hero_button_2'); ?></a>
            </div>
    </section>
    <!-- NEWS -->
    <section id='news-section' class='section'>
        <h2><?php the_field('news_section_title'); ?></h2>
        <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
    </section>
    <!-- TEAM -->
    <section id='team-section' class='section'>
        <div class='team-section-text'>
            <h2><?php the_field('team_section_title'); ?></h2>
            <p><?php the_field('team_section_text'); ?></p>
            <a href='<?php the_field('link_team_button'); ?>' class='primary-button-yellow'><?php the_field('label_team_button'); ?></a>
        </div>
        <div class='team-section-fotos'>
            <div class='scroll-icon'>
                <i class='fa fa-angle-left'></i>
                <i class='fa fa-angle-right'></i>
            </div>
            <div id='horizontal-scroll'>
                <?php
                $homePageSponsorsList = new WP_Query(array('post_type' => 'member', 'posts_per_page' => 7));
                if (!$homePageSponsorsList->have_posts()) {
                ?> <p>No sponsors found</p>
                <?php
                } ?>
                <?php
                while ($homePageSponsorsList->have_posts()) {
                    $homePageSponsorsList->the_post(); ?>
                    <img class='member-foto' src='<?php the_field('foto'); ?>' />
                <?php
                }
                ?>
            <?php endwhile; ?>
            </div>
        </div>
    </section>
    <!-- EVENTS -->
    <section id='events-section' class='section'>
        <?php while (have_posts()) : the_post(); ?>
            <img class='background-image' src='<?php the_field('events_background_image'); ?>' />
            <h2><?php the_field('events_section_title'); ?> <span class='yellow-highlight'><?php the_field('events_section_year'); ?></span></h2>
        <?php endwhile; ?>
        <div class='events-preview-list'>
            <?php
            $homePageEventList = new WP_Query(array('post_type' => 'event', 'posts_per_page' => -1));
            if (!$homePageEventList->have_posts()) {
            ?> <p>No events found</p>
            <?php
            } ?>
            <?php
            while ($homePageEventList->have_posts()) {
                $homePageEventList->the_post(); ?>
                <div class='event-preview'>
                    <div class='event-preview-date'>
                        <?php
                        //separate month and day
                        $date = get_field('date');
                        $parsedDate = explode(',', $date);
                        $stringParsedDate = implode(' ', $parsedDate);
                        $finalParsedData = explode(' ', $stringParsedDate);
                        ?>
                        <div class='event-month'>
                            <p><?php echo $finalParsedData[0] ?></p>
                        </div>
                        <div class='event-day'>
                            <p><?php echo $finalParsedData[1] ?></p>
                        </div>
                    </div>

                    <div class='event-preview-info'>
                        <p class='event-preview-title'><?php the_field('title') ?></p>
                        <div class='event-preview-place-time'>
                            <p><i class='fa fa-map-marker'></i> <?php the_field('place') ?></p>
                            <p><i class='fa fa-clock-o'></i> <?php the_field('time') ?></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </section>
    <!-- SPONSORS -->
    <section id='sponsors-section' class='section'>
        <?php while (have_posts()) : the_post(); ?>
            <h2><?php the_field('sponsors_section_title'); ?></h2>
        <?php endwhile; ?>
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
        <?php while (have_posts()) : the_post(); ?>
            <a href='<?php the_field('link_sponsors_button'); ?>' class='sponsors-section-button primary-button-yellow'><?php the_field('label_sponsors_button'); ?></a>
        <?php endwhile; ?>
    </section>
</div>

<?php get_footer(); ?>