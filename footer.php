<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bpa
 */

?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="row -sf">



<div class="col f-contact">
  <address>
      <strong><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/bpa-logo.png" alt=""></a></strong>
      Bharathi Prem Associates (BPA) is a design studio that combines the fields of Architecture & Interior Design, started in the year 2000.
  </address>
  <ul class="">

    <?php 
        wp_nav_menu( array(
          'theme_location' => 'menu-3',
          'menu_class'     => 'k-social'
      ) );
      ?>
  </ul>
</div><!-- /.col -->


<div class="col f-links">
  <div>
    <h3>Recent projects</h3>
    <ul>
      <?php 
        wp_nav_menu( array(
          'theme_location' => 'menu-2'
      ) );
      ?>
    </ul>
  </div>


</div><!-- /.col -->
  <div class="col f-contact f-address">
  <h3>Address</h3>
  <ul>
    <li>#3999, Lakshmi Narayan complex, <br />
    3rd Floor, 80 Feet Road,<br />
      opp. Saligrama party hall, <br />
    1st phase Girinagar,<br>
    Banashankari 3rd Stage,<br> Hosakerehalli,<br>
    Bengaluru – 560 085</li>
    <li>Bharathi Prem - <a href="tel:98867 40198">98867 40198</a><br>
    Prem Kumar – <a href="tel:94481 40198">94481 40198</a></li>
    <li><a href="mailto:architectbpa@gmail.com">architectbpa@gmail.com</a></li>
  </ul>

  </div><!-- /.col -->
</div><!-- /.row -->
  </div><!-- /.container -->
        
    </footer><!-- #colophon -->
    <div class="site-info">
       <p>Copyright &copy; <?php echo date('Y'); ?>, All rights reserved by Bharathi Prem Associates | Powered by <a href="http://dzineden.com/" rel="nofollow" target="blank">dzine<span>den</span></a></p>
      <div class="container">

        <!-- <p>Copyright &copy; <?php echo date('Y'); ?>, bpa group. All Rights Reserved. </p>
        <p><a href="https://www.dzineden.com/" rel="nofollow" target="blank">dzine<span>den</span> - the web design agency</a></p> -->
      </div>
    </div><!-- .site-info -->
</div><!-- #page -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script> -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<script src="js/wow.min.js"></script>
<script>
new WOW().init();
</script>

</body>
</html>
