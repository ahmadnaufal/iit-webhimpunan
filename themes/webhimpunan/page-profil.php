<?php
/**
 * Template Name: Profil
 */
?>

<?php get_header(); ?>

              
<!-- ===========================
 NAVBAR START
 =========================== -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
       	

       <?php 
          // Fix menu overlap bug..
          if ( is_admin_bar_showing() ) echo '<div style="min-height: 28px;"></div>'; 
        ?>

       <div class="container">
           
              <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                </button>
                
                   <a class="navbar-brand" href="../../index.php/#hero">
                    <div class="brandicon">
                      <img src="<?php bloginfo('template_directory'); ?>/img/hmif1.png" alt="HMIF" style="float:none">
                      Home
                    </div> 
                </a>
            </div>

        <div class="collapse navbar-collapse">
            <ul class="sf-menu nav navbar-nav navbar-right"><!--YOUR NAVIGATION ITEMS STRAT BELOW-->
                <li><a class="page-scroll" href="#profile">Profil</a>
                    <ul>
                      <li><a class="page-scroll" href="#history">Sejarah</a></li>
                      <li><a class="page-scroll" href="#structure">Struktur Organisasi</a></li>
                    </ul>
                </li>
                <li><a href="../../index.php/#news">Kegiatan</a>
                    <ul>
                      <li><a href="../../index.php/#">Kalender & Event</a></li>
                      <li><a href="../../index.php/#">Keprofesian</a></li>
                      <li><a href="../../index.php/#">Pojok Akademik</a></li>
                    </ul>
                </li>

                <li><a href="../../index.php/#achieve">Prestasi</a></li>
                <li><a href="../../index.php/#gallery">Galeri</a></li>
                <li><a href="../../index.php/#footer">Kontak</a></li>
                
            </ul>
        
        </div><!--.nav-collapse -->
    </div>
</nav><!--navbar end-->       

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

<!-- Sejarah -->
<div id="history" class="container section4">
		<div class="sectionhead wow flipInX" data-wow-duration="2s">
             <h2>Sejarah</h2>
             <hr class="separetor"> 
      	</div>
</div>
<!-- Sejarah End -->

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

