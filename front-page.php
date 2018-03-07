<?php
/**
 * Permet d'ajouter le header.php
 * c'est comme un include
 */
get_header();

/**
 * IMPORTANT
 * Permet d'initialiser les fonctions de WP pour un article
 * Sans the_post(), on ne pourrait pas utiliser les fonctions juste en dessous
 */
the_post();
?>

<h1><?php the_title() ?></h1>

<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 10,
    'orderby' => 'name',
    'order' => 'DESC',
);
//Récupère tous les articles par date
$query_posts = new WP_Query($args);

/**
 * Affiche les articles les plus récents avec un maximum de 10 articles
 * Affiche le titre de l'article et un lien vers l'article en lui même
 */
if ($query_posts->have_posts() ):
    while( $query_posts->have_posts() ) : $query_posts->the_post();
?>

    <div class="article">
        <h2><?=the_title()?></h2>

        <a href="<?php the_permalink() ?>">En savoir plus</a>
    </div>

<?php
    endwhile;
else:
?>

    <p>Pas d'article.</p>

<?php
endif;

$args = array(
    'post_type' => 'page',
    'pagename' => 'qui-sommes-nous'
);
$query_page = new WP_Query($args);
if ($query_page->have_posts()):
    $query_page->the_post();
?>

<div class="banner">
    <h2><?php the_title() ?></h2>
    <p><?php the_excerpt() ?></p>
    <a href="<?php the_permalink() ?>">Lire la suite</a>
</div>

<?php
endif;
wp_reset_postdata();
?>


<?php
/**
 * Permet d'ajouter le footer.php
 * c'est comme un include
 */
get_footer(); ?>