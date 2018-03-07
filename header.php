<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php
    /**
     * IMPORTANT SINON la mort
     * -> ajoute les styles et scripts par défaut de WP
     * -> ajoute les styles et scripts des plugins
     * -> ajoute vos styles et scripts
     */
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>