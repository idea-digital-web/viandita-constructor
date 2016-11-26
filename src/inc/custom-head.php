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
  get_template_part( 'templates/head/favicon');
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
