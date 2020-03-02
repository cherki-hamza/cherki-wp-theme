<div class="post-paginate">

	<?php
	if (get_previous_posts_link()){
		previous_posts_link('<i class="fal fa-chevron-left fa-fw fa-lg"></i> prev');
	}else{
		echo '<span class="opacity">No Previous Page</span>';
	}
	?>

	<?php
	if (get_next_posts_link()){
		next_posts_link('next <i class="fal fa-chevron-right fa-fw fa-lg"></i>');
	}else{
		echo '<span class="opacity">No Previous Page</span>';
	}
	?>

</div>