<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">    

        <!-- ===========================
        SITE TITLE
        =========================== -->
        <title><?php bloginfo('name'); ?></title><!-- This is what you see on your browser tab-->
        
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
        
        <?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
        <?php wp_enqueue_script("jquery"); ?>
        <?php wp_head(); ?>

    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" <?php body_class(); ?>>
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
                    <button type="button" id="menubutton" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                        
                    <a class="navbar-brand page-scroll" href="<?php bloginfo('url') ?>">
                        <div class="brandicon">
                            <img src="<?php bloginfo('template_directory'); ?>/img/hmif1.png" alt="HMIF" style="float:none">
                                <?php bloginfo('name') ?>
                        </div> 
                    </a>
                </div>

                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav sf-menu navbar-right" id="navigation"><!--YOUR NAVIGATION ITEMS STRAT BELOW-->
                        <li class="dropdown">
                            <a class="page-scroll dropdown-toggle" data-toggle="dropdown" href="#profile">Profil  <span class="caret"></span></a>
                            <ul>
                                <li><a class="page-scroll" href="index.php/profil/#history">Sejarah</a></li>
                                <li><a class="page-scroll" href="index.php/profil/#structure">Struktur Organisasi</a></li>
                            </ul>
                        </li>

                        <li><a class="page-scroll" href="#news">Berita</a></li>
                        <li><a class="page-scroll" href="#event">Agenda</a></li>

                        <li class="dropdown">
                            <a class="page-scroll dropdown-toggle" href="#achieve">Prestasi <span class="caret"></span></a>
                            <ul>

                                <?php
                                    $prestasi = get_page_by_title( 'Prestasi' );
                                    $mypages = get_pages( array( 'child_of' => $prestasi->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );

                                    foreach( $mypages as $page ) { 
                                        $link = "index.php/prestasi/#" . $page->ID; 
                                ?>

                                <li><a class="page-scroll" href="<?php echo $link; ?>"><?php echo $page->post_title; ?></h2></a></li>
                                <?php } ?>
                            </ul>
                        </li>

                        <li><a class="page-scroll" href="#gallery">Galeri</a></li>
                        <li><a class="page-scroll"href="#footer">Kontak</a></li>
                        
                    </ul>
                
                </div><!--.nav-collapse -->
            </div>
        </nav><!--navbar end-->        
        
    
    <!-- ===========================
    profile SECTION START
    =========================== -->
     <div id="profile" class="container section1">
      <div class="setionhead wow bounceIn" data-wow-duration="2s">
             <h2><span class="icon icon-user" style="padding-right:10px"></span> Profil</h2>
      </div>
 

        <div class="textbox">

             <?php $recent = new WP_Query("pagename=profil"); while($recent->have_posts()) : $recent->the_post();?>
                <?php the_content(); ?>
            <?php endwhile; ?>

        </div>
        
      <div class="sectionfooter" style="padding-top:10px">
          <button class="btn" onclick="location.href='index.php/profil/';" id="archive"><span class="glyphicon glyphicon-book"></span> Read More</button>
      </div>      
   
       
               
     </div>
     <!-- profile SECTION END -->

    <!-- ===========================
    NEWS SECTION START
    =========================== -->
    <div id="news" class="section2 container">
        <div class="sectionhead wow bounceInUp" data-wow-duration="2s">
           <h2 style="color:#000000"><span class="icon icon-calendar" style="padding-right:10px"></span> Berita </h2>
           <hr class="separetor">            
        </div><!-- news SECTION HEAD END -->   
        
        <!-- NEWS ITEMS START -->
         <div class="sectioncontent container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="news-box">
                            <div class="news-image">
                            </div>
                            <div class="news-content">
                                <h1>News 1</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit officiis debitis quod ut incidunt quam dolores necessitatibus repudiandae molestias at eius reiciendis ad autem, facilis, delectus sunt consectetur architecto quaerat!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="news-box">
                            <div class="news-image">
                            </div>
                            <div class="news-content">
                                <h1>News 2</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda sed et nihil pariatur facere animi dolorum harum molestias dolore libero magni minus, minima esse doloremque aliquam, laborum, enim, nemo! Facilis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="news-box">
                            <div class="news-image">
                            </div>
                            <div class="news-content">
                                <h1>News 3</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit nam vitae accusamus odio odit neque dolor, autem voluptate eveniet. Rerum necessitatibus iusto sequi veritatis perspiciatis nesciunt officiis autem harum voluptatem!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sectionfooter">
                <button class="btn" id="archive"><span class="glyphicon glyphicon-book"></span> SEE ALL</button>
            </div>
        </div>

        
    
    <!-- ===========================
    EVENT START
    =========================== -->
    <div id="event" class="container section3">
      <div class="sectionhead wow bounceInUp" data-wow-duration="2s">
           <h2 style="color:#000000"><span class="icon icon-calendar" style="padding-right:10px"></span> Agenda </h2>
           <hr class="separetor">            
        </div><!-- news SECTION HEAD END -->


        <div class="sectioncontent container">
           <div class="events-calendar">
                <?php echo do_shortcode('[calendar id="117"]'); ?>
          </div>
        </div>
        
      </div>
    <!-- NEWS SECTION END -->


     <!-- ===========================
    ACHIEVEMENT SECTION START
    =========================== -->
    <div id="achieve" class="container section4">
       
        <!-- ACHIEVEMENT SECTION HEADING START -->
        <div class="sectionhead  row wow fadeInUp">
            <h2><span class="icon icon-trophy" style="padding-right:10px"></span>Prestasi</h2>
           <hr class="separetor"> 
         </div><!--ACHIEVEMENT SECTION HEADING END-->
         

        <div id="demo">
        <div class="container">
          <div class="row">
            <div class="span12">

              <div id="owl-demo" class="owl-carousel">
                <?php $recent = new WP_Query("pagename=home-prestasi"); while($recent->have_posts()) : $recent->the_post();?>
                  <?php $contents = get_the_content(); ?>
                <?php endwhile; ?>
                <?php
                  $contents = str_replace("<ul>","",$contents);
                  $contents = str_replace("<ol>","",$contents);
                  $contents = explode("<li>",$contents);
                  $contents = explode("</li>", implode("",$contents));
                  foreach ($contents as $content) {
                    ?>
                    <div class="item"><img class="lazyOwl"/>
                        <?php echo $content ?>
                    </div>
                  <?php
                  }
                ?>
              </div>
            </div>
          </div>



        </div>
      </div>

      <div class="sectionfooter" style="padding-top:10px">
        <button class="btn" id="archive" onclick="location.href='index.php/prestasi/';"><span class="glyphicon glyphicon-book"></span> SEE ALL</button>
      </div>

  
    </div>
    <!-- ACHIEVEMENT SECTION END -->



    <!-- ===========================
    GALLERY SECTION START
    =========================== -->
    <div id="gallery" class="container section3">
        <div class="sectionhead wow bounceInUp" data-wow-duration="2s">
           <h2 style="color:#000000"><span class="icon icon-picture" style="padding-right:10px"></span>Galeri</h2>
           <hr class="separetor"> 
              <?php echo photo_gallery(2); ?>           
        </div><!-- GALLERY SECTIONHEAD END -->


    </div><!-- TESTIMONIAL SECTION END -->



<?php get_footer(); ?>