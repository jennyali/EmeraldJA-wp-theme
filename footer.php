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

        <div class="container">

            <div class="row">

                <ul class="nav navbar-nav col-sm-4 col-sm-push-8">
                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                    <li><a href="#"><span class="icon-google-plus"></span></a></li>
                    <li><a href="#"><span class="icon-share-alt"></span></a></li>
                </ul><!-- .navbar-right -->

                <div class="col-sm-4 footer__widget-area">

                    <?php dynamic_sidebar( 'sidebar-footer' ); ?>

                </div><!-- .footer__widget-area -->

                <p class="footer__copyright col-sm-4 col-sm-pull-8"><?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?> <?php the_author(); ?></p>


            </div><!-- .row -->

        </div><!-- .container -->

    </nav><!-- #footer-navbar -->

    </div><!-- .container -->

</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
