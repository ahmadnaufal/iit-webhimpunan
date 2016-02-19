<!-- Struktur Organisasi -->
<div id="structure" class="container section2">
		<?php $recent = new WP_Query("pagename=struktur"); while($recent->have_posts()) : $recent->the_post();?>
       		<div class="sectionhead wow tada" data-wow-duration="2s">
             	<h2 style="color:#000000"><?php the_title(); ?></h2>
             	<hr class="separetor"> 
      		</div>
    
       			<?php the_content(); ?>
   
		<?php endwhile; ?>
	</div>
</div>
<!-- Struktur Organisasi End -->