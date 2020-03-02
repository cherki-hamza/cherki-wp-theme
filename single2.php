<?php get_header(); ?>

<div class="container">
    <h1><?php the_title(); ?></h1>

    <!-- start feature image -->
    <?php if (has_post_thumbnail()): ?>
      <div class="">
          <img src="<?php the_post_thumbnail_url('blog-large'); ?>" class="img-fluid mb-2 img-thumbnail" alt="">
      </div>
    <!-- end feature image -->
    <?php endif; ?>

	<?php get_template_part( 'includes/section', 'blogContent' ); ?>

	<?php get_footer(); ?>
</div>