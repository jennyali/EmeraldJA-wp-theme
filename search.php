<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package EmeraldJA
 */

get_header(); ?>

<div class="container container--padding page-content">
	<div class="row">

		<!-- CONTENT
		=============================================================================-->
		<section id="primary" class="content-area col-sm-9 page-content__wrapper">
			<main id="main" class="site-main">

			<?php
			if ( have_posts() ) : ?>

				<header class="page-header">
					<h5 class="page-title"><?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'emerald_ja' ), '<span>' . get_search_query() . '</span>' );
					?></h5>
				</header><!-- .page-header -->

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/**
					* Run the loop for the search to output the results.
					* If you want to overload this in a child theme then include a file
					* called content-search.php and that will be used instead.
					*/
					get_template_part( 'template-parts/content', 'search' );

				endwhile; ?>

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
		</section><!-- #primary -->

		<!-- SIDEBAR
		===================================================================================-->
		<aside class="col-sm-3">

			<?php get_sidebar(); ?>

		<aside class="col-sm-3">

	</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
