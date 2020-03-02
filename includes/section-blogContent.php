<?php get_header(); ?>

<div class="container">
	<?php if (have_posts() ): while (have_posts()) : the_post();   ?>


        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-4">
					<?php if (has_post_thumbnail()): ?>
                        <div class="text-center">
                            <img src="<?php the_post_thumbnail_url('blog-small'); ?>" class="img-fluid mb-2 img-thumbnail mt-5" alt="<?php the_title(); ?>">
                        </div>
					<?php else:  ?>
                        <span class="text-danger text-center">No featured image</span>
					<?php endif; ?>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <a href="<?php echo get_the_permalink(); ?>"><h3 class="card-title"><?php the_title(); ?></h3></a>
                        <p class="card-text"><span><?php the_content(); ?></span> </p>

                        <hr style="border: darkmagenta dashed 2px">
                        <!-- start section page per page -->
                        <div class="page_per_page">
                            <span class="text-center font-weight-bold"><?php wp_link_pages(); ?></span>
                        </div>
                        <!-- end section page per page -->

                        <p class="card-text"><small class="text-muted">Last updated <span><?php echo get_the_date('l jS F, Y'); ?></span></small></p>
                    </div>

                    <div class="card-footer">
                        <!-- start tags -->
		                <?php if(has_tag()): ?>
			                <?php
			                $tags = get_the_tags();
			                //var_dump($tags);
			                foreach ($tags as $tag): ?>
                                <a href="<?php echo get_tag_link($tag->term_id)  ?>"><span class="badge badge-pill badge-primary font-weight-bold mr-3"><?php echo $tag->name; ?></span></a>
			                <?php endforeach; ?>
		                <?php endif; ?>
                        <!-- end tags -->

                        <hr style="border: gold solid 2px">

                        <!-- start category -->
		                <?php if(has_category()): ?>
			                <?php
			                $categories = get_the_category();
			                //var_dump($categories);
			                foreach ($categories as $cat): ?>
                                <a href="<?php echo get_category_link($cat->term_id)  ?>"><span class="badge badge-pill badge-primary font-weight-bold mr-3"><?php echo $cat->name; ?></span></a>
			                <?php endforeach; ?>
		                <?php endif; ?>
                        <!-- end category -->
                    </div>

                </div>
            </div>
        </div>





	<?php endwhile; endif; ?>
</div>


<?php get_footer(); ?>
