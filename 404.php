<?php
/**
 * The template for displaying 404 pages (not found)
 *
 *
 * @package EmeraldJA
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main row">

				<!-- MAIN CONTENT
				==========================================================================================-->
				<section class="error-404 not-found col-sm-9">
					<header class="page-header">
						<h2 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'emerald_ja' ); ?></h2>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'emerald_ja' ); ?></p>

						<?php get_search_form(); ?>

					</div><!-- .page-content -->
				</section><!-- .error-404 .col -->


				<!-- SIDEBAR
				==========================================================================================-->
				<aside class="col-sm-3">

					<?php the_widget( 'WP_Widget_Recent_Posts' );	?>

					<div class="widget widget_categories">
						<h3 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'emerald_ja' ); ?></h3>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->

					<?php

						/* translators: %1$s: smiley */
						$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'emerald_ja' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

						the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</aside><!-- .col -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
