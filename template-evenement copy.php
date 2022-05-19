<?php /*Template Name: Évenement*/ ?>

<?php get_header() ?>
<main class="site__main">
    <!-- <h1>----template-evenement----</h1> -->
    <?php if (have_posts()): while(have_posts()): the_post(); ?>
    <?php the_post_thumbnail()?>
    <h1><?php the_title() ?></h1>
    <br>
    <?php if( get_field('image') ): ?>
    <img src="<?php the_field('image'); ?>" />
    <?php endif; ?>
    <p class="evenement_resume"><?php the_field('resume') ?></p>
    <p class="evenement_endroit"><?php the_field('endroit') ?></p>
    <p><?php the_field('organisateur'); ?></p>
    <p><?php the_field('date'); ?></p>
    <p><?php the_field('heure'); ?></p>
    <?php the_content() ?>
    <?php endwhile ?>
    <?php endif ?>
</main>
<?php get_footer() ?>