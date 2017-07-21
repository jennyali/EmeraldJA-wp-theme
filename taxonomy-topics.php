<?php
/**
 * The template for displaying the custom taxonomy TOPICS
 *
 *
 * @package EmeraldJA
 */

get_header(); ?>

<div class="container container--padding">

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			if ( have_posts() ) : ?>

            <!-- TOPIC HEADER
            ============================================================================-->
            <div class="row">

				<header class="headline category-caption col-sm-12">

                    <h1><?php echo single_cat_title(); ?></h1>

					<?php
						the_archive_description( '<div class="archive-description">', '</div>' );
					?>

                    <div class="page__divider">
                        <hr>
                    </div><!-- .page__divider -->

				</header><!-- .headline -->
            
            </div><!-- .row -->

            <!-- TOPICS GALLERY
            ============================================================================-->
            <div class="row category-gallery">

                 <?php
                    $queried_object = get_queried_object();
                    $current_term = $queried_object->slug;

                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                    $args = array(
                        'post_type' => 'portfolio_post',
                        'order'     => 'ASC',
                        'tax_query' => array(
                                array(
                                    'taxonomy' => 'topics',
                                    'field'    => 'slug',
                                    'terms'    => $current_term,
                                ),
                            ),
                        'posts_per_page' => 3,
                        'paged'          => $paged,
                    );

                ?>

                <?php $loop = new WP_Query( $args ); ?>

                    <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

                        <div class="col-sm-6 col-md-4">

                            <?php get_template_part( 'template-parts/post/content-portfolio', get_post_format() ); ?>

                        </div><!-- .col -->

                    <?php endwhile; wp_reset_query(); ?>

                    <!-- PAGINATION
                    ============================================================================-->

                    <div class="col-sm-12">

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

            </div><!-- .row -->

		</main><!-- #main -->
	</div><!-- #primary .col -->

</div><!-- .container -->


<?php
get_footer();