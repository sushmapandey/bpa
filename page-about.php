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
      <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/about-banner.png" alt=""> -->
      <picture>
        <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri(); ?>/img/about-mobile-banner02.png">
        <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/about-tablet-banner01.png">
        <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/about-laptop-banner01.png">
        <img src="<?php echo get_template_directory_uri(); ?>/img/about-banner01.png" alt="ashwa6">
      </picture>
      <div class="container">
        <div class="banner-contents about-width">
          <h2>PEACEFUL AND PLEASANT CAFETERIA</h2>
          <div class="border"></div>
        </div>
        <!-- <div class="white-border"></div> -->
      </div>
      <!-- <div class="bpa-img-border"></div> -->
    </div>
    <section class="breadcrumb">
      <ul class="container">
        <li><i class="fas fa-home"></i> <a href="<?php echo get_home_url(); ?>">BPA</a></li>
        <li class="is-active">About</li>
      </ul>
    </section> 

    <section class="bpa-section container">
      <div class="about-img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/graphic.png" alt="graphic">
      </div>
      <div class="about-content">
        <h3>Bharathi Prem Associates(BPA) is a design studio that combines the fields of Architecture & Interior Design, started in the year 2000.</h3>
        <p>The approach is to create Beautiful, Harmonious spaces for people capturing the spiritual essence of the place considering the requirements of the client.</p>
        <p>We work towards transcending solution establishing a sense of integrity between the Built & Unbuilt forms, creating humane & user – friendly spaces in a holistic approach for our clients.</p>
      </div>
    </section>

    <section class="bpa-about-prople-use">
      <div class="people-use container">
        <div class="people-use-content">
          <h3 class="bpa-h3-title text-center">we like to build things people use</h3>
          <span class="header-underline text-center"></span>
          <p class="bpa-p-width text-center mb">Our projects are featured in several architect journals. The firm has experience in handling Residential, Institutional, Commercial, Office & Hospitality spaces.</p>
          <div class="people-use-box">
            <div>
              <div class="people-use-flex">
                <div class="bpa-icon"><span class="fas icon-architecture"></span></div>
                <div class="bpa-icon-content">
                  <h4>ARCHITECTURE DESIGN</h4>
                  <p>Developing and integrating the function with site conditions, nature, climate, materials to create Harmonious structures.</p>
                </div>
              </div>
              <div class="people-use-flex">
                <div class="bpa-icon"><span class="fas icon-structural-design"></span></div>
                <div class="bpa-icon-content">
                  <h4>STRUCTURAL DESIGN</h4>
                  <p>Lorem ipsum dolor sit amet,  adipisicing elit, sed do eiusmod tempor incididunt</p>
                </div>
              </div>
              <div class="people-use-flex">
                <div class="bpa-icon"><span class="fas icon-electrical-services"></span></div>
                <div class="bpa-icon-content">
                  <h4>ELECTRICAL SERVICES</h4>
                  <p>Electrical services entails planning, creating, testing, or supervising the development and installation of electrical equipment, including lighting equipment, power systems, power distribution, fire and life safety systems, electronic components, and voice and data communications infrastructure.</p>
                </div>
              </div>
            </div>
            <div>
              <div class="people-use-flex">
                <div class="bpa-icon"><span class="fas icon-interior"></span></div>
                <div class="bpa-icon-content">
                  <h4>INTERIOR DESIGN</h4>
                  <p>Design to reflect the characterstics and personality of the user by blending the right material, colour, texture.</p>
                </div>
              </div>
              <div class="people-use-flex">
                <div class="bpa-icon"><span class="fas icon-leed-certification"></span></div>
                <div class="bpa-icon-content">
                  <h4>LEED CERTIFICATION</h4>
                  <p>We design  Green buildings and also facilitate Green building, LEED certification through IGBC and USGBC</p>
                </div>
              </div>
              <div class="people-use-flex">
                <div class="bpa-icon"><span class="fas icon-plumbing-services"></span></div>
                <div class="bpa-icon-content">
                  <h4>PLUMBING SERVICES</h4>
                  <p>Responsible for the installation and maintenance of piping, fixtures and equipment used for the delivery of water, fuel gases, compressed air, storm and sanitary sewers within the buildings.</p>
                </div>
              </div>
            </div>
            <div>
              <div class="people-use-flex">
                <div class="bpa-icon"><span class="fas icon-landscape"></span></div>
                <div class="bpa-icon-content">
                  <h4>LANDSCAPE DESIGN</h4>
                  <p>Design using the principle of integrating the harscape, softscape with the siteconditions, climate and water usage.</p>
                </div>
              </div>
              <div class="people-use-flex">
                <div class="bpa-icon"><span class="fas icon-quality-control-services"></span></div>
                <div class="bpa-icon-content">
                  <h4>QUALITY CONTROL SERVICES</h4>
                  <p>Quality control services comprises administrative and procedural activities implemented in a quality system so that requirements and goals for a product, service or activity will be fulfilled.</p>
                </div>
              </div>
              <div class="people-use-flex">
                <div class="bpa-icon"><span class="fas icon-cost-planning"></span></div>
                <div class="bpa-icon-content">
                  <h4>ESTIMATION & COST PLANNING</h4>
                  <p>we provide you the best cost estimation to fit your budget with the best project.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="about-date-detail">
          <div class="award-icon">
            <div class="about-img calender-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/graphics-date.jpg" alt="">
            </div>
          </div>
          <div class="about-date-content">
            <span class="header-underline header-vertical-underline"></span>
            <h3>18 years  of successful work in the industry</h3>
            <p>With rich experience in this industry and the knowledge we have accumulated, every work that we deal with is a sucess, bringing joy and enriched value to all we are involved with.</p>
          </div>
        </div>



      </div>
    </section>

    <section class="bpa-key-strength">
      <div class="container">
        <h3 class="bpa-h3-title text-center">Our Key strengths</h3>
        <span class="header-underline text-center"></span>
        <div class="strength-icons">
          <p><span><i class="fas icon-quality "></i></span>Quality</p>
          <p><span><i class="fas icon-assurance"></i></span>ASSURANCE</p>
          <p><span><i class="fas icon-sustainability"></i></span>SUSTAINABILITY</p>
          <p><span><i class="fas icon-cost"></i></span>cost</p>
        </div>
      </div>
    </section> 

    <section class="bpa-testimonial">
      <figure class="bpa-aboout-page-testimonials">
        <div class="author">
          <img src="<?php echo get_template_directory_uri(); ?>/img/prem-kumar-desktop.png" alt="prem-kumar">  
        </div>
        <blockquote>Buildings also serve as documents of history and civilizations. We have to create a blend between wood and mud, stone and steel, glass and granite, cement and ceramic, powder and paint, tools and technology, a blend of outer skill and inner will.
          <h5>- T.M. International award winning speech in 2001<br>by T K Prem Kumar</h5>
        </blockquote>
        
      </figure>
    </section>

    <section class="bpa-recent-projects container bpa-about-recent-projects">
      <h2 class="bpa-h3-title">Recent projects</h2>
      <span class="header-underline"></span>
      <p class="bpa-p-width mb">For each project we establish relationships with partners who we know will help us create added value for your project.</p>
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

    <section class="bpa-awards bpa-about-awards">
      <div class="container">
        <h2 class="bpa-h3-title">OUR ACHIEVEMENTS</h2>
        <span class="header-underline"></span>
        <div class="bpa-awards-publications">
          <div class="strength-icons">
            <p><img src="<?php echo get_template_directory_uri(); ?>/img/award-leaf.png" alt="award-leaf">Architect & Interiors<br>India - iGEN 50 Award</p>
            <p><img src="<?php echo get_template_directory_uri(); ?>/img/award-leaf.png" alt="award-leaf">BUILD Architecture<br>Awards 2018</p>
            <p><img src="<?php echo get_template_directory_uri(); ?>/img/award-leaf.png" alt="award-leaf">Asia Pacific Property<br>Architecture Awards</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bpa-client-testimonial bpa-about-client-testimonial container">
    <h2 class="bpa-h3-title">WHAT PEOPLE SAY ABOUT OUR WORK</h2>
    <span class="header-underline"></span>
    <div class="carousel-wrap">
      <div class="owl-carousel one">
        <div class="item bpa-client-feedback">
          <div class="bpa-client">
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/img/venkatesh-gowda.png" alt="venkatesh-gowda">
            </div>        
          </div>
          <div class="client-feedback">
            <div>
              <h3>Building a house starts once in life time</h3>
              <p>Building a house starts once in a lifetime, so kindly take professional's advice for your dream home. My dream home was designed to my requirement at the best aesthetically utilizable with proper light & ventilation as per Vaasthu by BPA (Bharati Prem associates).</p>
              <h4>Venkatesh Gowda</h4>
              <!-- <h4>Venkatesh Gowda<br><span>Chief Executive Officer	</span></h4> -->
            </div>
          </div>
        </div>
        <div class="item bpa-client-feedback">
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
        <div class="item  bpa-client-feedback">
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
      <div class="item  bpa-client-feedback">
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
