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

		<div id="primary" class="content-area col-sm-12">
			<main id="main" class="site-main">

			<?php
			if ( have_posts() ) : ?>

				<header class="page-header">
					<h1>All: <span class="text--color">Projects</span></h1>
					<?php
						//the_archive_title( '<h2 class="page-title">', '</h2>' );
						//the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header><!-- .page-header -->

				<section class="archive-content row">

					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post(); ?>

						<div class="col-sm-4">
						
							<?php get_template_part( 'template-parts/post/content', 'portfolio' ); ?>

						</div><!-- .col -->

					<?php endwhile; ?>

				</section>

				    <!-- PAGINATION
                    ============================================================================-->

                    <div class="pagination-wrapper col-sm-12">

					<div class="text-center">
                        <?php the_posts_pagination( array(
                                'mid_size'  => 2,
                                'prev_text' => __( '&#x000AB; Previous', 'textdomain' ),
                                'next_text' => __( 'Next &#x000BB;', 'textdomain' ),
                            ) ); 
                        ?>
					</div><!-- .text-center -->
                            
                    </div><!-- .col -->

			<?php else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

			</main><!-- #main -->
		</div><!-- #primary .col -->

	</div><!-- .row -->
</div><!-- .container -->


<?php
get_footer();