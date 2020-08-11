<?php get_header(); ?>
<div class="container">
    <br><br><?php the_breadcrumb() ?><br><br>
</div>
<?php get_template_part( 'product' ); ?>

<!-- <div class="product_wrapper">
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
</div>  -->

<div class="pagination">
    <?php 
            the_posts_pagination(array(
                //'show_all'     => false, // показаны все страницы участвующие в пагинации
                //'end_size'     => 1,     // количество страниц на концах
                //'mid_size'     => 1,     // количество страниц вокруг текущей
                'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                'prev_text'    => __('«'),
                'next_text'    => __('»'),
                //'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
                //'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
                //'screen_reader_text' => __( 'Posts navigation' ),
            ));
    ?>
</div> 
     
<?php wp_reset_query()?>

<?php get_footer();?>