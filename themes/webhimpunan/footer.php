 
    <!-- ===========================
    FOOTER START
    =========================== -->    
    <footer id="footer">

        
        <div class="container">
            <span class="bigicon icon-speedometer "></span>
             
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
    <script src="<?php bloginfo('template_url'); ?>/js/drifolio.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>
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