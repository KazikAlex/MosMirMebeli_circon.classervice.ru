<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <meta content="width=1180" name="viewport" id="viewport"> -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>

<header class="header">
	<div class="container">
		<div class="header_wrapper">
			<a href="<?php get_home_url()?>/index.php"><div class="header_logo"></div></a>
			<div class="header_menu">
				<?php wp_nav_menu(array('theme_location' => 'page_menu', 'depth' => 0, 'menu_id' => 'page-menu')); ?>
				<div class="hamburger-menu" id="hamb">
					<div class="hamburger">
						<div class="hamburger-top" id="top"></div>
						<div class="hamburger-middle" id="middle"></div>
						<div class="hamburger-bottom" id="bottom"></div>
					</div>
				</div>
			</div>
			<?php $contact = new WP_Query(array('post_type' => 'contact'));?>
            <?php if( $contact->have_posts() ) : ?> 
				<?php while ( $contact->have_posts() ) : $contact->the_post(); ?>
					<div class="header_time" id="header-time"><?php $times = get_post_meta( $post->ID, 'times', true); echo $times;?></div>
					<div class="header_call" id="header-call"><?php $telcall = get_post_meta( $post->ID, 'telcall', true); echo $telcall;?><br>
						<div class="header_call_link" id="call-link">Заказать звонок</div>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_query()?>
			<?php else: ?>
				<p>Место под слайдер</p>
			<?php endif; ?> 
			<form class="request_form" id="request-form">
				<div class="request_form_title">Заказать звонок
					<div class="request_form_close" id="request-close">X</div>
				</div>
				<div class="request_form_subtitle">Оставьте заявку и наш менеджер свяжется с Вами</div>
				<div class="request_form_wrapper">
					<input class="request_form_input" name="callname" type="text" placeholder="Ваше имя">
					<input class="request_form_input" name="callphone" type="tel" placeholder="+7(      ) _____ - ___ - ___">
					<button class="request_form_btn" id="request-btn">Заказать звонок</button>
					<div class="request_form_info">Нажимая на кнопку вы соглашаетесь с Персональной обработкой данных</div>
				</div>								
			</form>
		</div>
	</div>
</header>

