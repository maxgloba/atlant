<?php
/*
 * Template Name: Home
 */
get_header(); ?>

<?php get_template_part( 'partials/block', 'banner' ); ?>
<?php get_template_part( 'partials/block', 'advantages__top' ); ?>
<?php get_template_part( 'partials/block', 'advantages__bottom' ); ?>
<?php get_template_part( 'partials/block', 'help' ); ?>
<?php get_template_part( 'partials/block', 'models' ); ?>
<?php get_template_part( 'partials/block', 'producer' ); ?>
<?php get_template_part( 'partials/block', 'look' ); ?>
<?php get_template_part( 'partials/block', 'bunker' ); ?>
<?php get_template_part( 'partials/block', 'montag' ); ?>
<?php get_template_part( 'partials/block', 'types' ); ?>
<?php get_template_part( 'partials/block', 'consultation' ); ?>
<?php get_template_part( 'partials/modal', 'consultation' ); ?>

<?php get_footer(); ?>
