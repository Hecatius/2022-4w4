<?php get_header() ?>
<main class="principal">
    
    <section class="formation">
<?php
    //http://127.0.0.1:8080/edsa-Wordpress/category/cours/?cletri=title&ordre=desc
?>


<a href="?cletri=title&ordre=desc">Descendant</a>
<a href="?cletri=title&ordre=asc">Ascendant</a>


    <?php  wp_nav_menu(array(
            "menu"=>"categorie_cours",
            "container" => "nav"));  ?>
        <h2 class="formation__titre">Liste des cours du programme TIM</h2>
        <?php 
        if (is_category('web')){ 

            $ma_categorie = get_category_by_slug('web');
            echo "<h3>" . $ma_categorie->description . "</h3>";
        }
        /*
        if (is_category('jeu')){ echo "<h3>Cours Jeu</h3>";}
        if (is_category('design')){ echo "<h3>Cours design</h3>";}
        if (is_category('utilitaire')){ echo "<h3>Cours utilitaire</h3>";}
        if (is_category('creation-3d')){ echo "<h3>Cours création 3D</h3>";}
        if (is_category('video')){ echo "<h3>Cours vidéo</h3>";}
        */
        // retourne un string qui represente le slug de la categorie
        $url_categorie_slug = trouve_la_categorie(array('web','jeu','design', 'utilitaire', 'creation-3d', 'video'));
        $ma_categorie = get_category_by_slug($url_categorie_slug);
        echo "<h3>" . $ma_categorie->description . "</h3>"; 



        ?>
        <div class="formation__liste">
            <?php if (have_posts()):
                while (have_posts()): the_post(); ?>
                <?php get_template_part( "gabarits/content", "cours"); ?>
            <?php endwhile ?>
            <?php endif ?>
        </div>
    </section>
</main>
<?php get_footer() ?> 