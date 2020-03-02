<?php get_header('secondary'); ?>

<div class="container">

    <h1 class="text-primary my-3 font-weight-bold">hello this is cherki hamza front page</h1>
    <h3 class="text-success"><?php the_title(); ?></h3>
    <span><?php get_search_form(); ?></span>
    <div class="row">
        <div class="col-8">
            <p><?php get_template_part('includes/section' , 'content'); ?></p>
        </div>
        <div class="card card-body col-4">
	        <?php if (is_active_sidebar('blog-sidebar')): ?>
		        <?php dynamic_sidebar('blog-sidebar'); ?>
	        <?php endif; ?>
        </div>
    </div>


</div>



<?php get_footer();  ?>
