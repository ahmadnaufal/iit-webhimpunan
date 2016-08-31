<?php 
/*
	Template Name: Full Width Page
*/
?>
<?php get_header(); ?>

<div class="container page-indented">
	<div class="row">

		<div class="col-md-12">
			
			<h1><?php wp_title(''); ?></h1>

			<?php
				if (have_posts()) :
					while (have_posts()) : the_post(); 
			?>

			<?php endwhile; endif; ?>

		</div>

	</div>
</div>

<?php get_footer(); ?>