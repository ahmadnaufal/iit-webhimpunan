<?php
/**
 * Template Name: Profil
 */
?>

<?php get_header(); ?>   

<!-- Profile -->
<div id="profile" class="container section3">

	

	<div class="row">
		<div class="sectionhead wow flipInX" data-wow-duration="2s">
             <h2 style="color:#000000"><?php the_title(); ?></h2>
             <hr class="separetor"> 
      	</div>


    <div class="textbox">
  		<?php 
  			if ( have_posts() ) : 
  				while ( have_posts() ) : the_post(); 
  	  			the_content();

  		 		endwhile;
  			endif;
  		?>
    </div>

	</div>

</div>
<!-- Profile End -->

<!-- make it unresponsive -->
<script>
	$(document).ready(function(){
		var width = $("#structure").css("width");
		var height = $("#structure").css("height");
    	$("#profile").css("min-width", width);
    	$("#history").css("min-width", width);
    	$("#structure").css("min-width", width);
    	$("#footer").css("min-width", width);
	});
</script>

<?php get_footer(); ?>

