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

<h2><?php the_title() // titre ^^ en même ça peut pas être autre chose :D ?></h2>

<?php echo get_the_date() // la date ?> - <?php the_author() // l'auteur ?>



<div class="contenu-editable">
    <?php the_content() ?>
</div>

<?php
/**
 * Permet d'ajouter le footer.php
 * c'est comme un include
 */
get_footer(); ?>
