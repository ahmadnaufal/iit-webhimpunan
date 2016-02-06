<?php
/**
 * Template Name: Prestasi
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
           
              <div class="navbar-header page-scroll">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                </button>
                
                   <a class="navbar-brand page-scroll" href="../../index.php/#hero">
                    <div class="brandicon">
                      <img src="<?php bloginfo('template_directory'); ?>/img/hmif1.png" alt="HMIF" style="float:none">
                      Home
                    </div> 
                </a>
            </div>

        <div class="collapse navbar-collapse">
            <ul class="sf-menu nav navbar-nav navbar-right" id="navigation"><!--YOUR NAVIGATION ITEMS STRAT BELOW-->
                <li class="dropdown">
                  <a class="page-scroll dropdown-toggle" href="../../index.php/#profile">Profil  <span class="caret"></span></a>
                    <ul>
                      <li><a class="page-scroll" href="../../index.php/#history">Sejarah</a></li>
                      <li><a class="page-scroll" href="../../index.php/#structure">Struktur Organisasi</a></li>
                    </ul>
                </li>

                <li><a class="page-scroll" href="../../index.php/#news">Berita</a></li>
                <li><a class="page-scroll" href="../../index.php/#event">Agenda</a></li>

                <li class="dropdown">
                    <a class="page-scroll dropdown-toggle" href="#achieve">Prestasi <span class="caret"></span></a>
                    <ul>
                    <?php
                        $prestasi = get_page_by_title( 'Prestasi' );
                        $mypages = get_pages( array( 'child_of' => $prestasi->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );

                        foreach( $mypages as $page ) { 
                          $link = "#" . $page->ID; 
                          ?>

                            <li><a class="page-scroll" href="<?php echo $link; ?>"><?php echo $page->post_title; ?></h2></a></li>
                        <?php
                        } 
                    ?>
                    </ul>
                </li>

                <li><a class="page-scroll" href="../../index.php/#gallery">Galeri</a></li>
                <li><a class="page-scroll" href="#footer">Kontak</a></li>
                
            </ul>
        
        </div><!--.nav-collapse -->
    </div>
</nav><!--navbar end-->       

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

