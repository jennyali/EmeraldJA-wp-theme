<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package EmeraldJA
 */

?>

</div><!-- #content -->

<!-- FOOTER
=======================================================================-->

<footer>

     <nav id="footer-navbar" class="navbar navbar-inverse navbar-custom-2">

        <div class="container-fluid">

            <div class="row footer__widget-area">

                <div class="col-sm-9 col-sm-offset-3 footer__widget-area__container">
                
                    <?php dynamic_sidebar( 'sidebar-footer' ); ?>
                
                </div><!-- .footer__widget-area__container -->

            </div><!-- .footer__widget-area -->

            <div class="row">

                <p class="footer__copyright col-sm-12"><?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?> <?php the_author(); ?></p>

            </div><!-- .row -->

        </div><!-- .container -->

    </nav><!-- #footer-navbar -->

    </div><!-- .container -->

</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
