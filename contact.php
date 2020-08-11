<section class="contacts">
    <div class="container">
        <div class="section_title">
            <div class="section_title_line"></div>
            <div class="section_title_text">Контакты</div>
            <div class="section_title_line"></div>
        </div>
        <div class="contacts_subtitle">Устанавливаем кухни в городах Московской области</div>
        <div class="contacts_wrapper">
            <?php $cities = new WP_Query(array('post_type' => 'cities', 'orderby' => 'title', 'order' => 'ASC', 'posts_per_page' => 150));?>
            <!-- 'order' => 'ASC',  -->
            <?php if( $cities->have_posts() ) : ?> 
                <?php while ( $cities->have_posts() ) : $cities->the_post(); ?>
                    <div class="contacts_item"><?php the_title(); ?></div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
            <?php else: ?>
                <p>Место под слайдер</p>
            <?php endif; ?>   
        </div>
        <div class="contacts_main">
            <div class="contacts_main_wrap">
                <?php $contact = new WP_Query(array('post_type' => 'contact'));?>
                <?php if( $contact->have_posts() ) : ?> 
                    <?php while ( $contact->have_posts() ) : $contact->the_post(); ?>
                    <div class="contacts_main_left">
                        <div class="contacts_main_left_adress"><?php $adr = get_post_meta( $post->ID, 'adr', true); echo $adr;?></div>
                        <div class="contacts_main_left_mainsaloon"><b>Основной салон -</b>&nbsp <?php $adrsaloon = get_post_meta( $post->ID, 'adrsaloon', true); echo $adrsaloon;?><br>
                            <?php $destsaloon = get_post_meta( $post->ID, 'destsaloon', true); echo $destsaloon;?>
                        </div>
                        <div class="contacts_main_left_office"><b>Офис -</b><?php $office = get_post_meta( $post->ID, 'office', true); echo $office;?></div>
                        <div class="contacts_main_left_grid">
                            <div class="contacts_main_left_grid_mail"><?php $usermail = get_post_meta( $post->ID, 'usermail', true); echo $usermail;?></div>
                            <div class="contacts_main_left_grid_call"><?php $telcall = get_post_meta( $post->ID, 'telcall', true); echo $telcall;?><br>
                                (работа call центра&nbsp<?php $calltime = get_post_meta( $post->ID, 'calltime', true); echo $calltime;?>)
                            </div>
                        </div>
                        <div class="contacts_main_left_grid">
                            <div class="contacts_main_left_grid_reg"><?php $reg = get_post_meta( $post->ID, 'reg', true); echo $reg;?><br>
                                ИНН &nbsp <?php $inn = get_post_meta( $post->ID, 'inn', true); echo $inn;?><br>
                                ОГРН &nbsp <?php $ogrn = get_post_meta( $post->ID, 'ogrn', true); echo $ogrn;?>
                            </div>
                            <div class="contacts_main_left_grid_phone">
                                <div class="contacts_main_left_grid_phone_city"><?php $tel = get_post_meta( $post->ID, 'tel', true); echo $tel;?></div>
                                <div class="contacts_main_left_grid_phone_mess"><?php $telmess = get_post_meta( $post->ID, 'telmess', true); echo $telmess;?></div>
                            </div>
                        </div>
                        <button class="installment_btn contacts_main_left_btn" id="contact-btn">Заказть звонок</button>
                        <form class="contact_request_form" id="contact-request-form">
                            <div class="request_form_title">Заказать звонок
                                <div class="request_form_close" id="contact-request-close">X</div>
                            </div>
                            <div class="request_form_subtitle">Оставьте заявку и наш менеджер свяжется с Вами</div>
                            <div class="request_form_wrapper">
                                <input class="request_form_input" name="callname" type="text" placeholder="Ваше имя">
                                <input class="request_form_input" name="callphone" type="tel" placeholder="+7(      ) _____ - ___ - ___">
                                <button class="request_form_btn" id="contact-request-btn">Заказать звонок</button>
                                <div class="request_form_info">Нажимая на кнопку вы соглашаетесь с Персональной обработкой данных</div>
                            </div>								
                        </form>
                    </div>
                    <div class="contacts_main_right">
                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Adcfb8e761a23d813d959713cca72ee178983b4daa8114f474c866a21b3379df9&amp;source=constructor" width="500" height="400" frameborder="0"></iframe>
                    </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>Место под слайдер</p>
                <?php endif; ?>            
            </div>
        </div>
    </div>
</section>