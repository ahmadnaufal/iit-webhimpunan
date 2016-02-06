<?php get_header(); ?>
    
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