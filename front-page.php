<?php get_header() ?>

<main class="site__main">
<?php wp_nav_menu(array(
     "menu"=> "accueil",
     "container" => "nav")); ?>

<?php wp_nav_menu(array(
     "menu"=> "evenement",
     "container" => "nav")); ?>

<?php wp_nav_menu(array(
     "menu"=> "atelier",
     "container" => "nav")); ?>

   <?php if (have_posts()): the_post(); ?>
          <h1><?php the_title() ?></h1>
          <?php the_content() ?>   
   <?php endif ?>
</main>
<?php get_footer() ?>