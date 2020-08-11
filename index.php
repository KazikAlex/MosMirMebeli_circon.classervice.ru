<?php
/*
 * Template Name: Главная
*/

?>

<section class="main">
    <?php get_header(); ?>
    <div class="container">
        <div class="main_title">Идеальная кухня <br> по индивидуальным размерам</div>
        <div class="main_subtitle">Закажи сейчас и получи <span>в подарок</span><br> мойку или аксессуары</div>
        <button class="main_btn" id="main-btn">Заказать сейчас</button>
        <form class="order_form" id="order-form">
            <div class="request_form_title">Заказать замерщика
                <div class="request_form_close" id="order-close">X</div>
            </div>
            <div class="request_form_subtitle">Оставьте заявку и наш менеджер свяжется с Вами</div>
            <div class="request_form_wrapper">
                <input class="request_form_input" name="callname" type="text" placeholder="Ваше имя">
                <input class="request_form_input" name="callphone" type="tel" placeholder="+7(      ) _____ - ___ - ___">
                <button class="request_form_btn" id="order-btn">Вызвать замерщика</button>
                <div class="request_form_info">Нажимая на кнопку вы соглашаетесь с Персональной обработкой данных</div>
            </div>								
        </form>
        <div class="main_wrapper">
            <div class="main_item"><img src="<?php bloginfo( 'template_url' )?>/icons/ruler.png" alt="бесплатный выезд замерщика">Бесплатный выезд<br> дизайнера-замерщика</div>
            <div class="main_item"><img src="<?php bloginfo( 'template_url' )?>/icons/calculator.png" alt="калькулятор расчета">Калькулятор расчета<br> стоимости кухни</div>
            <div class="main_item"><img src="<?php bloginfo( 'template_url' )?>/icons/award.png" alt="гарантия">Гарантия<br> на мебель 3 года</div>
            <div class="main_item"><img src="<?php bloginfo( 'template_url' )?>/icons/kitchen.png" alt="фурнитура">Качественная фурнитура<br> из Германии и Австри</div>
        </div>
    </div>
</section>

<section class="exclusive">
    <div class="container">
        <div class="section_title">
            <div class="section_title_line"></div>
            <div class="section_title_text">Эксклюзивная кухня в МосМирМебели</div>
            <div class="section_title_line"></div>
        </div>
        <div class="exclusive_wrapper">
            <div class="exclusive_item">
                <img src="<?php bloginfo( 'template_url' )?>/icons/individual.png" alt="индивидуальность">
                <div class="exclusive_item_title">Индивидуальность</div>
                <div class="exclusive_item_subtitle">Изготавливаем мебель в любом<br>стиле и любой сложности</div>
            </div>
            <div class="exclusive_item">
                <img src="<?php bloginfo( 'template_url' )?>/icons/quality.png" alt="качество">
                <div class="exclusive_item_title">Гарантия качества</div>
                <div class="exclusive_item_subtitle">Используем только<br>качественные материалы</div>
            </div>
            <div class="exclusive_item">
                <img src="<?php bloginfo( 'template_url' )?>/icons/design.png" alt="дизайн">
                <div class="exclusive_item_title">Разработка дизайна</div>
                <div class="exclusive_item_subtitle">Создаем дизаайн-проект<br>под каждого клиента</div>
            </div>
            <div class="exclusive_item">
                <img src="<?php bloginfo( 'template_url' )?>/icons/conveniently.png" alt="удобство">
                <div class="exclusive_item_title">Удобство</div>
                <div class="exclusive_item_subtitle">Бесплатный выезд<br>дизайнера на дом</div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'product' ); ?>

<?php get_template_part( 'calculation' ); ?>

<section class="facade">
    <img class="facade_img" src="<?php bloginfo( 'template_url' )?>/img/shavings.png" alt="Деревянная стружка">
    <div class="container">
        <div class="section_title">
            <div class="section_title_line"></div>
            <div class="section_title_text">Материалы фасада</div>
            <div class="section_title_line"></div>
        </div>
        <div class="facade_wrapper">
            <?php $facade = new WP_Query(array('post_type' => 'facade', 'posts_per_page' => 4));?>
            <?php if( $facade->have_posts() ) : ?> 
                <?php while ( $facade->have_posts() ) : $facade->the_post(); ?>
                    <div class="facade_item">
                        <div class="facade_item_img"><?php the_post_thumbnail('full'); ?></div>
                        <div class="facade_item_title"><?php the_title(); ?></div>
                        <div class="facade_item_descr">
                            Цена за погонный метр:<br>
                            <span><?php $facadeprice = get_post_meta( $post->ID, 'facadeprice', true); echo $facadeprice;?> &nbsp руб. </span><br>
                            Срок изготовления, рабочих <br>дней:
                            <span><?php $facadetime = get_post_meta( $post->ID, 'facadetime', true); echo $facadetime;?></span><br>
                            Фрезеровка:
                            <span><?php $facadefrezer = get_post_meta( $post->ID, 'facadefrezer', true); echo $facadefrezer;?></span><br>
                            Разнообразие форм:<br>
                            <?php the_content(); ?>
                            Палитра цветов:<br>
                            <img src="<?php bloginfo( 'template_url' )?>/icons/palitra.png" alt="палитра цветов">
                        </div>
                        <button class="facade_item_btn">Подробнее</button>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
            <?php else: ?>
                <p>Место под слайдер</p>
            <?php endif; ?> 
        </div>
    </div>
</section>

<section class="designer">
    <img class="designer_img" src="<?php bloginfo( 'template_url' )?>/img/palitra.png" alt="Палитра">
    <div class="container">
        <div class="section_title">
            <div class="section_title_line"></div>
            <div class="section_title_text">Наши дизайнеры</div>
            <div class="section_title_line"></div>
        </div>
        <div class="section_subtitle">
            Пригласите на дом нашего профессионального дизайнера<br>Это абсолютно БЕСПЛАТНО
        </div>
        <div class="designer_wrapper">
            <div class="designer_item">
                <img class="designer_item_img" src="<?php bloginfo( 'template_url' )?>/icons/design-tool.png" alt="правильный замер">
                <div class="designer_item_descr">Сделает<br>правильный замер</div>
            </div>
            <div class="designer_item">
                <img class="designer_item_img" src="<?php bloginfo( 'template_url' )?>/icons/pantone.png" alt="покажет образцы">
                <div class="designer_item_descr">Покажет<br>образцы материалов</div>
            </div>
            <div class="designer_item">
                <img class="designer_item_img" src="<?php bloginfo( 'template_url' )?>/icons/paint-brushes.png" alt="предложит дизайн">
                <div class="designer_item_descr">Предложит дизайн<br>образцы материалов</div>
            </div>
            <div class="designer_item">
                <img class="designer_item_img" src="<?php bloginfo( 'template_url' )?>/icons/kitchen (2).png" alt="эффективность">
                <div class="designer_item_descr">Расскажет как эффективно<br>использовать пространство</div>
            </div>
            <div class="designer_item">
                <img class="designer_item_img" src="<?php bloginfo( 'template_url' )?>/icons/project.png" alt="дизайн проект">
                <div class="designer_item_descr">Создаст идеальный<br>дизайн проект</div>
            </div>
            <div class="designer_item">
                <img class="designer_item_img" src="<?php bloginfo( 'template_url' )?>/icons/cost.png" alt="подберет решение">
                <div class="designer_item_descr">Подберет решение<br>в рамках бюджета</div>
            </div>
        </div>
        <div class="designer_person">          
            <?php $manager = new WP_Query(array('post_type' => 'manager', 'posts_per_page' => 3));?>
            <?php if( $manager->have_posts() ) : ?> 
                <?php while ( $manager->have_posts() ) : $manager->the_post(); ?>
                <div class="designer_person_item">
                    <div class="designer_person_item_img"><?php the_post_thumbnail('full'); ?></div>
                    <div class="designer_person_item_title"><?php the_title(); ?></div>
                    <div class="designer_person_item_descr"><?php the_content(); ?></div>
                    <button class="facade_item_btn designer_btn" id="consultation-btn">Консультация</button>
                    <form class="designer_form" id="consultation-form">
                        <div class="request_form_title">Заказать звонок
                            <div class="request_form_close" id="consultation-close">X</div>
                        </div>
                        <div class="request_form_subtitle">Оставьте заявку и наш менеджер свяжется с Вами</div>
                        <div class="request_form_wrapper">
                            <input class="request_form_input" name="callname" type="text" placeholder="Ваше имя">
                            <input class="request_form_input" name="callphone" type="tel" placeholder="+7(      ) _____ - ___ - ___">
                            <button class="request_form_btn" id="consultation_request-btn">Заказать звонок</button>
                            <div class="request_form_info">Нажимая на кнопку вы соглашаетесь с Персональной обработкой данных</div>
                        </div>								
                    </form>                    
                </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
            <?php else: ?>
                <p>Место под слайдер</p>
            <?php endif; ?>    
        </div>
    </div>
</section>

<section class="installment">
    <div class="container">
        <div class="section_title">
            <div class="section_title_line"></div>
            <div class="section_title_text section_title_text_installment">Купить кухню в рассрочку</div>
            <div class="section_title_line"></div>
        </div>
        <div class="installment_wrapper">
            <?php $installment = new WP_Query(array('post_type' => 'installment', 'posts_per_page' => 3));?>
            <?php if( $installment->have_posts() ) : ?> 
                <?php while ( $installment->have_posts() ) : $installment->the_post(); ?>
                <div class="installment_item">
                    <div class="installment_item_img"><?php the_post_thumbnail('full'); ?></div>
                    <div class="installment_item_descr"><?php the_content(); ?></div>
                </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
            <?php else: ?>
                <p>Место под слайдер</p>
            <?php endif; ?>   
        </div>
        <button class="installment_btn">Подробнее</button>
    </div>
</section>

<?php get_template_part( 'reviews' ); ?>

<?php get_template_part( 'call' ); ?>

<?php get_template_part( 'contact' ); ?>

<?php get_footer(); ?>