<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bpa
 */

get_header();
?>
<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <div class="banner about-banner">
      <picture>
        <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri(); ?>/img/contact-mobile-banner.png">
        <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/contact-tablet-banner.png">
        <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/contact-laptop-banner.png">
        <img src="<?php echo get_template_directory_uri(); ?>/img/contact-desktop-banner.png" alt="ashwa6">
      </picture>
      <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/contact-banner.png" alt=""> -->
      <div class="container">
        <div class="banner-contents other-width">
          <h2>CONTACT US FOR any QUERIES</h2>
        </div>
      </div>
      <!-- <div class="bpa-img-border"></div> -->
    </div>

    <section class="breadcrumb">
      <ul class="container">
        <li><i class="fas fa-home"></i> <a href="<?php echo get_home_url(); ?>">BPA</a></li>
        <li class="is-active">Contact</li>
      </ul>
    </section>   

    <section class="bpa-contact-page container">
      <div class="get-in-touch">
        <h3 class="bpa-h3-title">GET IN TOUCH WITH US</h3>
        <span class="header-underline"></span>
        <ul>
          <li><i class="fas fa-map-marker-alt"></i>#3999, Lakshmi Narayan complex,
            3rd Floor, 80 Feet Road,
            opp. Saligrama party hall,
            1st phase Girinagar,
            Banashankari 3rd Stage, Hosakerehalli,
          Bengaluru – 560 085</li>
          <li><i class="fas fa-phone"></i>Bharathi Prem - <a href="tel:98867 40198">98867 40198</a><br>
            Prem Kumar – <a href="tel:94481 40198">94481 40198</a></li>
            <li><i class="fas fa-envelope"></i><a href="mailto:architectbpa@gmail.com">architectbpa@gmail.com</a></li>
            <li><i class="fab fa-facebook-f"></i><a href="https://www.facebook.com/bpa176" target="_blank">Like us on facebook</a></li>
          </ul>
        </div>
        <div class="contact-form">
          <form action="">
            <div>
              <label for="name">Name</label>
              <input type="text" class="name" placeholder="">
            </div>
            <div>
              <label for="email">Email</label>
              <input type="email" class="email" placeholder="">
            </div>
            <div>
              <label for="phone">Phone</label>
              <input type="text" class="phone" placeholder="">
            </div>
            <div>
              <label for="message">Message</label>
              <textarea name="message" id="" ></textarea>
            </div>
            <div>
              <a href="#" class="btn btn-outline plr">Submit</a>
            </div>
          </form>
 <!--          <?php 
              $its=new WP_Query('pagename=contact');
              while($its->have_posts()):
                $its->the_post();?>
                <?php the_content(); ?>
                <?php
              endwhile;
              wp_reset_postdata();
            ?> -->
        </div>
      </section>

      <section class="have-a-project container">
        <div class="have-project-content ">
          <h2 class="">Have a project?</h2>
          <span class="header-underline"></span>
          <p class="lead">Let’s build something outstanding. Work with us to understand our business specifics and our target audience to our full strategy in marketing.</p>
        </div>
      </section>

      <section class="bpa-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.5706322978954!2d77.54512931579795!3d12.935294990879703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3e3ba2366ee5%3A0x5b5e36f35ca039f7!2sBharathi+Prem+Associates%2C+Zen+Group!5e0!3m2!1sen!2sin!4v1539328012597" frameborder="0" style="border:0" allowfullscreen></iframe>
      </section>

      <section class="form-section about-form-section">
        <div class="container">
          <h2 class="bpa-h3-title">WE MAKE OUR JOB BEST IN THE COUNTRY</h2>
          <span class="header-underline"></span>
          <p class="bpa-p-width">We love to talk. We also love to listen, so if you are interested in our training programs or need any carrer assistance, Please get in touch.</p>     
          <form action="">
            <input type="email" placeholder="Enter Your Email ">
            <button class="btn btn-outline">Subscribe <i class="fas fa-location-arrow"></i></button>
          </form>
        </div>
      </section>


    </main><!-- #main -->
  </div><!-- #primary -->

</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
