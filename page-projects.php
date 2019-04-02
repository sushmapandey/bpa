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
    <div class="banner about-banner ">
      <picture>
        <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri(); ?>/img/projects-mobile-banner.png">
        <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/projects-tablet-banner.png">
        <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/projects-laptop-banner.png">
        <img src="<?php echo get_template_directory_uri(); ?>/img/projects-desktop-banner.png" alt="projects">
      </picture>
      <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/project-banner.png" alt=""> -->
      <div class="container">
        <div class="banner-contents other-width">
          <h2>THE BEST PROJECTS FOR OUR CLIENTS</h2>
        </div>
      </div>
      <!-- <div class="bpa-img-border"></div> -->
    </div>
    <section class="breadcrumb">
      <ul class="container">
        <li><i class="fas fa-home"></i> <a href="<?php echo get_home_url(); ?>">BPA</a></li>
        <li class="is-active">Projects</li>
      </ul>
    </section> 


    <section class="bpa-recent-projects container bpa-about-recent-projects">
      <h2 class="bpa-h3-title">Our projects</h2>
      <span class="header-underline mb"></span>
      <p class="bpa-p-width">For each project we establish relationships with partners who we know will help us create added value for your project.</p>
      <div class="testimonial-links">
        <div>
        </div>
      </div>
      <div class="projects-section">
        <div class="project-left">
          <div class="relative-box">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/pagoda.png" alt="pagoda"> -->
            <picture>
              <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/anandadhama-mobile.png">
              <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/anandadhama-mobile.png">
              <img src="<?php echo get_template_directory_uri(); ?>/img/anandadhama-mobile.png" alt="Project">
            </picture>
            <div class="bpa-project-hover">
              <h3>ANANDADHAMA</h3>
              <p>Anandadhama is pleasantly located amidst virgin forests and wildlife. It is a natural retreat.</p>
              <a href="<?php echo home_url('anandadhama'); ?>" class="btn btn-line">View project <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
        <div class="project-right">
          <div class="relative-box">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/image.png" alt="pagoda"> -->
            <picture>
              <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/pyramid-mobile.png">
              <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/pyramid-desktop.png">
              <img src="<?php echo get_template_directory_uri(); ?>/img/pyramid-desktop.png" alt="Project">
            </picture>
            <div class="bpa-project-hover">
              <h3>PYRAMID VALLEY</h3>
              <p>The pyramid Valley International is home for the world’s largest Meditation Pyramid serving Individuals, Societies & Organizations in their quest for Self Realization.</p>
              <a href="<?php echo home_url('pyramid'); ?>" class="btn btn-line">View project <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="projects-section">
        <div class="project-right">
          <div class="relative-box">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/column-1.jpg" alt="pagoda"> -->
            <picture>
              <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/shankar-res-mobile.png">
              <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/shankar-res-desktop.png">
              <img src="<?php echo get_template_directory_uri(); ?>/img/shankar-res-desktop.png" alt="Project">
            </picture>
            <div class="bpa-project-hover">
              <h3>SHANKAR RESIDENCE</h3>
              <p>Situated in Hubli, the house has lots of indoor and outdoor spaces spread over for about 10,000sq ft.</p>
              <a href="<?php echo home_url('shankar'); ?>" class="btn btn-line">View project <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
          <div class="small-boxes">
            <div class="small-left-box">
              <div class="relative-box">
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/image-column-1.jpg" alt="pagoda"> -->
                <picture>
                  <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/prathap-res-mobile.png">
                  <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/prathap-res-desktop.png">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/prathap-res-desktop.png" alt="Project">
                </picture>
                <div class="bpa-project-hover">
                  <h3>PRATHAP’S RESIDENCE</h3>
                  <p>Tempor incididunt ut labore et dolore magna aliqua.</p>
                  <a href="<?php echo home_url('prathap'); ?>" class="btn btn-line">View project <i class="fas fa-chevron-right"></i></a>
                </div>
              </div>
            </div>
            <div class="small-right-box">
              <div class="relative-box">
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/image-column-2-small.jpg" alt="pagoda"> -->
                <picture>
                  <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/chandrashekhar-res-mobile.png">
                  <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/chandrashekhar-res-desktop.png">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/chandrashekhar-res-desktop.png" alt="Project">
                </picture>
                <div class="bpa-project-hover">
                  <h3>CHANDRASHEKAR’S RESIDENCE</h3>
                  <p>The design of the residence was private yet connected to the nature</p>
                  <a href="<?php echo home_url('chandrashekar'); ?>" class="btn btn-line">View project <i class="fas fa-chevron-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="project-left">
          <div class="relative-box">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/image-column-right.jpg" alt="pagoda"> -->
               <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/srihari-res-mobile.png">
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/srihari-res-mobile.png">
                <img src="<?php echo get_template_directory_uri(); ?>/img/srihari-res-mobile.png" alt="Project">
              </picture>
            <div class="bpa-project-hover">
              <h3>SRIHARI RESIDENCE</h3>
              <p>Srihari residence is located in Rajarajeshwari Nagar, Bengaluru. The house occupies around 4800 sq ft.</p>
              <a href="<?php echo home_url('srihari'); ?>" class="btn btn-line">View project <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="projects-section">
        <div class="project-left">
          <div class="relative-box">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/image-column-2.jpg" alt="pagoda"> -->
            <picture>
              <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/bpa-res-mobile.png">
              <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/bpa-res-mobile.png">
              <img src="<?php echo get_template_directory_uri(); ?>/img/bpa-res-mobile.png" alt="Project">
            </picture>

            <div class="bpa-project-hover">
              <h3>BHARTHI PREM’S RESIDENCE</h3>
              <p>A resort on 50 acres, situated near Mekedhatu, Bangalore, with villas,  bamboo cottages and tents.</p>
              <a href="<?php echo home_url('bhartiprem'); ?>" class="btn btn-line">View project <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
        <div class="project-right">
          <div class="relative-box">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/bg-column-2.jpg" alt="pagoda"> -->
            <picture>
              <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/yercaud-mobile.png">
              <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/yercaud-desktop.png">
              <img src="<?php echo get_template_directory_uri(); ?>/img/yercaud-desktop.png" alt="Project">
            </picture>
            <div class="bpa-project-hover">
              <h3>YERCAUD COTTAGES</h3>
              <p>Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
              <a href="<?php echo home_url('yercaudcottages'); ?>" class="btn btn-line">View project <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
          <div class="small-boxes">
            <div class="small-left-box">
              <div class="relative-box">
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/image-column-2-small.jpg" alt="pagoda"> -->
                <picture>
                  <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/lounge-bar-mobile.png">
                  <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/lounge-bar-desktop.png">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/lounge-bar-desktop.png" alt="Project">
                </picture>
                <div class="bpa-project-hover">
                  <h3>THE LOUNGE BAR</h3>
                  <p>Tempor incididunt ut labore et dolore magna aliqua.</p>
                  <a href="<?php echo home_url('loungebar'); ?>" class="btn btn-line">View project <i class="fas fa-chevron-right"></i></a>
                </div>
              </div>
            </div>
            <div class="small-right-box">
              <div class="relative-box">
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/image-column-1.jpg" alt="pagoda"> -->
                <picture>
                  <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/carl-zeiss-mobile.png">
                  <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/carl-zeiss-desktop.png">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/carl-zeiss-desktop.png" alt="Project">
                </picture>
                <div class="bpa-project-hover">
                  <h3>CARL ZEISS OFFICE</h3>
                  <p>Tempor incididunt ut labore et dolore magna aliqua. </p>
                  <a href="<?php echo home_url('carlzeissoffice'); ?>" class="btn btn-line">View project <i class="fas fa-chevron-right"></i></a>
                </div>
              </div>
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

  <?php
  get_footer();
