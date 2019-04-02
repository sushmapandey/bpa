<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bpa
 */

get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <div class="banner">
      
      <section class="owl-carousel js-carousel">
        <div class="item" data-timing="2000">
          <picture>
            <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri(); ?>/img/mobile-banner-1.png">
            <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/tablet-banner-1.png">
            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/laptop-banner-1.png">
            <img src="<?php echo get_template_directory_uri(); ?>/img/desktop-banner-1.png" alt="publications">
          </picture>
          <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/banner1.jpg" alt="Banner"> -->

        </div>
        <div class="item" data-timing="5000">
          <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/about-banner.png" alt="Banner"> -->
        <picture>
            <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri(); ?>/img/mobile-banner-2.png">
            <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/tablet-banner-2.png">
            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/laptop-banner-2.png">
            <img src="<?php echo get_template_directory_uri(); ?>/img/desktop-banner-2.png" alt="publications">
          </picture>
        </div>
        <div class="item" data-timing="8000">
          <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/banner1.jpg" alt="Banner"> -->
          <picture>
            <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri(); ?>/img/mobile-banner-3.png">
            <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/tablet-banner-3.png">
            <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/laptop-banner-3.png">
            <img src="<?php echo get_template_directory_uri(); ?>/img/desktop-banner-3.png" alt="publications">
          </picture>
        </div>
      </section>        
      <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/banner1.jpg" alt="Banner"> -->
      <div class="container">
        <div class="banner-contents">
          <h2>Imagining<br>is Key to more creative</h2>
          <span class="header-underline"></span>
          <p>Bharathi Prem Associates(BPA) is a design studio that combines the fields of Architecture & Interior Design, started in the year 2000.</p>
          <a href="<?php echo home_url('projects'); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline">View project <i class="fas fa-chevron-right"></i></a>
        </div>
      </div>
    </div>
    <!-- <main class="container"> -->
      
      <!-- </main> -->


      <section class="bpa-section container bpa-about-img">
        <div class="about-img ">
          <img src="<?php echo get_template_directory_uri(); ?>/img/graphics.png" alt="">
        </div>
        <div class="about-content">
          <h3 class="bpa-h3-title">About us</h3>
          <span class="header-underline"></span>
          <p class="lead">Bharathi Prem Associates(BPA) is a design studio that combines the fields of Architecture & Interior Design, started in the year 2000.</p>
          <p>We work towards transcending solution establishing a sense of integrity between the Built & Unbuilt forms, creating humane & user – friendly spaces in a holistic approach for our clients.</p>
          <a href="<?php echo home_url('about'); ?>" class="btn btn-outline plr">Read More <i class="fas fa-chevron-right"></i></a>
        </div>
      </section>

    <section class="people-use container">
      <div class="people-use-content ">
        <h3 class="bpa-h3-title">we like to build things people use</h3>
        <span class="header-underline"></span>
        <p>Our projects are featured in several architect journals. The firm has experience in handling Residential, Institutional, Commercial, Office & Hospitality spaces.</p>
        <div class="people-use-box">
         <div>
          <div class="people-use-flex wow zoomIn" data-wow-delay="1s" data-wow-offset="100">
           <div class="bpa-icon"><span class="fas icon-architecture"></span></div>
           <div class="bpa-icon-content">
             <h4>ARCHITECTURE DESIGN</h4>
             <p>Developing and integrating the function with site conditions, nature, climate, materials to create Harmonious structures.</p>
           </div>
         </div>
         <div class="people-use-flex wow zoomIn" data-wow-delay="1.4s" data-wow-offset="100">
           <div class="bpa-icon"><span class="fas icon-landscape"></span></div>
           <div class="bpa-icon-content">
             <h4>LANDSCAPE DESIGN</h4>
             <p>Design using the principle of integrating the harscape, softscape with the siteconditions, climate and water usage.</p>
           </div>
         </div>
         <div class="people-use-flex wow zoomIn" data-wow-delay="1.8s" data-wow-offset="100">
           <div class="bpa-icon"><span class="fas icon-cost-planning"></span></div>
           <div class="bpa-icon-content">
             <h4>COST PLANNING</h4>
             <p>we provide you the best cost estimation to fit your budget with the best project.</p>
           </div>
         </div>
       </div>
       <div>
        <div class="people-use-flex wow zoomIn" data-wow-delay="1.2s" data-wow-offset="100">
         <div class="bpa-icon"><span class="fas icon-interior"></span></div>
         <div class="bpa-icon-content">
           <h4>INTERIOR DESIGN</h4>
           <p>Design to reflect the characterstics and personality of the user by blending the right material, colour, texture.</p>
         </div>
       </div>
       <div class="people-use-flex wow zoomIn" data-wow-delay="1.5s" data-wow-offset="100">
         <div class="bpa-icon"><span class=" fas icon-leed-certification"></span></div>
         <div class="bpa-icon-content">
           <h4>LEED CERTIFICATION</h4>
           <p>We design  Green buildings and also facilitate Green building, LEED certification through IGBC and USGBC</p>
         </div>
       </div>
       <div class="people-use-flex wow zoomIn" data-wow-delay="2s" data-wow-offset="100">
         <div class="bpa-icon"><span class="fas icon-quality-control-services"></span></div>
         <div class="bpa-icon-content">
           <h4>QUALITY CONTROL</h4>
           <p>Quality control services comprises administrative and procedural activities implemented in a quality system so that requirements and goals for a product, service or activity will be fulfilled.</p>
         </div>
       </div>
     </div>
   </div>
 </div>
 <div class="about-img">
  <img src="<?php echo get_template_directory_uri(); ?>/img/18 yrs.jpg" alt="">

   <!--      <div class="bpa-img-border">
          <div class="bpa-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/18 yrs.jpg" alt="">
          </div>
        </div>
        <h4>years of successful work<br><span> in the industry</span></h4> -->
      </div>
    </section>

    <section class="bpa-key-strength">
      <div class="container">
        <h3 class="bpa-h3-title">Our Key strengths</h3>
        <span class="header-underline"></span>
        <div class="strength-icons">
          <p><span><i class="fas icon-quality "></i></span>Quality</p>
          <p><span><i class="fas icon-assurance"></i></span>ASSURANCE</p>
          <p><span><i class="fas icon-sustainability"></i></span>SUSTAINABILITY</p>
          <p><span><i class="fas icon-cost"></i></span>cost</p>
        </div>
      </div>
    </section>   

    <section class="best-job container">
      <div class="award-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/img/build-award.png" alt="">
      </div>
      <div>        
        <span class="header-underline"></span>
        <h3>We make our job best in country</h3>
        <p>With green building initiative and cutting edge technologies, we offer the best in class solutions for Architecture & Interior Design.</p>
      </div>
    </section>

    
    <section class="bpa-founders container">
      <h2>the founders</h2>
      <span class="header-underline"></span>
      <div class="bpa-section ">
        <div class="about-img wow fadeInUpBig" data-wow-delay="1s">
          <img src="<?php echo get_template_directory_uri(); ?>/img/bharthi.jpg" alt="">
        </div>
        <div class="about-content">
          <h3 class="wow fadeInUpBig" data-wow-delay="1.2s">bharthi prem</h3>
          <span class="header-underline wow fadeInUpBig" data-wow-delay="1.2s"></span>
          <h4 class="wow fadeInUpBig" data-wow-delay="1.4s">leed ap<span>(Leadership in Energy and Environmental Design )</span> </h4>
          <p class="lead wow fadeInUpBig" data-wow-delay="1.6s">Bharathi Prem is one of the leading 
          architects promoting green building & sustainable structures and is a LEED accredited professional from USGBC.</p>
          <p class="wow fadeInUpBig" data-wow-delay="1.8s">She is the architect of Pyramid Valley International, which has received the Asia Pacific award for best public spaces and has been voted as one of the seven wonders of Bengaluru.</p>
          <a href="<?php echo home_url('bharathi_prem'); ?>" class="btn btn-outline plr wow fadeInUpBig" data-wow-delay="2s">Read More <i class="fas fa-chevron-right"></i></a>
        </div>
        <div class="founder-social-links">
          <h5>- Bharthi is social</h5>
          <ul>
            <li><a href="https://www.facebook.com/bharathi.prem.7" class="fab fa-facebook-f" target="_blank"></a></li>
            <li><a href="#" class="fab fa-twitter" target="_blank"></a></li>
            <li><a href="#" class="fab fa-instagram" target="_blank"></a></li>
            <li><a href="https://www.linkedin.com/in/bharathiprem" class="fab fa-linkedin-in" target="_blank"></a></li>
          </ul>
        </div>
      </div>
      <div class="bpa-section ">
        <div class="about-img prem-img wow fadeInUpBig" data-wow-delay="1s">
          <img src="<?php echo get_template_directory_uri(); ?>/img/prem.jpg" alt="">
        </div>
        <div class="about-content prem-content">
          <h3 class="wow fadeInUpBig" data-wow-delay="1.2s">tk prem kumar</h3>
          <span class="header-underline wow fadeInUpBig" data-wow-delay="1.2s"></span>
          <h4 class="wow fadeInUpBig" data-wow-delay="1.4s">be Civil</h4>
          <p class="lead wow fadeInUpBig" data-wow-delay="1.6s">BA Civil Engineer by Profession, a Post graduate in Management, Public speaker, Psychotherapist and Counsellor.</p>
          <p class="wow fadeInUpBig" data-wow-delay="1.8s">He is the president of Pyramid Party Of India (Karnataka) the only Spiritual Political Party in India. He is a voracious reader and regularly speaks at leading institutions. </p>
          <a href="<?php echo home_url('bharathi_prem'); ?>" class="btn btn-outline plr wow fadeInUpBig" data-wow-delay="2s">Read More <i class="fas fa-chevron-right"></i></a>
        </div>
        <div class="founder-social-links">
          <h5>- Prem kumar is social</h5>
          <ul>
            <li><a href="https://www.facebook.com/pyramidprem?fref=pb&hc_location=friends_tab" class="fab fa-facebook-f" target="_blank"></a></li>
            <li><a href="https://www.youtube.com/user/pyramidprem" class="fab fa-youtube" target="_blank"></a></li>
            <li><a href="#" class="fab fa-instagram" target="_blank"></a></li>
            <li><a href="#" class="fab fa-linkedin-in" target="_blank"></a></li>
          </ul>
        </div>
      </div>
    </section>

<!-- <div id="gallery">  
  <div class="blog-box">
  <img src="<?php echo get_template_directory_uri(); ?>/img/pyramid-valley-desktop.png">
  <div class="item-detail">
    <div class="author-name">
      <div class="author-img">
      <img src="<?php echo get_template_directory_uri(); ?>/img/pyramid-valley-desktop.png">
      </div>
      <h5>author name</h5>
    </div>
    <a href="#" class="btn btn-outline plr">Read more </a>
  </div>
</div>
-->

<section class="bpa-project">
  <div class="bpa-projects-img container wow zoomIn" data-wow-delay="1s">   
    <div class="about-img calender-img">
      <img src="<?php echo get_template_directory_uri(); ?>/img/pyramid-valley.jpg" alt="">
<!--         <div class="bpa-img-border">
          <div class="bpa-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/pyramid-valley-desktop.png" alt="">
          </div>
        </div> -->
      </div>
      <div class="banner-content box-shadow">
        <h2>we turn ideas into work of art</h2>
        <span class="header-underline"></span>
        <p>pyramid valley - <span>a meditation center</span></p>
        <a href="<?php echo home_url('pyramid'); ?>" rel="noopener noreferrer" class="btn btn-outline">View project <i class="fas fa-chevron-right"></i></a>
      </div>
    </div>

    <div class="bpa-projects-img container wow zoomIn" data-wow-delay="1.8s">   
      <div class="about-img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/luxury-residence.png" alt="">
<!--         <div class="bpa-img-border">
          <div class="bpa-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/residency-desktop.png" alt="">
          </div>
        </div> -->
      </div>
      <div class="banner-content box-shadow">
        <h2>a luxury residence </h2>
        <span class="header-underline"></span>
        <p>Our mission is to design & develop the best interior around</p>
        <a href="<?php echo home_url('srihari'); ?>" rel="noopener noreferrer" class="btn btn-outline">View project <i class="fas fa-chevron-right"></i></a>
      </div>
    </div>
  </section>

  <section class="bpa-recent-projects container">
    <h2 class="bpa-h3-title">Recent projects</h2>
    <span class="header-underline"></span>
    <p class="bpa-p-width">For each project we establish relationships with partners who we know will help us create added value for your project. As well as bringing together the public and private sectors, we make sector-overarching links to gather knowledge and to learn from each other.</p>
    <div class="testimonial-links">
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

    <section class="bpa-awards">
      <div class="container">
        <h2 class="bpa-h3-title">awards & publications</h2>
        <span class="header-underline"></span>
        <p class="bpa-p-width">Our projects have been featured in many leading architectural journals such as Indian Architect and Builder, Society Interiors, Journal of Indian Institute of Architects, Architect and Interiors.</p>
        <div class="bpa-awards-publications">
          <div class="strength-icons">
            <p><img src="<?php echo get_template_directory_uri(); ?>/img/award-leaf.png" alt="award-leaf">Architect & Interiors<br>India - iGEN 50 Award</p>
            <p><img src="<?php echo get_template_directory_uri(); ?>/img/award-leaf.png" alt="award-leaf">BUILD Architecture<br>Awards 2018</p>
            <p><img src="<?php echo get_template_directory_uri(); ?>/img/award-leaf.png" alt="award-leaf">Asia Pacific Property<br>Architecture Awards</p>

          </div>
          <div>
            <span class="awards-middle-line"></span>
          </div>
          <div class="bpa-awards-testimonials">
            <div class="carousel-wrap">
              <div class="owl-carousel one">
                <div class="item">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/publication-1.png" alt="publication">
                  <p>Architects and Interiors of India - iGEN Top 50</p>
                </div>
                <div class="item">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/publication-1.png" alt="publication">
                  <p>Architects and Interiors of India - iGEN Top 50</p>
                </div>
                <div class="item">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/publication-1.png" alt="publication">
                  <p>Architects and Interiors of India - iGEN Top 50</p>
                </div>
              </div>
            </div>
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/publication-1.png" alt="publication">
          <p>Architects and Interiors of India - iGEN Top 50</p> -->
        <!-- <div>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/left-award-arrow.png" alt="client"></a>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/right-award-arrow.png" alt="client"></a>
      </div> -->
    </div>
  </div>
</div>
</section>

<section class="bpa-client-testimonial container">
  <h2 class="bpa-h3-title">Clients & Testimonials</h2>
  <span class="header-underline"></span>
  <div class="bpa-client-feedback">
    <div class="bpa-client">
      <div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/pyramid-valley-logo.png" alt="pyramid-valley-logo">
      </div>
      <div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/canarys-logo.png" alt="canarys-logo">
      </div>
      <div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/kenmore-school-logo.png" alt="kenmore-school-logo">
      </div>
      <div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/school-of-ancient-wisdom-logo.png" alt="school-of-ancient-wisdom-logo">
      </div>
      <div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/zeiss-logo.png" alt="zeiss-logo">
      </div>
      <div>
        <img src="<?php echo get_template_directory_uri(); ?>/img/SVPS-logo2.png" alt="SVPS-logo2">
      </div>
    </div>
    <div class="client-feedback">
      <div class="carousel-wrap">
        <div class="owl-carousel one">
          <div class="item">
            <h3>Building a house starts once in life time</h3>
            <p>Building a house starts once in a lifetime, so kindly take professional's advice for your dream home.</p>
            <h4>Venkatesh Gowda</h4>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/img/venkatesh-gowda.png" alt="venkatesh-gowda">
            </div>
          </div>
          <div class="item">
            <h3>BPA made our dream come true</h3>
            <p>BPA made our dream come true. Our house at Subrahmanyapura got constructed in a brief period with quality par excellence!</p>
            <h4>Geetha Kallapur</h4>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/img/geetha-kallpaur.png" alt="geetha-kallpaur">
            </div>
          </div>
          <div class="item">
            <h3>Approach BPA for your dream home </h3>
            <p>Approach BPA for your dream home to come true.  You will be in comfort zone from beginning to end.</p>
            <h4>Girish Tattimani<br></h4>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/img/girish-tattimani.png" alt="girish-tattimani">
            </div>
          </div>
          <div class="item">
            <h3>Starting a new project with BPA</h3>
            <p>Bharati helped us to construct our dream house 5 years back and today starting a new project with her.</p>
            <h4>Sharan Kumar</h4>
            <div>
              <img src="<?php echo get_template_directory_uri(); ?>/img/sharan-kumar.png" alt="sharan-kumar">
            </div>
          </div>
        </div>
      </div>
      <div>
            <!-- <h3>Approach BPA for your dream home </h3>
            <p>Approach BPA for your dream home to come true.  You will be in comfort zone from beginning to end.</p>
            <h4>Girish Tattimani<br><span>Chief Executive Officer </span></h4>
          </div>
          <div class="bpa-client-img">
            <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/client.png" alt="client">
            </div>
            <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/client.png" alt="client">
            </div>
            <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/client.png" alt="client">
          </div> -->
            <!-- <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/client.png" alt="client">
          </div> -->
          
        </div>

      </div>
    </div>
  </section> 



  <section class="rp-blog rp-categories ">
   <div class="container">
    <h3 class="bpa-h3-title">Recent news</h3>
    <span class="header-underline"></span>
    <div class="rp-blog-col">       
      <?php $respixBlogs = new WP_Query('category_name=blog&posts_per_page=6&orderby=date&order=DESC'); ?>
      <?php if ($respixBlogs->have_posts() ) : while ($respixBlogs->have_posts() ) : $respixBlogs->the_post(); ?>
       <div class="rp-blog-row">
        <a href="<?php the_permalink();?>">
         <div class="blog-img">
          <img src="<?php the_post_thumbnail_url('full'); ?>" alt="" />
          <div class="blog-hover">
            <h3><?php the_title(); ?></h3>
          </div>
        </div><!-- /.blog-img -->
        <div class="blog-info">
          <span><?php the_author() ?></span>
          <!-- <span><?php echo get_the_date('M j, Y') ?></span> -->
          <!-- <p><?php the_title(); ?></p> -->
          <a href="<?php the_permalink();?>" class="btn blog-btn blog-btn-padding">Read more <i class="fas fa-chevron-right"></i></a>
          <?php //the_content() ?>
        </div><!-- /.blog-info -->
      </a>
    </div><!-- /.rp-blog-row -->
  <?php endwhile; endif;  wp_reset_postdata(); ?>

</div><!-- /.rp-blog-col -->
</div><!-- /.container -->
</section><!-- /.rp-blog -->



<section class="form-section">
  <div class="container">
    <h2 class="bpa-h3-title">Have a project?</h2>
    <span class="header-underline"></span>
    <p class="bpa-p-width lead">Let’s build something outstanding. Work with us to understand our business specifics and our target audience to our full strategy in marketing.</p>
    
    <form action="">
      <input type="text" placeholder="Name">
      <input type="email" placeholder="Email">
      <a href="#" class="btn btn-outline plr">SEND <i class="fas fa-envelope"></i></a>
    </form>
  </div>
</section>

</main><!-- #main -->
</div><!-- #primary -->


<?php
get_footer();



