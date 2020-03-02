<?php
/*
 * Template Name: Contact us
 */

 get_header();
 ?>

<div class="container">


	<?php if (have_posts() ): while (have_posts()) : the_post();   ?>

    <div class="row my-5">
		<div class="col-6">
            <h1>template Contact us</h1>
            <h3 class="text-success"><?php the_title(); ?></h3>
            <span><?php the_content(); ?></span>
        </div>
        <div class="col-6 bg-info">
          <h3>contact col 6</h3>
        </div>
    </div>
	<?php endwhile; endif; ?>

</div>

<?php get_footer();  ?>