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
        <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri(); ?>/img/testimonials-mobile-banner.png">
        <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/testimonials-tablet-banner.png">
        <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/testimonials-laptop-banner.png">
        <img src="<?php echo get_template_directory_uri(); ?>/img/testimonials-desktop-banner.png" alt="testimonials">
      </picture>
      <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/about-banner.png" alt=""> -->
      <div class="container">
        <div class="banner-contents other-width">
          <h2>OUR SUCCESS STORIES</h2>
        </div>
      </div>
      <!-- <div class="bpa-img-border"></div> -->
    </div>

    <section class="breadcrumb">
      <ul class="container">
        <li><i class="fas fa-home"></i> <a href="<?php echo get_home_url(); ?>">BPA</a></li>
        <li class="is-active">Testimonial</li>
      </ul>
    </section> 

    <section class="bpa-testimonials-page">
      <div class="bpa-client-testimonial bpa-about-client-testimonial container">
        <h2 class="bpa-h3-title">WHAT PEOPLE SAY ABOUT OUR WORK</h2>
        <span class="header-underline"></span>
        <div class="bpa-client-feedback">
          <div class="bpa-client">
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/img/venkatesh-gowda.png" alt="venkatesh-gowda">
            </div>        
          </div>
          <div class="client-feedback">
            <div>
              <h3>Building a house starts once in life time</h3>
              <p>Building a house starts once in a lifetime, so kindly take professional's advice for your dream home. My dream home was designed to my requirement at the best aesthetically utilizable with proper light & ventilation as per Vaasthu by BPA (Bharati Prem associates).</p>
              <!-- <h4>Venkatesh Gowda<br><span>Chief Executive Officer  </span></h4> -->
              <h4>Venkatesh Gowda</h4>
            </div>

          </div>
        </div>
        <div class="bpa-client-feedback">
          <div class="bpa-client">
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/img/geetha-kallpaur.png" alt="geetha-kallpaur">
            </div>        
          </div>
          <div class="client-feedback">
            <div>
              <h3>BPA made our dream come true</h3>
              <p>BPA made our dream come true. Our house at Subrahmanyapura got constructed in a brief period with quality par excellence!</p>
              <h4>Geetha Kallapur</h4>
            </div>

          </div>
        </div>
        <div class="bpa-client-feedback">
          <div class="bpa-client">
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/img/girish-tattimani.png" alt="girish-tattimani">
            </div>        
          </div>
          <div class="client-feedback">
            <div>
              <h3>Approach BPA for your dream home </h3>
              <p>Approach BPA for your dream home to come true.  You will be in comfort zone from beginning to end.</p>
              <h4>Girish Tattimani</h4>
            </div>

          </div>
        </div>
        <div class="bpa-client-feedback">
          <div class="bpa-client">
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/img/sharan-kumar.png" alt="sharan-kumar">
            </div>        
          </div>
          <div class="client-feedback">
            <div>
              <h3>Starting a new project with BPA</h3>
              <p>Bharati helped us to construct our dream house 5 years back and today starting a new project with her.</p>
              <h4>Sharan Kumar</h4>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="bpa-key-strength bpa-testimonials-awards">
      <div class="container">
        <h3 class="bpa-h3-title">OUR CLIENTS</h3>
        <span class="header-underline"></span>
        <div class="strength-icons">
          <p><img src="<?php echo get_template_directory_uri(); ?>/img/pyramid-valley-logo.png" alt="pyramid-valley-logo"></p>
          <p><img src="<?php echo get_template_directory_uri(); ?>/img/canarys-logo.png" alt="canarys-logo"></p>
          <p><img src="<?php echo get_template_directory_uri(); ?>/img/kenmore-school-logo.png" alt="kenmore-school-logo"></p>
          <p><img src="<?php echo get_template_directory_uri(); ?>/img/school-of-ancient-wisdom-logo.png" alt="school-of-ancient-wisdom-logo"></p>
        </div>
      </div>
    </section> 

<!--     <section class="bpa-testimonial">
      <figure class="bpa-aboout-page-testimonials">
        <div class="author">
          <img src="<?php echo get_template_directory_uri(); ?>/img/prem-kumar-desktop.png" alt="prem-kumar">  
        </div>
        <blockquote>Everything in a Building should be in perfect harmony, a symphony between space and matter. It will become an extension of his character, belief, Visions, courage and wealth consciousness. He satisfies his ego through having a painting or a mural which we create on the wall.
          <h5>- T.M. International award winning speech in 2001<br>by T K Prem Kumar</h5>
        </blockquote>
        
      </figure>
    </section> -->

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
          <img src="<?php echo get_template_directory_uri(); ?>/img/anandadhama-mobile.png" alt="anandadhama">
            <div class="bpa-project-hover">
              <h3>ANANDADHAMA</h3>
              <p>Anandadhama is pleasantly located amidst virgin forests and wildlife. It is a natural retreat.</p>
              <a href="<?php echo home_url('anandadhama'); ?>" class="btn btn-line">View project <i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/pyramid-mobile.png" alt="pyramid">
            <div class="bpa-project-hover">
              <h3>PYRAMID VALLEY</h3>
              <p>The pyramid Valley International is home for the world’s largest Meditation Pyramid serving Individuals, Societies & Organizations in their quest for Self Realization.</p>
              <a href="<?php echo home_url('pyramid'); ?>" class="btn btn-line">View project <i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/shankar-res-mobile.png" alt="Project">
            <div class="bpa-project-hover">
              <h3>SHANKAR RESIDENCE</h3>
              <p>Situated in Hubli, the house has lots of indoor and outdoor spaces spread over for about 10,000sq ft.</p>
              <a href="<?php echo home_url('shankar'); ?>" class="btn btn-line">View project <i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
        <div class="item">
          <img src="<?php echo get_template_directory_uri(); ?>/img/prathap-res-mobile.png" alt="Project">
          <div class="bpa-project-hover">
            <h3>PRATHAP’S RESIDENCE</h3>
            <p>Tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="<?php echo home_url('prathap'); ?>" class="btn btn-line">View project <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
      </div>
      <a href="<?php echo home_url('projects'); ?>" class="all-project">View all  <i class="fas fa-chevron-right"></i></a>
    </section>

    <section class="form-section">
      <div class="container">
        <h2 class="bpa-h3-title text-center">Have a project?</h2>
        <span class="header-underline text-center"></span>
        <p class="bpa-p-width text-center">Let’s build something outstanding. Work with us to understand our business specifics and our target audience to our full strategy in marketing.</p>
        
        <form action="">
          <input type="text" placeholder="Name">
          <input type="email" placeholder="Email">
          <button class="btn btn-outline">SEND <i class="far fa-envelope"></i></button>
        </form>
      </div>
    </section>

    

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
