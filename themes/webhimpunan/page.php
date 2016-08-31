<?php 
/*
	Template Name: Page with Sidebar
*/
?>
<?php get_header(); ?>

<div class="container page-indented">
	<div class="row">

		<div class="col-md-9">
			
			<h1><?php wp_title(''); ?></h1>

			<?php
				if (have_posts()) :
					while (have_posts()) : the_post(); 
			?>

			<?php endwhile; endif; ?>

		</div>

		<div class="col-md-3">
			<?php get_sidebar(); ?>
		</div>

	</div>
</div>

<?php get_footer(); ?>