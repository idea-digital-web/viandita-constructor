<div class="site-footer__container">
	<div class="site-footer__item">
		<h2 class="us">
		Nosotros
		</h2>
		<picture>
			<img src="<?php get_template_part( 'templates/footer/logo', 'footer'); ?>" alt="Logo Footer" />
		</picture>
		<p><?php bloginfo('description'); ?></p>
		<!-- <span class="cards">
			<i class="fa fa-cc-visa fa-3x"></i>
			<i class="fa fa-cc-mastercard fa-3x"></i>
		</span> -->
	</div>
	<div class="site-footer__item">
		<h2 class="categories">Categorías</h2>
		<?php wp_nav_menu(
				array(
				'theme_location' => 'primary',
				'container' => 'nav',
				'link_before'	=> '<i class="fa fa-angle-right"></i> ',
				'container_class' => 'site-footer__item--nav',
				'menu_class' => 'site-footer__item--nav-categories',
				'depth' => 1
				)
			);
		?>
	</div>
	<div class="site-footer__item">
		<h2 class="contact-us">Dirección</h2>
		<div class="site-footer__item--contact">
			<p>
				Centro Comercial La Redoma, <br>
				Local 67. Los Robles. <br>
				PORLAMAR - NUEVA ESPARTA
			</p>
		</div>

		<h2 class="contact-us">
		Contáctenos
		</h2>
		<div class="site-footer__item--contact">
			<!-- <i class="fa fa-phone"></i> -->
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/phone-call.png" alt="" />
			<span><?php get_template_part( 'templates/header/add', 'phone'); ?></span>
		</div>
		<!-- <div class="site-footer__item--contact">
			<i class="fa fa-mobile"></i>
			<span><?php get_template_part( 'templates/header/add', 'mobile'); ?></span>
		</div> -->
		<!-- <div class="site-footer__item--contact">
			<i class="fa fa-whatsapp" aria-hidden="true"></i>
			<span><?php get_template_part( 'templates/footer/add', 'whatsapp'); ?></span>
		</div> -->
		<div class="site-footer__item--contact">
			<!-- <i class="fa fa-envelope"></i> -->
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/envelope.png" alt="" />
			<!-- <span class="email"><?php bloginfo('admin_email'); ?></span> -->
			<span><?php get_template_part( 'templates/footer/add', 'email'); ?></span>
		</div>
		<div class="site-footer__item--contact">
			<!-- <i class="fa fa-clock-o"></i> -->
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/time.png" alt="" />
			<span>8:30 am a 4:30 pm</span>
		</div>
	<!-- 	<div class="site-footer__item--contact">
			Somos tienda virtual con entregas previo acuerdo.
		</div> -->
	</div>
	<div class="site-footer__item">
		<h2 class="form">
		Mensaje Directo
		</h2>
		<!-- <h2 class="form"></h2> -->
		<?php get_template_part( 'templates/footer/footer', 'formcraft'); ?>
	</div>
</div>
