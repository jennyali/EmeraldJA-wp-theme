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

                <p class="footer__copyright"><?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?> <?php the_author(); ?></p>

                <ul class="nav navbar-nav">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><span>|</span></li>
                    <li><a href="#">Terms of Use</a></li>
                </ul><!-- .nav -->

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="icon-facebook"></span></a></li>
                    <li><a href="#"><span class="icon-google-plus"></span></a></li>
                    <li><a href="#"><span class="icon-share-alt"></span></a></li>
                </ul><!-- .navbar-right -->

            </div><!-- .row -->

        </div><!-- .container -->

    </nav><!-- #footer-navbar -->

    </div><!-- .container -->

</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
