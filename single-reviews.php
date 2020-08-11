<?php get_header(); ?>



<section class="single-reviews">
    <div class="container">
    <?php the_breadcrumb() ?><br><br>
        <div class="single-reviews_wrapper">       
            <?php if( have_posts() ) : ?>                    
                <?php while ( have_posts() ) : the_post();?>    
                    <div class="single-reviews_item">
                        <div class="reviews_item_title"><?php the_title(); ?></div>
                        <div class="reviews_item_descr"><?php the_content(); ?></div>                                      
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_query()?>            
            <?php else: ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_template_part( 'reviews' ); ?>

<?php get_footer();?>