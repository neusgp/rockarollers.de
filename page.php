<?php

get_header();

?>
<div id='content'>
    <section class='misc-info'>
        <?php while (have_posts()) : the_post(); ?>
            <?php echo the_content() ?>
        <?php endwhile; ?>
    </section>
</div>
<?php

get_footer();

?>