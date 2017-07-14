<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EmeraldJA
 */

get_header(); ?>

<div class="container">

		<div id="primary" class="content-area">
			<main id="main" class="site-main">

			<?php
			if ( have_posts() ) : ?>

            <!-- CATEGORY HEADER
            ============================================================================-->
            <div class="row">

				<header class="headline category-caption col-sm-12">

                    <h1><?php echo single_cat_title(); ?></h1>

					<?php
						//the_archive_title( '<h2 class="page-title">', '</h2>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
					?>

                    <div class="headline__divider">
                        <hr>
                    </div><!-- .headline__divider -->

				</header><!-- .headline -->
            
            </div><!-- .row -->

            <!-- CATEGORY GALLERY - subcategories of 'Portfolio'
            ============================================================================-->
            <div class="row category-gallery">

                <?php 
                        $args = array(
                            'post_type' => 'portfolio_post',
                            'orderby'   => 'post_id',
                            'order'     => 'ASC'
                        );

                ?>

                <?php $loop = new WP_Query( $args ); ?>

                <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

                    <div class="col-sm-6 col-md-4">

                        <?php get_template_part( 'template-parts/post/content-portfolio', get_post_format() ); ?>

                    </div>

                <?php endwhile; wp_reset_query(); ?>

            <?php
				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

            </div><!-- .row -->

			</main><!-- #main -->
		</div><!-- #primary .col -->

</div><!-- .container -->


<?php
get_footer();
