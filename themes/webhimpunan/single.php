<?php get_header(); ?>

<div class="container page-indented">
	<div class="row">

		<div class="col-md-9">
			

			<?php
				if (have_posts()) :
					while (have_posts()) : the_post(); 
			?>

			<div class="post-header">
				<h1><?php the_title(); ?></h1>
				<p><em>
					Ditulis oleh <?php the_author(); ?> 
					pada <?php echo the_time('l, F jS, Y'); ?> 
					di <?php the_category(', '); ?> |
					<a href="<?php comments_link() ?>">
						<?php comments_number(); ?>
					</a>
				</em></p>
			</div>

			<p class="post-content">
				<?php the_content(); ?>
			</p>

			<hr>

			<?php comments_template(); ?>

			<?php endwhile; endif; ?>

		</div>

		<div class="col-md-3">
			<?php get_sidebar(); ?>
		</div>

	</div>
</div>

<?php get_footer(); ?>