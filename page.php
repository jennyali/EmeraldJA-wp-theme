<?php
/**
 * The template for displaying all pages
 *
 * @package EmeraldJA
 */

get_header(); ?>

<div class="container container--padding">
    <div class="row">

		<!-- PAGE CONTENT
		====================================================================-->
		<div id="primary" class="content-area col-sm-9">
			<main id="main" class="site-main">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</div><!-- #primary .col -->

        <!-- SIDEBAR - 'sidebar-blog-page'
        ======================================================================-->
        <div class="col-sm-3">

            <?php get_sidebar(); ?>

        </div><!-- .col -->

	</div><!-- .row -->
</div><!-- .container -->

<?php
get_sidebar();
get_footer();
