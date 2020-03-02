<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
    <div class="card my-5">

        <div class="card-header">
            <h3 class="card-title text-primary">
                <span class="text-primary">Post By <?php
                    //the_author()
                    $f_name = get_the_author_meta('first_name');
                    $l_name = get_the_author_meta('last_name');
                    $github = get_the_author_meta('github_profile');
                    ?></span>
                <span class="text-success"><?php echo $f_name?> <?php echo $l_name?></span> in
                <span><?php echo get_the_date('l jS F, Y'); ?></span>
            </h3>

<!--            <span class="btn btn-primary"><a href="--><?php //echo $github; ?><!--" target="_blank">Github</a></span>-->
        </div>

        <div class="card-body">
            <span><?php the_content(); ?></span>
            <hr style="border: darkmagenta dashed 2px">
            <!-- start section page per page -->
            <div class="page_per_page">
               <span class="text-center font-weight-bold"><?php wp_link_pages(); ?></span>
            </div>
            <!-- end section page per page -->
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
        <!-- start comments -->
<!--            --><?php //get_template_part('includes/section' , 'commentsTemplate'); ?>
        <!-- end comments -->
    </div>
<?php endwhile; endif; ?>
