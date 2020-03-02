

	<?php if (have_posts() ): while (have_posts()) : the_post();   ?>

    <div class="card mb-3">
                    <div class="row no-gutters">
                        <div class="col-md-4">
				            <?php if (has_post_thumbnail()): ?>
                                <img src="<?php the_post_thumbnail_url('blog-small'); ?>" class="img-fluid mb-2 img-thumbnail" alt="<?php the_title(); ?>">
				            <?php else:  ?>
                                <span class="text-danger text-center">No featured image</span>
				            <?php endif; ?>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <a href="<?php echo get_the_permalink(); ?>"><h3 class="card-title"><?php the_title(); ?></h3></a>
                                <p class="card-text"><span><?php the_excerpt(); ?></span> </p>
                                <a href="<?php echo get_post_permalink(); ?>"><span class="btn btn-success float-right">Read more...</span></a>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>

	<?php endwhile; endif; ?>


