<?php 
/*
	Template Name: Blog
*/
?>
<?php get_header(); ?>

<div class="container page-indented">
	<div class="row">

		<div class="col-md-9">
			
			<h1><?php wp_title(''); ?></h1>

			<?php // Display blog posts on any page @ http://m0n.co/l
				$temp = $wp_query; $wp_query= null;
				$wp_query = new WP_Query(); $wp_query->query('showposts=5' . '&paged='.$paged);
				while ($wp_query->have_posts()) : $wp_query->the_post();
			?>

			<article class="excerpt-article">

				<div class="post-header">
					<h3><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h3>
					<p><em>
						Ditulis oleh <?php the_author() ?> 
						pada <?php echo the_time('l, F jS, Y'); ?> 
						di <?php the_category(', '); ?> |
						<a href="<?php comments_link() ?>">
							<?php comments_number(); ?>
						</a>
					</em></p>
				</div>

				<p class="blog-excerpt">
					<?php the_excerpt(); ?>
				</p>

			</article>

			<?php endwhile; ?>

			<?php if ($paged > 1) { ?>

				<nav id="nav-posts">
					<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
					<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
				</nav>

			<?php } else { ?>

				<nav id="nav-posts">
					<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
				</nav>

			<?php } ?>

			<?php wp_reset_postdata(); ?>
		</div>

		<div class="col-md-3">
			<?php get_sidebar(); ?>
		</div>

	</div>
</div>

<?php get_footer(); ?>