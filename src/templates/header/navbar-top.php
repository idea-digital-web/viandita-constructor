<nav class="site-header_nav">
  <div class="site-header_nav--item site-header_nav--contact">
    <i class="fa fa-mobile">
    </i>
    <span>
      <!-- <?php get_template_part( 'templates/header/add', 'phone'); ?> / -->
      <?php get_template_part( 'templates/header/add', 'mobile'); ?>
    </span>
  </div>
  <!-- <div class="site-header_nav--item site-header_nav--contact">
    <i class="fa fa-envelope-o">
    </i>
    <span><?php bloginfo('admin_email'); ?></span>
  </div> -->
  <div class="site-header_nav--item site-header_nav--welcome">
      <?php if ( is_user_logged_in() ) {
        global $current_user; wp_get_current_user(); if ($current_user->user_firstname == true): ?>
      <span>¡Bienvenido <?php echo ''. $current_user->user_firstname .'!'; else: ?></span>
      <span>¡Bienvenido!<?php endif?></span>
    <nav class="site-header_nav--welcome--dropdown">
      <button id="menuDropdown">
        <span><i class="fa fa-th-list" aria-hidden="true"></i></span>
        <!-- <i class="fa fa-chevron-down" aria-hidden="true" id="caretDown"></i>
        <i class="fa fa-chevron-up hide" aria-hidden="true" id="caretUp"></i> -->
      </button>
      <ul id="menuDropdownUl" class="hide dropdown-menu fadeIn">
        <?php if (current_user_can('administrator') || current_user_can('shop_manager')): ?>
        <li><a id="itemPanel" href="<?php home_url();?>/wp-admin"><i class="fa fa-tachometer" aria-hidden="true"></i>Escritorio</a></li>
        <?php endif ?>
        <li><a  id="itemPedidos" href="<?php home_url();?>/mi-cuenta/orders/"><i class="fa fa-shopping-basket" aria-hidden="true"></i>Pedidos</a></li>
        <li><a  id="itemEditar" href="<?php home_url();?>/mi-cuenta/edit-account/"><i class="fa fa-user" aria-hidden="true"></i>Editar</a></li>
        <li><a  id="itemEditar" href="<?php home_url();?>/mi-cuenta/edit-address/"><i class="fa fa-home" aria-hidden="true"></i>Direcciones</a></li>
        <li><a  id="itemCerrar" href="<?php home_url();?>/mi-cuenta/customer-logout/" ><i class="fa fa-sign-out" aria-hidden="true"></i>Cerrar Sesión</a></li>
      </ul>
    </nav>
    <?php } else {?>
    <div class="site-header_nav--login">
      <a class="site-header_nav--login-login" href="<?php home_url();?>/mi-cuenta" title="">
        <i class="fa fa-sign-in"></i>Iniciar Sesión / Registrarse
      </a>
    </div>
    <?php };?>
  </div>
  <div class="site-header_nav--item site-header_nav--welcome-condiciones">
    <a class="site-header_nav--welcome-condiciones-item wallet" href="<?php home_url();?>/registrar-pago/" title="">
      <!-- <i class="fa fa-phone"></i> -->
      <picture>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/wallet.png" alt="" />
      </picture>
      <span>Pagos</span>
    </a>
    <div class="site-header_nav--welcome-condiciones-item separador"></div>
    <a class="site-header_nav--welcome-condiciones-item warning" href="<?php home_url();?>/terminos-y-condiciones/" title="">
      <!-- <i class="fa fa-phone"></i> -->
      <picture>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/warning.png" alt="" />
      </picture>
      <span>Condiciones</span>
    </a>
  </div>
  <div class="site-header_nav--item site-header_nav--social">
    <a href="<?php get_template_part( 'templates/header/add', 'facebook'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
    <a href="<?php get_template_part( 'templates/header/add', 'twitter'); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
    <a href="<?php get_template_part( 'templates/header/add', 'instagram'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
  </div>
</nav>
