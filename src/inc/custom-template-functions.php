<?php

/**
 * GENERAL
*/

if ( ! function_exists( 'slider_principal' ) ) {
	function slider_principal() {
		include_once ABSPATH . 'wp-admin/includes/plugin.php';
		if ( is_plugin_active( 'revslider/revslider.php' ) ) {
			putRevSlider("principal", "homepage");
		} else {
			if (is_front_page() || is_home()) {
				get_template_part( 'templates/slider/slides');
			}
		}
	}
}

/**
 * HEADER
*/

// Agregar Nav Top
function nav_top_login(){
	get_template_part('templates/header/navbar', 'top');
}

/** Agregar Logo en el Header */

function storefront_site_branding() {
	?>
		<div class='logo_header'>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php get_template_part( 'templates/header/logo', 'header'); ?>" alt="Logo Header" />
			</a>
		</div>
	<?php
}

/**
 * Agregar Banner en el Header
*/

function banner_header() {
	?>
		<picture>
			<img src="<?php get_template_part( 'templates/header/banner', 'header'); ?>" alt="Banner Header" />
		</picture>
	<?php
}

/**
 * Agrega background shadow a  barra de busqueda
*/
function storefront_product_search() {
	if ( storefront_is_woocommerce_activated() ) { ?>
		<div class="site-search-container">
			<div class="site-search">
				<?php the_widget( 'WC_Widget_Product_Search', 'title=' ); ?>
			</div>
			<!-- <div class="site-search-shadow"></div> -->
		</div>
	<?php
	}
}

/**
 * Agregando Carrito de Compras en el Header
*/

function header_cart() {
	if ( storefront_is_woocommerce_activated() ) {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
	?>
	<ul class="site-header-cart menu">
		<li class="<?php echo esc_attr( $class ); ?>">
			<?php storefront_cart_link(); ?>
		</li>
		<li>
			<?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
		</li>
	</ul>
	<?php
	}
}

/**
 * Coll Full
 */
function coll_full_container() {
	?>
	 <div class="col-full">
	<?php
}

/**
 * Coll Full close
 */
function coll_full_container_close() {
	?>
		</div>
	<?php
}

/**
 * Header inner container
 */
function inner_container() {
	?>
	 <section class="inner_container">
	<?php
}

/**
 * Header inner container close
 */
function inner_container_close() {
	?>
	</section>
	<?php
}


/**
 * HOMEPAGE
 * Establecemos la cantidad de productos y columnas a mostrar
 * Customizamos subtítulos a las secciones de Homepage Template
 */

// Editamos cantidad y columnas de productos
function products_columns( $args ) {
	$args['limit'] = 8; // limit ~> Cantidad total de productos a mostrar
	$args['columns'] = 4; // columns ~> Cantidad de columnas de productos a mostrar
	$args['orderby'] = 'date'; // Ordenamos por fecha
	$args['order'] = 'desc'; // Ordenamos de manera descendente
	return $args;
}
add_filter( 'storefront_product_categories_args', 'products_columns' );
add_filter( 'storefront_recent_products_args', 'products_columns' );
add_filter( 'storefront_on_sale_products_args', 'products_columns' );
add_filter( 'storefront_best_selling_products_args', 'products_columns' );
add_filter( 'storefront_popular_products_args', 'products_columns' );
add_filter( 'storefront_featured_products_args', 'products_columns' );

// Editamos los títulos de las secciones
function recent_products_title( $args ) {
	$args['title'] = 'Menú recientes'; // title ~> Título de la sección
	return $args;
}
add_filter( 'storefront_recent_products_args', 'recent_products_title' );

function on_sale_products_title( $args ) {
	$args['title'] = 'Ofertas del mes'; // title ~> Título de la sección
	return $args;
}
add_filter( 'storefront_on_sale_products_args', 'on_sale_products_title' );

function best_selling_products_title( $args ) {
	$args['title'] = 'Los más vendidos'; // title ~> Título de la sección
	return $args;
}
add_filter( 'storefront_best_selling_products_args', 'best_selling_products_title' );

function popular_products_title( $args ) {
	$args['title'] = 'Los más populares'; // title ~> Título de la sección
	return $args;
}
add_filter( 'storefront_popular_products_args', 'popular_products_title' );

// Banner Content
function banners_content(){
	get_template_part('templates/content/banners');
}

/**
 * HOMEPAGE AFTER CONTENT
 */
 function add_google_maps(){
	 	?>
		<iframe src="https://www.google.com/maps/d/embed?mid=13874Zt7-yIDIoR0CK2QtycNCsAk"
			width="100%"
			height="480"
			style="margin-bottom: -5px;">
		</iframe>
		<?php
 }

/**
 * FOOTER
*/

function footer_content() {
	get_template_part( 'templates/footer/footer', 'content');
}

function storefront_credit() {
	?>
	<div class="site-info">
		<?php echo esc_html( apply_filters( 'storefront_copyright_text', $content = '&copy; ' . get_template_part( 'templates/credits/add', 'razonsocial' ) . ' ' . date( 'Y' ) ) ); ?>
		<?php if ( apply_filters( 'storefront_credit_link', true ) ) {
			printf( esc_attr__( '%1$s por %2$s', 'storefront' ), '| Desarrollado', '<a href="http://www.ideadigital.com.ve/" title="IdeaPro" rel="author" target="_blank">IdeaPro</a>' );
		} ?>
	</div><!-- .site-info -->
	<?php
}

/**
 * PAGES
*/

/**
 * Custom H1 Storefront Page Header
 */
function custom_storefront_page_header () {
	if (!is_page('Home')): ?>
	<header class="entry-header">
		<?php
			storefront_post_thumbnail( 'full' );
			the_title( '<h1 class="entry-title">', '</h1>' );
		?>
	</header><!-- .entry-header -->
	<?php endif;
}
 ?>
