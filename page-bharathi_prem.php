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
      <img src="<?php echo get_template_directory_uri(); ?>/img/bharathi_prem-banner.png" alt="">
    </div>
    <section class="breadcrumb">
      <ul class="container">
        <li><i class="fas fa-home"></i> <a href="<?php echo get_home_url(); ?>">BPA</a></li>
        <li><a href="<?php echo home_url('about'); ?>">About</a></li>
        <li class="is-active">The Founder</li>
      </ul>
    </section> 
    <section class="bpa-section container bpa-about-img bharathi-prem-page">
      <div class="about-content">
       <div class="title-bdr"></div>
       <div class="title-border">
        <h3 class="bpa-h3-title">THE CREATIVE STUDIO</h3>
        <span class="header-underline"></span>
        </div>
        <p>Bharthi along with her husband Prem Kumar, leads their firm <strong>'Bharthi Prem Associates'</strong>, located at Banashankari 3rd stage, Bengaluru. Over the span of two decades, they have had an array of projects to their name, including Residencies, Institutions, Resorts, Hospitals, Meditation centres etc.,</p>
      </div>
      <div class="about-img ">
        <img src="<?php echo get_template_directory_uri(); ?>/img/bharthi-prem.png" alt="bharthi-prem">
      </div>
    </section>
    <section class="bpa-founders pt container">
      <div class="bpa-section bg-primary">
        <div class="about-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/bharthi-desktop.png" alt="bharathi">
        </div>
        <div class=" protfolio-content">
          <h3>bharthi prem</h3>
          <span class="header-underline"></span>
          <h4>leed ap<br><span>(Leadership in Energy and Environmental Design )</span> </h4>
          <p>Bharthi Prem is an Architect who graduated from the university of Vishveshvaraya College of Engineering, Bengaluru in the year 1995. Since then, she has had over 23 years of work experience and is today one of the leading architects promoting green buildings and sustainable structures. Further, she is a LEED (Leadership in Energy and Environmental Design) accredited professional from USGBC. </p>
          <p>She is the architect of Pyramid Valley International, which has received the Asia Pacific award for best public spaces and has been voted as one of the seven wonders of Bengaluru.</p>
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
      <div class="bpa-section bpa-mb pt">
      </div>
    </section>

    <section class="recognition container">
        <h2 class="bpa-h3-title text-center">RECOGNITION</h2>
        <span class="header-underline text-center"></span>
        <p class="bpa-p-width text-center">Architect Bharthi Prem has also been a visiting faculty at various reputed schools of architecture and has given presentation on the importance of green buildings at various institutions. For her contributions, she has been the recipient of various accreditations.</p>  
        <div class="bpa-recognition">
          <div class="left-recognition">
            <h3>01</h3>
            <span class="header-underline"></span>
            <p>IGEN top 50 architects of India, 2012</p>
            <h3>02</h3>
            <span class="header-underline"></span>
            <p>award for Public space, 2014</p>
            <h3>03</h3>
            <span class="header-underline"></span>
            <p>Buildtech (UK) 2018 award for her project Pyramid Valley International, Bengaluru</p>
          </div>
          <div class="right-recognition">
            <img src="<?php echo get_template_directory_uri(); ?>/img/recognition.png" alt="recognition">
          </div>
        </div> 
    </section>

    <section class="portfolio-publication container">
        <h2 class="bpa-h3-title text-center">PUBLICATIONS</h2>
        <span class="header-underline text-center"></span>
        <p class="bpa-p-width text-center">Their projects have been featured in many leading architectural journals such as Indian Architect and Builder, Society Interiors, Journal of Indian Institute of Architects, Architect and Interiors, Architect update, Interior Design, better Interiors, India Art adn Design, D'zen, Vijaya times and various television channels.</p> 
        <div class="publication-img ">
          <h3><img src="<?php echo get_template_directory_uri(); ?>/img/publications01.png" alt=""><br>THE JOURNAL OF INDIAN INSTITUTE OF ARCHITECTS</h3>
          <h3><img src="<?php echo get_template_directory_uri(); ?>/img/publications02.png" alt=""><br>ARCHITECT AND INTERIORS INDIA</h3>
          <h3><img src="<?php echo get_template_directory_uri(); ?>/img/publications03.png" alt=""><br>SOCIETY INTERIORS</h3>

        </div>
    </section>

    <section class="bpa-founders pt container">
      <div class="bpa-section bpa-mb pt"></div>
      <div class="bpa-section bg-primary">
        <div class="about-img prem-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/prem-kumar-desktop.png" alt="prem-kumar">
        </div>
        <div class="protfolio-content ">
          <h3>tk prem kumar</h3>
          <span class="header-underline"></span>
          <h4>be Civil</h4>
          <p>A Civil Engineer by Profession, a Post graduate in Management, Public speaker, Psychotherapist and Counsellor. In the last 25 years he was associated with Mahesh Yogi, Osho Centre, Swamy Sukhabodanandaji, Ramakrishna Mutt, Sri Sathya Sai Baba, The School of Ancient Wisdom and with Brahmarshi Patriji’s Pyramid Spiritual Societies Movement since 2005. After a Hiatus of 10 years he has decided to take up public speaking & conduct work-shops in Kannada ,English & Hindi. Primarily to the youth in Cities ,Towns & Villages.</p>
          <p>He is the president of Pyramid Party Of India (Karnataka) the only Spiritual Political Party in India. He is a voracious reader and regularly speaks at leading institutions. </p>
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

    <section class="publications-awards container">
      <h2 class="bpa-h3-title text-center">BOOKS BY PREM KUMAR</h2>
      <span class="header-underline text-center"></span>
      <p class="bpa-p-width text-center">He is the author of highly acclaimed book “ZERO TO HERO” (Kannada) – Journey of a true seeker, “The Empty Cup” – Book of Zen and “Khali Cup” – in Kannada</p>
      <div class="publications-awards-images books-authored">
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/zth(k).png" alt="build-award">
          <p>Zero To Hero (KAN)</p>
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/zth(e).png" alt="build-award">
          <p>Zero To Hero (ENG)</p>
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/khaali-cup(k).png" alt="build-award">
          <p>Khaali Cup (KAN)</p>
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/img/empty-cup(e).png" alt="build-award">
          <p>The Empty Cup (ENG)</p>
        </div>
      </div>
    </section>

  

    <section class="bpa-recent-projects container bpa-about-recent-projects">
      <h2 class="bpa-h3-title">FEW ACCOMPLISHED PROJECTS</h2>
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

<section class="form-section form-mt">
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

    <!-- </section>  -->


  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
