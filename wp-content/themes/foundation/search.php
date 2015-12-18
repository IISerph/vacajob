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
  if (have_posts()) :?>
  <h2>Zoekresultaten voor: <?php /* haalt search result op */the_search_query(); ?></h2>
  
  <?php
    //loopt deze posts
while (have_posts()) : the_post();?>

    <!-- Main row -->
<div class="row">
<div class="large-12 columns"><?php /*plaatst gesetten thumbnail*/ the_post_thumbnail('banner-thumbnail');?><a href="<?php the_permalink(); ?>"><h3><?php /* weergeeft titel van post*/ the_title(); ?></h3></a>
<p class="postinfo"><?php /* datum*/ the_time('jS F Y g:i a'); ?> | by <a href="<?php /*haalt post van author op*/ echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a> | Posted in 
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
  <p><?php /*weergeeft tekst in kort */the_excerpt(); ?>
    </p> 
  </div>
  
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
