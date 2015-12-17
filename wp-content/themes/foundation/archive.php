 <?php 
  get_header();?>
    <!-- Line row -->
<div class="row">
  <div class="large-12 columns">
   <hr>
  </div>
  <?php
  if (have_posts()) : ?><h2><?php
  if( is_category()){
	  single_cat_title();
  }
  elseif ( is_tag() ) {
	  single_tag_title();
  }
    elseif ( is_author() ) {
	  the_post();
	  echo 'Author Archives: ' . get_the_author();
	  rewind_posts();
  }
  elseif (is_day()){
	  echo 'Daily Archives: ' . get_the_date();
  }
  elseif (is_month()){
	  echo 'Monthly Archives: ' . get_the_date('F Y');
  }
  elseif (is_year()){
	  echo 'Yearly Archives: ' . get_the_date('Y');
  }
  else {
	  echo 'Archives';
  }
  
  
   ?>
   </h2>
  
  <?php
while (have_posts()) : the_post();?>
    <!-- Main row -->
<div class="row">
<div class="large-6 columns"><?php the_post_thumbnail();?><a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
<p class="postinfo"><?php the_time('jS F Y g:i a'); ?> | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a> | Posted in 
<?php

$categories = get_the_category();
$seperator = ", ";
$output = '';

if($categories) {
	foreach($categories as $category){
		
		$output .= '<a href="' . get_category_link($category->term_id).' ">'. $category->cat_name .'</a>'  . $seperator;
	}
	echo trim($output, $seperator);
}

 ?>
 </p>
  <p><?php the_excerpt(); ?></p></div>
<?php
	endwhile;
	else :
		echo '<p>No content found</p>';
	endif;
	?>
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
