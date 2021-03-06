<?php

/*
        CONTACT FORM   
*/

//# CUSTOM FIELDS UI
$contact_form_title         = get_field( 'contact_form_title' );
$contact_form_7_shortcode   = get_field( 'contact_form_7_shortcode' );

//====================================================================================//
?>

<section id="home_contact-form" class="contact-form-section form-custom-1">

    <div class="container">

        <!-- FORM SECTION HEADER
        ====================================================================-->        
        <div class="row">
            <div class="col-sm-12">

                <div class="headline">

                    <h2><?php echo $contact_form_title; ?></h2>

                    <div class="page__divider hidden-xs">
                        <hr>
                    </div><!-- page__divider -->

                </div><!-- .headline -->

            </div><!-- .col -->
        </div><!-- .row -->

        <!-- FORM FEILDS/INPUTS
        ====================================================================-->   
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">

                <div class="contact-form__container">

                    <?php echo $contact_form_7_shortcode; ?>

                <div><!-- .contact-form__container -->
                
            </div><!-- .col -->
        </div><!-- .row -->

    </div><!-- .container -->

</section><!-- #home_contact-form -->