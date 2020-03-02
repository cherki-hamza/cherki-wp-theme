<div class="section-content">
	<?php if (have_posts() ): while (have_posts()) : the_post();   ?>
        <div class="card my-2">
            <div class="card-title my-2 mx-2">
                <a href="<?php echo get_the_permalink(); ?>"><h3 class="text-primary"><?php the_title(); ?></h3></a>
            </div>
            <div class="card-body">
                <span><?php the_content(); ?></span>
<!--                <a href="--><?php //the_permalink(); ?><!--"><span class="btn btn-success float-right">Read more...</span></a>-->
            </div>
        </div>





	<?php endwhile; endif; ?>
</div>