<?php
/**
 * Template Name: Prestasi
 */
?>

<?php get_header(); ?>     

<!-- List Prestasi -->
<div id="achieve" class="container section3">

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

      <?php
        $mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );

        foreach( $mypages as $page ) {  
          ?>
            <?php  
              $content = $page->post_content;
              if ( ! $content ) // Check for empty page
                continue;

              $content = apply_filters( 'the_content', $content );
              $section = "#" . $page->ID;
            ?>
              <h2><a class="page-scroll" href="<?php echo $section; ?>"><?php echo $page->post_title; ?></a></h2>
        <?php
        } 
      ?>
    </div>

	</div>

</div>
<!-- List Prestasi End -->


<!-- Masing-masing Prestasi -->
<div id="achieves" class="container section2">
<div class = "row">
  <?php
    $mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );

    foreach( $mypages as $page ) {  
      ?>
      <div class="textbox" id="<?php echo $page->ID ?>">
        <?php  
          $content = $page->post_content;
          if ( ! $content ) // Check for empty page
            continue;

          $content = apply_filters( 'the_content', $content );
        ?>
        <div class="sectionhead"><h2 style="color:#000000"><?php echo $page->post_title; ?></h2></div>
        <div class="entry"><?php echo $content; ?></div>
        <br><br>
      </div>
    <?php
    } 
  ?>
</div>
</div>
<!-- Each Prestasi End -->

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

