 <?php 
  get_header();?>
    <!-- Line row -->
    <div class="row">
  <div class="large-12 columns">
   <hr>
  </div>

    <!-- Main row -->
<div class="row">
  <div class="large-12 columns"><h4></h4></div>
    <?php if (is_page(info)){ ?><div class="large-3 columns"><?php the_post_thumbnail('banner-thumbnail');?></div><?php } ?>
     <?php
  if (have_posts()) :
while (have_posts()) : the_post();?>
      <?php if (is_page(info)){ ?> <div class="large-9 columns"><?php } ?>
      <?php if (!is_page(info)){ ?> <div class="large-12 columns"><?php } ?>
  <p><?php the_content(); ?></p>
</div>
<?php
	endwhile;
	else :
		echo '<p>No content found</p>';
	endif;
	?>
</div>
<div class="large-12 columns">
  <h5>Deze site is gemaakt door Nicolas Dubiez co-creator van Vacajob samen met Kenneth Meert.</h5>
  </div>

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
