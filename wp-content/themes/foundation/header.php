<!doctype html>
<html <?php /* bepaald taal settings die in wordpress worden weergeven*/language_attributes();?>>
  <head>
    <meta charset="<?php /* bepaald charset als in wordpress*/bloginfo('charset');?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php /*blognaam*/bloginfo('name'); ?></title>
    <?php /* voor eventueel extra data in de header te steken*/wp_head(); ?>
        <!--<link rel="stylesheet" href="css/foundation.css" />-->
    <!--<link rel="stylesheet" href="style.css" />-->
    <!--<script src="js/vendor/modernizr.js"></script>-->
  </head>
  <body <?php /* om ody te reoonizen in wordpress*/body_class(); ?>>
    <!-- Titel row --> 
<div class="row">
  <div class="large-9 columns">
    <h1><?php bloginfo('name');?></h1>
  </div>
        <div class="large-3 columns"><div class="hd-search"><?php /* haalt searchform.php op en maakt een complee werkende search engine aan*/get_search_form(); ?></div></div>
 </div>

    <!-- Header row -->
<div class="row">
  <div class="large-12 columns"><nav class="top-bar" data-topbar role="navigation">
  <section class="top-bar-section">
    <!-- Nav Section -->
    <ul class="center">
    <?php $args = array(
	//bepaald een benaming van een munu waar je in wordpress paginas aan kunt linken etc 
	'theme_location' => 'home'
	); ?>
<?php /*maakt navigatiemenu aan van de bepaalde array */wp_nav_menu($args); ?>
    </ul>
  </section>
</nav>
</div>
</div>


