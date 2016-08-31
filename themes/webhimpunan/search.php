<?php 
/*
	Template Name: Search Page
*/
?>
<?php get_header(); ?>

<div class="container page-indented">
	<div class="row">

		<div class="col-md-9">
		
			<h1><?php wp_title(''); ?></h1>

			<?php if ( have_posts() ) :  ?>

				<?php while(have_posts()) : the_post(); ?>

				<article class="excerpt-article">		

					<p class="blog-excerpt">
						<?php get_search_form(); ?>
					</p>

				</article>

			<?php endwhile;endif; ?>

		</div>

		<div class="col-md-3">
			<?php get_sidebar(); ?>
		</div>

	</div>
</div>

<?php get_footer(); ?>