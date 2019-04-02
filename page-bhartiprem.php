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
        <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri(); ?>/img/srihari-mobile-banner.png">
          <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/srihari-tablet-banner.png">
            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/srihari-laptop-banner.png">
              <img src="<?php echo get_template_directory_uri(); ?>/img/srihari-desktop-banner.png" alt="srihari">
            </picture>
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/srihari-banner.jpg" alt=""> -->
            <div class="container">
              <div class="banner-contents project-inner-banner-content">
                <h2>BHARTHI PREM’S RESIDENCE</h2>
              </div>
            </div>
            <!-- <div class="bpa-img-border"></div> -->
          </div>
          <section class="breadcrumb">
            <ul class="container">
              <li><i class="fas fa-home"></i> <a href="<?php echo get_home_url(); ?>">BPA</a></li>
              <li><a href="<?php echo home_url('projects'); ?>">Projects</a></li>
              <li class="is-active">Bharthi Prem's Residence</li>
            </ul>
          </section> 

          <section class="project-inner-pages container">
            <!-- <h2 class="project-inner-title text-center">Anandadhama</h2> -->
            


            <section class="bpa-recent-projects container bpa-about-recent-projects">
              <h2 class="bpa-h3-title">Related projects</h2>
              <span class="header-underline"></span>
              <div class="testimonial-links">
                <div>
                </div>
              </div>
              <div class="carousel-wrap">
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
                    <img src="<?php echo get_template_directory_uri(); ?>/img/pyramid-mobile.png" alt="project">
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
                  <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/chandrashekhar-res-mobile.png" alt="Project">
                    <div class="bpa-project-hover">
                      <h3>CHANDRASHEKAR’S RESIDENCE</h3>
                      <p>The design of the residence was private yet connected to the nature</p>
                      <a href="<?php echo home_url('chandrashekar'); ?>" class="btn btn-line">View project <i class="fas fa-chevron-right"></i></a>
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/srihari-res-mobile.png" alt="Project">
                    <div class="bpa-project-hover">
                      <h3>SRIHARI RESIDENCE</h3>
                      <p>Srihari residence is located in Rajarajeshwari Nagar, Bengaluru. The house occupies around 4800 sq ft.</p>
                      <a href="<?php echo home_url('srihari'); ?>" class="btn btn-line">View project <i class="fas fa-chevron-right"></i></a>
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/yercaud-mobile.png" alt="project">
                    <div class="bpa-project-hover">
                      <h3>YERCAUD COTTAGES</h3>
                      <p>Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                      <a href="<?php echo home_url('yercaudcottages'); ?>" class="btn btn-line">View project <i class="fas fa-chevron-right"></i></a>
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/bpa-res-mobile.png" alt="Project">
                    <div class="bpa-project-hover">
                      <h3>BHARTHI PREM’S RESIDENCE</h3>
                      <p>A resort on 50 acres, situated near Mekedhatu, Bangalore, with villas,  bamboo cottages and tents.</p>
                      <a href="<?php echo home_url('bhartiprem'); ?>" class="btn btn-line">View project <i class="fas fa-chevron-right"></i></a>
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/lounge-bar-mobile.png" alt="Project">
                    <div class="bpa-project-hover">
                      <h3>THE LOUNGE BAR</h3>
                      <p>Tempor incididunt ut labore et dolore magna aliqua.</p>
                      <a href="<?php echo home_url('loungebar'); ?>" class="btn btn-line">View project <i class="fas fa-chevron-right"></i></a>
                    </div>
                  </div>
                  <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/carl-zeiss-mobile.png" alt="Project">
                    <div class="bpa-project-hover">
                      <h3>CARL ZEISS OFFICE</h3>
                      <p>Tempor incididunt ut labore et dolore magna aliqua. </p>
                      <a href="<?php echo home_url('carlzeissoffice'); ?>" class="btn btn-line">View project <i class="fas fa-chevron-right"></i></a>
                    </div>
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
