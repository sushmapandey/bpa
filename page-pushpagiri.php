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
        <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri(); ?>/img/pyramid-valley-mobile-banner.png">
        <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/pyramid-valley-tablet-banner.png">
        <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/pyramid-valley-laptop-banner.png">
        <img src="<?php echo get_template_directory_uri(); ?>/img/pyramid-valley-desktop-banner.png" alt="pyramid-valley">
      </picture>
      <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/project-banner.png" alt=""> -->
      <div class="container">
        <div class="banner-contents">
          <h2>PUSHPAGIRI RESIDENCE - A LAVISH HOME</h2>
        </div>
      </div>
      <!-- <div class="bpa-img-border"></div> -->
    </div>
    <section class="breadcrumb">
      <ul class="container">
        <li><i class="fas fa-home"></i> <a href="<?php echo get_home_url(); ?>">BPA</a></li>
        <li><a href="<?php echo home_url('projects'); ?>">Projects</a></li>
        <li class="is-active">Pushpagiri</li>
      </ul>
    </section> 

    <section class="project-inner-pages container">
      <h2 class="project-inner-title text-center">PUSHPAGIRI RESIDENCE - A LAVISH HOME IN BENGALURU</h2>
      <div class="content-details">
        <p>Finger as ramps typewriter live-edge, retro lo-fi cold-pressed cronut a wolf iceland as tumeric marfa before they sold out. Crucifix small batch woke, I chartreuse use a retro austin leggings. Chambray ethical me to an activated charcoal flexitarian meggings venmo pop-up godard dreamcatcher artisan four dollar toast. A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. </p>
        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing.</p>
      </div>
      <div class="best-place">
        <div class="best-place-detail">
          <div class="place-border first"></div>
            <h2 class="project-inner-title">WE HELPED THEM TO FIND THE BEST PLACE TO STAY</h2>
            <p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream.</p>
            <p>Our main goal was to quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Climb leg rub face on everything give attitude nap all day for under the bed. Chase mice attack feet but rub face on everything hopped up on goofballs.</p>
        </div>
        <div class="best-place-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/pushpagiri2.jpg" alt="">
        </div>
      </div>

      <div class="best-place">
        <div class="best-place-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/pushpagiri1.jpg" alt="">

        </div>
        <div class="best-place-detail second-box-content">
          <div class="place-border second"></div>
            <h2 class="project-inner-title">WE HELPED THEM TO FIND THE BEST PLACE TO STAY</h2>
            <p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream.</p>
            <p>Our main goal was to quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Climb leg rub face on everything give attitude nap all day for under the bed. Chase mice attack feet but rub face on everything hopped up on goofballs.</p>
        </div>
      </div>

      <div class="content-details ">
        <p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream. Our main goal was to quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Climb leg rub face on everything give attitude nap all day for under the bed. Chase mice attack feet but rub face on everything hopped up on goofballs.</p>
        <h2 class="project-inner-title text-center">OH, WOULD I COULD DESCRIBE THESE CONCEPTIONS</h2>
        <p>When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary, I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth, a thousand unknown plants are noticed by me: when I hear the buzz.</p>
      </div>

      <section class="bpa-client-testimonial bpa-about-client-testimonial container project-carousel">
        <div class="carousel-wrap">
          <div class="owl-carousel one">
            <div class="item  content-details">
              <img src="<?php echo get_template_directory_uri(); ?>/img/project-carousel.jpg" alt="Banner">
            </div>
            <div class="item content-details">
              <img src="<?php echo get_template_directory_uri(); ?>/img/srihari3.jpg" alt="Banner">
            </div>

          </div>
        </div>
      </section>



      <section class="bpa-recent-projects container bpa-about-recent-projects">
        <h2 class="bpa-h3-title">Related projects</h2>
        <span class="header-underline"></span>
        <div class="testimonial-links">
          <div>
          </div>
        </div>
        <div class="carousel-wrap">
          <div class="owl-carousel">
           <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pagoda.png" alt="pagoda">
            <div class="bpa-project-hover">
              <h3>pagoda</h3>
              <p>Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
              <a href="#" class="btn btn-line">View project <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
          <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/prakash-residency.png" alt="prakash-residency">
            <div class="bpa-project-hover">
              <h3>paprakash residency</h3>
              <p>Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
              <a href="#" class="btn btn-line">View project <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
          <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/stairs-in-pyramid.png" alt="stairs in pyramid">
            <div class="bpa-project-hover">
              <h3>pyramid valley</h3>
              <p>Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
              <a href="#" class="btn btn-line">View project <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
          <div class="item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pagoda.png" alt="pagoda">
            <div class="bpa-project-hover">
              <h3>pagoda</h3>
              <p>Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
              <a href="#" class="btn btn-line">View project <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>

  <!-- </section>  -->


</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
