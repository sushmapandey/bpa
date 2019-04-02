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
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/bg.jpg" alt=""> -->
            <div class="container">
              <div class="banner-contentss inner-contents ">
                <h2>THE PYRAMID VALLEY INTERNATIONAL <br><span>BUILT SOLELY FOR MEDITATION</span></h2>
              </div>
            </div>
            <!-- <div class="bpa-img-border"></div> -->
          </div>
          <section class="breadcrumb">
            <ul class="container">
              <li><i class="fas fa-home"></i> <a href="<?php echo get_home_url(); ?>">BPA</a></li>
              <li><a href="<?php echo home_url('projects'); ?>">Projects</a></li>
              <li class="is-active">The Pyramid Valley International - Built Solely For Meditation </li>
            </ul>
          </section> 

          <section class="project-inner-pages container">
            <h2 class="project-inner-title text-center">THE PYRAMID VALLEY INTERNATIONAL</h2>
            <div class="content-details">
              <p>Pyramid Valley International is home for the world's Largest Meditational Pyramid serving Individuals, Societies and Organizations in their quest for self Realization. A spiritual centre on 28 acres of land located amidst hillocks & trees. A beautiful serene, tranquil campus involves calmness and serenity with large Meditation Pyramid on the outskirts of Bengaluru. The exterior surface of the pyramid is covered by beautiful murals of the elements of life.</p>
            </div>
            <div class="best-place">
              <div class="best-place-detail">
                <div class="place-border first"></div>
                <h2 class="project-inner-title">PEACEFUL AND PLEASANT PLACE TO MEDITATE</h2>
                <p>Maitreya-Buddha Pyramid, with a capacity of about 5000 people, is the world’s largest Pyramid built solely for practising mediation. It as a base area of 160ft X 160ft and is as tall as a ten storeyed building at 102ft height.</p>
                <p>King Chamber located at the center to 1/3rd the height of the Pyramid. Its spiral and vibrant King's chamber, the most energic spot of the pyramid, stands at 34ft. tall and accomodates 40-people for meditation at a time</p>
              </div>
              <div class="best-place-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/valley1.jpg" alt="">
              </div>
            </div>

            <div class="best-place">
              <div class="best-place-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/Image.jpg" alt="">

              </div>
              <div class="best-place-detail second-box-content">
                <div class="place-border second"></div>
                <h2 class="project-inner-title">KABHIR BHAVAN <br>-<span> CONFERENCE HALL</span></h2>
                <p>The Kabhir Bhavan is a Pyramid shaped mediation centre. The bare brick structure with aluminium windows dictates simplicity and minimalism. The same architectural language extends to the exterior with an exposed concrete desk. The design is inspired from pyramid mediation centre.</p>
              </div>
            </div>

            <div class="content-details ">
              <p>The approach to this structure is through an inclined pathway, with gradual steps of exposed clay bricks, retaining the contour of the place. The inviting pathway leads to the reception hall, with a concrete reception counter. Along with the 2 halls, Twin break out space with jaali walls and jaali block roof is provided as break out space . The halls are constructed with exposed Brick work and are well ventilated with Glazed Alluminium windows on both sides for good ventilation and lighting.</p>
            </div>
            <div class="content-details ">
              <h2 class="project-inner-title text-center">THE CAFETERIA BLOCK </h2>
              <p>The cafeteria block is pleasantly located overlooking the lake and the gigantic Pyramid. This block can be accessed through a small bridge over the rain water channel built with clay 'Jaali' blocks. The site dictated the semicircular shape of the cafeteris, looks as though its structure is clasping the lake. The tensile fabric structures at the entrance contrast sharply with the exposed bricks of cafeteria, adding contemporary touch yet rough character to the building.</p>
            </div>

            <section class="bpa-client-testimonial bpa-about-client-testimonial container project-carousel">
              <div class="carousel-wrap">
                <div class="owl-carousel one">
                  <div class="item  content-details">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/valley3.jpg" alt="Banner">
                  </div>
                  <div class="item content-details">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/valley3.jpg" alt="Banner">
                  </div>
                  <div class="item content-details">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/valley3.jpg" alt="Banner">
                  </div>

                </div>
              </div>
            </section>

            <section class="bpa-section container bpa-about-img">
              <div class="about-content">
                <h2 class="project-inner-title">PAGODA COTTAGES</h2>
                <p>The cottages are designed such that they dictate sheer simplicity and the architecture treads very lightly on the ground on which these cottages sit, bringing into focus teh minimalism of the structures, while also being comfortable and aesthetically pleasing. The structure estabilishes a dialogue with the surrounding land and nature without imposing on them.</p>
              </div>
              <div class="about-img ">
                <img src="<?php echo get_template_directory_uri(); ?>/img/pagoda-cottages.png" alt="">
              </div>
            </section>

            <section class="bpa-section container bpa-about-img">
              <div class="about-img ">
                <img src="<?php echo get_template_directory_uri(); ?>/img/dormitories.png" alt="">
              </div>
              <div class="about-content">
                <h2 class="project-inner-title">DORMITORIES </h2>
                <p>The dormitories are as simple and as basic as it can be. The design is simplistic, reflecting the ambience of the building and the philosophy of the institution. The design being simple, was cost effective and eco-friendly sue to the use of exposed brick and concrete ceiling.</p>
              </div>
            </section>

            <section class="bpa-client-testimonial bpa-about-client-testimonial container project-carousel carousel-bg-background">
              <div class="carousel-wrap">
                <div class="owl-carousel one">
                  <div class="item  content-details">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/project-carousel.jpg" alt="Banner">
                  </div>
                  <div class="item content-details">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/srihari3.jpg" alt="Banner">
                  </div>
                </div>
                <div class="carousel-bg"></div>
              </div>
            </section>

            <section class="container bpa-publications">
              <h2 class="bpa-h3-title text-center">FLOOR PLAN</h2>
              <span class="header-underline text-center"></span>
              <div class="wrap container">
                <div class="boxes f-boxes pyramid-boxes">
                  <div class="dabba" data-category="ai">
                    <div class="box">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/conference-hall-floor-plan.png" 
                      data-darkbox="<?php echo get_template_directory_uri(); ?>/img/conference-hall-floor-plan.png" 
                      data-darkbox-group="one" alt="ai"> 
                    </div><!-- eo.box -->
                  </div><!-- eo.dabba -->
                  <div class="dabba" data-category="iia">
                    <div class="box">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/dormitories-floor-plan.png" 
                      data-darkbox="<?php echo get_template_directory_uri(); ?>/img/dormitories-floor-plan.png" 
                      data-darkbox-group="one" alt="ina">  
                    </div><!-- eo.box -->   
                  </div><!-- eo.dabba --> 
                  <div class="dabba" data-category="society-interiors">
                    <div class="box">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/pagoda-cottages-floor-plan.png" 
                      data-darkbox="<?php echo get_template_directory_uri(); ?>/img/pagoda-cottages-floor-plan.png" 
                      data-darkbox-group="one" alt="society-interiors">  
                    </div><!-- eo.box -->
                  </div><!-- eo.dabba -->  
                  <div class="dabba" data-category="ai">
                    <div class="box">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/pyramid-valley-floor-plan.png" 
                      data-darkbox="<?php echo get_template_directory_uri(); ?>/img/pyramid-valley-floor-plan.png" data-darkbox-group="one" alt="ai"> 
                    </div><!-- eo.box -->
                  </div><!-- eo.dabba -->
                </div><!-- eo.boxes -->
              </div><!-- eo.wrap -->
            </section>

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
