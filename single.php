<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package EmeraldJA
 */

get_header(); ?>

	<main class="container page-content">
      <div class="row">

    <!-- CONTENT
    =======================================================================-->
            <div class="col-sm-9">

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/post/content', 'blog' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->



			</div><!-- .col -->

    <!-- SIDEBAR
    =======================================================================-->
            <div class="col-sm-3 page-content__sidebar">

				<?php get_sidebar(); ?>

			</div><!-- .col -->

	    </div><!-- .row -->
    </main><!-- .page-content -->


<?php

get_footer();
