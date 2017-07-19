<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EmeraldJA
 */

get_header(); ?>

<div class="container container--padding">
	<div class="row">

		<div id="primary" class="content-area page-content__wrapper col-sm-9">
			<main id="main" class="site-main">

			<?php
			if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
						the_archive_title( '<h5 class="page-title">', '</h5>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header><!-- .page-header -->

				<section class="archive-content">

					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						* Include the Post-Format-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Format name) and that will be used instead.
						*/
						get_template_part( 'template-parts/content', get_post_format() );

					endwhile; ?>

				</section>

				    <!-- PAGINATION
                    ============================================================================-->

                    <div class="pagination-wrapper">

                        <?php the_posts_pagination( array(
                                'mid_size'  => 2,
                                'prev_text' => __( '&#x000AB; Previous', 'textdomain' ),
                                'next_text' => __( 'Next &#x000BB;', 'textdomain' ),
                            ) ); 
                        ?>
                            
                    </div><!-- .col -->

			<?php else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

			</main><!-- #main -->
		</div><!-- #primary .col -->

		<aside class="col-sm-3">

			<?php get_sidebar(); ?>

		</aside><!-- .col -->

	</div><!-- .row -->
</div><!-- .container -->


<?php
get_footer();
