 
    <!-- ===========================
    FOOTER START
    =========================== -->    
    <footer id="footer">

        
        <div class="container">
            <span class="bigicon icon-speedometer "></span>
             
            <div class="footerlinks"><!-- FOOTER LINKS START -->            
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#profile">Profile</a></li>
                    <li><a href="#achieve">Prestasi</a></li>
                    <li><a href="#news">Kegiatan</a></li>
                    <li><a href="#gallery">Galeri</a></li>

                    <!--replace the email address below with your email address-->
                    <li><a href="mailto:m@creatrix.us">Contact</a></li>                   
                </ul>
            </div><!-- FOOTER LINKS END -->
             
            <div class="footersocial wow fadeInUp" data-wow-duration="3s"><!-- FOOTER SOCIAL ICONS START -->
                <ul>
                    <li><a href="http://facebook.com/MamunSrizon"><span class="icon-social-facebook"></span></a></li>
                    <li><a href="http://twitter.com/MamunSrizon"><span class="icon-social-twitter"></span></a></li>
                    <li><a href="#"><span class="icon-social-youtube"></span></a></li>
                    <li><a href="http://dribbble.com/srizon"><span class="icon-social-dribbble"></span></a></li>
                    <li><a href="#"><span class="icon-social-tumblr"></span></a></li>
                 </ul>
             </div><!-- FOOTER SOCIAL ICONS END -->
         </div>
         <p style="color:#000000; font-size:12px"> Created by : <br>
          <img src="<?php bloginfo('template_directory'); ?>/img/logo-iit.png" style="width:100px; height:100px; padding-bottom:10px"></img><br>
          Ahmad Naufal Farhan <br>
          Jessica Handayani <br>
          Pipin Kurniawati <br>
          Zulva Fachrina <br>
        </p>

        
     </footer><!-- FOOTER END -->

 
    
    <!-- SCRIPT -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery-1.9.1.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.easing.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.js"></script>
    
        <!-- SCROLL PAGE -->
    <script>
      //jQuery for page scrolling feature - requires jQuery Easing plugin
      $(function() {
          $('a.page-scroll').bind('click', function(event) {
              var $anchor = $(this);
              $('html, body').stop().animate({
                  scrollTop: $($anchor.attr('href')).offset().top
              }, 1500, 'easeInOutExpo');
              event.preventDefault();
          });
      });
    </script>

    <!-- OWL-->
     <script>
    //========================
    //owl-example
    //========================
    $(document).ready(function() {
 
      $("#owl-demo").owlCarousel();
 
    });
    </script>


    
    
    <!--Other necessary scripts-->  
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.nicescroll.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.jribbble-1.0.1.ugly.js"></script>
    <script src='<?php bloginfo('template_url'); ?>/js/camera.js'></script>
    <script src="<?php bloginfo('template_url'); ?>/js/drifolio.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/hoverIntent.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/superfish.js"></script>
    
    <script>new WOW().init();</script>

    <!-- initialise Superfish -->
    <script>

    jQuery(document).ready(function(){
      jQuery('ul.sf-menu').superfish();
      if (window.matchMedia('(max-width: 980px)').matches) {
        $("#navigation").removeClass("sf-menu");
      }
      
    });
    </script>

    <script>

    (function($) {
      var $window = $(window)

      $window.resize(function resize(){
        if (window.matchMedia('(max-width: 980px)').matches) {
          return $("#navigation").removeClass("sf-menu");
        }

        $("#navigation").addClass("sf-menu");
      
      }).trigger('resize');
    })(jQuery);
    
    </script>



    <?php wp_footer(); ?>
     
  </body>
</html>