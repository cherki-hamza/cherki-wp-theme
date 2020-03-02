<?php get_header(); ?>

    <div class="container my-5">
        <h1 class="text-primary font-weight-bold text-center">Search Result for <?php echo get_search_query(); ?></h1>
        <h3><?php echo single_cat_title()?></h3>
		<?php get_template_part( 'includes/section', 'searchResult' ); ?>

        <!-- start and get the pagination template part -->
		<?php get_template_part( 'includes/section', 'archivePagination' ); ?>
        <!-- start and get the pagination template part -->


        <!--	    --><?php //previous_posts_link('prev'); ?>
        <!--        --><?php //next_posts_link('next'); ?>


    </div>


<?php get_footer(); ?>