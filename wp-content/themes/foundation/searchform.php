<form role="search" method="get"  id="searchform" action="<?php echo home_url( '/' ); ?>">
<div><input type="text" value="" name="s" id="s" placeholder="<?php /*haalt searchresult op*/ the_search_query(); ?>" /><input type="submit" id="searchsubmit" value="Zoeken" />
</div>
</form>