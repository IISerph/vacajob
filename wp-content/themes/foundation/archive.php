 <?php 
  //voegt header.php toe
  get_header();?>
    <!-- Line row -->
<div class="row">
  <div class="large-12 columns">
   <hr>
  </div>
  <?php
  //haalt posts op
  if (have_posts()) : ?><h2><?php
  //weergeeft de categorie weer
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
<div class="large-6 columns"><?php /*plaatst gesetten thumbnail*/the_post_thumbnail();?><a href="<?php the_permalink(); ?>">

<h3><?php /* weergeeft titel van post*/ the_title(); ?></h3></a>

<p class="postinfo"><?php /*weergeeft de tijd voluit  */the_time('jS F Y g:i a'); ?> | by <a href="<?php /* haalt alle posts van author op */ echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php /* weergeeft de author */the_author();?></a> | Posted in 
<?php

//weergeeft hoe metadata moet weergeven worden
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
  <p><?php /* verkort alle teksten*/ the_excerpt(); ?></p></div>
<?php
//beindigt loop van posts ophalen
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
		//voegt footer.php toe
	get_footer();
?>
