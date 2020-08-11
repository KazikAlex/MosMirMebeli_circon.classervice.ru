<section class="reviews">
    <div class="container">
        <div class="section_title">
            <div class="section_title_line"></div>
            <div class="section_title_text">Отзывы</div>
            <div class="section_title_line"></div>
        </div>
        <div class="reviews_wrapper">
            <?php $reviews = new WP_Query(array('post_type' => 'reviews'));?>
            <?php if( $reviews->have_posts() ) : ?> 
                <?php while ( $reviews->have_posts() ) : $reviews->the_post(); ?>
                    <div class="reviews_item">
                        <div class="reviews_item_title"><?php the_title(); ?></div>
                        <div class="reviews_item_descr"><?php the_excerpt(); ?></div>
                        <a href="<?php the_permalink(); ?>" class="reviews_item_link">Читать полностью</a>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else: ?>
                <p>Место под слайдер</p>
            <?php endif; ?>  
        </div>
        <div class="reviews_btn">
            <div class="prev_btn"><</div>
            <div class="next_btn">></div>
        </div>       
    </div>
</section>