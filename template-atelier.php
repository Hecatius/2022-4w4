<?php /*Template Name: Atelier*/ ?>

<?php get_header() ?>
<main class="site__main">
    <!-- <h1>----template-evenement----</h1> -->
    <?php if (have_posts()): while(have_posts()): the_post(); ?>
    <?php the_post_thumbnail()?>
    <h1><?php the_title() ?></h1>
    <br>
    <p class="atelier__description"> Description de l'atelier :  <?php the_field('description_de_l’atelier') ?></p>
    <p class="atelier__animateur">l'animateur de l'atelier :  <?php the_field('animateur') ?></p>
    <p>Date de début :  <?php the_field('date_de_debut_de_l’atelier'); ?></p>
    <p>Date de fin :  <?php the_field('date_de_fin_de_l’atelier'); ?></p>
    <p>La formation se donnera :  <?php the_field('jours_de_la_semaine_de_l’atelier'); ?></p>
    <p>L'horraire de :  <?php the_field('heure_de_debut'); ?> à <?php the_field('heure_de_fin'); ?></p>
    <p>Durée de chacune des séances est de <?php the_field('duree_d’une_seance_d’atelier'); ?> heures</p>
    <p>L'atelier sera donné au local :  <?php the_field('local_ou_se_deroulera_l’atelier'); ?></p>
    <?php endwhile ?>
    <?php endif ?>
</main>
<?php get_footer() ?>