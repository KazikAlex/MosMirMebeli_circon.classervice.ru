<?php get_header(); ?>

<div class="container">
    <br><br> <div class="breadcrumb"><?php the_breadcrumb() ?></div><br><br>
</div> 

<section class="single">
    <div class="container">
        <div class="single_wrapper">       
            <?php if( have_posts() ) : ?>                    
                <?php while ( have_posts() ) : the_post();?>    
                    <div class="single_item_img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a></div>
                    <div class="single_item">
                        <div class="single_item_title"><?php the_title(); ?></div>
                        <div class="single_item_size_title">
                            <div class="single_item_size_title_text">Размер</div>
                            <div class="single_item_size_title_line"></div>
                        </div>   
                        <div class="single_item_size_title_value"><?php $size = get_post_meta( $post->ID, 'size', true); echo $size;?></div> 
                        <div class="single_item_size_title">
                            <div class="single_item_size_title_text">Материал</div>
                            <div class="single_item_size_title_line"></div>
                        </div>   
                        <div class="single_item_wrapper">
                            <div class="single_item_material">Фасады - <?php $facade = get_post_meta( $post->ID, 'facade', true); echo $facade;?></div>
                            <div class="single_item_material">Столешница - <?php $toptable = get_post_meta( $post->ID, 'toptable', true); echo $toptable;?></div>
                            <div class="single_item_material">Корпус - <?php $corpus = get_post_meta( $post->ID, 'corpus', true); echo $corpus;?></div>
                            <div class="single_item_material">Фурнитура - <?php $descr = get_post_meta( $post->ID, 'descr', true); echo $descr;?></div>
                        </div>
                        <div class="single_item_size_title">
                            <div class="single_item_size_title_text">Описание</div>
                            <div class="single_item_size_title_line"></div>
                        </div>   
                        <div class="single_item_size_descr"><?php the_content(); ?></div> 
                        <div class="single_item_price">Цена от: <span>п/м</span><b><?php $price = get_post_meta( $post->ID, 'price', true); echo $price;?> </b> руб.</div>
                        <div class="single_item_buttons">
                            <button class="single_order-btn" id="single-btn">Заказать сейчас</button>
                            <button class="single_installment-btn" id="single-btn">Оформить рассрочку</button>
                        </div>        
                        <form class="order_form" id="single-form">
                            <div class="request_form_title">Заказать замерщика
                                <div class="request_form_close" id="single-close">X</div>
                            </div>
                            <div class="request_form_subtitle">Оставьте заявку и наш менеджер свяжется с Вами</div>
                            <div class="request_form_wrapper">
                                <input class="request_form_input" name="callname" type="text" placeholder="Ваше имя">
                                <input class="request_form_input" name="callphone" type="tel" placeholder="+7(      ) _____ - ___ - ___">
                                <button class="request_form_btn" id="single-order-btn">Вызвать замерщика</button>
                                <div class="request_form_info">Нажимая на кнопку вы соглашаетесь с Персональной обработкой данных</div>
                            </div>								
                        </form>           
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_query()?>            
            <?php else: ?>
            <?php endif; ?>
        </div>
    </div>
</section>



<?php get_template_part( 'call' ); ?>

<?php get_template_part( 'contact' ); ?>

<?php get_footer();?>