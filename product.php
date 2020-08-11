<section class="product">
    <div class="container">
        <div class="section_title">
            <div class="section_title_line"></div>
            <div class="section_title_text">Кухни на заказ</div>
            <div class="section_title_line"></div>
        </div>
        <div class="product_wrap">
            <?php wp_nav_menu(array('theme_location' => 'category_menu', 'depth' => 0, 'menu_id' => 'category-menu')); ?>
            <div class="product_wrapper">
                <?php if( have_posts() ) : while ( have_posts() ) : the_post();?>
                    <div class="product_item">
                        <div class="product_img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a></div>
                        <div class="product_title"><?php the_title(); ?></div>
                        <div class="product_price">Цена от &nbsp<?php $price = get_post_meta( $post->ID, 'price', true); echo $price;?>&nbsp руб.</div> 
                        <div class="product_btn"><a href="<?php the_permalink(); ?>">Подробнее</a></div>
                    </div>                                               
                        <?php endwhile; ?>
                        <?php wp_reset_query()?>

                <?php else: ?>
                        <h3>В этой категории нет товаров</h3>
                <?php endif; ?>          
            </div>
        </div>
        
    </div>
</section>