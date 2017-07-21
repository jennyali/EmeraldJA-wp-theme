<?php

/*
        BLURB SECTION    
*/

//# CUSTOM FIELDS UI
$blurb_section_title        = get_field( 'blurb_section_title' );
$blurb_section_lead_text = get_field( 'blurb_section_lead_text' );
//====================================================================================//
?>

    <section id="home_features" class="features-section">

        <div class="container">

            <!-- SECTION HEADLINE
    		=======================================================================-->
            <div class="row">
                <div class="col-sm-12 headline">

                    <h2><?php echo $blurb_section_title; ?></h2>

                    <p><?php echo $blurb_section_lead_text; ?></p>

                    <div class="page__divider">
                        <hr>
                    </div><!-- .page__divider -->

                </div><!-- .headline -->
            </div><!-- .row -->

            <!-- SECTION CONTENT
    		=======================================================================-->
            <div class="row blurb-container">

                    <?php //+++     QUERY FOR DISPLAY BLURB POSTS   +++//

                    $args = array(
                        'post_type' => 'blurb_post',
                        'orderby'   => 'post_id',
                        'order'     => 'ASC',
                        'posts_per_page' => '3',
                    );

                    $loop = new WP_Query( $args );

                    if( $loop->have_posts() ) :?>

                        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

                            <?php get_template_part( 'template-parts/post/content' , 'blurb-post' ); ?>

                        <?php endwhile; wp_reset_query(); ?>

                    <?php else : ?>

                        <h3>Sorry there are no current Blurb Posts.</h3>

                    <?php endif; wp_reset_query(); ?>

            </div><!-- .row -->

        </div><!-- .container -->

    </section><!-- #home_features .features-section -->