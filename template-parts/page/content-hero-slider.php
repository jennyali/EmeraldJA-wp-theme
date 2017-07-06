<?php

/*
        HERO SLIDER SECTION
*/
// Uses custom post type 'hero_slider_slide's to populate the carousel.
// NOTE: use of condtional statement - IF there are slides display the carousel, ELSE show a message.
//====================================================================================//
?>

<section class="hero" data-scroll="in-view-animation" >

    <div class="carousel">

        <div class="carousel-inner">

            <?php //+++     QUERY TO OBTAIN SLIDES      +++//

                $args = array(
                    'post_type' => 'hero_slider_slide',
                    'orderby'   => 'post_id',
                    'order'     => 'ASC'
                );
                
                $loop = new WP_Query( $args );

                if( $loop->have_posts() ) : ?>
                
                    <?php $postCount = 1; while( $loop->have_posts() ) : $loop->the_post(); $postCount++; ?>

                        <?php if ( $postCount == 2 ) { ?>

                            <div class="item active first-load">

                                <?php get_template_part( 'template-parts/post/content', 'hero-slider-slide' ); ?>

                            </div><!-- .item .active -->

                        <?php } else { ?>

                            <div class="item">

                                <?php get_template_part( 'template-parts/post/content', 'hero-slider-slide' ); ?>

                            </div><!-- .item .active -->
                        
                        <?php } ?>

                    <?php endwhile; wp_reset_query(); ?>

                </div><!-- .carousel-inner -->

                <ol class="carousel-indicators">

                    <?php //+++     QUERY TO GENERATE NUMBER OF DOTS FOR SLIDES +++//

                        $args = array(
                            'post_type' => 'hero_slider_slide',
                            'orderby'   => 'post_id',
                            'order'     => 'ASC'
                        );
                            
                        $loop = new WP_Query( $args );

                        $postCount = -1; while( $loop->have_posts() ) : $loop->the_post(); $postCount++; ?>

                        <?php if ( $postCount == 0 ) { ?>

                            <li data-target=".carousel" data-slide-to="<?php echo $postCount; ?>" class="active"></li>

                        <?php } else { ?>

                            <li data-target=".carousel" data-slide-to="<?php echo $postCount; ?>"></li>

                        <?php } ?>

                    <?php endwhile; wp_reset_query(); ?>

                </ol><!-- carousel-indicators -->

            <?php else : ?>

                <h3>Sorry no Hero Slider has been created yet.</h3>

                </div><!-- .carousel-inner -->

            <?php endif; ?>

    </div><!-- .carousel -->

</section><!-- .hero -->