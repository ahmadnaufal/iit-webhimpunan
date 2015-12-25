<?php get_header(); ?>
        
        
       <header>               
        <!-- ===========================
        HERO AREA
        =========================== -->
       
        <div id="hero">  
            
            <div class="container herocontent"> 
            </div>
                      
        </div><!--HERO AREA END-->
            
        <!-- ===========================
         NAVBAR START
         =========================== -->
          <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
               <div class="container">
                   
                      <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                           <span class="sr-only">Toggle navigation</span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                        </button>
                        
                           <a class="navbar-brand" href="#hero">
                            <div class="brandicon">
                              <img src="img/HMIF.png" alt="HMIF" style="float:none">
                              HMIF
                            </div> 
                        </a>
                    </div>

                <div class="collapse navbar-collapse">
                    <ul class="sf-menu nav navbar-nav navbar-right"><!--YOUR NAVIGATION ITEMS STRAT BELOW-->
                        <li><a href="#profile">Profil</a>
                            <ul>
                              <li><a href="sejarah.html">Sejarah</a></li>
                              <li><a href="pengurus.html">Pengurus</a></li>
                            </ul>
                        </li>
                        <li><a href="#news">Berita</a>
                            <ul>
                              <li><a href="sejarah.html">Event</a></li>
                              <li><a href="pengurus.html">Kalender</a></li>
                              <li><a href="pengurus.html">Keprofesian</a></li>
                            </ul>
                        </li>

                        <li><a href="#achieve">Prestasi</a></li>
                        <li><a href="#gallery">Galeri</a></li>
                        <li><a href="#footer">Kontak</a></li>
                        
                    </ul>
                
                </div><!--.nav-collapse -->
            </div>
        </nav><!--navbar end-->        
     </header><!--header end-->     

     
     
    
    <!-- ===========================
    profile SECTION START
    =========================== -->
     <div id="profile" class="container">
      <div class="setionhead wow bounceIn" data-wow-duration="2s">
             <h2><span class="icon icon-user" style="padding-right:10px"></span> Profil</h2>
      </div>
 
        <!-- LEFT PART OF THE profile SECTION -->
         <div class="col-md-6">
            
             <div class="myapps row">
               <a class="dribbble-follow-button wow bounce" href="#"></a>
             </div>

              <div class="myphoto wow fadeInUp" data-wow-duration="2s">
                <img src="img/hmif.png"></img>
              </div>

   
         </div>
         
         <!-- RIGHT PART OF THE profile SECTION -->
         <div class="col-md-6">
            
             <p style="color:#ffffff; padding-top:20%"> Himpunan Mahasiswa Informatika Institut Teknologi Bandung (HMIF ITB) merupakan sebuah organisasi yang beranggotakan mahasiswa Teknik Informatika dan Sistem & Teknologi Informasi </p>

             <button class="btn" id="archive"><span class="glyphicon glyphicon-book"></span> SEJARAH</button>

             <button class="btn" id="archive"><span class="glyphicon glyphicon-book"></span> PENGURUS</button>
   
         </div>
               
     </div>
     <!-- profile SECTION END -->
        

        
   
    
    <!-- ===========================
    NEWS SECTION START
    =========================== -->
    <div id="news">
        <div class="sectionhead wow bounceInUp" data-wow-duration="2s">
           <h2 style="color:#000000"><span class="icon icon-calendar" style="padding-right:10px"></span> Acara </h2>
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
                <button class="btn" id="archive"><span class="glyphicon glyphicon-book"></span> ARCHIVE</button>
            </div>
        
    </div>
    <!-- NEWS SECTION END -->


     <!-- ===========================
    ACHIEVEMENT SECTION START
    =========================== -->
    <div id="achieve" class="container">
       
        <!-- ACHIEVEMENT SECTION HEADING START -->
        <div class="sectionhead  row wow fadeInUp">
            <h2 style="color:#000000"><span class="icon icon-trophy" style="padding-right:10px"></span>Prestasi</h2>
           <hr class="separetor"> 
         </div><!--ACHIEVEMENT SECTION HEADING END-->
         

        <!-- ACHIEVEMENT ITEMS START -->
  
    </div>
    <!-- ACHIEVEMENT SECTION END -->


    <!-- ===========================
    GALLERY SECTION START
    =========================== -->
    <div id="gallery" class="container">
        <div class="sectionhead wow bounceInUp" data-wow-duration="2s">
           <h2><span class="icon icon-picture" style="padding-right:10px"></span>Galeri</h2>
           <hr class="separetor">            
        </div><!-- GALLERY SECTIONHEAD END -->


    </div><!-- TESTIMONIAL SECTION END -->

     
<?php get_footer(); ?>