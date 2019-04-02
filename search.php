<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package bpa
 */

get_header();
?>
		    <div class="banner about-banner">
      <img src="<?php echo get_template_directory_uri(); ?>/img/about-banner.png" alt="">
      <div class="banner-content">
          <h2><?php the_title(); ?></h2>
      </div>
      <!-- <div class="bpa-img-border"></div> -->
    </div>
    <section class="breadcrumb">
      <ul class="container">
				<li><i class="fas fa-home"></i> <a href="#">Home</a></li>
				<li><a href="#">Blog</a></li>
        <li class="is-active"><?php the_title(); ?></li>
      </ul>
    </section> 

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
		<section class="blog-inner-details container">
		<div class="blog-inner-row">
		<div class="blog-inner-col">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'bpa' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</div>
		<?php get_sidebar(); ?>
		</div>
		</section>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php

get_footer();
