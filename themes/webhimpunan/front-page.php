<?php get_header(); ?>

  <!-- ===========================
  HEADER AREA
  =========================== -->
  <div id="header-landing">
    <div class="overlay"></div>
    <div class="container" id="herocontent">
      <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>

      <?php endwhile; endif; ?>
    </div>
  </div><!--HEADER AREA END-->

  <!-- ===========================
  PROFILE SECTION START
  =========================== -->
  <div id="profile" class="container section1">
    <div class="setionhead wow bounceIn" data-wow-duration="2s">
      <h2><span class="icon icon-user" style="padding-right:10px"></span> Profil</h2>
    </div>

    <!-- LEFT PART OF THE profile SECTION --> 
    <div class="textbox">

      <?php $recent = new WP_Query("pagename=profil"); while($recent->have_posts()) : $recent->the_post();?>
      <?php the_content(); ?>
      <?php endwhile; ?>

    </div>

    <div class="sectionfooter" style="padding-top:10px">
      <button class="btn" onclick="location.href='index.php/profil/';" id="archive"><span class="glyphicon glyphicon-book"></span> Read More</button>
    </div>           
  </div><!-- profile SECTION END -->

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

        <?php if (dynamic_sidebar('third-section')); ?>

        <!-- <div class="col-md-4">
          <div class="news-box">
            
          </div>
        </div>

        <div class="col-md-4">
          <div class="news-box">
            
          </div>
        </div>

        <div class="col-md-4">
          <div class="news-box">
            
          </div>
        </div> -->

      </div>
    </div>

    <div class="sectionfooter">
      <button class="btn" id="archive"><span class="glyphicon glyphicon-book"></span> SEE ALL</button>
    </div>
  </div><!-- NEWS SECTION END -->

  <!-- ===========================
    EVENT START
    =========================== -->

  <div id="event" class="container section3">  
    <div class="sectionhead wow bounceInUp" data-wow-duration="2s">
      <h2 style="color:#000000"><span class="icon icon-calendar" style="padding-right:10px"></span> Events Calendar </h2>
      <hr class="separetor">            
    </div>

    <div class="sectioncontent container">
      <div class="events-calendar">
      <?php echo do_shortcode('[calendar id="117"]'); ?>
      </div>
    </div>
  </div>


  <!-- ===========================
  ACHIEVEMENT SECTION START
  =========================== -->
  <div id="achieve" class="container section3">

    <!-- ACHIEVEMENT SECTION HEADING START -->
    <div class="sectionhead  row wow fadeInUp">
      <h2 style="color:#000000"><span class="icon icon-trophy" style="padding-right:10px"></span>Prestasi</h2>
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
      <button class="btn" id="archive"><span class="glyphicon glyphicon-book"></span> SEE ALL</button>
    </div>
  </div> <!-- ACHIEVEMENT SECTION END -->

  <!-- ===========================
  GALLERY SECTION START
  =========================== -->
  <div id="gallery" class="container section4">
    <div class="sectionhead wow bounceInUp" data-wow-duration="2s">
      <h2><span class="icon icon-picture" style="padding-right:10px"></span>Galeri</h2>
      <hr class="separetor"> 
        <?php $recent = new WP_Query("pagename=galeri"); while($recent->have_posts()) : $recent->the_post();?>
        <?php the_content(); ?>
        <?php endwhile; ?>     
    </div>
  </div><!-- GALLERY SECTIONHEAD END -->

<?php get_footer(); ?>