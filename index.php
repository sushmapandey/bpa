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

    <div class="banner about-banner">
      <picture>
        <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri(); ?>/img/blog-mobile-banner.png">
        <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/blog-tablet-banner.png">
        <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/blog-laptop-banner.png">
        <img src="<?php echo get_template_directory_uri(); ?>/img/blog-desktop-banner.png" alt="blog">
      </picture>
      <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/contact-banner.png" alt=""> -->
      <div class="container">
        <div class="banner-contents other-width">
          <h2>Blog</h2>
        </div>
      </div>
      <!-- <div class="bpa-img-border"></div> -->
    </div>

    <section class="breadcrumb">
      <ul class="container">
        <li><i class="fas fa-home"></i> <a href="#">BPA</a></li>
        <li class="is-active">Blog</li>
      </ul>
    </section>  


    <section class="rp-blog rp-categories ">
     <div class="container">

       <div class="rp-blog-col">

        <?php $respixBlogs = new WP_Query('category_name=blog&posts_per_page=-1&orderby=date&order=DESC'); ?>
        <?php if ($respixBlogs->have_posts() ) : while ($respixBlogs->have_posts() ) : $respixBlogs->the_post(); ?>
         <div class="rp-blog-row">
          <a href="<?php the_permalink();?>">
           <div class="blog-img">
            <img src="<?php the_post_thumbnail_url('large'); ?>" alt="" />
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




