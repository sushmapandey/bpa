<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bpa
 */

get_header();
?>

<?php if (has_category('blog')) { ?>

 
  <div id="primary" class="content-area blog-inner-section">
    <main id="main" class="site-main rp-categories">

      <div class="banner about-banner">
      <picture>
        <source media="(max-width: 576px)" srcset="<?php echo get_template_directory_uri(); ?>/img/blog-innerpage-mobile-banner.png">
        <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/blog-innerpage-tablet-banner.png">
        <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/img/blog-innerpage-laptop-banner.png">
        <img src="<?php echo get_template_directory_uri(); ?>/img/blog-innerpage-desktop-banner.png" alt="blog-innerpage">
      </picture>
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/about-banner.png" alt=""> -->
        <div class="container">
          <div class="banner-contents other-width">
            <h2><?php the_title(); ?></h2>
          </div>
        </div>
        <!-- <div class="bpa-img-border"></div> -->
      </div>
      <section class="breadcrumb">
        <ul class="container">
          <li><i class="fas fa-home"></i> <a href="<?php echo get_home_url(); ?>">BPA</a></li>
          <li><a href="<?php echo home_url('blog'); ?>">Blogs</a></li>
          <li class="is-active"><?php the_title(); ?></li>
        </ul>
      </section> 
      <?php while(have_posts()) :the_post(); ?>
        

       <section class="blog-inner-details container">
        <div class="blog-inner-row">

          <div class="blog-inner-col">
            <h2><?php the_title(); ?></h2>
            <span><i class="far fa-calendar-alt"></i><?php echo get_the_date('F j, Y') ?></span>
            <div class="inner-blog-height">
              <img src="<?php the_post_thumbnail_url('large');?>" alt="PoojaNirman" />
            </div><!-- /.blog-img -->
            
            <p><?php the_content(); ?></p>
            
            <div class="blog-posts">
              <li>
                <?php previous_post_link() ?></li>
                <li><?php next_post_link() ?></li>
              </div><!-- /.blog-posts -->
            </div><!-- /.blog-inner-col -->
            <?php endwhile; ?> <!-- End of the loop. -->

            <?php get_sidebar(); ?>
          </div><!-- /.blog-inner-row -->
        </section><!-- /.blog-inner-details --> 
        <div class="blog-inner-col blog-bigger-view container">
          <!-- <div class="blog-search">
            <form class="search" action="<?php echo home_url( '/' ); ?>">
              <input type="search" name="s" placeholder="Search&hellip;" value="<?php echo get_search_query()?>">
              <input type="hidden" name="post_type" value="kb_article">
            </form>
            <input type="search" name="search" placeholder="Search">
          </div> -->
          <h3 class="bpa-h3-title">Recent Posts</h3>
          <span class="header-underline"></span>

          <div class="rp-blog-col">
            <?php $bpaBlogs = new WP_Query('category_name=blog&posts_per_page=3&orderby=date&order=DESC'); ?>
            <?php if ($bpaBlogs->have_posts() ) : while ($bpaBlogs->have_posts() ) : $bpaBlogs->the_post(); ?>
              <div class="rp-blog-row">
                <a href="<?php the_permalink();?>">
                  <div class="blog-img blog-height">
                    <img src="<?php the_post_thumbnail_url('large'); ?>" alt="" />
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
        </div><!-- /.blog-inner-col -->
        <div class=" bpa-comment-section">
          <div class="container">
          <?php
          while ( have_posts() ) :
           the_post();

			// get_template_part( 'template-parts/content', get_post_type() );

			// the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
           if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

		endwhile; // End of the loop.
		?>
    </div>
  </div>
</main><!-- #main -->
</div><!-- #primary -->

<?php } ?>


<?php
get_footer();