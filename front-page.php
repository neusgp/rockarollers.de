<?php get_header(); ?>
<div id='content'>
</div>
<div>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    else :
        echo '<p>No content found</p>';
    endif;
    ?>
</div>
<div class='section'>
    <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
</div>
</div>
<?php get_footer(); ?>