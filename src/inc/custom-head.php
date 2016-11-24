<?php

/** ADD META VIEWPORT */
function add_meta_viewport() {
  ?>
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <?php
}

/** ADD FAVICON
 * http://www.favicon-generator.org/
*/
function add_favicon(){
  ?>
  <!-- <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico"> -->
  <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico">
  <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('stylesheet_directory'); ?>/images/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="36x36"  href="<?php bloginfo('stylesheet_directory'); ?>/images/android-icon-36x36.png">
  <link rel="icon" type="image/png" sizes="48x48"  href="<?php bloginfo('stylesheet_directory'); ?>/images/android-icon-48x48.png">
  <link rel="icon" type="image/png" sizes="72x72"  href="<?php bloginfo('stylesheet_directory'); ?>/images/android-icon-72x72.png">
  <link rel="icon" type="image/png" sizes="96x96"  href="<?php bloginfo('stylesheet_directory'); ?>/images/android-icon-96x96.png">
  <link rel="icon" type="image/png" sizes="144x144"  href="<?php bloginfo('stylesheet_directory'); ?>/images/android-icon-144x144.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('stylesheet_directory'); ?>/images/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon-96x96.png">
  <link rel="manifest" href="<?php bloginfo('stylesheet_directory'); ?>//manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php bloginfo('stylesheet_directory'); ?>/images/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <?php
}

function add_selectivzr() {
  ?>
  <!--[if (gte IE 6)&(lte IE 8)]>
      <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.min.js"></script>
      <noscript><link rel="stylesheet" href="[fallback css]" /></noscript>
  <![endif]-->
  <?php
}


 ?>
