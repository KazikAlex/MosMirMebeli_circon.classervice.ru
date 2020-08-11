
<footer class="footer">
	<div class="container">
		<!-- <div class="footer_wrapper"> -->
		<div class="header_wrapper">
			<a href="<?php get_home_url()?>/index.php"><div class="footer_logo"></div></a>
			
			<!-- <div class="footer_menu"> -->
				<div class="header_menu">
					<?php wp_nav_menu(array('theme_location' => 'page_menu', 'depth' => 0, 'menu_id' => 'page-menu')); ?>
				</div>
			<!-- </div> -->
			<div class="footer_social">
				<?php $contact = new WP_Query(array('post_type' => 'contact'));?>
                <?php if( $contact->have_posts() ) : ?> 
                    <?php while ( $contact->have_posts() ) : $contact->the_post(); ?>		
						<a class="footer_social_instagram" href="<?php $instagram= get_post_meta( $post->ID, 'instagram', true); echo $instagram;?>"></a>
						<a class="footer_social_youtube" href="<?php $youtube= get_post_meta( $post->ID, 'youtube', true); echo $youtube;?>"></a>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>Место под слайдер</p>
                <?php endif; ?>  
			</div>
		</div>
		<div class="footer_line"></div>
		<div class="footer-copyright">©2010-2020 circon-mebel - кухни на заказ по индивидуальнымм размерам</div>
		
	</div>
</footer>
	
<script src="<?php bloginfo('template_url')?>/js/jquery-3.4.1.min.js"></script>
<script src="<?php bloginfo('template_url')?>/js/jquery-migrate-1.4.1.min.js"></script>
<script src="<?php bloginfo('template_url')?>/js/slick.js"></script>
<script src="<?php bloginfo('template_url')?>/js/js.js"></script>

</body>
</html>

  