<?php
/*
 * Template Name: About us
 */
get_header();
?>

<div class="container my-5">

    <div class="row">
        <div class="col-8">
	        <?php if (have_posts() ): while (have_posts()) : the_post();   ?>
                <h1>template About us</h1>
                <h3 class="text-success"><?php the_title(); ?></h3>
                <span><?php the_content(); ?></span>

	        <?php endwhile; endif; ?>
        </div>
        <div class="col-4">
           <?php if (is_active_sidebar('page-sidebar')): ?>
	              <?php dynamic_sidebar('page-sidebar'); ?>
           <?php endif; ?>
        </div>
    </div>

</div>

<?php get_footer();  ?>