<form class="form-inline my-2 my-lg-0" action="/" method="get">

<!--	<input type="hidden" name="cat" value="exemple : 15 ==> this is the id for your own category for custom search bay category ">-->
	<input class="form-control mr-sm-2" type="search" name="s" value="<?php the_search_query(); ?>" required="required" placeholder="Search" aria-label="Search">
	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

	</form>