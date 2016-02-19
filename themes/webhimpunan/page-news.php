<div class="col-md-8">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<h1><?php the_title(); ?></h1>
	<p><?php the_content(); ?></p>

	<?php endwhile; endif; ?>
</div>
<div class="col-md-4">
	<?php get_sidebar(); ?>
</div>