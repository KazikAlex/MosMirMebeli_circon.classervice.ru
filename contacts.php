<?php
/*
 * Template Name: Контакты
*/
?>

<?php get_header(); ?>

<div class="container">
    <br><br> <div class="breadcrumb"><?php the_breadcrumb() ?></div><br><br>
</div> 

<?php get_template_part( 'contact' ); ?>

<?php get_footer();?>