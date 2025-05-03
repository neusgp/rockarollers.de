<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
    <div id='content'>
        <div id='hero-section'>
            <img class='hero-background-image' src='<?php the_field('hero_background_image'); ?>' />
            <h1><?php the_field('hero_section_title'); ?></h1>
            <p><?php the_field('hero_section_text'); ?></p>
            <div class='action-buttons-container'>
                <a href='<?php the_field('link_hero_button_1'); ?>' class='primary-button-white'><?php the_field('label_hero_button_1'); ?></a>
                <a href='<?php the_field('link_hero_button_2'); ?>' class='primary-button-yellow'><?php the_field('label_hero_button_2'); ?></a>
            </div>
        </div>
        <div id='news-section' class='section'>
            <h2><?php the_field('news_section_title'); ?></h2>
            <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
        </div>
        <div id='team-section' class='section'>
            <div>
                <h2><?php the_field('team_section_title'); ?></h2>
                <p><?php the_field('team_section_text'); ?></p>
                <a href='<?php the_field('link_team_button'); ?>' class='primary-button-yellow'><?php the_field('label_team_button'); ?></a>
            </div>
            <div id='horizontal-scroll'></div>
        </div>
        <div id='events-section' class='section'>
            <h2><?php the_field('events_section_title'); ?> <span class='yellow-highlight'><?php the_field('events_section_year'); ?></span></h2>
        </div>
        <div id='sponsors-section' class='section'>
            <h2><?php the_field('sponsors_section_title'); ?></h2>
        </div>
    </div>
<?php endwhile; ?>


<?php get_footer(); ?>