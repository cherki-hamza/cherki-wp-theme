<?php get_header(); ?>

<div class="container">
    <span>Category blog template</span>
    <h1><?php echo single_cat_title()?></h1>
	<?php get_template_part('includes/section' , 'archive'); ?>

	<!-- start and get the pagination template part -->
	<?php  get_template_part('includes/section' , 'archivePagination');  ?>
	<!-- start and get the pagination template part -->


</div>


<?php get_footer(); ?>