<?php get_header(); ?>


<div id='content'>
    <!-- HERO -->
    <section id='hero-section' class='flex-column flex-centered gap'>
        <?php while (have_posts()) : the_post(); ?>
            <img class='background-image' src='<?php the_field('hero_background_image'); ?>' />
            <h1 class='title'><?php the_field('hero_section_title'); ?></h1>
            <p class='text paragraph'><?php the_field('hero_section_text'); ?></p>
            <div class='action-buttons-container flex-row-aligned gap-sm'>
                <a href='<?php the_field('link_hero_button_1'); ?>/#about-roller-derby' class='primary-button-white'><?php the_field('label_hero_button_1'); ?></a>
                <a href='<?php the_field('link_hero_button_2'); ?>' class='primary-button-yellow'><?php the_field('label_hero_button_2'); ?></a>
            </div>
    </section>
    <!-- NEWS -->
    <section id='news-section' class='section'>
        <h2><?php the_field('news_section_title'); ?></h2>
        <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
    </section>
    <!-- TEAM -->
    <section id='team-section' class='section flex-row gap-sm'>
        <div class='team-section-text flex-column gap'>
            <h2><?php the_field('team_section_title'); ?></h2>
            <p class='paragraph'><?php the_field('team_section_text'); ?></p>
            <a href='<?php the_field('link_team_button'); ?>' class='primary-button-yellow'><?php the_field('label_team_button'); ?></a>
        </div>
        <div class='team-section-fotos'>
            <div class='scroll-icon flex-centered'>
                <i class='fa fa-angle-right'></i>
            </div>
            <div id='horizontal-scroll' class='flex-row gap-sm'>
                <?php
                $homePageMembersList = new WP_Query(array('post_type' => 'member', 'posts_per_page' => -1));
                if (!$homePageMembersList->have_posts()) {
                ?> <p>No sponsors found</p>
                <?php
                } ?>
                <?php
                while ($homePageMembersList->have_posts()) {
                    $homePageMembersList->the_post(); ?>
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
        <div class='events-preview-list flex-column gap-sm'>
            <?php
            $homePageEventList = new WP_Query(array('post_type' => 'event', 'posts_per_page' => -1));
            while ($homePageEventList->have_posts()) {
                if (!$homePageEventList->have_posts()) { ?>
                    <p>No events found</p>
                <?php
                }
                $homePageEventList->the_post();
                if (get_field('type') === 'event') { ?>
                    <div class='event-preview flex-row gap-sm'>
                        <div class='event-preview-date flex-column'>
                            <?php
                            //separate month and day
                            $rawDate = get_field('date');
                            $parsedDate = explode(',', $rawDate);
                            $stringParsedDate = implode(' ', $parsedDate);
                            $finalParsedData = explode(' ', $stringParsedDate);
                            $rawMonth = $finalParsedData[0];
                            $day = $finalParsedData[1];
                            if (strlen($rawMonth) > 4) {
                                $date = substr($rawMonth, 0, 3);
                            } else {
                                $date = $rawMonth;
                            }
                            ?>
                            <div class='event-month flex-centered'>
                                <p><?php echo $date ?></p>
                            </div>
                            <div class='event-day flex-centered'>
                                <p><?php echo $day ?></p>
                            </div>
                        </div>

                        <div class='event-preview-info flex-column-justified'>
                            <p class='event-preview-title'><?php the_field('title') ?></p>
                            <div class='event-preview-place-time flex-row gap'>
                                <p><i class='fa fa-map-marker'></i> <?php the_field('place') ?></p>
                                <p><i class='fa fa-clock-o'></i> <?php the_field('time') ?></p>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </section>
    <!-- SPONSORS -->
    <section id='sponsors-section' class='section'>
        <?php while (have_posts()) : the_post(); ?>
            <h2><?php the_field('sponsors_section_title'); ?></h2>
        <?php endwhile; ?>
        <div class='sponsors-list flex-row flex-centered gap'>
            <?php
            $homePageSponsorsList = new WP_Query(array('post_type' => 'sponsor', 'posts_per_page' => -1));
            if (!$homePageSponsorsList->have_posts()) {
            ?> <p>No sponsors found</p>
            <?php
            } ?>
            <?php
            while ($homePageSponsorsList->have_posts()) {
                $homePageSponsorsList->the_post(); ?>
                <a href='<?php the_field('link'); ?>' class='sponsor link-hover'><img class='sponsor-logo' src='<?php the_field('logo'); ?>' /></a>
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