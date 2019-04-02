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
        <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri(); ?>/img/publications-mobile-banner.png">
        <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/publications-tablet-banner.png">
        <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/publications-laptop-banner.png">
        <img src="<?php echo get_template_directory_uri(); ?>/img/publications-desktop-banner.png" alt="publications">
      </picture>
      <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/awardsandpublications-banner.jpg" alt=""> -->
      <div class="container">
        <div class="banner-contents other-width">
          <h2>AWARDS AND PUBLICATIONS</h2>
        </div>
      </div>
      <!-- <div class="bpa-img-border"></div> -->
    </div>

    <section class="breadcrumb">
      <ul class="container">
        <li><i class="fas fa-home"></i> <a href="<?php echo get_home_url(); ?>">BPA</a></li>
        <li class="is-active">Publications</li>
      </ul>
    </section> 


    <section class="container bpa-publications">
      <h2 class="bpa-h3-title text-center">Publications</h2>
      <span class="header-underline text-center"></span>
      <p class="bpa-p-width text-center">BPA's experience covers a range of project types from private to public, Domestic to Commercial. We relish the challenges of finding creative co-he rent resolutions to diverse briefs</p>
      <div class="wrap container">
        <ul class="nav filter publication-menu">
          <li><a href="#" class="active" data-filter="all">All</a></li>
          <li><a href="#" data-filter="ai">Architect and Interiors India</a></li>
          <li><a href="#" data-filter="asia-pacific">Asia Pacific</a></li>
          <li><a href="#" data-filter="iia">The Indian Institute of Architecture</a></li>
          <li><a href="#" data-filter="society-interiors">Society Interiors</a></li>
          <li><a href="#" data-filter="deccan">Deccan Herald</a></li>
        </ul>
        <div class="boxes f-boxes">
          <div class="dabba" data-category="ai">
            <div class="box">
              <img src="<?php echo get_template_directory_uri(); ?>/img/publications/sm-image-1.png" 
              data-darkbox="<?php echo get_template_directory_uri(); ?>/img/publications/lg-image-1.png" 
              data-darkbox-group="one" alt="ai"> 
            </div><!-- eo.box -->
          </div><!-- eo.dabba -->
          <div class="dabba" data-category="iia">
            <div class="box">
              <img src="<?php echo get_template_directory_uri(); ?>/img/publications/sm-ina1.png" 
              data-darkbox="<?php echo get_template_directory_uri(); ?>/img/publications/lg-ina1.png" 
              data-darkbox-group="one" alt="ina">  
            </div><!-- eo.box -->   
          </div><!-- eo.dabba --> 
          <div class="dabba" data-category="society-interiors">
            <div class="box">
              <img src="<?php echo get_template_directory_uri(); ?>/img/publications/sm-society-interiors4.png" 
              data-darkbox="<?php echo get_template_directory_uri(); ?>/img/publications/lg-society-interiors4.png" 
              data-darkbox-group="one" alt="society-interiors">  
            </div><!-- eo.box -->
          </div><!-- eo.dabba -->  
          <div class="dabba" data-category="ai">
            <div class="box">
              <img src="<?php echo get_template_directory_uri(); ?>/img/publications/sm-image-3.png" 
              data-darkbox="<?php echo get_template_directory_uri(); ?>/img/publications/lg-image-3.png" data-darkbox-group="one" alt="ai"> 
            </div><!-- eo.box -->
          </div><!-- eo.dabba -->
          <div class="dabba" data-category="society-interiors">
            <div class="box">
              <img src="<?php echo get_template_directory_uri(); ?>/img/publications/sm-society-interiors2.png" 
              data-darkbox="<?php echo get_template_directory_uri(); ?>/img/publications/lg-society-interiors2.png" 
              data-darkbox-group="one" alt="society-interiors">  
            </div><!-- eo.box -->
          </div><!-- eo.dabba -->  
          <div class="dabba" data-category="iia">
            <div class="box">
              <img src="<?php echo get_template_directory_uri(); ?>/img/publications/sm-ina2.png" 
              data-darkbox="<?php echo get_template_directory_uri(); ?>/img/publications/lg-ina2.png" 
              data-darkbox-group="one" alt="iia">
            </div><!-- eo.box -->
          </div><!-- eo.dabba -->
          <div class="dabba" data-category="society-interiors">
            <div class="box">
              <img src="<?php echo get_template_directory_uri(); ?>/img/publications/sm-society-interiors1.png" 
              data-darkbox="<?php echo get_template_directory_uri(); ?>/img/publications/lg-society-interiors1.png" 
              data-darkbox-group="one" alt="society-interiors">  
            </div><!-- eo.box -->
          </div><!-- eo.dabba -->   
          <div class="dabba" data-category="ai">
            <div class="box">
              <img src="<?php echo get_template_directory_uri(); ?>/img/publications/sm-image-2.png" 
              data-darkbox="<?php echo get_template_directory_uri(); ?>/img/publications/lg-image-2.png"
              data-darkbox-group="one" alt="ai"> 
            </div><!-- eo.box -->
          </div><!-- eo.dabba -->         
          <div class="dabba" data-category="society-interiors">
            <div class="box">
              <img src="<?php echo get_template_directory_uri(); ?>/img/publications/sm-society-interiors3.png" 
              data-darkbox="<?php echo get_template_directory_uri(); ?>/img/publications/lg-society-interiors3.png" 
              data-darkbox-group="one" alt="society-interiors">  
            </div><!-- eo.box -->
          </div><!-- eo.dabba -->         
          <div class="dabba" data-category="society-interiors">
            <div class="box">
              <img src="<?php echo get_template_directory_uri(); ?>/img/publications/sm-society-interiors5.png" 
              data-darkbox="<?php echo get_template_directory_uri(); ?>/img/publications/lg-society-interiors5.png" 
              data-darkbox-group="one" alt="society-interiors">  
            </div><!-- eo.box -->
          </div><!-- eo.dabba -->          
        </div><!-- eo.boxes -->
      </div><!-- eo.wrap -->
    </section>

    <section class="publications-awards container">
      <h2 class="bpa-h3-title text-center">BOOKS AUTHORED BY PREM KUMAR</h2>
      <span class="header-underline text-center"></span>
      <div class="publications-awards-images books-authored">
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/zero-to-hero.jpg" alt="build-award">
          <p>Zero To Hero (KAN)</p>
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/zero-to-hero-(eng).jpg" alt="build-award">
          <p>Zero To Hero (ENG)</p>
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/khaali-cup.jpg" alt="build-award">
          <p>Khaali Cup (KAN)</p>
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/the-empty-cup-(eng).jpg" alt="build-award">
          <p>The Empty Cup (ENG)</p>
        </div>
      </div>
    </section>


    <section class="publications-awards">
      <h2 class="bpa-h3-title text-center">AWARDS</h2>
      <span class="header-underline text-center"></span>
      <div class="publications-awards-images">
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/awards1.jpg" alt="build-award">
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/build-award.png" alt="build-award">
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/awards2.jpg" alt="build-award">
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

</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
