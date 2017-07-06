<?php

/*
        BIO EXCERPT SECTION
*/
//# CUSTOM FIELDS
$bio_excerpt_background_image   = get_field( 'bio_excerpt_background_image' );
$bio_excerpt_title              = get_field( 'bio_excerpt_title' );
$bio_excerpt_content            = get_field( 'bio_excerpt_content' );
$bio_excerpt_button_title       = get_field( 'bio_excerpt_button_title' );
$bio_excerpt_button_link        = get_field( 'bio_excerpt_button_link' );
//====================================================================================//
?>

    <section id="home-bio-excerpt" class="bio-excerpt-section" data-scroll="in-view-animation" >
        <div class="container">
            <div class="row">

                <div class="col-sm-6 column">
                    <img src="<?php echo $bio_excerpt_background_image['url']; ?>" alt="<?php echo $bio_excerpt_background_image['alt']; ?>" class="img-responsive">
                </div><!-- .col -->

                <div class="col-sm-6 column">
                    <div class="headline">

                        <h2><?php echo $bio_excerpt_title; ?></h2>

                        <div class="headline__divider">
                            <hr>
                        </div>

                    </div><!-- .headline -->

                    <div class="bio-excerpt-section__text">

                        <?php echo $bio_excerpt_content; ?>

                        <button href="<?php echo $bio_excerpt_button_link; ?>" class="btn btn-default btn-clear"><?php echo $bio_excerpt_button_title; ?></button>

                    </div><!-- .bio-excerpt-section__text -->
                </div><!-- .col -->

            </div><!-- .row -->
        </div><!-- .container -->
    </section><!-- .bio-excerpt-section -->