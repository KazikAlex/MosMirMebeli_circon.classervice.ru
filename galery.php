<?php
/*
 * Template Name: Галерея работ
*/
?>

<?php get_header(); ?>

<div class="container">
    <br><br> <div class="breadcrumb"><?php the_breadcrumb() ?></div><br><br>
</div>  

<section class="galery">
    <div class="container">
        <div class="galery_wrapper">
            <?php $galery = new WP_Query(array('post_type' => 'galery', 'posts_per_page' => 4));?>
            <?php if( $galery->have_posts() ) : ?> 
                <?php while ( $galery->have_posts() ) : $galery->the_post(); ?>
                    <div class="galery_item">
                        <div class="galery_item_img"><?php the_post_thumbnail('full'); ?></div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>Место под слайдер</p>
            <?php endif; ?> 
            <?php wp_reset_query()?>   

            </div> 
        </div>
    </div>
</section>

<?php get_footer();?>