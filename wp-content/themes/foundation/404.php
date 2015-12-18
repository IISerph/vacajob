 <?php 
 //voegt header.php toe
  get_header();?>   
    <!-- Line row -->
    <div class="row">
  <div class="large-12 columns">
   <hr>
  </div>

      <!-- Main row -->
      <div class="row">
<div class="large-12 columns"><img src="<?php bloginfo('template_directory');// zorgt dat men vindt waar de image staat ?>/img/404.png" alt="error404" />

  <p>The HTTP 404 Not Found Error means that the webpage you were trying to reach could not be found on the server. It is a Client-side Error which means that either the page has been removed or moved and the URL was not changed accordingly, or that you typed in the URL incorrectly.</p></div>

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