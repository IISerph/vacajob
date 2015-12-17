 <?php 
  get_header();?>
    <!-- Line row -->
<div class="row">
  <div class="large-12 columns">
   <hr>
  </div>

   <!-- Main row -->
<div class="row">
<div class="large-12 columns"><img src="<?php the_post_thumbnail();?>"  alt="afb1" /><a href="#"><h3><?php the_title(); ?></h3></a><p class="postinfo"><?php the_time('jS F Y g:i a'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a> | Posted in 
<?php

$categories = get_the_category();
$seperator = ", ";
$output = '';

if($categories) {
	foreach($categories as $category){
		
		$output .= $category->cat_name . $seperator;
	}
	echo $output;
}

 ?>
 </p>
  <p><?php the_content(); ?></p></div>

    <!-- Line row -->
<div class="row">
  <div class="large-12 columns">
   <hr>
  </div>
</div>
</div>
  	<?php
	get_footer();
?>

