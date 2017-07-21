<?php

/*
        HERO SLIDER SLIDE / CUSTOM POST TYPE
*/

//# CUSTOM FIELDS UI

$hero_slider_background_image   = get_field( 'hero_slider_background_image' );
$hero_slider_top_sub_title      = get_field( 'hero_slider_top_sub_title' );
$hero_slider_title              = get_field( 'hero_slider_title' );
$hero_slider_button_title       = get_field( 'hero_slider_button_title' );
$hero_slider_button_link        = get_field( 'hero_slider_button_link' );
//====================================================================================//
?>

    <img src="<?php echo $hero_slider_background_image['url']; ?>" alt="<?php echo $hero_slider_background_image['alt']; ?>">

    <div class="container item__caption">

        <div class="row item__caption__inner">

            <div class="col-sm-12 text-light">
                <h5><?php echo $hero_slider_top_sub_title; ?></h5>
                <h1><?php echo $hero_slider_title; ?></h1>
                <a href="<?php echo $hero_slider_button_link; ?>"><button class="btn btn-default btn-lg btn-custom-1"><?php echo $hero_slider_button_title; ?></button></a>
            </div><!-- .col -->

        </div><!-- .item__caption__inner -->

    </div><!-- item__caption -->
