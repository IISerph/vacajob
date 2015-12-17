<!doctype html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
        <!--<link rel="stylesheet" href="css/foundation.css" />-->
    <!--<link rel="stylesheet" href="style.css" />-->
    <!--<script src="js/vendor/modernizr.js"></script>-->
  </head>
  <body <?php body_class(); ?>>
    <!-- Titel row --> 
<div class="row">
  <div class="large-12 columns">
    <h1><?php bloginfo('name');?></h1>
  </div>
 </div>

    <!-- Header row -->
<div class="row">
  <div class="large-12 columns"><nav class="top-bar" data-topbar role="navigation">
  <section class="top-bar-section">
    <!-- Nav Section -->
    <ul class="center">
    <?php $args = array(
	'theme_location' => 'home'
	); ?>
<?php wp_nav_menu($args); ?>
    </ul>
  </section>
</nav>
</div>
</div>


